<?php
session_start();
$con=mysqli_connect('localhost','root','','project2');
mysqli_select_db($con,"project2");
?>
<!DOCTYPE html>
<html> 
    
<!--Here starts the Html file-->
    <head> 
        <meta keyword="htmls, learn, teach" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Project</title>
        
    </head>
    <body> 
        <div id="big_wrapper"> 
               <form action="add exp.php" method="post">
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
                <div id="Add Experience"></div>
                 <br>Experiences Category:<input type="text"  name="Experiences Category"/><br>
                 <div class="logoimage">
                 <img src="per.jpg" width="400px" hight="500px"  border="2" align="right"/></div>
                 <br>Experiences Title: <input type="Hours" name="Experiences Title"/><br>
                <br>Start month:<input type="date" name=" Start month"/><br>
                <br>End month : <input type="date" name="End month"/><br>
                <br>Institution: <input type="text" name="Institution"/><br>
                <br><lable for="Description">Description:</lebel>
                 <textarea name="Description" maxlength="100" cols="26" rows="6"></textarea> <div>
                <br>
                <div>
               <button class="main" type="submit"> save </button>
                <button class="main1" type="Reset"> Reset </button>


              </div>
        </div>
       

<br><br>
<br><br><br>
<br>
<br>
<br><br><br><br><br><br><br><br>
<br>
<br>
<br><br><br><br><br>



<?php
if(isset($_POST['Experiences_Category'])&& isset($_POST['Experiences_Title'])&& isset($_POST['Start_month'])&& isset($_POST['End_month'])&& isset($_POST['Institution'])&& isset($_POST['Description'])){
  $Experiences_Category = $_POST['Experiences_Category'];
$Experiences_Title = $_POST['Experiences_Title'];
$Start_month = $_POST['Start_month'];
$End_month  = $_POST['End_month'];
$Institution = $_POST['Institution'];
$Description = $_POST['Description'];
if (empty($Experiences_Title)){
  echo "false"; 
}
if(empty($Institution)){
  echo "no";
}
  else{
mysqli_query($con,"insert into experiences(Experiences_Category,Experiences_Title, Start_month, End_month,Institution, Description)
VALUE('$Experiences_Category','$Experiences_Title','$Start_month','$End_month','$Institution','$Description')");
echo "true";
}
  } else{
    echo "problem in input";
  }
?>

</form>
</body>
</html>