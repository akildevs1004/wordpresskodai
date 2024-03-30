<?php
if (isset($tar)) {
    $new_tar = [];
    foreach ($tar as $key => $value) {
        $value['cost'] = 1000;
        $new_tar[$key] = $value;
    }
    $tar = $new_tar;
}
