<?php

/**
 * Syntax : <<<
 * Description: The identifier declared after the syntax is used to end it.
 */
/**
 * Normal heredoc
 */
echo <<<START
this is line one
this is line two
this is line three
START;

echo <<<TEST
this is another line one
         this is another line two
            this is another line three

TEST;

/**
 * Expression after closing limiter
 */
echo <<<END
this is expression test 
END, 's,s,d';

/**
 * Expression after closing limiter using array
 */
$array_heredoc_limiter = [<<<END
        
this is array expression
        
END, 'd,e,f'];
var_dump($array_heredoc_limiter);

/**
 * heredoc in class 
 */
class UserData {

    var $name;
    var $age;

    function __construct() {
        $this->name = 'Foo';
        $this->age = 25;
    }
}

$user_data = new UserData();
echo <<<USER
    Hi, My name is {$user_data->name} and I am {$user_data->age}     
USER;
