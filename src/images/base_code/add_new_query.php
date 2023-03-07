<?php

include '../config/constant.php';
include '../config/connection.php';

$getRequestData = $_POST;

if (empty($getRequestData)):
    header('Location:' . BASE_URL);
endif;

$firstName = $getRequestData['firstName'];
$lastName = $getRequestData['lastName'];
$email = $getRequestData['email'];
$message = $getRequestData['message'];

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
        $data = [
            'messageBody' => $message,
            'user_id' => $InsertedUserId
        ];
        $sql = "INSERT INTO message (messageBody, user_id) VALUES (:messageBody, :user_id)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $_SESSION["Success"] = "Your Query Send Successfully.";
        header('Location:' . BASE_URL);
    else:
        $_SESSION["Error"] = "Something went wrong to send query.";
        header('Location:' . BASE_URL);
    endif;
else:
    $checkUserAlreadyExist = $conn->query("SELECT * FROM users WHERE email='$email'");
    $getUserData = $checkUserAlreadyExist->fetch(PDO::FETCH_ASSOC);
    if (!empty($getUserData)):
        $InsertedUserId = $getUserData['id'];
        $data = [
            'messageBody' => $message,
            'user_id' => $InsertedUserId
        ];
        $sql = "INSERT INTO message (messageBody, user_id) VALUES (:messageBody, :user_id)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        $_SESSION["Success"] = "Your Query Send Successfully.";
        header('Location:' . BASE_URL);
    else:
        $_SESSION["Error"] = "Something went wrong to send query.";
        header('Location:' . BASE_URL);
    endif;
endif;
