<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="website for calculating SA and Volume of a cylinder">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>My PHP website calculating the Surface Area and Volume of a cylinder</title>
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-green.min.css" />
    <!-- CSS file link -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- Author Header -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout-title">
          <span class="mdl-layout-title">Coded by Van Nguyen</span>
        </div>
      </header>
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
        $lateralSegment = 2 * pi() * $radius * $height; //calculates Lateral Segment
        $surface_area = $lateralSegment + $bases; //calculates Surface Area
                                   
        // Number formatting (Rounds each value to second decimal point)
        $volume = number_format($volume, 2);  
        $surface_area = number_format($surface_area, 2);   
                              
        // Outputs calculations
				echo "<br><br><h3>The volume of this cylinder is " . $volume . $unit . "³<br> The surface area of this cylinder is " . $surface_area . $unit . "²</h3>";
			}
      echo '<center><img src="./images/cylinder.png" alt="cylinder"></center>';
		?>
    <!-- Radio button -->
		<center>
      <h5>Do you like my website?</h5>
  		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  			<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
  			<span class="mdl-radio__label">Of course!</span>
  		</label>
  		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  			<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
  			<span class="mdl-radio__label">It's the best!</span>
  		</label>
		</center>
    </div>
  </body>
</html>