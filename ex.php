<?php

// Try : Tests a block of code for errors

// catch : runs a block of code if an error occurs in the try block

// finally : exutes code regardless of the result

// throw : creates a custom error

// exception : an object that describes an error   [ new Exception(message, code, previous) ]

// Methods : getMessage() getLine() getCode() getPrevious() getFile()	



try{
            function devide($devidend, $devisor){

                if($devisor == 0){
                    throw new exception("cannot devide by 0");
                }

                return $devidend / $devisor;

            }

            echo devide(10, 0);

        }catch(exception $e){

            echo $e->getLine();
        }
















    // try{
    //     function divide($dividend, $divisor) {     
    //         if($divisor == 0) {
    //         throw new Exception("Division by zero");
    //         }
    //         return $dividend / $divisor;
    //     }
        
    //     echo divide(5, 0);
    
    // }catch(Exception $e) {
    //     echo  $e->getMessage();
    // }finally{
    //     echo "<br>";
    //     echo "done";
    // }

    

  




?>