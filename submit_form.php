<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Cấu hình email
    $to = "congbang3110hp@gmail.com";
    $subject = "Thông Tin Đăng Ký Mới";
    $body = "Họ và Tên: $name\nEmail: $email\nSố Điện Thoại: $phone\nNội Dung:\n$message";

    // Gửi email
    if (mail($to, $subject, $body)) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
}
?>
