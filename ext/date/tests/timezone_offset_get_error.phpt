--TEST--
Test timezone_offset_get() function : error conditions
--FILE--
<?php
/* Prototype  : int timezone_offset_get  ( DateTimeZone $object  , DateTime $datetime  )
 * Description: Returns the timezone offset from GMT
 * Source code: ext/date/php_date.c
 * Alias to functions: DateTimeZone::getOffset
 */

//Set the default time zone
date_default_timezone_set("GMT");
$tz = timezone_open("Europe/London");
$date = date_create("GMT");

echo "*** Testing timezone_offset_get() : error conditions ***\n";

echo "\n-- Testing timezone_offset_get() function with an invalid values for \$object argument --\n";
$invalid_obj = new stdClass();
try {
    var_dump( timezone_offset_get($invalid_obj, $date) );
} catch (Error $ex) {
    var_dump($ex->getMessage());
    echo "\n";
}
$invalid_obj = 10;
try {
    var_dump( timezone_offset_get($invalid_obj, $date) );
} catch (Error $ex) {
    var_dump($ex->getMessage());
    echo "\n";
}
$invalid_obj = null;
try {
    var_dump( timezone_offset_get($invalid_obj, $date) );
} catch (Error $ex) {
    var_dump($ex->getMessage());
    echo "\n";
}

echo "\n-- Testing timezone_offset_get() function with an invalid values for \$datetime argument --\n";
$invalid_obj = new stdClass();
try {
    var_dump( timezone_offset_get($tz, $invalid_obj) );
} catch (Error $ex) {
    var_dump($ex->getMessage());
    echo "\n";
}
$invalid_obj = 10;
try {
    var_dump( timezone_offset_get($tz, $invalid_obj) );
} catch (Error $ex) {
    var_dump($ex->getMessage());
    echo "\n";
}
$invalid_obj = null;
try {
    var_dump( timezone_offset_get($tz, $invalid_obj) );
} catch (Error $ex) {
    var_dump($ex->getMessage());
    echo "\n";
}
?>
--EXPECT--
*** Testing timezone_offset_get() : error conditions ***

-- Testing timezone_offset_get() function with an invalid values for $object argument --
string(92) "timezone_offset_get() expects argument #1 ($object) to be of type DateTimeZone, object given"

string(89) "timezone_offset_get() expects argument #1 ($object) to be of type DateTimeZone, int given"

string(90) "timezone_offset_get() expects argument #1 ($object) to be of type DateTimeZone, null given"


-- Testing timezone_offset_get() function with an invalid values for $datetime argument --
string(99) "timezone_offset_get() expects argument #2 ($datetime) to be of type DateTimeInterface, object given"

string(96) "timezone_offset_get() expects argument #2 ($datetime) to be of type DateTimeInterface, int given"

string(97) "timezone_offset_get() expects argument #2 ($datetime) to be of type DateTimeInterface, null given"
