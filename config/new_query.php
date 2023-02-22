<?php

include '../config/constant.php';
include '../config/db.php';

$getRequestData = $_POST;

if (empty($getRequestData)):
    header('Location:' . BASE_URL);
endif;

$firstName = $getRequestData['firstName'];
$lastName = $getRequestData['lastName'];
$email = $getRequestData['email'];

$checkUserAlreadyExist = $conn->query("SELECT * FROM users WHERE email='$email'");
$getAllData = $checkUserAlreadyExist->fetch(PDO::FETCH_ASSOC);
if (empty($getAllData)):
    $data = [
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email
    ];
    $sql = "INSERT INTO users (firstName, lastName, email) VALUES (:firstName, :lastName, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $InsertedUserId = $conn->lastInsertId();
    if (!empty($InsertedUserId)):    
        header('Location:' . BASE_URL);
    else:
        header('Location:' . BASE_URL);
    endif;
else:
    header('Location:' . BASE_URL);
endif;
