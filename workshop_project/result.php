<?php include("header.php"); ?>
<?php
if(isset($_POST['submit'])){
	$heightinfoot = $_POST['height_foot'];
	$heightininch = $_POST['height_inches'];
	
	$weight=$_POST['weight'];
	
	$height_total=$heightinfoot*12+$heightininch;
	
	$heightinmeter=$height_total*0.025;
	$heightinmeter=$heightinmeter*$heightinmeter;
	
	$BMI=$weight/$heightinmeter;
	echo "<h1>Your BMI is $BMI</h1>";
	if($BMI<19){
		echo "<h2>Your BMI is low Try to increase your BMI</h2>";
	}
	else if ($BMI>=19 && $BMI<=25){
		echo "<h2>Your BMI is normal. Keep it up</h2>";
	}
	else{
		echo "<h2> Your BMI is high than usual </h2>";
	}
}
?>

