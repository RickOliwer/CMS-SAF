<?php


function mybasictheme_excerpt_length($length) {
    return 10;
}
add_filter('excerpt_length', 'mybasictheme_excerpt_length', 10, 1);

function mybasictheme_excerpt_length_again($length) {
    return 5;
}

add_filter('excerpt_length', 'mybasictheme_excerpt_length_again', 10, 1);