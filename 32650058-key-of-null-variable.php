<?php

# http://stackoverflow.com/questions/32650058/key-of-null-variable-equals-null-not-error/32650723


function _get($from, $key)
{
    if(is_null($from))
    {
        trigger_error('Trying to get value of null');
        return null;
    }
    return $from[$key];
}
// Change

$value = $var['key'];
// to

$value = _get($var, 'key');
