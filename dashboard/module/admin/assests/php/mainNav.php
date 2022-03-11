 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include_once('../assests/php/banner.php');
?>
<div class="topnav" id="myTopnav">
				    <li class="manulist">
                
						    <a  href="index.php"class="active disHome">Home</a>
                <a  href="index.php"class="active enaHome"><i class="fa fa-home"></i></a>
								<div class="dropdown">
                  <button class="dropbtn">Student 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="viewStudent.php">View Students</a>
                    <a href="addStudent.php">New Student</a>
                    <a href="updateStudent.php">Update Student</a>
                    <a href="deleteStudent.php">Delete Student</a>
                  </div>
                </div> 
								<div class="dropdown">
                  <button class="dropbtn">Teacher 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="viewTeacher.php">View Teacher</a>
                    <a href="addTeacher.php">New Teacher</a>
                    <a href="updateTeacher.php">Update Teacher</a>
                    <a href="deleteTeacher.php">Delete Teacher</a>
                  </div>
                </div> 
              <div class="dropdown">
                  <button class="dropbtn">Course 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="viewCourse.php">View Course</a>
                    <a href="addCourse.php">New Course</a>
                    <a href="assignCourse.php">Assign Course</a>
                    <a href="deleteCourse.php">Delete Course</a>
                  </div>
                </div> 
              <div class="dropdown">
                  <button class="dropbtn">Schedule 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="viewSchedule.php">View Schedule</a>
                    <a href="createSchedule.php">New Schedule</a>
                    <!-- <a href="assignCourse.php">Assign Course</a> -->
                    <a href="updateSchedule.php">update Schedule</a>
                  </div>
                </div> 
              <div class="dropdown">
                  <button class="dropbtn">Salary 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="viewSalary.php">View Salary</a>
                    <a href="updateSalary.php">update Salary</a>
                  </div>
                </div> 
              <div class="dropdown">
                  <button class="dropbtn">Fee 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="Payment.php">View Fee</a>
                    <a href="addPayment.php">Add Fee</a>
                    <a href="deletePayment.php">Delete Fee</a>
                  </div>
                </div> 								
								<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
								
						</li>
            <div align="center" class="user" id="users">
              <a class ="menulista" id="users" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
            </div>
 </div>
           
