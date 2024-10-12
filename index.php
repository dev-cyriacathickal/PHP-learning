<?php
ini_set('display_errors', '1');

/**
 * Single quote strings
 */

echo 'this is a string';

/**
 * Single quote strings in multiple lines
 */

echo 'this is second strng'
 . 'second data'
 . 'third data'
 . 'fourth data'
 . 'fifth data'
 . 'sixth dataI';
?>
<br>
<?php
/**
 * Single quote strings with template literal
 */
echo 'Hey, I am studying PHP and I\'ll complete it';
?>
<br>
<?php
/**
 * Single quote 
 */
echo 'You have deleted C:\\*.*. This is a new line ha ha.. \n';
echo 'new line won\'t work';
?>
Double quotes section
<?php
/**
 * Double quote lines.
 */
echo "This is double quotes";
?>
<br>
<?php
/**
 * This has multiple double quote lines.
 */
echo "This is first line\n";
echo "This is second line\n";


/**
 * Herodoc implementation
 */
echo <<<END
a
  b
  c
\n
END;

echo <<<END
a
b
c
   d
\n
END;

echo <<<END
a
b
c,
END, "\n",'d,e,f';

echo <<<TEST
This is
a
 test
herodoc 
content
TEST;

class Foo {
    public $bar = <<<EOT
            bar
            EOT;
}

$foo_output = new Foo();
var_dump($foo_output);