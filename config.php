<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration | PHP</title>
<link rel="stylesheet" type="text?css" href="css?bootstrap.min.css">
</head>
<body>
<div>
<?php
if(isset($_POST['create'])){

$fullname             -$_POST['fullname'];
$gender              -$_POST['gender'];
$gamename                     -$_POST['gamename'];
$experience     -$_POST['experience'];
$location            -$_POST['location'];
$email     -$_POST['email'];

Ssql="INSERT INTO users(fullname, gender, gamename, experience, location, email ) VALUES(?,?,?,?,?)";
$stmtinsert=$db->prepare($sql);
$result=$stmtinsert->execute([$fullname, $gender, $gamename, $experience, $experience ,$email    -$_POST['experience'];]);
if($result){
echo 'Successfully saved.';
}else{
echo 'there were errors while saving the data.';
}
}
?>
</div>