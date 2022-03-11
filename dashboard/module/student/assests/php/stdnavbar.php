
<div class="topnav" id="myTopnav">

       <li class="manulist" >
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                <a  href="index.php"class="active disHome">Home</a>
                <a  href="index.php"class="active enaHome"><i class="fa fa-home"></i></a>
                <a  href="modify.php">Password</a>
                        
                <div class="dropdown">
                    <button class="dropbtn">Course & Result 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="course.php">My Course Info</a>
                      <a href="myresult.php">Result</a>

                    </div>
                  </div> 
                <a  href="Class.php">Time Table</a>
                <a  href="attendance.php">Attendance</a>
        </li>
        <div align="center" class="user" id="users">
                                    <a class ="menulista" id="users" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
                            </div>
</div>