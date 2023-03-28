<?php
    $conn =mysqli_connect('localhost','root','','project1'); 
    if(isset($_GET['submit'])){
  $name = $_GET['name'];
  $hours_no = $_GET['hour_no'];
  $start_date = $_GET['start_date'];
  $end_date= $_GET['end_date'];
  $institution = $_GET['institution'];
  $url = $_GET['url'];
  $notes = $_GET['notes'];

  $sql = "INSERT INTO `course` (name,hours_no,start_date,end_date,Institution,url,Notes)
   VALUES ('$name',$hours_no,'$start_date','$end_date','$institution' , '$url', '$notes')";
  if(mysqli_query($conn, $sql)){
    echo 'course added successfully';
  }else{
      echo 'course added faild';
  }
}

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
              <form action="add course.php" method="GET">
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
                 <br>Course name: <input type="text"  name="Course name"/> 
                 <div class="logoimage">
                <img src="course.jpg" width="400px" hight="500px"  border="2" align="right"/><br></div>
                <br>Number of Hours: <input type="number" name="Number of Hours"/><br>
                <br>start date:<input type="date" name=" start date"/><br>
                <br>end date : <input type="date" name="end date"/><br>
                <br>Institution: <input type="text" name="Institution"/><br>
                <br>Attachment:
                <input type = "radio" name ="att"> file
                <input type = "radio" name ="att"> URL <br>
               <br> URL: <input type="text" name="URL"/><br>
               <br> file:<input type="file" name="picture"><br>
               <br><lable for="Notes">Notes:</lebel>
                 <textarea name="Notes" maxlength="100" cols="26" rows="6"></textarea><br>
              <div>
                <button class="main" type="submit"> save </button>
                <button class="main1" type="Reset"> Reset </button>


              </div>
        </div>   
</body>
</form>
</html>
