<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>EL.LAK exercise</title>
<link rel="stylesheet" media="screen" href="syles.css" >
<?php include("functions.php");
$genre=return_genre(); ?>

</head>

<body>



<form name="input" class="search-form" action="functions.php" method="POST">

<?php


echo' Pick Category <select name="Genres">'; 
//create list and assign it with the values of the array genre
foreach($genre as  $value){ 
    echo'<option value="'.$value.'" name="'.$value.'">'.$value.'</option>'; 
} 
echo'</select> </li>'; 	
	
?>
 Search: <input type="text" name="keyword">
<input type="submit" value="Find">
</form>




</body>
</html>