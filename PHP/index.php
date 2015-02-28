<?php

	echo "This is PHP!";
	echo "<br />";

	$test = "This is a variable";
	$test2 = "This is another variable";
	echo $test.$test2;
	echo "<br />";

	$name = "Kristie";
	echo "My name is $name";
	echo "<br /><br />";

	$myArray = array("pizza", "chocolate", "coffee");
	print_r($myArray);
	echo "<br />";

	echo $myArray[1];
	echo "<br /><br />";

	$anotherArray[0] = "pizza";
	$anotherArray[1] = "yogurt";
	print_r($anotherArray);
	echo "<br /><br />";

	$thirdArray = array
	(
		"France" => "French",
		"USA" => "English",
		"Germany" => "German"
	);
	print_r($thirdArray);
	echo "<br /><br />";

	$anotherArray[] = "salad";
	print_r($anotherArray);
	echo "<br /><br />";

	unset($thirdArray["Germany"]);
	print_r($thirdArray);
	echo "<br /><br />";


	for ($i = 1; $i < 10; $i++)
	{ 
		echo $i."<br />";
	}
	echo "<br />";

	for ($i = 500; $i >= 100; $i = $i - 5)
	{ 
		echo $i." ";
	}
	echo "<br /><br />";


	$array = array("cat", "dog", "turtle", "kangaroo");

	/* foreach loop to loop through array */
	foreach ($array as $key => $value)
	{
		echo "Key: $key Value: $value <br />";
	}
	echo "<br /><br />";


	/* if/else test */

	$number = 1;
	$number2 = 2;
	$number3 = 2;

	if ($number == $number2)
	{
		echo "True";
	}
	else
	{
		echo "False";
	}
	echo "<br />";

		if ($number2 == $number3)
	{
		echo "True";
	}
	else
	{
		echo "False";
	}
	echo "<br />";

	if ($number == $number2 AND $number2 == $number3)
	{
		echo "True";
	}
	else
	{
		echo "False";
	}
	echo "<br />";

 ?>