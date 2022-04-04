<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="website for calculating SA and Volume of a cylinder">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP website calculating the Surface Area and Volume of a cylinder</title>
    <!-- CSS file link -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php 
			echo '<center><h1>Surface Area and Volume Program in PHP (Cylinder)</h1></center><br>';
			echo "<p>This website allows you to calculate the Surface Area and Volume of a cylinder! <br> Enter the radius and height below:</p>";
		?>
		<!-- Text fields and button (User Input)-->
		<form method = "post">
			Radius: <input type="float" name="radius">
			<br><br>   
			Height:<input type="float" name="height">
			<br><br>
      <p>Enter (mm/cm/m/km)</p>
      Unit:<input type="text" name="unit"><br>
			<br><br>
			<input type = "submit" name = "submit" value="Calculate">
		<!-- Calculations for salary and tax (With User Input) -->
		<?php
			if(isset($_POST['submit'])) {	// if submit pressed
        // Variables
        $radius = ($_POST["radius"]); // takes user input 
        $height = ($_POST["height"]); // takes user input
        $unit = ($_POST["unit"]); // takes user input                       
        $volume = pi() * pow($radius, 2) * $height; //calculates volume
        $bases = 2 * pi() * pow($radius, 2); //calculates both bases
        $lateralSegment = 2 * pi() * $radius * $height; //calculates Cylindrical Segment
        $surface_area = $lateralSegment + $bases; //calculates Surface Area
                                   
        // Number formatting (Rounds each value to second decimal point)
        $volume = number_format($volume, 2);  
        $surface_area = number_format($surface_area, 2);   
                              
        // Output
				echo "<br><br><h3>The volume of this cylinder is " . $volume . $unit . "³<br> The surface area of this cylinder is " . $surface_area . $unit . "²</h3>";
			}
		?>
  </body>
</html>