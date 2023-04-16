<?php 
require('connection.php');
$query = "SELECT * FROM arrival WHERE id = 56 ";
$result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>POE Form | Gov.sl</title>

</head>
<style type="text/css">
html { 
  background: url(img/airline1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main_area	{
	margin: auto auto;
	color: white;
	width:500px;
	height: 720px;
	margin: 0 auto;
	color:white;
	border-radius: 25px;
	margin-top:20px;
	padding-top: 10px;
	padding-right: 30px;
	padding-bottom: 30px;
	padding-left: 30px;
	background-color: rgba(0,0,0,0.3);
    box-shadow: inset -4px -4px rgba(0,0,0,0.5);
}
button{
    width: 100px;
    height: 30px;
    color: white;
    background-color: green;
    border: none;
    border-radius: 4px;
    margin: 10px 50px;
    cursor: pointer;

}
.info{
    align: left;
}
.code{
    background-color: blue;
    width: 150px;
    height: 30px;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 4px;
}
#logo img{
    width: 65px;
    height: 65px;
    border-radius: 200px;
}
.top{
    line-height: 2px;
}

</style>
<body>
<div  id="main_area">

     <div id="logo"><img src="img/coat of arm.png" alt="logo" height="100" width="100" align="left"/></div> 

<div class="top">
	    <h2 align="center">Government of Sierra Leone</h2>
        <h4 align="center">Ministry of Health and Sanittation</h4>
        </div><br>
        <p>This is to certify that the details below are authentic document of the holder, <br>any alteration in this document render it invalid.</p>
    <h4 align="center">Passanger Information</h4>
    <div class="info">

    <?php 
    if($row = mysqli_fetch_assoc($result))
    {
        ?>
    <p>Full Name : <?php echo $row['passFirstName']. " ".$row['passLastName']; ?></p>
    <p>Contact : <?php echo $row['permNumber']; ?> </p>
    <p>Passport No. : <?php echo $row['passportnum']; ?> </p>
    <p>Flight Name: <?php echo $row['flightname']; ?> </p>
    <p>Email : <?php echo $row['email']; ?> </p>
    <p>Travelling From : <?php echo $row['travcount']; ?> </p>
    </div>
    <h4 align="center">Emmergency Contact Information</h4>
    <div class="emmerg">
    <p>Full Name : <?php echo $row['emmFirstName']. " ".$row['emmLastName'];?> </p>
    <p>Last Name : <?php echo $row['emmLastName'];?> </p>
    <p>Address : <?php echo $row['emmCity'];?> </p>
    <p>Contact : <?php echo $row['emmPhoneNumber'];?> </p>
    <p>Email : <?php echo $row['emmEmail'];?> </p>
    <div class="code">PLF Code :PLF <?php echo $row['id'];?></div>
    <?php
    }
    ?>
    <a href="index.html"><button>Close</button></a>
    <a href="download.php?file=result.pdf" target="_new"><button>Download</button></a>
    <p><?php echo date("H : i a ") . date ("d / M / Y") ?></p>
    </div>
</div>
</body>
</html>