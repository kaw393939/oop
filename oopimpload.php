<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


//instantiate the program object

//Class to load classes it finds the file when the progrm starts to fail for calling a missing class
class Manage
{
    public static function autoload($class)
    {
        //you can put any file name or directory here
        include $class . '.php';
    }
}

spl_autoload_register(array('Manage', 'autoload'));

//instantiate the program object
$obj = new main();

class main
{
//add a property for html text so you can save the output you need to print.
    private $html;

//The constructor is the first to run and this is where you put your main program
    public function __construct()
    {
        //Initialize all your variables at the top;

        $myArray = array(1, 2, 3, 4, 5, 6, 7);
        //call your static methods to carry out one operation
        $this->html .= htmlTags::headingOne('This was printed with a print function');
        $this->html .= htmlTags::horizontalRule();
        $this->html .= htmlTags::headingOne('String Length Demonstration');
        $this->html .= stringFunctions::stringLength('Count this string');
        $this->html .= htmlTags::horizontalRule();
        $this->html .= htmlTags::headingOne('Array Count Function Example');
        $this->html .= arrayFunctions::arrayCount($myArray);
        $this->html .= htmlTags::horizontalRule();
        $this->html .= htmlTags::headingOne('Array Print Demo print_r');
        $this->html .= arrayFunctions::printArray($myArray);
    }

    //The destructor is the last to run and where you print the html property
    public function __destruct()
    {
        //print the page here by calling the print function
        stringFunctions::printThis($this->html);
    }
}

?>
