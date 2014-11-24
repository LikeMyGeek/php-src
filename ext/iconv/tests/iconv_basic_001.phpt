--TEST--
Test the basics to function iconv.
--CREDITS--
Rodrigo Prado de Jesus <royopa [at] gmail [dot] com>
--SKIPIF--
<?php extension_loaded('iconv') or die('skip iconv extension is not available'); ?>
--FILE--
<?php
$in_charset          = 'UTF-8';
$out_charset 	     = 'ASCII//TRANSLIT';
$string_to_translate = 'Žluťoučký kůň\n';

$string_out = iconv($in_charset, $out_charset, $string_to_translate);

var_dump($string_out);
?>
--EXPECT--
string(15) "Zlutoucky kun\n"