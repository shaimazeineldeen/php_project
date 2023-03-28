
<!DOCTYPE html>
<html lang="en"> 
    
<!--Here starts the Html file-->
    <head> 
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Project</title>
    </head>
    <body> 
         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <div id="big_wrapper"> 
                <div class="nav">
                <br><ul> 
                <li> <a href="Home.php">Personal Information</a> </li>
                <li > <a href="ViewCourses.php">Courses Information</a> </li>
                <li > <a href="ViewExperience.php">Experiences Information</a> </li>
                <li > <a href="add Course.php">Add Course</a> </li>
                <li > <a href="Add Exp.php">Add Experience</a> </li>
                <img src="2.png"width="25px" hight="20px"  align="right"/>
                </ul><br>
                </div>
<div>
                <br><h1> Personal Information</h1> <br>
                <div id="Personal Information"></div>
                                <br>
         <img src="pers.jpg"width="200px" hight="200px" border="2" align="right"/>

              <?php
$conn = mysqli_connect('localhost', 'root','');
$db = mysqli_select_db($conn,'project');
$req = "SELECT * FROM user";
$query = mysqli_query($conn,$req);
while ($fetch = mysqli_fetch_assoc($query))
{
   echo "Full Name:" .$fetch['Full Name'] . "<br>"."<br>"."<br>";
    echo "Gender: ".$fetch['Gender'] . "<br>". "<br>"."<br>";
    echo "Date birth: ".$fetch['Date birth'] . "<br>". "<br>"."<br>"."<br>";
    echo "Nationality: ".$fetch['Nationality'] . "<br>". "<br>"."<br>"."<br>";
    echo "Place of birth: ".$fetch['Place of birth'] . "<br>". "<br>"."<br>"."<br>";
    echo "Job Title: ".$fetch['Job Title'] . "<br>". "<br>"."<br>"."<br>";
    echo "Yeare of experince: ".$fetch['Yeare of experince'] . "<br>". "<br>"."<br>"."<br>";
    echo "<hr>";

}

?>


</form>
</body>
</html>
