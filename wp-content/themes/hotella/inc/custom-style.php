<style>

a{color: <?php the_field('primary','option');?>;}
a:hover{color: <?php the_field('secondary','option');?>;}
.swiper-pagination-bullet {margin-left:5px;}
.navbar-nav .nav-link:hover {color: <?php the_field('primary','option');?>;}
.slider .main-slider .swiper-slide .container a {color: #ffffff;background:<?php the_field('primary','option');?>;}
.slider .main-slider .swiper-slide .container a:hover {background:<?php the_field('secondary','option');?>;}
.navbar .navbar-button a {color: <?php the_field('primary','option');?>;border: 2px solid <?php the_field('primary','option');?>;}
.navbar .navbar-button a:hover {color: <?php the_field('primary','option');?>;}
.slider .button-next:hover {background:<?php the_field('secondary','option');?>;color: #ffffff;border-radius: 5px;}
.price-list-price {color: <?php the_field('primary','option');?>;}
.price-list-separator {border-bottom-color: <?php the_field('primary','option');?>;}
.custom-button{background:<?php the_field('primary','option');?>;font-weight:600;}
.counter-box h6:after{display:none;}
.hamburger-menu span{background: #000;}
.cardContent h2 {background: <?php the_field('primary','option');?>;}
.custom-button:hover{background:<?php the_field('secondary','option');?>;}
.custom-button12{background:<?php the_field('primary','option');?>;font-weight:600;}
.iconsocia:hover {color: <?php the_field('primary','option');?>;}
.wpcf7-validates-as-date {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;border-radius: 5px;}
.side-widget .address a { border: 1px solid <?php the_field('primary','option');?>;border-radius: 5px;}
.side-widget .address a:hover {border: 1px solid <?php the_field('primary','option');?>;}
.custom-button12:hover{background:<?php the_field('secondary','option');?>;}
.custom-button-form {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;font-weight:600;}
.menueffect a:hover {color: <?php the_field('secondary','option');?>;}
.slider .button-prev {background:<?php the_field('primary','option');?>;color: #ffffff;border-radius: 5px;transform: rotate(90deg);}
.slider .button-next {background:<?php the_field('primary','option');?>;color: #ffffff;border-radius: 5px;transform: rotate(90deg);}
.slider .button-prev:hover {background:<?php the_field('secondary','option');?>;color:#ffffff;border-radius: 5px;}
p.dz {
    transform: rotate(272deg);
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    font-size: 23px;
    cursor: pointer;
    -webkit-transition: all .35s ease-in-out;
    -moz-transition: all .35s ease-in-out;
    -ms-transition: all .35s ease-in-out;
    -o-transition: all .35s ease-in-out;
    transition: all .35s ease-in-out;
}
p.dzv {
  transform: rotate(-47deg);
  line-height: 0px;
  color: #fff;
  transition: .5s;
  font-size: 60px;
  padding: 7px 0px;
  margin: -4px -4px;
  position: relative;
}
i.flaticon-play.vdslidericon {
    font-size: 30px;
    text-align: center;
    line-height: 2000px;
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    margin-left: 28px;
    margin-top: -5px;
}
.ahr {
    display: inline-flex;
    margin-right: 33px;
    position: relative;
}
.deptops {
  padding: 22px;
  border-radius: 5px;
  width: 100%;
  text-align: center;
}
.btnvdd {
    display: inline-flex;
    position: absolute;
    margin-top: 7px;
}
.phonecounttext {
    transform: translate(-50%,-50%);
    color: transparent;
    font-weight: 400;
    font-size: 50px;
    z-index: -1;
    -webkit-text-stroke: 1px #000000;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-family: <?php the_field('heading_font','option');?>;
}
.phonecounttext {
    border-bottom: 2px solid #bababa;
}
.phonecounttext:hover {
    color: <?php the_field('primary','option');?>;
    border-bottom: 2px solid <?php the_field('primary','option');?>;
}
.content-section {background: <?php the_field('primary','option');?>; }
.component-systemTabs .cards .card img {border: 6px solid #ffffff;}
input#wp-block-search__input-1 {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
.content-section.bottom-dark-spacing:after {background: <?php the_field('primary','option');?>; }
.section-title h2 {color: <?php the_field('primary','option');?>;}
.image-box .time {color: <?php the_field('primary','option');?>; }
.side-content form button[type="submit"] {color: <?php the_field('primary','option');?>; }
.side-image .side-timetable li b { color: <?php the_field('primary','option');?>; }
.side-member figcaption {background: <?php the_field('primary','option');?>;}
.custom-progress span {color: <?php the_field('primary','option');?>; }
.custom-progress .progress-bar .progress {background: <?php the_field('primary','option');?>;}
.tab-wrapper .tab-nav li.active a {background: <?php the_field('primary','option');?>;}
.tab-wrapper .tab-nav li.active a:hover {background: <?php the_field('secondary','option');?>; }
.tab-wrapper .tab-item .tab-inner {background: <?php the_field('primary','option');?>; }
.tab-wrapper .tab-item .tab-inner ul li span {color: <?php the_field('primary','option');?>; }
.service-box {background: <?php the_field('primary','option');?>; }
.service-box:before {background: <?php the_field('primary','option');?>;}
.image-overlap-box figure {background: <?php the_field('primary','option');?>; }
.image-overlap-box .content a:hover {color: <?php the_field('secondary','option');?>; }
.video {background: <?php the_field('primary','option');?>; }
.video a {color: <?php the_field('primary','option');?>;}
.class-box figure {background: #fff;}
.text-box h5 {color: <?php the_field('primary','option');?>;}
.recent-news figure {background: <?php the_field('primary','option');?>;}
.recent-news .content h3 a { color: <?php the_field('primary','option');?>; }
.recent-news .content small span {background: <?php the_field('primary','option');?>;}
.blog-box figure {background: <?php the_field('primary','option');?>; }
.blog-box .content h3 a {color: <?php the_field('primary','option');?>;}
.blog-box .content blockquote {color: <?php the_field('primary','option');?>;}
.sidebar .widget .widget-title {color: <?php the_field('primary','option');?>;}
.sidebar .widget .widget-title:before {background: <?php the_field('primary','option');?>;}
.sidebar .widget form input[type="submit"] {background: <?php the_field('primary','option');?>;}
.sidebar .widget .categories li a {color: <?php the_field('primary','option');?>;}
.branch-box h6 {color: <?php the_field('primary','option');?>;}
.branch-box a {color: <?php the_field('primary','option');?>;}
.member-box figcaption {background: <?php the_field('primary','option');?>;}
.icon {background: <?php the_field('primary','option');?>;}
.iconsv {background: <?php the_field('primary','option');?>;}
.iconk {color: #f5f5f5;}
li a:hover {color: <?php the_field('primary','option');?>;}
.iconk:hover { color: <?php the_field('secondary','option');?>; }
.sidebar-service {background: none;}
span.menu-service {background: <?php the_field('primary','option');?>;}
span.menu-service:hover { background: <?php the_field('secondary','option');?>; }
span.menu-service.menuactive { background: <?php the_field('secondary','option');?>; }
.iconleft {color: <?php the_field('primary','option');?>;}
.iconleft:hover { color: <?php the_field('secondary','option');?>; }
a.menucolor { color: <?php the_field('primary','option');?>; }
a.menucolor:hover { color: <?php the_field('secondary','option');?>; }
.pagination .page-item .page-link { color: <?php the_field('primary','option');?>; }
.footer .footer-info a { color: <?php the_field('primary','option');?>; }
.footer .footer-social li a:hover {background: <?php the_field('secondary','option');?>;}
.iconk { color: <?php the_field('primary','option');?>; }
.iconk:hover { color: <?php the_field('secondary','option');?>; }
.iconleft {color: <?php the_field('primary','option');?>;}
.iconk { color: <?php the_field('primary','option');?>;}
.iconk:hover { color: <?php the_field('secondary','option');?>; }
.iconleft {color: <?php the_field('primary','option');?>;}
span.menu-service {color: <?php the_field('primary','option');?>;}
textarea#comment {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
input#author {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
input#email {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
input#url {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
.paketler2__on--arkayazi-1 {background: linear-gradient(to right bottom, <?php the_field('primary','option');?>, <?php the_field('secondary','option');?>d7);}
.form__input {
    border-bottom: 0.3rem solid <?php the_field('primary','option');?>;
    border-radius: 5px;
    padding: 30px;
}
.form__input:focus{border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
.form__input:focus:invalid{border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
.form__radio-buton {border: 0.5rem solid <?php the_field('primary','option');?>;}
.form__radio-buton::after {background-color: <?php the_field('primary','option');?>;border-radius: 5px;}
.form-popup__input {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;border-radius: 5px;}
.form-popup__input:focus {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;border-radius: 5px;}
.form-popup__input:focus:invalid {border-bottom: 0.3rem solid <?php the_field('primary','option');?>;}
.hizmetler-kutu--icon{background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.ozellik-kutu--icon{background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.post-kutu--icon {background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.yorum-kutu--icon {background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.ozellik-kutu-iletisim--icon {background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.baslik-4--icon{background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.yukaricik {background-image: linear-gradient(to right bottom, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.footer-404 {background-image: linear-gradient(to right bottom, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.form-alani {background-image: linear-gradient(to right bottom,<?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.h2-baslik-hizmetler {background-image: linear-gradient(to right, <?php the_field('primary','option');?>, <?php the_field('secondary','option');?>);}
.h2-baslik-hizmetler__paragraf {color: <?php the_field('primary','option');?>;}
.h2-baslik-hizmetler-2 {color: <?php the_field('headings_color','option');?>;}
.side-widget small {color: <?php the_field('primary','option');?>;}
.swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {background: <?php the_field('secondary','option');?>;}
.swiper-pagination .swiper-pagination-bullet{background: <?php the_field('primary','option');?>;}
::-webkit-scrollbar-thumb {background: <?php the_field('primary','option');?>;}
.custom-buttonw1 { border-bottom: 0.3rem solid <?php the_field('primary','option');?>;font-weight:600;}
.iconsocia {color: <?php the_field('primary','option');?>;}
.paketler3__gorsel--1 { background-image: linear-gradient(to right bottom, <?php the_field('primary','option');?>, <?php the_field('secondary','option');?>)}
.paketler3__on--arkayazi-1 { background-image: linear-gradient(to right bottom, <?php the_field('primary','option');?>, <?php the_field('secondary','option');?>)}
p.countb {background: <?php the_field('primary','option');?>;}
.icontops {background: <?php the_field('primary','option');?>;border-radius: 5px;color:#fff;}
.icontops:hover {background: <?php the_field('secondary','option');?>;border-radius: 5px;color:#fff;}
p.footerp {color: <?php the_field('text_primary_color','option');?>;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;}
input#submit {background: <?php the_field('primary','option');?>;}
.custom-buttonw:hover{background: <?php the_field('primary','option');?>;}
.comment-meta.commentmetadata a:hover {color: <?php the_field('secondary','option');?>; }
a.comment-edit-link:hover {color: <?php the_field('secondary','option');?>; }
p.logged-in-as a:hover {color: <?php the_field('secondary','option');?>; }
.menu-item a:hover {color: <?php the_field('secondary','option');?>; }
li a {color: <?php the_field('primary','option');?>; }
.tag-cloud-link {color: <?php the_field('primary','option');?>; }
.tagcloud a:hover {color: <?php the_field('secondary','option');?>; }
li#recent-posts-5 a:hover {color: <?php the_field('secondary','option');?>; }
input#s {border-bottom: 0.3rem solid <?php the_field('secondary','option');?>;}
.telh {background: <?php the_field('primary','option');?>;color: #ffffff;font-family: <?php the_field('heading_font','option');?>;}
.telh:hover {
    background: <?php the_field('secondary','option');?>;
}
.shimmer {
  color: grey;
  display:inline-block;
  -webkit-mask:linear-gradient(-60deg,#000 30%,#0005,#000 70%) right/300% 100%;
  background-repeat: no-repeat;
  animation: shimmer 5.5s infinite;
}

@keyframes shimmer {
  100% {-webkit-mask-position:left;}
}

.col-lg-3.infs1 {
    border-radius: 5px;
}
.col-lg-3.infss3 {
    position: relative;
    border-radius: 5px;
}
.col-lg-3.infs2 {
    border-radius: 5px;
}
.col-lg-3.infs1, .col-lg-3.infs2 {
position: relative;
}
.col-lg-3.infs1:before, .col-lg-3.infs2:before, .col-lg-3.infss3:before {
position: absolute;
-webkit-transition: all 0.35s ease;
transition: all 0.35s ease;
z-index: -1;
border-radius: 5px;
}
.col-lg-3.infs1:before, .col-lg-3.infs2:before, .col-lg-3.infss3:before {
bottom: 0;
display: block;
height: 100%;
width: 0%;
left: 0;
content: "";
z-index: -1;
background-color: <?php the_field('secondary','option');?>;
border-radius: 5px;
}
.col-lg-3.infs1:hover:before, .col-lg-3.infs2:hover:before, .col-lg-3.infss3:hover:before{
opacity: 1;
width: 100%;
}
/* Dep VBefore After */
.col-lg-6.ds {
    position: relative;
    z-index: 2;
    pointer-events: auto;
    cursor: default;
}
.dep {
position: relative;
background:none;
}
.dep:before {
position: absolute;
z-index: -1;
background: <?php the_field('primary','option');?>;
border-radius: 5px;
}
.dep:before {
bottom: 0;
display: block;
height: 100%;
width: 0%;
content: "";
z-index: -1;
border-radius: 5px;
left: 0;
right:0;
-webkit-transition: all 0.8s ease;
transition: all 0.8s ease;
}
.dep:hover:before{
opacity: 1;
width: 100%;
left:0;
-webkit-transition: all 0.8s ease;
transition: all 0.8s ease;
}
.dep:hover h4, .dep:hover h3 {
    color: #fff;
    position: relative;
}
.ek-box_wrapper .ek-box {
    margin-top: 50px;
}
.ek-box {
    text-align: center;
}
.ek-box .ek-box__img {
    position: relative;
    margin-bottom: 73px;
    display: block;
}
.ek-box__img:hover {
    -webkit-animation: electricef2 0.4s both;
    animation: electricef2 0.4s linear;
}
.ek-box .ek-box__img img.ek-img-main {
    opacity: 1;
    -webkit-transition: opacity 0.5s ease-in-out 0s;
    transition: opacity 0.5s ease-in-out 0s;
}

.ek-box .ek-box__img img {
    height: auto;
}
.slick-slide img {
    display: block;
}
.slick-slide img {
    display: block;
    width: 100%;
}
    
.ek-box .ek-box__img:before {
    color: #ffffff;
    font-size: 54px;
    line-height: 1;
    position: absolute;
    z-index: 3;
    top: 47px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-transition: color .2s linear;
    transition: color .2s linear;
}
.ek-box .ek-box__img .ek-light {
    background-color: #242835;
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
}
.ek-box .ek-box__img img.ek-img-mask {
    position: absolute;
    z-index: 2;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    width:100%;
}
.ek-box .tt-box02__img img {
    height: auto;
}
.col-lg-3.ds {
    position: relative;
    z-index: 2;
    pointer-events: auto;
    cursor: default;
}


@keyframes blinks {
 0% {
  opacity: 1;
 }
 50% {
  opacity: 0;
 }
 100% {
  opacity: 1;
 }
}
/* Dep Finish */
.box-style.box-primary-color::before {
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(13, 24, 32, 0)), color-stop(100%, <?php the_field('primary','option');?>), to(rgba(0, 0, 0, 0.7)));
    background: linear-gradient(180deg, rgba(13, 24, 32, 0) 0%, <?php the_field('primary','option');?> 100%, rgba(0, 0, 0, 0.7) 100%);+
    border-radius: 5px;
}

.box-style::before {
    position: absolute;
    content: "";
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), color-stop(61.46%, rgba(255, 255, 255, 0.4)), to(rgba(255, 255, 255, 0.9)));
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.4) 61.46%, rgba(255, 255, 255, 0.9) 100%);
    bottom: 0;
    border-radius: 5px;
}
.box-style.box-primary-color::after {
    position: absolute;
    content: "";
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 193, 148, 0)), color-stop(61.98%, <?php the_field('secondary','option');?>e0), to(<?php the_field('secondary','option');?>));
    background: linear-gradient(180deg, rgba(0, 193, 148, 0) 0%, <?php the_field('secondary','option');?>e0 61.98%, <?php the_field('secondary','option');?> 100%);
    bottom: 0;
    -webkit-transition: var(--transition);
    transition: var(--transition);
    opacity: 0;
    visibility: hidden;
    border-radius: 5px;
}
.box-style.box-primary-color:hover::after {
    opacity: 1;
    visibility: visible;
}
.box-style:hover {
    -webkit-animation: electricef2 0.4s both;
    animation: electricef2 0.4s linear;
}
.box-style {
    position: relative;
    -webkit-transition: .5s;
    transition: var(--transition);
    width: 100%;
    height: 100%;
}
.descontent {
    z-index: 1;
}
.box-style .descontent {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0px 2px 9px 20px;
}
.box-style2.box-primary-color2::before {
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(13, 24, 32, 0)), color-stop(100%, <?php the_field('secondary','option');?>), to(rgba(0, 0, 0, 0.7)));
    background: linear-gradient(180deg, rgba(13, 24, 32, 0) 0%, #bc870000 100%, rgba(0, 0, 0, 0.7) 100%);
    border-radius: 5px;
}

.box-style2::before {
    position: absolute;
    content: "";
    left: 0;
    right: 0;
    width: 100%;
    height: 90%;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), color-stop(61.46%, rgba(255, 255, 255, 0.4)), to(rgba(255, 255, 255, 0.9)));
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.4) 61.46%, rgba(255, 255, 255, 0.9) 100%);
    bottom: 0;
    border-radius: 5px;
}
.box-style2.box-primary-color2::after {
    position: absolute;
    content: "";
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
    -webkit-transition: var(--transition);
    transition: var(--transition);
    opacity: 0;
    visibility: hidden;
    border-radius: 5px;
}
.box-style2.box-primary-color2:hover::after {
    opacity: 1;
    visibility: visible;
}
.box-style2:hover {
    -webkit-animation: electricef2 0.4s both;
    animation: electricef2 0.4s linear;
}
.box-style2 {
    position: relative;
    -webkit-transition: .5s;
    transition: var(--transition);
    width: 100%;
    height: 100%;
    color:#000;
    z-index:2;
}
.box-style2 i {
    color: #000;
    font-size: 60px;
}
.box-style2 h2 {
    font-size: 22px;
    margin-top: -20px;
    font-family: <?php the_field('heading_font','option');?>;
    font-weight:600;
}
.descontent {
    z-index: 1;
}
.descontent:before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  FONT-WEIGHT: 100;
  z-index: -1;
  left: 0px;
  right: 0px;
  background-color: rgb(255 255 255);
  border-radius: 5px;
  transition: all .6s ease-in-out;
  overflow: hidden;
}
.box-style2 .descontent {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0px 2px 9px 20px;
}
.box-style2 .class-button {
    visibility: hidden;
    opacity: 0;
    margin-bottom: -80px;
    transition: all .3s ease-in-out;
}
.box-style2:hover .class-button{
    visibility: visible;
    opacity: 1;
    margin-bottom: -50px;
}
.descontent:after {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  z-index: -1;
  bottom: 11px;
  left: 0px;
  right: 0px;
  background-color: rgba(255,255,255,.3);
  border-radius: 5px;
  transition: all .6s ease-in-out;
}

/* Button Effect Start */
[class^="btn-"] {
    position: relative;
    display: block;
    overflow: hidden;
    height: 80px;
    max-width: 250px;
    margin: 1rem auto;
    border: 1px solid currentColor;
    color:#ffffff;
  }
  
  
  @keyframes criss-cross-left {
    0% {
      left: -10px;
    }
    50% {
      left: 35%;
      width: 50px;
      height: 50px;
    }
    70%{
          left: 20%;
    }100% {
      background-color:<?php the_field('secondary','option');?>;
      left: 110%;
      width: 375px;
      height: 375px;
      color:#ffffff;
  
    }
  }
  
  @keyframes criss-cross-right {
    0% {
      right: -20px;
    }
    30% {
      right: 30%;
      width: 20px;
      height: 20px;
    }
    40%{
       right: 20%;
    }
    100% {
      right: 80%;
      width: 125px;
      height: 125px;
    }
  }
  .btn-1 {
    position: relative;
    background: <?php the_field('primary','option');?>;
    color: #ffffff;
    font-family:<?php the_field('heading_font','option');?>;
    height: 75px;
    line-height: 70px;
    display: inline-block;
    color: #ffffff;
    padding: 0 21px;
    position: relative;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    margin-top: 19px;
    padding-left: 8px;
    padding-right: 17px;
  }
  .btn-1:before, .btn-1:after {
    position: absolute;
    top: 50%;
    content: '';
    width: 20px;
    height: 20px;
    background: <?php the_field('secondary','option');?>;
    border-radius: 5%;
  }
  
  .btn-1:before {
    left: -20px;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    
  }
  .btn-1:after {
    background: <?php the_field('secondary','option');?>;
    right: -20px;
    -webkit-transform: translate(50%, -50%);
            transform: translate(50%, -50%);
  }
  .btn-1:hover {
    font-family:<?php the_field('heading_font','option');?>;
    font-weight:600;
    height: 75px;
    line-height: 70px;
    display: inline-block;
    color: #ffffff;
    padding: 0 21px;
    position: relative;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    margin-top: 19px;
    padding-left: 8px;
    padding-right: 17px;
  }
  .btn-1:hover:before {
    -webkit-animation: criss-cross-left 0.9s both;
            animation: criss-cross-left 0.9s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
    
  }
  .btn-1:hover:after {
    
    -webkit-animation: criss-cross-right 0.5s both;
            animation: criss-cross-right 0.5s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
  }
  p.asdas {
    color: #fff;
    font-family:<?php the_field('heading_font','option');?>;
    font-weight:600;
    z-index: 2;
    position: relative;
    display: flex;
    font-size: 18px;
}
/* Button Effect Finish */

/* custom button effect */
@keyframes criss-cross-left2 {
    0% {
      left: -10px;
    }
    50% {
      left: 35%;
      width: 50px;
      height: 50px;
    }
    70%{
          left: 20%;
    }100% {
      background-color:<?php the_field('secondary','option');?>;
      left: 110%;
      width: 375px;
      height: 375px;
      color:#ffffff;
  
    }
  }
  
  @keyframes criss-cross-right2 {
    0% {
      right: -20px;
    }
    30% {
      right: 30%;
      width: 20px;
      height: 20px;
    }
    40%{
       right: 20%;
    }
    100% {
      right: 80%;
      width: 125px;
      height: 125px;
    }
  }
  .btn-2 {
    position: relative;
    font-family: <?php the_field('heading_font','option');?>;
    font-weight: 600;
    background: <?php the_field('primary','option');?>;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 48px;
    position: relative;
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
  }
  .ozld {
    border: 1px dashed <?php the_field('primary','option');?>;
    border-radius: 5px;
    padding-top: 16px;
    padding-bottom: 16px;
    margin-top: 12px;
    width: 100%;
}
  .btn-2:before, .btn-2:after {
    position: absolute;
    top: 50%;
    content: '';
    width: 20px;
    height: 20px;
    background: <?php the_field('secondary','option');?>;
    border-radius: 5%;
  }
  
  .btn-2:before {
    left: -20px;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    
  }
  .btn-2:after {
    background: <?php the_field('secondary','option');?>;
    right: -20px;
    -webkit-transform: translate(50%, -50%);
            transform: translate(50%, -50%);
  }
  .btn-2:hover {
    font-family: <?php the_field('heading_font','option');?>;
    font-weight: 600;
    background: <?php the_field('primary','option');?>;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 48px;
    position: relative;
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
  }
  .btn-2:hover:before {
  
    -webkit-animation: criss-cross-left2 0.9s both;
            animation: criss-cross-left2 0.9s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
    
  }
  .btn-2:hover:after {
    
    -webkit-animation: criss-cross-right2 0.5s both;
            animation: criss-cross-right2 0.5s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
  }
  @keyframes criss-cross-left5 {
    0% {
      left: -10px;
    }
    50% {
      left: 35%;
      width: 50px;
      height: 50px;
    }
    70%{
          left: 20%;
    }100% {
      background-color:<?php the_field('primary','option');?>;
      left: 110%;
      width: 375px;
      height: 375px;
      color:#ffffff;
  
    }
  }
  
  @keyframes criss-cross-right5 {
    0% {
      right: -20px;
    }
    30% {
      right: 30%;
      width: 20px;
      height: 20px;
    }
    40%{
       right: 20%;
    }
    100% {
      right: 80%;
      width: 125px;
      height: 125px;
    }
  }
  .btn-5 {
    position: relative;
    font-family: <?php the_field('heading_font','option');?>;
    font-weight: 600;
    background: <?php the_field('primary','option');?>;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 48px;
    position: relative;
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
  }
  .btn-5:before, .btn-5:after {
    position: absolute;
    top: 50%;
    content: '';
    width: 20px;
    height: 20px;
    background: <?php the_field('primary','option');?>;
    border-radius: 5%;
  }
  
  .btn-5:before {
    left: -20px;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    
  }
  .btn-5:after {
    background: <?php the_field('primary','option');?>;
    right: -20px;
    -webkit-transform: translate(50%, -50%);
            transform: translate(50%, -50%);
  }
  .btn-5:hover {
    font-family: <?php the_field('heading_font','option');?>;
    font-weight: 600;
    background: <?php the_field('secondary','option');?>;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 48px;
    position: relative;
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
  }
  .btn-5:hover:before {
  
    -webkit-animation: criss-cross-left5 0.9s both;
            animation: criss-cross-left5 0.9s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
    
  }
  .btn-5:hover:after {
    
    -webkit-animation: criss-cross-right5 0.5s both;
            animation: criss-cross-right5 0.5s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
  }
  p.btnn2 {
    color: #fff;
    font-family:<?php the_field('heading_font','option');?>;
    font-weight:600;
    z-index: 2;
    position: relative;
    display: flex;
}
/* custom button finish */

/* Slider button start */
@keyframes criss-cross-left3 {
    0% {
      left: -10px;
    }
    50% {
      left: 35%;
      width: 50px;
      height: 50px;
    }
    70%{
          left: 20%;
    }100% {
      background-color:<?php the_field('secondary','option');?>;
      left: 110%;
      width: 375px;
      height: 375px;
      color:#ffffff;
  
    }
  }
  
  @keyframes criss-cross-right3 {
    0% {
      right: -20px;
    }
    30% {
      right: 30%;
      width: 20px;
      height: 20px;
    }
    40%{
       right: 20%;
    }
    100% {
      right: 80%;
      width: 125px;
      height: 125px;
    }
  }
  .btn-3 {
    position: relative;
    font-family: <?php the_field('heading_font','option');?>;
    font-weight: 600;
    background: <?php the_field('primary','option');?>;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 50px;
    position: relative;
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
    border:none;
  }
  .btn-3:before, .btn-3:after {
    position: absolute;
    top: 50%;
    content: '';
    width: 20px;
    height: 20px;
    background: <?php the_field('secondary','option');?>;
    border-radius: 5%;
  }
  
  .btn-3:before {
    left: -20px;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    
  }
  .btn-3:after {
    background: <?php the_field('secondary','option');?>;
    right: -20px;
    -webkit-transform: translate(50%, -50%);
            transform: translate(50%, -50%);
  }
  .btn-3:hover {
    font-family: <?php the_field('heading_font','option');?>;
    font-weight: 600;
    background: <?php the_field('primary','option');?>;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    padding: 0 50px;
    position: relative;
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
  }
  .btn-3:hover:before {
  
    -webkit-animation: criss-cross-left3 0.9s both;
            animation: criss-cross-left3 0.9s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
    
  }
  .btn-3:hover:after {
    
    -webkit-animation: criss-cross-right3 0.5s both;
            animation: criss-cross-right3 0.5s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
  }
  span.btnn3 {
    color: #fff;
    font-family:<?php the_field('heading_font','option');?>;
    font-weight:600;
    z-index: 2;
    position: relative;
    display: flex;
}
/* Slider button finish */
.fq2 {background:#fff;}
.col-xl-3.dd {
    margin-bottom: 20px;
}
.col-lg-4.infs1 {
    background: none;
}
.col-lg-4.infs8 {
    background: none;
    margin-bottom: 68px;
}
.col-lg-4.infs8{
position: relative;
}
.col-lg-4.infs8:before {
position: absolute;
-webkit-transition: all 0.35s ease;
transition: all 0.35s ease;
}
.col-lg-4.infs8:before {
bottom: 0;
display: block;
height: 4px;
width: 0%;
left: 0;
content: "";
background-color: #ffffff;
}
.col-lg-4.infs8:hover:before{
opacity: 1;
width: 100%;
}
.col-lg-4.infs2 {
    background: none;
}
.scal:hover {
  -ms-transform: rotateY(180deg);
  transform: rotateY(180deg);
  transition: all 1s linear;
}

.col-lg-4.infs3 {
    background: #ffffff;
}
.col-lg-4.infs4 {
    background: #ffffff;
}
.col-lg-4.infs5 {
    background: #ffffff;
}
.orta1{
  text-align:center;
}
.hero6, .hero8 {
    position: relative;
}
.iconsociai {color: <?php the_field('primary','option');?>; }
.iconsociai:hover {color: <?php the_field('primary','option');?>; }
::selection { background-color: <?php the_field('primary','option');?>; }
::-webkit-scrollbar-thumb { background-color: <?php the_field('secondary','option');?>; }
.ozellik-kutu-yorumlar--icon{background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.services-kutu1--icon{background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.services-kutu2--icon{background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
.services-kutu3--icon{background-image: linear-gradient(to right, <?php the_field('primary','option');?>,<?php the_field('secondary','option');?>);}
b.fn a:hover {color: <?php the_field('secondary','option');?>; }
li a:hover {color: <?php the_field('secondary','option');?>;}
select {border-radius: 5px;}
.wp-block-latest-posts__list a:hover {color: <?php the_field('primary','option');?>;}
#tabs li  {color: #ffffff;border-bottom: 4px solid <?php the_field('primary','option');?>;}
.custom-buttonf {background: <?php the_field('primary','option');?>;font-weight:600;}
.custom-buttonf:hover {background: <?php the_field('secondary','option');?>;}
.beer-slider {border: 4px solid <?php the_field('primary','option');?>;}
.button-next1 {color: <?php the_field('primary','option');?>;border: 2px solid <?php the_field('primary','option');?>;border-radius: 5px;}
.button-next1:hover{background: <?php the_field('primary','option');?>;}  
.button-prev1{color: <?php the_field('primary','option');?>;border: 2px solid <?php the_field('primary','option');?>;border-radius: 5px;}
.button-prev1:hover{background: <?php the_field('primary','option');?>;} 
.footer .footer-social li a {background: <?php the_field('primary','option');?>;}
.wp-post-image {height: 100%;width:100%;border-radius: 5px;}
.menueffect a:after {display:none;}
.services-kutu2--yazi1 {width:100%;}
.footer .footer-menu li a {color: #fff;}
h3.prongl a{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:#000;font-weight:600;}
h3.prongl{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:#000;font-weight:600;}
h3.prongl2 a{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:#fff;font-weight:600;}
h3.prongl2{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:#fff;font-weight:600;}
.footer .footer-menu li:before {background: <?php the_field('primary','option');?>;display:none;}
.iconserv {color: <?php the_field('primary','option');?>;margin-top: 27rem;margin-bottom: -10px;}
.iconserv:hover {color: <?php the_field('secondary','option');?>;margin-top: 27rem;margin-bottom: -10px;}
h3.businesss a{font-family: <?php the_field('heading_font','option');?>; font-size:20px; color:<?php the_field('headings_color','option');?>;font-weight:600;}
h3.pron a{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:#fff;font-weight:600;text-align:left;}
h3.pron{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:#fff;font-weight:600;text-align:left;}
h3.pron2 a{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:<?php the_field('text_primary_color','option');?>;font-weight:600;}
h3.pron2{font-family: <?php the_field('heading_font','option');?>; font-size:22px; color:<?php the_field('text_primary_color','option');?>;font-weight:600;}
h3.businesss{font-family: <?php the_field('body_font','option');?>; font-size:16px; color:#000000;text-align:center;}
p.businesss{font-family: <?php the_field('body_font','option');?>; font-size:16px; color:#000000;text-align:center;}
.horstime {
    color:<?php the_field('primary','option');?>;
}
.or56 {
    text-align: center;
    display: inline-block;
    flex-wrap: wrap;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.horstime:hover {
    color:<?php the_field('secondary','option');?>;
}
.dep:hover {

}
.row.ff {
  background: #ffffff;
  border-radius: 5px;
  pointer-events: none;
  cursor: default;
  z-index: -1;
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;
}
.dep {box-shadow: 0px 0px 5px #b5b5b561;}
.dep2:hover {
  box-shadow: 0px 0px 25px #bdbdbd59;
}
.dep2 {box-shadow: 0px 0px 25px #bdbdbd59;}
.dep33 {
    background: #fff;
    padding: 9px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px #b5b5b561;
}
.col-lg-2.d4 {
    margin-top: -10px;
}
.preloader figure{border: 1px solid #bababa;}
.preloader figure:after{border-top: 3px solid <?php the_field('primary','option');?>;}
.hakkimizda-bolumu-anasayfa {background: <?php the_field('background_about'); ?>;}
.hakkimizda-bolumu-anasayfa2 {background:<?php the_field('background_about2' ); ?>;}
.food {background:<?php the_field('background_food' ); ?>;}
.food2 {background:<?php the_field('background_food2' ); ?>;}
.food3 {background:<?php the_field('background_food3' ); ?>;}
.why-us {background:<?php the_field('why_bg');?>;}
.processs {background:<?php the_field('process_background' ); ?>;}
.special-paket-alani{background: <?php the_field('packages_background' ); ?>;}
.faqs{background: <?php the_field('primary','option');?>;}
.bg-light {z-index:8;background:#fff;}
.fa, .fas {color:<?php the_field('primary','option');?>;}
.side-widget{z-index:9;}
.container.asa {
    padding-left: 0px;
    margin-left: -11px;
}
.hizmet-kutu .kutu-duzen .icon-box .border-layer {border: 2px solid <?php the_field('primary','option');?>;border-style: dotted;}
.hizmet-kutu .kutu-duzen .icon-box .border-layer:before {background: <?php the_field('primary','option');?>;}
.hizmet-kutu .kutu-duzen .icon-box .border-layer:hover {border: 2px solid <?php the_field('secondary','option');?>;}
.hizmet-kutu .kutu-duzen .icon-box .border-layer:hover:before {background: <?php the_field('secondary','option');?>;}
.hizmet-kutu .kutu-duzen h3{ font-family: <?php the_field('heading_font','option');?>; font-size:18px;margin-bottom: 9px;}
.hizmet-kutu .kutu-duzen p{font-family: <?php the_field('body_font','option');?>;font-size:16px;color:<?php the_field('text_primary_color','option');?>;}
.hizmet-kutu .kutu-duzen:hover{background:none;}
.hizmet-kutu .kutu-duzen .icon-box .border-layer.sa:after {
    position: absolute;
    content: '';
    background: #fff;
    width: 12px;
    height: 12px;
    right: 44px;
    top: 9px;
    border-radius: 50%;
    background: <?php the_field('primary','option');?>;
}
.hizmet-kutu .kutu-duzen .icon-box .border-layer.sa:after:hover {background: <?php the_field('secondary','option');?>;}
.hizmet-kutu .kutu-duzen .icon-box .border-layer:after {
    position: absolute;
    content: '';
    background: #fff;
    width: 12px;
    height: 12px;
    right: 16px;
    top: 9px;
    border-radius: 50%;
    background: <?php the_field('primary','option');?>;
}
.hizmet-kutu .kutu-duzen .icon-box .border-layer:after:hover {background: <?php the_field('secondary','option');?>;}
.hizmet-kutu .kutu-duzen .icon-box i {
    position: relative;
    display: inline-block;
    font-size: 70px;
    background: #fff;
    width: 120px;
    height: 120px;
    line-height: 120px;
    text-align: center;
    border-radius: 50%;
    color: <?php the_field('primary','option');?>;
    box-shadow: 0 0 50px rgb(0 0 0 / 10%);
    transition: all 500ms ease;
}
.hizmet-kutu .kutu-duzen .icon-box i:hover {color: <?php the_field('secondary','option');?>;}
.hizmet-kutu.kutu-duzen:hover h3, .hizmet-kutu .kutu-duzen:hover h3 a, .hizmet-kutu .kutu-duzen:hover p{color:<?php the_field('text_primary_color','option');?>;}
.hizmet-kutu .kutu-duzen .icon-box .border-layer.sa {
    width: 220px;
    height: 220px;
    left: -10px;
    top: -10px;
    border-style: dotted;
}
.hizmet-kutu .kutu-duzen .icon-box .border-layer.sa:before {
    left: 48px;
    bottom: 7px;
}
.hizmet-kutu .kutu-duzen .icon-box i.sa {
    font-size: 85px;
    width: 200px;
    height: 200px;
    line-height: 200px;
}
ul#menu-all-services {
    display: inline-grid;
    flex-wrap: wrap;
    width: 100%;
    position: relative;
    padding: 10px;
    line-height: 35px;
    color: <?php the_field('headings_color','option');?>; 
    font-family: <?php the_field('heading_font','option');?>;
    font-size:18px;
    z-index: 1;
    position: relative;
}
ul#menu-all-services a {
  padding-left: 24px;
  color:<?php the_field('secondary','option');?>;
}
ul#menu-all-services a:hover {
  color:#fff;
}
ul#menu-all-services a:before {
    position: absolute;
    content: '';
    top: 20px;
    left: 9px;
    width: 15px;
    height: 15px;
    border-radius: 5px;
    background-color: <?php the_field('secondary','option');?>;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}
ul#menu-all-services li {
    position: relative;
    display: block;
    background: #ffffff;
    color: var(--thm-black);
    font-size: 18px;
    line-height: 28px;
    font-weight: 500;
    padding: 14px 16px 14px;
    padding-right: 20px;
    box-shadow: 0px 0px 30px 0px rgb(0 0 0 / 12%);
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 1;
}

ul#menu-all-services a:hover:after {
  -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transform-origin: left center;
    transform-origin: left center;
}
ul#menu-all-services a:after {
  content: "";
    position: absolute;
    top: 0;
    left: 0px;
    bottom: 0px;
    right: 0;
    background: <?php the_field('primary','option');?>;
    transition: -webkit-transform 0.4s ease;
    transition: transform 0.4s ease;
    transition: transform 0.4s ease, -webkit-transform 0.4s ease;
    -webkit-transform: scale(0, 1);
    transform: scale(0, 1);
    -webkit-transform-origin: right center;
    transform-origin: right center;
    z-index: -1;
}
.paketler3__gorsel {
    background-size: cover;
    height: 23rem;
    background-blend-mode: color;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}
.bosluksv {
    margin-top: 2rem;
}
.footer .copyright:before {
    flex: 1;
    content: "";
    height: 1px;
    width: 100%;
    z-index: 1;
    background-color: #fff;
}
.footer .copyright:after {
    flex: 1;
    content: "";
    height: 1px;
    width: 100%;
    z-index: 1;
    background-color: #fff;
}
.menu-quick-links-container {
    text-align: center;
    justify-content: center;
    display: flex;
    width: 100%;
    font-size: 17px;
}
/* text primary */
.cardContent h2, .answer {font-family: <?php the_field('body_font','option');?>;}
.services-kutu2--yazi1ss {
    color: <?php the_field('text_primary_color','option');?>;
    font-family: <?php the_field('body_font','option');?>;
    font-size: <?php the_field('body_font_size','option');?>px;
    font-weight: 400;
    text-align: left;
}
.services-kutu2--wt {
    color: #000;
    font-family: <?php the_field('body_font','option');?>;
    font-size: <?php the_field('body_font_size','option');?>px;
    font-weight: 400;
    text-align: left;
}
.services-kutu2--wt13 {
    color: #fff;
    font-family: <?php the_field('body_font','option');?>;
    font-size: <?php the_field('body_font_size','option');?>px;
    font-weight: 400;
}
.icon-project-detail {
    font-size: 65px;
    color: <?php the_field('primary','option');?>;
}
.icon-project-detail:hover { color: <?php the_field('secondary','option');?>; }
img.prodetal {
    border-radius: 5px;
}
.sectionbars {background:<?php the_field('primary','option');?>;}
.sectionbars2 {background:<?php the_field('primary','option');?>;}
.sectionbars3 {background:<?php the_field('primary','option');?>;}
.services-kutu2--wtbb {
    color: #fff;
    font-family: <?php the_field('body_font','option');?>;
    font-size: <?php the_field('body_font_size','option');?>px;
    font-weight: 400;
    text-align: left;
}
.services-kutu2--wts3 {
    color: #fff;
    font-family: <?php the_field('body_font','option');?>;
    font-size: <?php the_field('body_font_size','option');?>px;
    font-weight: 400;
    text-align: left;
    position: relative;
}
.component-systemTabs .cards .card .cardContent button {background: <?php the_field('primary','option');?>;font-family: <?php the_field('body_font','option');?>;}
.person {color: <?php the_field('primary','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.ozellik-kutu-iletisim--yazi {color: <?php the_field('primary','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.footer-info p {
  color: #fff;
  font-family: <?php the_field('body_font','option');?>; 
  font-size: <?php the_field('body_font_size','option');?>px; 
  font-weight: <?php the_field('body_font_weight','option');?>; 
  text-align: center;
  justify-content: center;
  align-items: center;
  display: flex;
  flex-wrap: wrap;
}
.dep3 {
    background: #fff;
    padding: 22px;
    border-radius: 5px;
    width: 100%;
    box-shadow: 0px 0px 25px #bdbdbd59;
}
p {font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.h2-baslik-hizmetler-21__paragraf {font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.paketler3__icerik ul li {font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
body {overflow-y: scroll;overflow-x: hidden;color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.paragraf{color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  }
.paragraf-info {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: 400;  }
ul.post-categories a {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; }
span.date {
    color: #000; font-family: <?php the_field('heading_font','option');?>; font-size:16px;
    background: none; 
} 
h4.infostext {
    font-family: <?php the_field('body_font','option');?>;
    font-size: 16px;
    font-weight: 400;
    color: #ffffff;
}
h4.infostextgl {
    font-family: <?php the_field('body_font','option');?>;
    font-size: 16px;
    font-weight: 400;
    color: <?php the_field('text_primary_color','option');?>;
}
h4.infostext2 {
    font-family: <?php the_field('body_font','option');?>;
    font-size: 16px;
    font-weight: 400;
    color: <?php the_field('text_primary_color','option');?>;
}
span.category {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px;}
span.tt { color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  } 
.paragraf-info a {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  }
.paragraf-sol-beyaz a {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.paragraf-sol-beyaz-orta a {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.paragraf-ahp a {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  }
.paragraf-pdetay a {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  }
.paragraf-404 a {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  }
.h2-baslik-hizmetler-yorum__yorum {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  }
.testimon-text {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.post-kutu p {text-align:center;margin-top: 11px;color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.services-kutu2--yazi1 {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.h2-baslik-hizmetler-2__paragraf {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>; }
.paragraf-popup {color: <?php the_field('text_primary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; font-weight: <?php the_field('body_font_weight','option');?>;  }
ul.post-categories {color: <?php the_field('primary','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px;}
.services-kutu2--yazi { font-family: <?php the_field('body_font','option');?>;  font-size: <?php the_field('body_font_size','option');?>px;}

/* headings */
.h2-baslik-forms {
    font-family: <?php the_field('heading_font','option');?>;
    font-size: 22px;
    font-weight: 900;
    background: <?php the_field('primary','option');?>;
    position: relative;
    display: inline-block;
    padding: 15px 20px 15px 18px;
    border-radius: 5px;
    color:#fff;
}
.iconpfooter1, .iconpfooter2, .iconpfooter3 {color:#ffffff;}
.h2-baslik-anasayfa-wtbb {color: #fff; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.countt{background:<?php the_field('primary','option');?>;font-family: <?php the_field('heading_font','option');?>;}
.countb{background:<?php the_field('primary','option');?>;font-family: <?php the_field('heading_font','option');?>;}
h2.foodtitle {
    color: #000000;
    font-family: <?php the_field('heading_font','option');?>;
    font-size: 20px;
    font-weight: 900;
}
h2.foodprice {
    color: #000000;
    font-family: <?php the_field('heading_font','option');?>;
    font-size: 37px;
    font-weight: 900;
    margin-top: 6px;
}
p.paragraffood {
    font-size: 15px;
}
.foods {
    border-bottom: 1px dashed #bababa;
}


.h2-baslik-anasayfa-wt {color: #000; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.component-systemTabs .cards .card .cardContent h2 {color:<?php the_field('headings_color','option');?>;font-size:21px;padding:5px;margin-top: 25rem;font-family: <?php the_field('heading_font','option');?>;}
.h2-baslik-anasayfa {color: <?php the_field('headings_color','option');?>;border-bottom: .1rem solid <?php the_field('primary','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-anasayfa-ozel {color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-hizmetler-223 {color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-anasayfa-blog {color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-ahb{color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-bottom {color: <?php the_field('headings_color','option');?>;font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-404{color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-footer{color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-iletisim-ozel{color: <?php the_field('headings_color','option');?>;font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-popup {color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.baslik-3-h {color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.baslik-33 {color: <?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.baslik-star{color:<?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-hizmetler-yorum {color: <?php the_field('headings_color','option');?>;font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.baslik-3s {color:<?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; }
.baslik-3white {font-family: <?php the_field('heading_font','option');?>; }
.baslik-orta {font-size: 23px;color:<?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>;font-weight: <?php the_field('heading_font_weight','option');?>; }
.baslik-4 {color:<?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; font-weight: <?php the_field('heading_font_weight','option');?>; }
.slider .main-slider .swiper-slide .container h1 { font-family: <?php the_field('heading_font','option');?>;color:#fff; }
.slider .main-slider .swiper-slide .container p { font-family: <?php the_field('heading_font','option');?>; color: #fff;}
.slider .main-slider .swiper-slide .container a { font-family: <?php the_field('heading_font','option');?>;border-radius: 5px;border:none; }
.slider .main-slider .swiper-slide .container a:hover{ font-family: <?php the_field('heading_font','option');?>;border-radius: 5px; }
.custom-button { font-family: <?php the_field('heading_font','option');?>;font-weight:600; }
.custom-buttonw { font-family: <?php the_field('heading_font','option');?>; }
.question{ font-family: <?php the_field('heading_font','option');?>; font-size:18px;color:#000;}
.answer{color:#000;}
.baslik-sol { font-family: <?php the_field('heading_font','option');?>; }
.member-box figcaption h6 { font-family: <?php the_field('heading_font','option');?>; }
.member-box figcaption p { font-family: <?php the_field('heading_font','option');?>; }
.h2-baslik-hizmetler-2 { font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-hizmetler-21 { font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.h2-baslik-hizmetler-2111 { color: <?php the_field('headings_color','option');?>;font-size: <?php the_field('heading_font_size','option');?>px;font-weight: <?php the_field('heading_font_weight','option');?>; }
.baslik-3-service { font-family: <?php the_field('heading_font','option');?>; }
.paketler3__pr-yazi { font-family: <?php the_field('heading_font','option');?>; }
.paketler3__pr-degeri { font-family: <?php the_field('heading_font','option');?>; font-size: <?php the_field('heading_font_size','option');?>px; font-weight: <?php the_field('heading_font_weight','option');?>; }
.baslik-3 { font-size: 23px;color:<?php the_field('headings_color','option');?>; font-family: <?php the_field('heading_font','option');?>; }
.footer .widget-title {color:#fff; font-family: <?php the_field('heading_font','option');?>;font-weight: <?php the_field('heading_font_weight','option');?>; text-align:center;}
.page-header .container h2 {color:#fff; font-family: <?php the_field('heading_font','option');?>; }
.page-header .container p {color:#fff; font-family: <?php the_field('heading_font','option');?>; }
.page-header .container a {color:#fff; font-family: <?php the_field('heading_font','option');?>; }
.page-header .container a:hover {color:#fff; font-family: <?php the_field('heading_font','option');?>; }
.navbar .site-menu ul li a {font-family: <?php the_field('heading_font','option');?>;color:#000;padding: 11px;}
.navbar .site-menu ul li a:hover {color: <?php the_field('primary','option');?>;padding: 11px;}
.navbar .site-menu ul li{display:flex;}
.slider .main-slider .swiper-slide .slide-image {
  box-shadow: 0px 0px 0px 5000px #0000004a inset;
}
.iconwr {
  background: none;
  transform: rotate(47deg);
}
.iconwr:before {
  content: "";
  position: absolute;
  left: 1px;
  top: 2px;
  z-index: -1;
  -webkit-transform: rotate(313deg);
  -ms-transform: rotate(313deg);
  transform: rotate(313deg);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  -webkit-transition: all 0.2s ease-in-out 0s;
  -moz-transition: all 0.2s ease-in-out 0s;
  -ms-transition: all 0.2s ease-in-out 0s;
  -o-transition: all 0.2s ease-in-out 0s;
  transition: all 0.2s ease-in-out 0s;
  background: <?php the_field('primary','option');?>;
  width: 80px;
  height: 80px;
}
.iconwr:hover:before {
  transition: all 0.2s ease-in-out 0s;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  -webkit-transform: rotate(223deg);
  -ms-transform: rotate(223deg);
  transform: rotate(223deg);
  background: <?php the_field('secondary','option');?>;
  width: 80px;
  height: 80px;
}

.menueffect * {
    box-sizing: revert;
}
.navbar-light .navbar-nav .nav-link {color: #000;padding: 11px;}
.dropdown-menu{min-width: 16rem;background:#fff;border-radius:5px;}
.navbar-expand-md .navbar-nav .dropdown-menu {
    padding-bottom: 5px;
    padding-top: 5px;
}
.counter-box {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    padding: 0px;
    text-align: center;
    border-radius: 5px;
    margin-top: -4rem;
}
.odometer {font-family: <?php the_field('heading_font','option');?>; font-size:80px;}
.counter-box h6 {font-family: <?php the_field('body_font','option');?>;}
.iconp{
    display: flex;
    justify-content: center;
    color: #fff;
    align-items: center;
    border-radius: 50%;
    z-index: 2;
    position: relative;
}
img.imgsg {
    border-radius: 5px;
}
/* Room */
.room_result {
box-shadow: 0 1px 10px rgb(0 0 0 / 10%);
	background-color: #f6f6f6;
}
.room_resultdiffusage {
    background-color: #f6f6f6;
box-shadow: 0 1px 10px rgb(0 0 0 / 10%);
}
.room_resultdiffusage .vblistroomblock {
    border-right: 2px solid #ddd;
}
.vik-dots-slider-inner .vik-dots-slider-slide {
   align-items: inherit; 
	background-color: transparent;
}
.vbo-pref-color-btn-secondary {
    border: 2px solid <?php the_field('primary','option');?> !important;
    color: #fff !important;
    background: <?php the_field('primary','option');?> !important;
    height: 69px;
    font-size: 16px;
    border-radius:5px;
}
.vbo-pref-color-btn-secondary:hover {
  border: 2px solid <?php the_field('secondary','option');?> !important;
    color: #fff !important;
    background: <?php the_field('secondary','option');?> !important;
    height: 69px;
    font-size: 16px;
    border-radius:5px;
}
.vbo-results-chdates a {
    padding: 22px 12px !important;
    display: inline-block;
    margin: 14px 5px 5px 20px;
    border-radius: 3px;
    text-decoration: none !important;
    font-size: 16px;
}
.vbo-goback-link {
    padding: 18px 25px !important;
}
.vbdialog-inner {
  min-height: 219px !important;
}
input[type="radio"]:checked {
    border: 6px solid <?php the_field('primary','option');?>;
}
.ast-separate-container .ast-article-post, .ast-separate-container .ast-article-single {

    padding: 1.34em 6.67em !important;
}
.vbrowroomcapacity i {
    font-size: 20px;
    margin-right: 0.5px;
    color: #000;
}
.vbselectr a, .vbselectr-result {
background:#000;
}
.ast-separate-container #primary, .ast-separate-container.ast-left-sidebar #primary, .ast-separate-container.ast-right-sidebar #primary {
  margin: 1em 0 !important;
	padding: 0px;
}
.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
  color: #ffffff !important;
  background: <?php the_field('primary','option');?> !important;
  font-size: 16px;
  border-radius: 5px;
  height: 69px;
}
.btn:hover:not(:disabled):not(.disabled) {
  cursor: pointer;
  color: #ffffff !important;
  background: <?php the_field('secondary','option');?> !important;
  font-size: 16px;
  border-radius: 5px;
  height: 69px;
}
.vbo-search-submit {
    margin: 41px 0 31px 0px;
    text-align: center;
    align-self: end;
}
.vbdivsearch .vb-search-inner > div label, .vbo-search-roomnum {
    font-weight: 600;
}
.vbdivsearch .vb-search-inner .vbo-search-inpblock .input-group > input {
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin: 0;
    height: 69px;
    padding: 0 12px;
    font-size: 16px;
    line-height: 1.42857143;
    color: var(--vbo-text-color);
    background-color: var(--vbo-input-style);
    background-image: none;
    border: 1px solid var(--vbo-border-color);
    border-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    box-sizing: border-box;
}
.vb-search-inner .input-group .fa-calendar-alt {
    padding: 0 13px;
    font-size: 24px;
    font-weight: 400;
    line-height: 1;
    color: var(--vbo-text-color);
    text-align: center;
    border: 1px solid var(--vbo-border-color);
    border-left: 0;
    border-radius: 2px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    height: 69px;
    line-height: 66px;
    float: left;
    cursor: pointer;
}
.vbdivsearch .vb-search-inner > .vbo-search-num-racblock {
    display: flex;
    margin-left: 2px;
    margin-right: 12px;
}
.vbdivsearch .vb-search-inner select, .vbo-showprc-optionstable .vbo-showprc-option-entry > div select, .vbo-availability-controls select {
    padding: 10.5px 45px 10.5px 33px;
    background: var(--vbo-input-style) url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E) no-repeat right 0.75rem center;
    background-size: 16px 28px;
    width: auto !important;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 1px solid var(--vbo-border-color);
    font-size: 16px;
    color: var(--vbo-text-color);
    font-weight: normal;
    height: 69px;
    line-height: initial;
}
.vbo-oconfirm-cfield-input select {
    padding: 10.5px 30px 10.5px 10px;
    background: #fff0 url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E) no-repeat right 0.75rem center;
    background-size: auto;
    background-size: 8px 10px;
    width: 100% !important;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 1px solid var(--vbo-border-color);
    height: auto;
    font-size: 14px;
    color: var(--vbo-text-color);
    font-weight: normal;
    height: 42px;
    height: 70px;
    padding: 0 30px;
}
.vbrowcname {
    font-size: 24px;
    font-weight: 600;
    line-height: 60px;
}
.vbcustomfields .vbo-oconfirm-cfield-entry-checkbox input {
    margin: 0;
    height: 18px;
}
.vbo-booking-canc-cmd i, .vbo-booking-mod-cmd i {
    margin-right: 4px;
    color: #fff;
}
.vbselectr a, .vbselectr-result {
  padding:20px !important;
}
.vblistroomcat {
  font-weight: 600;
}
.vbsearchorderdiv input[type^="text"] {
    padding: 6px 11px;
    margin: 0 5px;
    font-size: 12px;
    height: 69px;
    padding: 0 30px;
    border-radius: 5px;
    background: #fff;
    border: 1px solid #bababa;
    font-size: 16px;
}

.vbo-search-submit {
    margin: 41px 0 31px 0px;
    text-align: center;
    align-self: end;
}
.vbo-search-solution-book a, .vbo-booking-solution-book a {
    padding: 21px 25px;
    margin-top: 0;
}
.vbdivsearch .vb-search-inner .vbo-search-num-rooms {
    margin: 0px 21px 0px 0;
}
.vbo-results-chdates a {
    padding: 8px 12px;
    display: inline-block;
    margin: 14px 5px 5px 20px;
    border-radius: 3px;
    text-decoration: none !important;
    font-size: 16px;
}
.vbmodhorsearch-hum-guests-count {
  flex-wrap:wrap;
}
.container.fs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: -10px;
}
ul#menu-quick-links li a:hover {
    color: #fff;
}
ol.vbo-stepbar li.vbo-step-complete:before {
    background-color:<?php the_field('secondary','option');?> !important;
}
ol.vbo-stepbar li.vbo-step-complete, ol.vbo-stepbar li.vbo-step-current {
  border-bottom:4px solid <?php the_field('primary','option');?> !important;
}
ol.vbo-stepbar li.vbo-step-current:before {
  border: 2px solid <?php the_field('secondary','option');?> !important;
}
/* Room Finish */
/* Event */

input#search_keywords {
    font-size: 17px;
    color: #828279;
}
input#search_location {
  font-size: 17px;
  color: #828279;
}
button#drp_autogen0 {
  font-size: 17px;
  color: #828279;
}
select#search_categories {
  font-size: 17px;
  color: #828279;
}
select#search_event_types {
  font-size: 17px;
  color: #828279;
}
/* Event Finish */
.vbtn-fluid {
    display: flex;
    justify-content: center;
    color: #fff;
    background: <?php the_field('primary','option');?>;
    align-items: center;
    border-radius: 50%;
    -webkit-animation: pulse2 linear 1000ms infinite;
    animation: pulse2 linear 1000ms infinite;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    width: 140px;
    height: 140px;
    border:none;
}
i.flaticon-play.vdicon {
    font-size: 42px;
    text-align: center;
    line-height: 2000px;
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    margin-left: 10px;
}
@-webkit-keyframes pulse2 { 0% {  -webkit-box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;;   
    box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;; } 
    70% {  -webkit-box-shadow: 0 0 0 40px rgba(94, 223, 255, 0);   box-shadow: 0 0 0 40px rgba(94, 223, 255, 0); } 
    100% {  -webkit-box-shadow: 0 0 0 0 rgba(94, 223, 255, 0);   box-shadow: 0 0 0 0 rgba(94, 223, 255, 0); }  }  
    @keyframes pulse2 { 0% {  -webkit-box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;;   box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;; } 70% {  -webkit-box-shadow: 0 0 0 40px rgba(94, 223, 255, 0);   
    box-shadow: 0 0 0 40px rgba(94, 223, 255, 0); } 100% {  -webkit-box-shadow: 0 0 0 0 rgba(94, 223, 255, 0);   box-shadow: 0 0 0 0 rgba(94, 223, 255, 0); } 
}
/* Video */
.popup__kapat:link, .popup__kapat:visited {
  color:#000;
}
/* Video finish */

/*.menueffect a:hover:before{
    -webkit-animation:spin22fr4 15s linear infinite;
    -moz-animation:spin22fr4 15s linear infinite;
    animation:spin22fr4 15s linear infinite;
}*/
@-moz-keyframes spin22fr4 { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin22fr4 { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin22fr4 { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

@-webkit-keyframes pulse3 { 0% {  -webkit-box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;;   
    box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;; } 
    70% {  -webkit-box-shadow: 0 0 0 20px rgba(94, 223, 255, 0);   box-shadow: 0 0 0 20px rgba(94, 223, 255, 0); } 
    100% {  -webkit-box-shadow: 0 0 0 0 rgba(94, 223, 255, 0);   box-shadow: 0 0 0 0 rgba(94, 223, 255, 0); }  }  
    @keyframes pulse3 { 0% {  -webkit-box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;;   box-shadow: 0 0 0 0 <?php the_field('secondary','option');?>;; } 70% {  -webkit-box-shadow: 0 0 0 20px rgba(94, 223, 255, 0);   
    box-shadow: 0 0 0 20px rgba(94, 223, 255, 0); } 100% {  -webkit-box-shadow: 0 0 0 0 rgba(94, 223, 255, 0);   box-shadow: 0 0 0 0 rgba(94, 223, 255, 0); } 
}
/* text secondary */
ul.post-categories a:hover {color: <?php the_field('text_secondary_color','option');?>; font-family: <?php the_field('body_font','option');?>; font-size: <?php the_field('body_font_size','option');?>px; }
.reply a:hover {color: <?php the_field('text_secondary_color','option');?>; }
cite.fn a:hover {color: <?php the_field('text_secondary_color','option');?>; }
time:hover {color: <?php the_field('text_secondary_color','option');?>; }

/* service background */
.footer {background: <?php the_field('primary','option');?>;}
.serviceb-alani {background: none;}
.yorumlar-alani-sayfa {background: <?php the_field('comments_background' ); ?>;}
.orserv {
    text-align: left;
}
/*
responsive
*/

@media only screen and (min-width: 1199px), only screen and (max-width: 1199px) {

  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft { color: <?php the_field('primary','option');?>; }
  .icon {background: <?php the_field('primary','option');?>;}
  span.menu-service { color: <?php the_field('primary','option');?>; }
  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft {color: <?php the_field('primary','option');?>;}
  .icon {background: <?php the_field('primary','option');?>;}

}

@media only screen and (min-width: 991px), only screen and (max-width: 1180px) {

  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft { color: <?php the_field('primary','option');?>; }
  .icon {background: <?php the_field('primary','option');?>;}
  span.menu-service { color: <?php the_field('primary','option');?>; }
  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft {color: <?php the_field('primary','option');?>;}
  .icon {background: <?php the_field('primary','option');?>;}

}

@media only screen and (min-width: 767px), only screen and (max-width: 767px) {

  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft { color: <?php the_field('primary','option');?>; }
  .icon {background: <?php the_field('primary','option');?>;}
  span.menu-service { color: <?php the_field('primary','option');?>; }
  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft {color: <?php the_field('primary','option');?>;}
  .icon {background: <?php the_field('primary','option');?>;}

}

@media (min-width: 820px) and (max-width: 820px) {

  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft { color: <?php the_field('primary','option');?>; }
  .icon {background: <?php the_field('primary','option');?>;}
  span.menu-service { color: <?php the_field('primary','option');?>; }
  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft {color: <?php the_field('primary','option');?>;}
  .icon {background: <?php the_field('primary','option');?>;}

}

@media (min-width: 767px) and (max-width: 850px) { 

  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft { color: <?php the_field('primary','option');?>; }
  .icon {background: <?php the_field('primary','option');?>;}
  span.menu-service { color: <?php the_field('primary','option');?>; }
  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft {color: <?php the_field('primary','option');?>;}
  .icon {background: <?php the_field('primary','option');?>;}

}


@media (min-width: 1180px) and (max-width: 1200px) { 

  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft { color: <?php the_field('primary','option');?>; }
  .icon {background: <?php the_field('primary','option');?>;}
  span.menu-service { color: <?php the_field('primary','option');?>; }
  .iconk {color: <?php the_field('primary','option');?>;}
  .iconk:hover { color: <?php the_field('secondary','option');?>; }
  .iconleft {color: <?php the_field('primary','option');?>;}
  .icon {background: <?php the_field('primary','option');?>;}

}

@media (min-width: 1180px) and (max-width: 1180px) { 

.info-or {padding: 15rem 0 30rem;background: #fbfbfb;}

}
.col-lg-12.counbig {
    text-align: center;
}
.counter-box.fft4 {
    margin-top: -171px;
}
.counttext{
    transform: translate(-50%,-50%);
    color: transparent;
    font-weight: 700;
    font-size: 120px;
    z-index: -1;
    -webkit-text-stroke: 1px #e9e9e9;
    margin-bottom: -31px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-family: <?php the_field('heading_font','option');?>;
}
.icon {
  padding: 5px;
  text-align: center;
  height: 90px;
  border-radius: 10rem;
  color: <?php the_field('primary','option');?>;
  transition: .5s;
  margin-left: auto;
  margin-right: auto;
  font-size: 75px;
  z-index: 2;
  position: relative;
  background: none;
}
.icon:hover {background: none;color: <?php the_field('secondary','option');?>;}
.page-header .container h2 {
    font-size: 40px;
    line-height: 110px;
}
img.efozel2 {
    border-radius: 5px;
    width: 100%;
}
.services-kutu2 {
    width: 100%;
}
.iconw {background:none;}
.iconw {
    width: 90px;
    height: 93px;
    line-height: 80px;
    color: #fff;
    font-size: 50px;
    -webkit-transition: .5s;
    transition: .5s;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    font-size:80px;
}
.testimonialimg {
    height: auto;
    border-radius: 0 0 175px 175px;
    position: relative;
    margin-bottom: 81px;
}
.testimonial-card {
    min-height: 169px;
    border-radius: 5px;
    flex-flow: column;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background: none;
    width:100%;
    border: 2px solid #d9d9d9;
    border-radius: 5px;
}
.quote {
    font-size: 600%;
    float: none;
    opacity: .1;
    transform: rotate(0deg) translate(3px, -101px);
    color: <?php the_field('primary','option');?>;
    text-align: center;
    width: 100%;
}
.h2-baslik-hizmetler-2cc {
    font-family: <?php the_field('heading_font','option');?>;
    font-size: 19px;
    font-weight: 700;
    color: #000000;
}
.page-header .container h2 {
    font-size: 40px;
    line-height: 110px;
}
img.drt {
    border-radius: 5px;
}
.iconinf22sty:hover{
    background: <?php the_field('secondary','option');?>;
}
.iconinf22sty {
    padding: 10px;
    text-align: center;
    width: 100px;
    height: 100px;
    line-height: 78px;
    border-radius: 5px;
    background: <?php the_field('primary','option');?>;
    color: #fff;
    transition: 0s;
    margin-left: auto;
    margin-right: auto;
    FONT-WEIGHT: 600;
    font-size: 65px;
}
@media (min-width: 100px) and (max-width: 1300px) { 
body {overflow-y: scroll;overflow-x: hidden;}
}
.footer .copyright {
  color:#fff;
}
a.videopop.vbtnslider-fluid.vp-a.vp-yt-type {
    display: flex;
    justify-content: center;
    color: #fff;
    background: <?php the_field('primary','option');?>;
    align-items: center;
    border-radius: 50%;
    -webkit-animation: pulse33 linear 1000ms infinite;
    animation: pulse33 linear 1000ms infinite;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    width: 80px;
    height: 80px;
    padding: 0;
    line-height: 0;
    position: relative;
    margin-left: 0;
}
a.videopop.vbtnslider-fluid.vp-a.vp-yt-type:hover {
  border-radius:50%;
}
@-webkit-keyframes pulse33 { 0% {  -webkit-box-shadow: 0 0 0 0 <?php the_field('primary','option');?>;;   
    box-shadow: 0 0 0 0 <?php the_field('primary','option');?>; } 
    70% {  -webkit-box-shadow: 0 0 0 40px rgba(94, 223, 255, 0);   box-shadow: 0 0 0 40px rgba(94, 223, 255, 0); } 
    100% {  -webkit-box-shadow: 0 0 0 0 rgba(94, 223, 255, 0);   box-shadow: 0 0 0 0 rgba(94, 223, 255, 0); }  }  
    @keyframes pulse2 { 0% {  -webkit-box-shadow: 0 0 0 0 <?php the_field('primary','option');?>;;   box-shadow: 0 0 0 0 <?php the_field('primary','option');?>;; } 70% {  -webkit-box-shadow: 0 0 0 40px rgba(94, 223, 255, 0);   
    box-shadow: 0 0 0 40px rgba(94, 223, 255, 0); } 100% {  -webkit-box-shadow: 0 0 0 0 rgba(94, 223, 255, 0);   box-shadow: 0 0 0 0 rgba(94, 223, 255, 0); } 
}
.col-lg-4.lefthealt, img.ff {
    border-radius: 5px;
}
.col-lg-4.lefthealtfooter {
  padding-bottom: 16px;
  border-bottom: 1px solid #fff;
}
.iconhh {
    color: #ffffff;
}
h2.h2-baslik-anasayfa-wth2e {
    color: #ffffff;
    font-family: <?php the_field('heading_font','option');?>;
    font-size: 23px;
    font-weight: 900;
}
.iconhh {
    padding: 0;
    text-align: center;
    height: auto;
    border-radius: 10rem;
    transition: .5s;
    margin-left: auto;
    margin-right: auto;
    font-size: 60px;
    z-index: 2;
    position: relative;
    background: none;
    line-height: 0;
    width: 97px;
}
.dephh {
    background: <?php the_field('primary','option');?>;
    padding: 0px;
    border-radius: 5px;
    padding-bottom: 24px;
}
.col-lg-6.lefthealt {
    border-radius: 5px;
}
.dephh {
    box-shadow: 0px 0px 25px #bdbdbd59;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.depff {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
span.footlst {
    font-weight: 900;
    text-align:center;
    color:#fff;
    justify-content: center;
    align-items: center;
    width: 100%;
    display: flex;
    font-size: 16px;
}
span.footli {
  text-align:center;
  color:#fff;
  justify-content: center;
  align-items: center;
  width: 100%;
  display: flex;
  font-size: 16px;
}
.depff {
    border-radius: 5px;
}
.col-lg-12.lefthealtfooter {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.iconheal {
    color: #ffffff;
}
.iconheal:hover {
  color: #ffffff;
}
img.footim {
  text-align: center;
  justify-content: center;
  border-radius: 5px;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  align-items: center;
}
h2.h2-baslik-anasayfa-wthe {
    color: #ffffff;
    font-family: <?php the_field('heading_font','option');?>;
    font-size: 25px;
    font-weight: 900;
}
.deptop {
    box-shadow: 0px 0px 5px #b5b5b561;
}
.deptop {
    position: relative;
    background: none;
}
.deptop {
    background: #fff;
    padding: 22px;
    border-radius: 5px;
    margin-bottom: 16px;
}
.deptop:hover {
  position: relative;
  bottom: 0;
  display: block;
  width: 100%;
  left: 0;
  content: "";
  background-color: <?php the_field('primary','option');?>;
  border-radius: 5px;
  box-shadow: 0px 0px 5px #b5b5b561;
}
.deptop:before {
position: absolute;
-webkit-transition: all 0.35s ease;
transition: all 0.35s ease;
z-index: -1;
border-radius: 5px;
}
.deptop:before {
bottom: 0;
display: block;
height: 100%;
width: 0%;
left: 0;
content: "";
z-index: -1;
background-color: <?php the_field('primary','option');?>;
border-radius: 5px;
}
.deptop:hover:before{
opacity: 1;
width: 100%;
}
.deptop:hover h4, .deptop:hover h3 {
    color: #fff;
    position: relative;
}
.form-popup__input {
font-size:18px;
}
span.wpcf7-list-item-label {
    font-size: 18px;
    color: #979393;
}
input[type="checkbox"]:checked {
    border: 6px solid <?php the_field('primary','option');?>;
}
.page-header {
    box-shadow: 0px 0px 0px 5000px <?php the_field('primary','option');?>d6 inset;
}
.row.yk {
    margin-top: 0px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    text-align: center;
}
.live-video-img:before {
    background: url(<?php echo esc_url( get_field( 'video_before' ) ); ?>);
    animation: updown1s3 1.5s ease infinite;
}
.live-video-img:after {
    background: url(<?php echo esc_url( get_field( 'video_after' ) ); ?>);
    animation: shp2 1.5s ease infinite alternate, shp22 5s linear infinite alternate;
}

</style>


