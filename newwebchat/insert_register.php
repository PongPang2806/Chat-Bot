<?php 
include 'register.php';
//รับค่าตัวแปล

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
//เพิ่มคำลั่งข้อมูล

$sql ="INSERT INTO users(firstname, lastname, email, password)
Values('$firstname', '$lastname', '$email', '$password')";


$result=mysqli_query($conn,$sql);

if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย');</script> ";
    echo "<script> window.location = 'register.php'; </script> ";
}else{
    echo "Error: ".$sql."<br>" .mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่ได้');</script> ";
}

mysqli_close($conn);


?>