<?php
require 'application/flight/Flight.php';
Flight::set('flight.views.path', 'application/views');


Flight::route('/', function(){
    echo "This is root";
});

Flight::route('/test/@name', function($name){
    //This doesn't actually render, it just sets it's template content to a variable called 'layout'
    Flight::render('test/hello.php', array('name' => $name), 'layout');

    //This renders everything, variable 'layout' from above has already been passed in
    Flight::render('main.php', array('title' => 'Some random Title', 'description' => 'some page description')); 
});

Flight::start();
?>
