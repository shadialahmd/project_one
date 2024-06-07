<?php

 require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();

$c=0;
$v="c";
echo $v;

while($c!=10){

    echo 'my name is: '. $faker->name();
    echo '<br>';
    echo 'and my email = '.$faker->email().'<br>';
    
    $c++;

}