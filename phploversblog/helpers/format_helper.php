<?php

/*
 * Format Date
 */
function format_date($date) {

    return date('j F, Y g:i a', strtotime($date));

}

/*
 *
 */
function shorten_text($text, $chars = 450) {

    $text = $text." ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text."...";
    return $text;

}
