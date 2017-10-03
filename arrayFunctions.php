<?php

//this is a group of array functions
class arrayFunctions
{
    //add static to make it global so you can call it without instantiation
    static public function printArray($array)
    {
        //Print_r is weird because it doesn't return a value it prints
        return print_r($array, TRUE);
    }

    static public function arrayCount($array)
    {
        //you can just return the output of the function
        return count($array);
    }
}
