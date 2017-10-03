<?php
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
        $this->html .= htmlTags::headingOne('String Length Demonstration');
        $this->html .= stringFunctions::stringLength('Count this string');
        $this->html .= htmlTags::horizontalRule();
        $this->html .= htmlTags::headingOne('Array Count Function Example');
        $this->html .= arrayFunctions::arrayCount($myArray);
        $this->html .= htmlTags::horizontalRule();
    }

    //The destructor is the last to run and where you print the html property
    public function __destruct()
    {
        stringFunctions::printThis('This was printed with a print function');
        $this->html .= htmlTags::headingOne('Array Print Demo print_r');
        stringFunctions::printThis($this->html);

        //to print use the print_r function you have to just print it and make it the last one
        $myArray = array(1, 2, 3, 4, 5, 6, 7);
        arrayFunctions::printArray($myArray);

    }
}

//group your classes into logical groups


//this is a group of array functions
class arrayFunctions
{
    //add static to make it global so you can call it without instantiation
    static public function printArray($array)
    {
        //Print_r is weird because it doesn't return a value it prints
        print_r($array);
    }

    static public function arrayCount($array)
    {
        //you can just return the output of the function
        return count($array);
    }
}

//this is a group of string functions
class stringFunctions
{
    static public function printThis($inputText)
    {
        return print($inputText);
    }

    static public function stringLength($text)
    {
        return strLen($text);
    }
}

class htmlTags
{

    static public function horizontalRule()
    {
        return '<hr>';
    }

    static public function headingOne($text)
    {
        return '<h1>' . $text . '</h1>';
    }
}

?>
