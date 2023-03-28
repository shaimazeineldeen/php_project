
<!DOCTYPE html>
<html> 
    
<!--Here starts the Html file-->
    <head> 
       <meta keyword="htmls, learn, teach" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> table</title>
    </head>
    <body> 
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
	<div id="big_wrapper"> 
    <div class="nav">

                <br><ul> 
                <li><a href="Home.php">Personal Information</a></li>
                    <li><a href ="ViewCourses.php">Courses Information</a></li>
                    <li><a href="ViewExperience.php">Experiences Information</a></li>
                    <li><a href="add course.php">Add course</a></li>
                    <li><a href="Add exp.php">Add experience</a></li>
                    <img src="2.png"width="25px" hight="20px"  align="right"/>

                </ul><br>
    </div>
                <br><h1>Experiences Information</h1> <br>
                <div id="Experiences Information"></div>
<?php
$conn = mysqli_connect('localhost', 'root','');
$db = mysqli_select_db($conn,'project2');
$req = "SELECT * FROM experiences";
$query = mysqli_query($conn,$req);
while ($fetch = mysqli_fetch_assoc($query))
{
    echo "Experiences Category: ".$fetch['Experiences_Category'] . "<br>";
    echo "Experiences Title: ".$fetch['Experiences_Title'] . "<br>";
    echo "Start month: ".$fetch['Start_month'] . "<br>";
    echo "End month: ".$fetch['End_month'] . "<br>";
    echo "Institution: ".$fetch['Institution'] . "<br>";
    echo "Description: ".$fetch['Description'] . "<br>";
    echo "<hr>";

}

?>
           
</form>
</body>
</html>
