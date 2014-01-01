<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $pwdErr =$countryErr = $zipcodeErr = $genderErr = $img ="";
$firstname = $lastname = $email = $pwd =$country = $zipcode = $gender = $imgErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  if (empty($_POST["firstname"]))
    {$firstnameErr = "Name is required";}
  else
    {$firstname = test_input($_POST["firstname"]);}
  
  if (empty($_POST["lastname"]))
    {$lastnameErr = "Lastname is required";}
  else
    {$lastname = test_input($_POST["lastname"]);}

  if (empty($_POST["email"]))
    {$emailErr = "Email is required";}
  else
    {
    	$email = test_input($_POST["email"]);
    	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
  			{
  				$emailErr = "Invalid email formate";
  			}
	}

	if (empty($_POST["pwd"]))
    {$pwdErr = "Password is required";}
  else
    {$pwd = test_input($_POST["pwd"]);
		if (!preg_match("/(?=.{10})(?=.*[A-Z])(?=.*[a-z])(?=.*[^a-zA-Z\d])(?=.*\d)/",$pwd))
		{
			$pwdErr="Password must contain atleast a Uppercase,lowercase,special Character,and one digit";
		}


    }

	if (empty($_POST["country"]))
    {$countryErr = "Country is required";}
  else
    {$country = test_input($_POST["country"]);}

   if (empty($_POST["zipcode"]))
    {$zipcodeErr = "zipcode is required";}
  else
    {
    	$zipcode = test_input($_POST["$zipcode"]);
    	if (!preg_match("/(?=.{6})/",$pwd))
		{
			$zipcodeErr="Must be 6 didgits only";
		}

	}

	 if (empty($_POST["gender"]))
    {$genderErr = "Gender is required";}
  else
    {$gender = test_input($_POST["gender"]);}

	if ($_FILES['img']['size']==0)
    {$imgErr = "Image is required";}
  else
    {}
 
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<html>
<head>
<title>Registration Form</title>
</head>
<body>






<h4 align="center">Registrtion Form</h4>

<form method="post" action="#" enctype="multipart/form-data">
	
	<TABLE align="center">
		<tr>
			<td align=center>
				First Name : 
			</td>
			<td>
			<input type="text" name="firstname">	
			</td>
			<td>
				<span class="error"> * <?php echo $firstnameErr;?></span>
			</td>

		</tr>

		<tr>
			<td align=center>
				Last Name :
			</td>
			<td>
			<input type="text" name="lastname">	
			</td>
			<td>
				<span class="error"> * <?php echo $lastnameErr;?></span>
			</td>

		</tr>

		<tr>
			<td align=center>
				Email Id :
			</td>
			<td>
			<input type="text" name="email">	
			</td>
			<td>
				<span class="error"> * <?php echo $emailErr;?></span>
			</td>

		</tr>

		<tr>
			<td align=center>
				Password :
			</td>
			<td>
			<input type="password" name="pwd">	
			</td>
			<td>
				<span class="error"> * <?php echo $pwdErr;?></span>
			</td>

		</tr>

		<tr>
			<td align=center>
				 Country:
			</td>
			<td>
			<select name="country">
			<option >Select</option>
  			<option >India</option>
  			<option >USA</option>
  			<option >Shrilanka</option>
  			<option >Africa</option>
			</select>
			</td>
			<td>
				<span class="error"> * <?php echo $countryErr;?></span>
			</td>

		</tr>

		<tr>
			<td align=center>
				 Zip Code:
			</td>
			<td>
			<input type="text" name="zipcode">	
			</td>
			<td>
				<span class="error"> * <?php echo $zipcodeErr;?></span>
			</td>

		</tr>

		<tr>
			<td align=center>
				 Gender:
			</td>
			<td>
			<input type="radio" name="gender">	Male <input type="radio" name="gender"> Female
			</td>
			<td>
				<span class="error"> * <?php echo $genderErr;?></span>
			</td>

		</tr>

		<tr>
			<td align=center>
				 Upload Profile Image:
			</td>
			<td>
			<input type="file" name="img" id="img">	
			</td>
			<td>
				<span class="error"> * <?php echo $imgErr;?></span>
			</td>


		</tr>

		<tr>
			<td align=center>
				
			</td>
			<td>
				<input type="submit" value="Submit Form">
			</td>

		</tr>


	</TABLE>



</form>
</body>
</html>
