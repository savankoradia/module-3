<?php

class Help {

    function __construct() {
        echo '<br>we are inside help.';
    }

    function other ($arg=false) {
        echo '<br>We are inside other function of help.<br>value passed : '.$arg.'<br>';
    }
    
    function new1() {
        $data['title']='NEW1';
        echo '<br>Hello, This is new one.<br>';
    }
    
    
}
