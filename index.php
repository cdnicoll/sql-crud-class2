<?php
################################################
## NOTE:
##      THIS USES THE WORLD DATABASE
// DROP DATABASE IF EXISTS world;
// CREATE DATABASE world;
// USE world;
// SOURCE sql_files/world.sql;
################################################
	include('model.class.php');    // include the sql class file

    $model = new Model();
    
    $q1 = $model->selectEg1();
    $q2 = $model->selectEg2();
    $q3 = $model->selectEg3();
    
    echo '<pre>';
    	print_r($q1);
    echo '</pre>';
    echo "<hr>";
    
    echo '<pre>';
    	print_r($q2);
    echo '</pre>';
    echo "<hr>";
    
    echo '<pre>';
    	print_r($q3);
    echo '</pre>';
    
?>