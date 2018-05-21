<?php 

class Controller {
    function beforeroute(){
        echo 'Before routing.- ';
    }
    function afterroute(){
        echo ' -.After routing';
    }
}

