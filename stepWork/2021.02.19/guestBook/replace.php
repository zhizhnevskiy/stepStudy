<?php

function replace($text)
{

    return preg_replace([
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
        [
            '😀',
            "😞",
            "😛",
            "😬"
        ], $text);
}

function matReplace($mat)
{
    return preg_match("/.*дурак.*/iu", $mat);
}