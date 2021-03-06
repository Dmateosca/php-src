--TEST--
PhpToken::getAll() method
--SKIPIF--
<?php if (!extension_loaded("tokenizer")) print "skip tokenizer extension not enabled"; ?>
--FILE--
<?php

$code = <<<'PHP'
<?php
function foo() {
    echo "bar";
}
PHP;
var_dump(PhpToken::getAll($code));
var_dump(PhpToken::getAll($code, TOKEN_PARSE));

?>
--EXPECT--
array(15) {
  [0]=>
  object(PhpToken)#1 (4) {
    ["id"]=>
    int(382)
    ["text"]=>
    string(6) "<?php
"
    ["line"]=>
    int(1)
    ["pos"]=>
    int(0)
  }
  [1]=>
  object(PhpToken)#2 (4) {
    ["id"]=>
    int(342)
    ["text"]=>
    string(8) "function"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(6)
  }
  [2]=>
  object(PhpToken)#3 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) " "
    ["line"]=>
    int(2)
    ["pos"]=>
    int(14)
  }
  [3]=>
  object(PhpToken)#4 (4) {
    ["id"]=>
    int(310)
    ["text"]=>
    string(3) "foo"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(15)
  }
  [4]=>
  object(PhpToken)#5 (4) {
    ["id"]=>
    int(40)
    ["text"]=>
    string(1) "("
    ["line"]=>
    int(2)
    ["pos"]=>
    int(18)
  }
  [5]=>
  object(PhpToken)#6 (4) {
    ["id"]=>
    int(41)
    ["text"]=>
    string(1) ")"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(19)
  }
  [6]=>
  object(PhpToken)#7 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) " "
    ["line"]=>
    int(2)
    ["pos"]=>
    int(20)
  }
  [7]=>
  object(PhpToken)#8 (4) {
    ["id"]=>
    int(123)
    ["text"]=>
    string(1) "{"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(21)
  }
  [8]=>
  object(PhpToken)#9 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(5) "
    "
    ["line"]=>
    int(2)
    ["pos"]=>
    int(22)
  }
  [9]=>
  object(PhpToken)#10 (4) {
    ["id"]=>
    int(324)
    ["text"]=>
    string(4) "echo"
    ["line"]=>
    int(3)
    ["pos"]=>
    int(27)
  }
  [10]=>
  object(PhpToken)#11 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) " "
    ["line"]=>
    int(3)
    ["pos"]=>
    int(31)
  }
  [11]=>
  object(PhpToken)#12 (4) {
    ["id"]=>
    int(314)
    ["text"]=>
    string(5) ""bar""
    ["line"]=>
    int(3)
    ["pos"]=>
    int(32)
  }
  [12]=>
  object(PhpToken)#13 (4) {
    ["id"]=>
    int(59)
    ["text"]=>
    string(1) ";"
    ["line"]=>
    int(3)
    ["pos"]=>
    int(37)
  }
  [13]=>
  object(PhpToken)#14 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) "
"
    ["line"]=>
    int(3)
    ["pos"]=>
    int(38)
  }
  [14]=>
  object(PhpToken)#15 (4) {
    ["id"]=>
    int(125)
    ["text"]=>
    string(1) "}"
    ["line"]=>
    int(4)
    ["pos"]=>
    int(39)
  }
}
array(15) {
  [0]=>
  object(PhpToken)#15 (4) {
    ["id"]=>
    int(382)
    ["text"]=>
    string(6) "<?php
"
    ["line"]=>
    int(1)
    ["pos"]=>
    int(0)
  }
  [1]=>
  object(PhpToken)#14 (4) {
    ["id"]=>
    int(342)
    ["text"]=>
    string(8) "function"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(6)
  }
  [2]=>
  object(PhpToken)#13 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) " "
    ["line"]=>
    int(2)
    ["pos"]=>
    int(14)
  }
  [3]=>
  object(PhpToken)#12 (4) {
    ["id"]=>
    int(310)
    ["text"]=>
    string(3) "foo"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(15)
  }
  [4]=>
  object(PhpToken)#11 (4) {
    ["id"]=>
    int(40)
    ["text"]=>
    string(1) "("
    ["line"]=>
    int(2)
    ["pos"]=>
    int(18)
  }
  [5]=>
  object(PhpToken)#10 (4) {
    ["id"]=>
    int(41)
    ["text"]=>
    string(1) ")"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(19)
  }
  [6]=>
  object(PhpToken)#9 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) " "
    ["line"]=>
    int(2)
    ["pos"]=>
    int(20)
  }
  [7]=>
  object(PhpToken)#8 (4) {
    ["id"]=>
    int(123)
    ["text"]=>
    string(1) "{"
    ["line"]=>
    int(2)
    ["pos"]=>
    int(21)
  }
  [8]=>
  object(PhpToken)#7 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(5) "
    "
    ["line"]=>
    int(2)
    ["pos"]=>
    int(22)
  }
  [9]=>
  object(PhpToken)#6 (4) {
    ["id"]=>
    int(324)
    ["text"]=>
    string(4) "echo"
    ["line"]=>
    int(3)
    ["pos"]=>
    int(27)
  }
  [10]=>
  object(PhpToken)#5 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) " "
    ["line"]=>
    int(3)
    ["pos"]=>
    int(31)
  }
  [11]=>
  object(PhpToken)#4 (4) {
    ["id"]=>
    int(314)
    ["text"]=>
    string(5) ""bar""
    ["line"]=>
    int(3)
    ["pos"]=>
    int(32)
  }
  [12]=>
  object(PhpToken)#3 (4) {
    ["id"]=>
    int(59)
    ["text"]=>
    string(1) ";"
    ["line"]=>
    int(3)
    ["pos"]=>
    int(37)
  }
  [13]=>
  object(PhpToken)#2 (4) {
    ["id"]=>
    int(385)
    ["text"]=>
    string(1) "
"
    ["line"]=>
    int(3)
    ["pos"]=>
    int(38)
  }
  [14]=>
  object(PhpToken)#1 (4) {
    ["id"]=>
    int(125)
    ["text"]=>
    string(1) "}"
    ["line"]=>
    int(4)
    ["pos"]=>
    int(39)
  }
}
