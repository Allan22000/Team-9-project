<?php

include '../config/constant.php';
include '../config/connection.php';

$getRequestData = $_GET;

if (empty($getRequestData)):
    header('Location:' . BASE_URL);
endif;

$deleteId = $getRequestData['id'];

$checkUserAlreadyExist = $conn->query("DELETE FROM users WHERE id='$deleteId'");
if (!empty($checkUserAlreadyExist)):
    header('Location:' . BASE_URL . 'query_details.php');
else:
    header('Location:' . BASE_URL . 'query_details.php');
endif;
