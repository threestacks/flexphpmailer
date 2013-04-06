<?php
	/* Author:Anirudh Varma
	* This project is an opensource library available on GitHub
	* Free to use and contribute
	*/
	$jsonString= $_POST['datastring'];
	$mainArray=explode(";", $jsonString); //separate various label and their values
	$num=count($mainArray);
	$nameArray=array();
	$nameArray2=array();
	$contentArray=array();
	for($i=0;$i<=$num;$i++){
		$nameArray[$i]=explode(",", $mainArray[$i]); // separate label and it's respective value creates MultiDimensional Array		
	}
	
	for($k=0;$k<=count($nameArray);$k++){
		$nameArray2[$k]=$nameArray[$k][0];
		$contentArray[$k]=$nameArray[$k][1];
		//echo($contentArray[$k] . "\n");
	}

	//mail function starts here
	$body;
	
	for($m=0;$m<count($nameArray2);$m++){
		$body=$body . " " . $nameArray2[$m] . " " . $contentArray[$m] . "\n";//create body
	}
	mail('mail@gee-mail.com', 'subjectir' , $body); //send mail
	echo('success'); 
?>
