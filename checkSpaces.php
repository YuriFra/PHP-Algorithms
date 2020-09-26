<?php
//check if there are spaces in a string
function hasSpaces($str) {
    return strpos($str, " ") || ctype_space($str);
}
var_dump(hasSpaces("hello"));
var_dump(hasSpaces("hello, world"));
var_dump(hasSpaces(""));
var_dump(hasSpaces("  "));
