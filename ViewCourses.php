<?php
    $conn =mysqli_connect('localhost','root','','project1'); 
    ?>
<!DOCTYPE html>
<html> 
    
<!--Here starts the Html file-->
    <head> 
       <meta keyword="htmls, learn, teach" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> table</title>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='get'>
	<div id="big_wrapper"> 
    <div class="nav">
               <br> <ul> 
                <li><a href="Home.php">Personal Information</a></li>
                    <li><a href ="ViewCourses.php">Courses Information</a></li>
                    <li><a href="ViewExperience.php">Experiences Information</a></li>
                    <li><a href="add course.php">Add course</a></li>
                    <li><a href="Add exp.php">Add experience</a></li>
                    <img src="2.png"width="25px" hight="20px"  align="right"/>

                </ul><br> 
    </div>

<h1> All Courses Information</h1>
    <table border="1px" cellspacing="0">
      <thead style="background-color: #606060;"height="50px">
        <tr>
        <th rowspan="2" width="60px" height="50px" >#</th>
          <th rowspan="2"  width="250px" >Course Name</th>
          <th rowspan="2" width="150px">Total Hours</th>
          <th colspan="2"  width="190px">Date</th>
          <th rowspan="2"  width="200px">Institution</th>
          <th rowspan="2"  width="200px">Attachment</th>
          <th rowspan="2"  width="250px">Notes</th>
        </tr>
        <tr>
          <th>From</th>
          <th >To</th>
        </tr>
      </thead>

      <tbody style="border:solid black;">
        <?php
            $sql = "SELECT * FROM `course` ";
            $result = mysqli_query($conn, $sql);
            while($co = mysqli_fetch_assoc($result)){
        ?>
          <tr  height="70px">
            <th ><?php echo $co['id'] ?></th>
              <td style="text-align: left; padding: 20px;"><?php echo $co['name'] ?></td>
              <td><?php echo $co['hours_no'] ?></td>
              <td style="padding:50px 10px;"><?php echo $co['start_date'] ?></td>
              <td style="padding:50px 10px;"><?php echo $co['end_date'] ?></td>
              <td> <?php echo $co['Institution'] ?> </td>
              <td><a href="Course_View.php?course_id=<?php echo $co['url'] ?>" target="_blank">view</a></td>
              <td style="text-align: left; padding: 10px;"><?php echo $co['Notes'] ?></td>
          </tr>
       <?php } ?>
      </tbody>
    </table>
  </body>
  </html>