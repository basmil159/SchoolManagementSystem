 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include_once('../assests/php/banner.php');
?>
<div class="topnav" id="myTopnav">
				<li class="manulist">
						    <a href="index.php" class="active">Home</a>
								
								<a href="courses.php">Courses</a>
								 <div class="dropdown">
				                  <button class="dropbtn">Attendance 
				                    <i class="fa fa-caret-down"></i>
				                  </button>
				                  <div class="dropdown-content">
				                    <a href="attendance.php">Make Attendance</a>
				                    <a href="viewAttendancest.php">View Attendance</a>
				                    <!-- <a href="assignCourse.php">Assign Course</a> -->
				                    <a href="updateAttendence.php">Update Present</a>
				                    <a href="deleteatt.php">Update Absent</a>
				                  </div>
				                </div> 
								<a href="course.php">Students Grade</a>
								<a href="class.php">Schedule</a>
								<a href="salary.php">Salary</a>
								<a href="searchStudent.php">Search</a>
								

            <div align="center" class="user" id="users">
              <a id="users" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
            </div>
 </div>
           
