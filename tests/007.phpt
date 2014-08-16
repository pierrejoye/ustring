--TEST--
Test UString::toUpper
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$std = "こんにちは世界";

$string = new UString($std, "UTF8");

var_dump($string->lastIndexOf("界"));
var_dump($string->lastIndexOf(new UString("界", "UTF8")));
?>
--EXPECT--
int(6)
int(6)