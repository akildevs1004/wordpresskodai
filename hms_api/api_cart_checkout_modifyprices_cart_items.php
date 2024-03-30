<?php
//print_r($_SESSION["wp_rooms_list_price_list_updated"]);
//print_r($this->tars);
if (isset($tars)) {

    $new_tar = [];
    foreach ($tars as $key1 => $tar1) {
        $new_tar1 = [];
        foreach ($tar1 as $key2 => $value) {
            $value['cost'] = $_SESSION["wp_rooms_list_price_list_updated"][$value['idroom']];
            $new_tar1[$key2] = $value;
        }
        $new_tar[$key1] = $new_tar1;
    }

    $tars = $new_tar;
}



if (isset($this->tars)) {

    $new_tar = [];
    foreach ($this->tars as $key1 => $tar1) {
        $new_tar1 = [];
        foreach ($tar1 as $key2 => $value) {
            $value['cost'] = $_SESSION["wp_rooms_list_price_list_updated"][$value['idroom']];
            $new_tar1[$key2] = $value;
        }
        $new_tar[$key1] = $new_tar1;
    }

    $this->tars = $new_tar;
}
