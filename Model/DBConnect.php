
<?php
$server_username = "ykuuzflcyqrygr"; // thông tin đăng nhập host
$server_password = "ba6b1388e76904b06712572a99c424bcf6714e7058a2a8738e147ea22d161207"; // mật khẩu, trong trường hợp này là trống
$server_host = "ec2-34-232-212-164.compute-1.amazonaws.com"; // host là localhost
$database = 'd33q1ni6h0nvha'; // database là mvc

// Tạo kết nối đến database dùng mysqli_connect()
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
// Thiết lập kết nối ủa chúng ta khi truy vấn là dạng UTF8 trong trường hợp dữ liệu là tiếng việt có dâu
mysqli_query($conn,"SET NAMES 'UTF8'");
 ?>
