<?php

class Index {

    function __construct() {
    //    echo '<br>We are in Index controller.';
    }
    
    function index() {
        $data['title']='This is index page.';
        echo '<br><b>This is index page</b><br>';
    }
    
    
    function showdata() {
        echo '<br>This is show data page.<br>';
    }
    
}
