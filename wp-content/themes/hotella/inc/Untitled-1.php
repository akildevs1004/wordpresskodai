[class^="btn-"] {
    position: relative;
    display: block;
    overflow: hidden;
    font-family: Gilda Display;
    font-weight: 600;
    background: #000000;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 50px;
    position: relative;
    border-radius: 10px;
    font-size: 16px;
  }
  
  
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
    font-family: Gilda Display;
    font-weight: 600;
    background: #000000;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 50px;
    position: relative;
    border-radius: 10px;
    font-size: 16px;
  }
  .btn-2:before, .btn-2:after {
    position: absolute;
    top: 50%;
    content: '';
    width: 20px;
    height: 20px;
    background: <?php the_field('secondary','option');?>;
    border-radius: 50%;
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
    font-family: Gilda Display;
    font-weight: 600;
    background: #000000;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    color: #fff;
    border: 2px solid;
    padding: 0 50px;
    position: relative;
    border-radius: 10px;
    font-size: 16px;
  }
  .btn-2:hover:before {
  
    -webkit-animation: criss-cross-left 0.9s both;
            animation: criss-cross-left 0.9s both;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
    
  }
  .btn-2:hover:after {
    
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
}