<?php

function bdDateFormat( $data = ''){
    if(empty($data)) {
        return false;
    }
    return date( 'd/m/y', $data);
}