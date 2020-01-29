--TEST--
call_user_func() behavior with references
--FILE--
<?php

function test(&$ref1, &$ref2) {
    $ref1 += 42;
    $ref2 -= 42;
    return true;
}

$i = $j = 0;
var_dump(call_user_func('test', $i, $j));
var_dump($i, $j);

var_dump(call_user_func_array('test', [$i, $j]));
var_dump($i, $j);

$x =& $i; $y =& $j;
var_dump(call_user_func('test', $i, $j));
var_dump($i, $j);

var_dump(call_user_func_array('test', [$i, $j]));
var_dump($i, $j);

?>
--EXPECTF--
Warning: test() expects argument #1 ($ref1) to be passed by reference, value given in %s on line %d

Warning: test() expects argument #2 ($ref2) to be passed by reference, value given in %s on line %d
bool(true)
int(0)
int(0)

Warning: test() expects argument #1 ($ref1) to be passed by reference, value given in %s on line %d

Warning: test() expects argument #2 ($ref2) to be passed by reference, value given in %s on line %d
bool(true)
int(0)
int(0)

Warning: test() expects argument #1 ($ref1) to be passed by reference, value given in %s on line %d

Warning: test() expects argument #2 ($ref2) to be passed by reference, value given in %s on line %d
bool(true)
int(0)
int(0)

Warning: test() expects argument #1 ($ref1) to be passed by reference, value given in %s on line %d

Warning: test() expects argument #2 ($ref2) to be passed by reference, value given in %s on line %d
bool(true)
int(0)
int(0)
