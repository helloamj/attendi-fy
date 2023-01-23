<?php
if(isset($_POST["Submit"])){
		
$dbhost="localhost";
$dbuser="id19678149_sugg";
$dbpass="zJ%%PblGWs>8>swb";
$dbname="id19678149_suggestion";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("database connection failed".mysqli_connect_error());
}
else{
    echo"database is successfully connected";
}
$sg = $_POST["suggtext"];

if($sg!="")
{
    $sql="INSERT INTO suggestion_details VALUES('$sg')";
    $data=mysqli_query($conn,$sql);
    if($data)
    {
        echo"<script>alert('Thank You for Your Suggestion');</script>";

    }
}
    
    else
    {
        echo "<font color='red'>All fields are required";
    }


include 'index.html';

mysqli_close($conn);
}
?>