<?php

function getFileName($name)
{
    $temp = strtolower(preg_replace('/\s+/', '', $name));
    return time().'-'.$temp;
}