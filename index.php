<php?
$severname="localhost";
$username="root";
$password="";
$db name="course";

$conn=new mysqli($severname,$username,$password);
if(!$conn)  { die connection failed. $conn-> connect_error;
}
</php>
<php>
 
if($_SERVER["REQUEST METHOD"] == "POST" && isset($_POST["create"]))
$sno="$sno";
$name="$name";
$age="$age";
$courseid="$courseid";

$sql="INSERT INTO STUDENTS(sno,name,age,courseid) VALUES('$sno','$name','$age','$courseid')";
$conn -> query("create");

if(mysqli_query($conn,$sql))
{
    echo "SUCESSFULLY ADDED";

}
else
{
    echo "not added successfully";

}

</php>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insert</h1>
    <p>sno</p>
    <input type="text" id="sno" name="sno">
    <br>
    <p>name</p>
    <input type="text" id="name" name="name">
    <br>
    <p>age </p>
    <input type="text" id="age" name="age">
    <br>
    <p>courseid</p>
    <input type="text" id="courseid" name="courseid">
    <br>
    <button>add</button>
</body>
</html>