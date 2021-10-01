<?php

use Illuminate\Support\Str;

function cut($s, $limit=10) {
    return Str::words(html_entity_decode(strip_tags($s)), $limit);  
}