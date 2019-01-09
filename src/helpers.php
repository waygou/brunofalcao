<?php

function str_replace_assoc(array $replace, $subject)
{
    return str_replace(array_keys($replace), array_values($replace), $subject);
}
