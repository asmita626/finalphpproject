
<?php

require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hobbies=array();
$hob=implode("," , (array)$hobbies);

//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$phone','$gen','$hob','$dob',now())";
mysqli_query($conn,$query);




$err="<font color='blue'>Registration successfull !!</font>";

}
}
?>
<html>
<head>
<link href="css/register.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(to left, #ffffff 0%, #ff5050 100%)";
">
<h2 style="padding-left:520px"><b>REGISTRATION FORM</b></h2>
		<form method="post" enctype="multipart/form-data" style="padding-left:450px">
			<table class="table table-bordered" >
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>

				<tr >
					<td style="padding-bottom; font-size:20px">Your Name</td>
					<Td style="padding-bottom:20px"><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td style="padding-bottom:20px; font-size:20px">Your Email </td>
					<Td style="padding-bottom:20px"><input type="email"  class="form-control" name="e" required/></td>
				</tr>

				<tr>
					<td style="padding-bottom:20px; font-size:20px">Your Password </td>
					<Td style="padding-bottom:20px"><input type="password"  class="form-control" name="p" required/></td>
				</tr>

				<tr>
					<td style="padding-bottom:20px; font-size:20px">Your Mobile No. </td>
					<TD style="padding-bottom:20px"><input type="tel" id="phone" name="phone" placeholder="123456789"required></TD></tr>
				<tr>
					<td style="padding-bottom:20px; font-size:20px">Select Your Gender</td>
					<Td style="padding-bottom:20px">
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>
					</td>
				</tr>
				
                 
				<tr>
					<td style="padding-bottom:20px; font-size:20px">Date of Birth</td>
					<Td style="padding-bottom:20px">
					<select name="yy" required>
					<option value="">Year</option>
					<?php
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					<select name="mm" required>
					<option value="">Month</option>
					<?php
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>


					<select name="dd" required>
					<option value="">Date</option>
					<?php
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					</td>
				</tr>
				<tr style="padding-left:20px">
					<td style="font-size:20px"><label for="categories">Categories:</label>

                   <select id="categories">
                    <option value="Education institution">Education Institution</option>
                    <option value="Government Oragnization">Government Organization</option>
                    <option value="Private Organization">Private Oragnization</option>
                  </select>
				</tr>

				<tr>


<Td colspan="4" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>

					</td>
				</tr>
  <tr><td><a href="login.php">Login</a></td></tr>
			</table>
		</form>
	</body>
</html>
