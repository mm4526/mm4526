<!DOCTYPE html>
<html>
<head>
	<title>BMI/Retirment Calculator</title>
</head>
<body> 
	<h1>Welcome to the retirement Calculator!</h1>
	<h3> Try out the <a href="retirementcalculator.php"> Retirement Calculator</a>.</h3>
	<p>Please enter your current weight and current hieght.</p>
	
	<form action = "bmicalculator.php" method= "POST">
        	<label for='cweight'>Current Weight:</label>
        	<input type = "number" name= "weight" id= "weight" value= "<?php echo $cweight; ?>"min= "0" max = "600"><br><br>

		<label for='cheight'>Current Height:</label>
        	<input type ="number" name="height" id="height" value="<?php echo $cheight; ?>"min="0" max ="100"><br><br>

	    
	    	<input type='submit' value= "Submit" name= "Submit" >
	    	<input type="reset"> <br >< br>
	</form>

	<?php
    
    	if (isset($_POST["Submit"]))
    	{
    		$cweight = $_POST['weight'];
        	$cheight = $_POST['hieght'];
        
        
        if ($cweight and $cheight)
        {
		$weightKilos = $cweight* 0.45;
            	$heightMeters = $cheight* 0.025;
            	$metersSquared = $heightMeters + $heightMeters;
            	$bmi = $weightKilos / $metersSquared
            
            	echo "Your BMI is: $bmi!<br><br>;
       }
       else
       {
       		echo "please fill in all fields! <br>;
       
       }
    }


?>
</body>
</html>
    
    
    
