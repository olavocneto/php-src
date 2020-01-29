--TEST--
IntlTimeZone::getRawOffset(): errors
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	die('skip intl extension not enabled');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);

intltz_get_raw_offset(null);
?>
--EXPECTF--
Fatal error: Uncaught TypeError: intltz_get_raw_offset() expects argument #1 ($tz) to be of type IntlTimeZone, null given in %s:%d
Stack trace:
#0 %s(%d): intltz_get_raw_offset(NULL)
#1 {main}
  thrown in %s on line %d
