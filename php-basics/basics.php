<?php
echo "Hello echo" . PHP_EOL;
//$x = ECHO "Hello"; echo is a language construct and doesn't return anything.
// Language constructs aren't case sensitive.

$x = print("Hello print" . PHP_EOL); // print is a function that returns 1.
print('$x = ' . $x . PHP_EOL);
?>
<?= // simple echo syntax
$x // doesn't need a semicolon as it's the last statement before a closing tag.
?>
<?php
if ($x) {
    print($x . ' evaluates to true but this looks like 11 b/c there isn\'t a line break!');
}
?>
<?php if ($x): 
    echo PHP_EOL // this crazy syntax works - no semicolon and the ':', endif instead of braces.
?>
x is true!
<?php endif; ?>
<?php
//assert(!$x, 'outputs a warning');

//exit('dying'); //or use exit()

$dec = 8;
$bin = 0b1000;
$oct = 010;
$hex = 0x8;

print("dec = $dec, bin = $bin, oct = $oct, hex = $hex" . PHP_EOL);

$a = (boolean)true;
$b = (bool)true;
var_dump($a === $b); // print($a === $b) => 1

$a = 1234.56;
print((int)$a . PHP_EOL);
print('intdiv: ' . intdiv(3, 2) . PHP_EOL);
