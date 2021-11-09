<?php
function rg($value)
{
    $value = str_replace('.', '', $value);
    $value = str_replace('-', '', $value);

    if (preg_match('/^(?=.*\d)[A-Za-z0-9]{7,11}$/', $value)) {
        return true;
    }
    return false;
}
?>