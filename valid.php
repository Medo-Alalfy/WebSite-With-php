<?php


if (empty($firstName)) {

    die('The FirstName Is Empty ');
}


if (empty($lastname)) {

    die('The LastName Is Empty ');
}



if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

   die('Email is incorrect');
}


?>



