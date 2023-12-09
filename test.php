<?php
// Kết nối đến cơ sở dữ liệu
$servername = "127.0.0.1:3307
";
$username = "root";
$password = "";
$dbname = "herber";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Dữ liệu tài khoản admin
$adminUsername = "admin";
$adminPassword = "123456"; // Thay đổi thành mật khẩu thực của admin

// Mã hóa mật khẩu
$hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);

// Thêm tài khoản admin vào cơ sở dữ liệu
$sql = "INSERT INTO users (user_name, password, role_id, phone_number, email) VALUES ('$adminUsername', '$hashedPassword',2,'0365022208', 'admin@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "Tài khoản admin đã được thêm vào cơ sở dữ liệu!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>