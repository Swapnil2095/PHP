<?php

/*
Set a Top Level Exception Handler
The set_exception_handler() function sets a user-defined function to handle all uncaught exceptions. 
*/

function myException($exception)
{
    echo "Exception: " . $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');

?>