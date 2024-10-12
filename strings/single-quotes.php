<?php
/**
 * Syntax: ''
 * This is a simple single quote
  Any escape sequence will be literally outputted.
 */
echo 'This is a simple single quote.';
?><br><?php
/**
 * Embedding new lines in single quotes
 */
echo 'This is single quote first line '
 . 'This is single quote second line '
 . 'This is single quote third line '
 . 'This is single quote fourth line ';
?><br><?php
/**
 * Output : Just a reminder.. I'll be back
 */
echo 'Just a reminder.. I\'ll be back';
?><br><?php
/**
 * Outputs: This won't move: \n a newline
 */
echo 'his won\'t move: \n a newline';

/**
 * O/P : The variable won't expand
 */
echo 'The variable won\'t expand';

