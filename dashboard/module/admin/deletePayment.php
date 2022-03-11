<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchPayment.js"></script>
		

		</head>
    <body>
			  
<?php

include_once('assests/php/mainNav.php');
?>
			  <hr/>
        <center>
            <h1>Delete Payment</h1>
            <table>
                <tr>
                    <td><b>Search By Payment Id Or Student Id</b></td>
                    <td><input type="text" onkeyup="getPayment(this.value);"></td>
                </tr>
            </table>
            <div id="paymentList">
            </div>
        </center>
		</body>
</html>
