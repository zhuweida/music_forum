<html>
<?php

$servername = "localhost";
$username = "mifeng";
$password = "mifeng";
$dbname = "forum";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 

$user_name = $_POST['username'];
$salt="zhuweida";
$password = hash("sha256",hash("sha256", $_POST['password'].$salt));
$sql = "INSERT INTO users (user_name, user_pw)
VALUES ('$user_name', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "insert success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
               
?>     
<input type="button" class="button2" onclick="myFunction2()" value="return"></button>
<script>
 function myFunction2(){
          window.location.assign("index_test.php");}
</script>



         
</html>

 							
								
								
								
