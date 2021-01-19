<?php
   /*
   Plugin Name: Awesomeness Creator
   Plugin URI: http://sakinaa.sgedu.site/aa
   Description: >-After enter your age and weight this plugin give you health advice.
   Version: 1.0
   Author: Sakina
   Author URI: http://sakinaa.sgedu.site/aa
 
   License: GPL2
   */
   add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
	 if(!empty($_POST["submit"])) { 
	 	$name =$_POST['CName'];
	 	$age =$_POST['CAge'];
	 	$weight =$_POST['CWt'];
	 	$cal=$weight/2;
	 	if($age< 5) $msg= "So Cute Baby!!!!!";
	 	else if($age>=5 && $age<=18) $msg= "You need eat healthy food and drink milk daily.do daily exercise atleast one hour.";
	 else if($age>=30 && $age <=60) $msg= "You need calcium. Take it as per doctor's advice. You have to walk for 30 minutes every day and do pranayama.";
	 	else $msg= "Perform regular checkups (once in 6 months). You have to walk for 20 minutes every day and do pranayama.";
	 		
	 	$content .= '<div><h4 style="color:blue;">Hello '. $name.'! <br>You can easily lift '.$cal.'kg. <br>'.$msg.'</h4> </div>';
	 	}
    return $content .='<p style="color:blue;">Thank you for reading!!!!!!</p><div name="maindiv" class="maindiv" id="maindiv" ><form method="Post" action="">Name : <input type="text" placeholder="Enter Your Name" name="CName" class="awsinput" required><br> age : <input type="number" placeholder="Enter Your Age in year" name="CAge" class="awsinput" min="1" max="110" required><br> Weight : <input type="number" placeholder="Enter Your Weight" name="CWt" class="awsinput" step="any" min="3" max="500" required><input type="submit" name ="submit" value="Calculate"></form>  </div>';
}
?>