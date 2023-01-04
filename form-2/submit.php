<?php

// For Name
if(empty($_REQUEST["name"])){
    echo "Please Fill Your Name";
    exit();
}else if (strlen($_REQUEST["name"]) <=2 || strlen($_REQUEST["name"]) > 20) {
    echo "Name Should Not Be < 2 & Should Not Be > 20 Char Long";
    exit();
}

// For Student ID
if(empty($_REQUEST["student_id"])){
    echo "Please Fill Your Student ID";
    exit();
}else if (strlen($_REQUEST["student_id"]) == 10) {
    echo "EQ 10";
    exit();
}

// For Mobile No
if(empty($_REQUEST["mobile_no"])){
    echo "Please Fill Your Mobile No";
    exit();
}else if (strlen($_REQUEST["mobile_no"]) == 10) {
    echo "M EQ 10";
    exit();
}

// For Email
if(empty($_REQUEST["email"])){
    echo "Please Fill Your Email";
    exit();
}

// For City
if(empty($_REQUEST["city"])){
    echo "Please Fill Your City";
    exit();
}else if (strlen($_REQUEST["city"]) > 20) {
    echo "City Should Not Be < 2 & Should Not Be > 20 Char Long";
    exit();
}

// For State
if(empty($_REQUEST["state"])){
    echo "PLEASE FILL YOUR STATE";
    exit();
}else if (strlen($_REQUEST["state"]) <=1 || strlen($_REQUEST["state"]) > 20) {
    echo "State Should Not Be < 1 & Should Not Be > 20 Char Long";
    exit();
}

// For Rating
if(empty($_REQUEST["rating"])){
    echo "Please Fill The Rating";
    exit();
}else if ($_REQUEST["rating"] == 0) {
    echo "EQ 0";
    exit();
}else if ($_REQUEST["rating"] > 6) {
    echo "EQ 1";
    exit();
}

// For Comments
if(empty($_REQUEST["comments"])){
    echo "Please Fill The Comments";
    exit();
}else if (strlen($_REQUEST["comments"]) <=2 || strlen($_REQUEST["comments"]) > 20) {
    echo "Comments Should Not Be < 2 & Should Not Be > 20 Char Long";
    exit();
}

// For Password
if(empty($_REQUEST["password"])){
    echo "Please Fill Your Password";
    exit();
}else if (strlen($_REQUEST["password"]) <=2 || strlen($_REQUEST["password"]) > 20) {
    echo "Password Should Not Be < 2 & Should Not Be > 20 Char Long";
    exit();
}



$name= $_REQUEST["name"];
$student_id= $_REQUEST["student_id"];
$mobile_no= $_REQUEST["mobile_no"];
$email= $_REQUEST["email"];
$city= $_REQUEST["city"];
$state= $_REQUEST["state"];
$rating= $_REQUEST["rating"];
$comments= $_REQUEST["comments"];
$password = $_REQUEST["password"];


echo "name: ".$name ;

echo "<br />";
echo "student_id: ".$student_id ;

echo "<br />";
echo "mobile_no: ".$mobile_no ;

echo "<br />";
echo "email: ".$email ;

echo "<br />";
echo "city: ".$city ;

echo "<br />";
echo "state: ".$state ;

echo "<br />";
echo "rating: ".$rating ;

echo "<br />";
echo "comments: ".$comments ;

echo "<br />";

echo "password: ".$password ;
?>