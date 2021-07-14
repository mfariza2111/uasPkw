<?php
include_once("koneksi.php");
$user = $_POST['uname'];
$password = $_POST['pass'];
$query = mysqli_query($connect,"SELECT * FROM user where username='$user' AND password='$password'");
$result = mysqli_fetch_array($query);
$row = mysqli_num_rows($query);
if(($user == "") && ($password == ""))
{
    echo"<script>alert('Anda belum memeasukkan username dan password')</script>";
    header("index.php");
exit;
}
if($row != 0)
{
if($password != $result['password'])
{
    echo"<script>alert('Password salah')</script>";
    header("index.php");
}
else
{
header("index.php");
}
}
else
{
    echo"<script>alert('Silahkan register terlebih dahulu')</script>";
    header("index.php");
}
?>
<?php mysqli_close($connect); ?>