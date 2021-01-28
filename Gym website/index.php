 <!-- <?php

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$locality = $_POST['locality'];
$phone = $_POST['phone'];

$con = new mysqli('localhost','root','','gym');
if($con->connect_error){
    die('Connection Failed :'.$con->connect_error);
}else{
    $stmt = $con->prepare("insert into sams(name,age,gender,locality,mobile no)values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $name, $age, $gender, $locality, $phone);
    $stmt->execute();
    echo "Registration Successfull bro...!";
    $stmt->close();
    $con->close();
}
?> -->
?> -->


