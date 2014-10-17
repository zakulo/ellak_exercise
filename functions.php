<?php 
 $categories=$_POST['Genres'];
 $keyword=$_POST['keyword'];

 $movies = array(
	"comedy" => array("The Hangover","Knocked Up","Due Date"),
	"drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),
	"horror" => array("Halloween","The Conjuring","The Shining")
	);
		
function return_genre(){
		$genre=array();
		global $movies;
		foreach($movies as $key => $value){ 
    	$genre[]=$key;
		}
		return $genre;
	}
	
	if(isset($_POST['Genres'])){ 
  
	echo "<html> <body> <h2>The Films with the keyword ".$keyword." are:</h2> <ol>";

	
	 for ($i=0; $i<=sizeof($movies[$categories]); $i++) {
		$dt = $movies[$categories][$i];
		 $comp = strpos($dt, $keyword);
		    if ($comp !== false) {
			echo "<li>".$dt."</li>";
			}
		

		
		}
		echo "</ol></body></html>";
		
		}
	
	
	



?>
