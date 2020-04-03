<!DOCTYPE html>
<html>
<head>
	<title>BMI/Retirment Calculator</title>
</head>
<body>
	<h1>Welcome to the retirement Calculator!</h1>
    	<h3> Try out the<a href="bmicalculator.php"> BMI calculator</a>.</h3>
    	<p>Please enter your current age, current salary, and desired savings goals.</p>
    
    	<form action="retirementcalculator.php" method="POST">
		<label for='currage'>Current Age:</label>
        	<input type ="number" name="age" id="age" value="<?php echo $currage; ?>"min= "18" max = "100"><br><br>

		<label for='currsalary'>Current Salary:</label>
        	<input type ="number" name="currsalary" id="currsalary" value="<?php echo $currsalary; ?>"min= "10000" max = "15000000"><br><br>

	    	<label for='savingsgoal'>Desired Savings Goal:</label> 
        	<input type ="number" name="savingsgoal" id="savingsgoal" value="<?php echo $savingsgoal; ?>"min= "100000" max = "20000000"><br ><br>

	    	<input type='submit' value="Submit" name="Submit">
	    	<input type= "reset"><br><br>
	</form>


	<?php
    
    	if (isset($_POST["Submit"]))
    	{
    		$currage = $_POST['age'];
        	$currsalary = $_POST['currsalary'];
        	$savingsgoal = $_POST['savingsgoal'];
        	$dealth = 100;
        
        	if ($currage and $currsalary and $savingsgoal)
        	{
        		$annualsav = $currsalary* 0.35;
            		$numsavingyears = ceil($savingsgoal / $annualsav);
            		$agereach = $numsavingyears + $currage;
            
            		if($agereach > 100)
            		{
            			echo "You are not going to reach your savings goal by the time you die.<br><br>;
            		}
            		else
            		{
            			echo "You will meet your savings goal by age $agereach!<br><br>;
            		}
		}
       		else
       		{
       			echo "please fill in all fields! <br>;
       
       		}
       
    	}
	?>
	
</body>
</html>
   
