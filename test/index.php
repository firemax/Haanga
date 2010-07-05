<?php

require "../haanga/runtime.php";

Haanga::setCacheDir('tmp/');
Haanga::setTEmplateDir('tpl/');

$people =  array(
    array('first_name' => 'George </br>', 'last_name' => 'Bush', 'gender' => 'Male', 'foobar' => 'extra'),
    array('first_name' => 'Bill', 'last_name' => 'Clinton', 'gender' => 'Male'),
    array('first_name' => 'Margaret', 'last_name' => 'Thatcher', 'gender' => 'Female'),
    array('first_name' => 'Condoleezza', 'last_name' => 'Rice', 'gender' => 'Female'),
    array('first_name' => 'Pat', 'last_name' => 'Smith', 'gender' => 'Unknown', 'bar' => 'foo'),
);

$vars = array(
    'some_list' => array(1, 2, 3, 4, 4, 4, 5),
    'user' => 'crodas',
    'base_template' => 'subtemplate.html',
    'people' => $people,
);


$time = microtime(TRUE);
$mem = memory_get_usage();
Haanga::load('index.html', $vars);
var_dump((memory_get_usage()-$mem)/(1024*1024), microtime(TRUE)-$time);
