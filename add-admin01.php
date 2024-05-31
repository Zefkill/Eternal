<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Construction</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>
<header>
		<h1>Welkom bij de Bread Company</h1>
		<!-- hieronder wordt het menu opgehaald. -->
		<?php
			session_start(); 
			include "nav.php";
		?>
	</header>

 	<main>
     <form class="flexverticalcenter" action="crud-admin.php" method="post"> 
        <label for="email">email</label>
        <input type="email" id="email" name="email" >
        <br>
        <input type="submit" name= "add-admin01" value="Toevoegen" >
    </form>
    </main>
    
</body>
</html>