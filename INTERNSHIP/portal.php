<?php
    
$server='localhost';
$username='root';
$password='';
$database="jobp';
$conn= mysqli_connect($server, $username, $password, $database);

if($conn->connect_error) {
    echo "Couldnt connect as : ".$conn->connect_error;
}

echo"";
session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM user WHERE `email`='$email';

    $result-mysqli_query($conn, $query);
    $row-mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1){
            header("location index.php");
        }
        else{
            $error='emailid or password is incorrect';
        }



if(isset($_POST['job'])){
        $cname=$_POST['cname'];    
        $pos=$_POST['pos'];    
        $3desc=$_POST['Jdesc'];    
        $skills=$_POST['skills'];    
        $CTC-$_POST['CTC'];    
        
        $job= "INSERT INTO `jobs` ( `cname™ mysqli_query($conn, $job); `position`, 'Jdesc', 'skills', CTC) VALUES ('$cname" $pos', '$3desc'    
}    
if(isset($_POST['submit'])){    
        $name=$_POST['name'];    
        $qual=$_POST['qual'];    
        $apply-$_POST['apply'];    
        $year=$_POST['year'];    
    
    $sql="INSERT INTO `candidates` (`name`, `email`, `qualification`, `age`) VALUES ('$name', '$apply', '$qual', '$year')";    
    mysqli_query($conn, $sql);


?>