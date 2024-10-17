<?php
// if statement, if...else statement, if...elseif...else statement, switch statement

// if statement
$num = -1;

if($num<0){
    echo "$num is less than 0";
}

// if..else
$age = 10;

if(age > 18){
    echo "You are an adult";
}else{
    echo "You are under 18";
}

if(($age > 12 ) && ($age <20)){
    echo "DIscount for you !!! <br>";
}

//if...elseif...else
if($num<0){
    echo "The value of $num is a negative number.";
}elseif($num==0){
    echo "The value of $num is 0.";
}else{
    echo "The value of $num is a positive number.";

}

//Write a program that has a variable named score and assign a value,
//After you will check and as a result should be displayed the grade: A:
//90-100, B: 80-89, C: 70-79, D: 60-69, F: other results

$score = 67;


if($score > 90){
    echo "Your grade is A";
}
if($score > 80){
    echo "Your grade is B";
}
if($score > 70){
    echo "Your grade is C";
}
if($score > 60){
    echo "Your grade is D";
}
if($score == 0-59){
    echo "Your grade is F";
}

$grade = 'B';
switch($grade){
    case 'A':
        echo 'Excellent! You got an A';
        break;
    case 'B':
        echo 'Good Job! You got a B';
        break;
    case 'C':
            echo 'Well done! You got a B';
        break;
    case 'D':
            echo 'You passed, but you need to stufy more';
        break;
    case 'F':
            echo 'You failed, youre cooked';
        break;
    default:
    echo 'Invalid grade!!'
    break;
}
?>