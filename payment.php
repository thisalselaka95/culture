<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","cultureframework");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['ok']))
{
	$ip=$_POST['ip'];
	$date=$_POST['date'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$tenure=$_POST['tenure'];
	//-------------------------------------
	$caring_past_1=$_POST['caring_past_1'];
	$caring_present_1=$_POST['caring_present_1'];
	$caring_future_1=$_POST['caring_future_1'];
	$caring_past_2=$_POST['caring_past_2'];
	$caring_present_2=$_POST['caring_present_2'];
	$caring_future_2=$_POST['caring_future_2'];
	$caring_past_3=$_POST['caring_past_3'];
	$caring_present_3=$_POST['caring_present_3'];
	$caring_future_3=$_POST['caring_future_3'];
	$caring_past_4=$_POST['caring_past_4'];
	$caring_present_4=$_POST['caring_present_4'];
	$caring_future_4=$_POST['caring_future_4'];
	//-------------------------------------
	$purpose_past_1=$_POST['purpose_past_1'];
	$purpose_present_1=$_POST['purpose_present_1'];
	$purpose_future_1=$_POST['purpose_future_1'];
	$purpose_past_2=$_POST['purpose_past_2'];
	$purpose_present_2=$_POST['purpose_present_2'];
	$purpose_future_2=$_POST['purpose_future_2'];
	$purpose_past_3=$_POST['purpose_past_3'];
	$purpose_present_3=$_POST['purpose_present_3'];
	$purpose_future_3=$_POST['purpose_future_3'];
	$purpose_past_4=$_POST['purpose_past_4'];
	$purpose_present_4=$_POST['purpose_present_4'];
	$purpose_future_4=$_POST['purpose_future_4'];
	//-------------------------------------
	$learning_past_1=$_POST['learning_past_1'];
	$learning_present_1=$_POST['learning_present_1'];
	$learning_future_1=$_POST['learning_future_1'];
	$learning_past_2=$_POST['learning_past_2'];
	$learning_present_2=$_POST['learning_present_2'];
	$learning_future_2=$_POST['learning_future_2'];
	$learning_past_3=$_POST['learning_past_3'];
	$learning_present_3=$_POST['learning_present_3'];
	$learning_future_3=$_POST['learning_future_3'];
	$learning_past_4=$_POST['learning_past_4'];
	$learning_present_4=$_POST['learning_present_4'];
	$learning_future_4=$_POST['learning_future_4'];
	//-------------------------------------
	$enjoyment_past_1=$_POST['enjoyment_past_1'];
	$enjoyment_present_1=$_POST['enjoyment_present_1'];
	$enjoyment_future_1=$_POST['enjoyment_future_1'];
	$enjoyment_past_2=$_POST['enjoyment_past_2'];
	$enjoyment_present_2=$_POST['enjoyment_present_2'];
	$enjoyment_future_2=$_POST['enjoyment_future_2'];
	$enjoyment_past_3=$_POST['enjoyment_past_3'];
	$enjoyment_present_3=$_POST['enjoyment_present_3'];
	$enjoyment_future_3=$_POST['enjoyment_future_3'];
	$enjoyment_past_4=$_POST['enjoyment_past_4'];
	$enjoyment_present_4=$_POST['enjoyment_present_4'];
	$enjoyment_future_4=$_POST['enjoyment_future_4'];
	//-------------------------------------
	$results_past_1=$_POST['results_past_1'];
	$results_present_1=$_POST['results_present_1'];
	$results_future_1=$_POST['results_future_1'];
	$results_past_2=$_POST['results_past_2'];
	$results_present_2=$_POST['results_present_2'];
	$results_future_2=$_POST['results_future_2'];
	$results_past_3=$_POST['results_past_3'];
	$results_present_3=$_POST['results_present_3'];
	$results_future_3=$_POST['results_future_3'];
	$results_past_4=$_POST['results_past_4'];
	$results_present_4=$_POST['results_present_4'];
	$results_future_4=$_POST['results_future_4'];
	//-------------------------------------
	$authority_past_1=$_POST['authority_past_1'];
	$authority_present_1=$_POST['authority_present_1'];
	$authority_future_1=$_POST['authority_future_1'];
	$authority_past_2=$_POST['authority_past_2'];
	$authority_present_2=$_POST['authority_present_2'];
	$authority_future_2=$_POST['authority_future_2'];
	$authority_past_3=$_POST['authority_past_3'];
	$authority_present_3=$_POST['authority_present_3'];
	$authority_future_3=$_POST['authority_future_3'];
	$authority_past_4=$_POST['authority_past_4'];
	$authority_present_4=$_POST['authority_present_4'];
	$authority_future_4=$_POST['authority_future_4'];
	//-------------------------------------
	$safety_past_1=$_POST['safety_past_1'];
	$safety_present_1=$_POST['safety_present_1'];
	$safety_future_1=$_POST['safety_future_1'];
	$safety_past_2=$_POST['safety_past_2'];
	$safety_present_2=$_POST['safety_present_2'];
	$safety_future_2=$_POST['safety_future_2'];
	$safety_past_3=$_POST['safety_past_3'];
	$safety_present_3=$_POST['safety_present_3'];
	$safety_future_3=$_POST['safety_future_3'];
	$safety_past_4=$_POST['safety_past_4'];
	$safety_present_4=$_POST['safety_present_4'];
	$safety_future_4=$_POST['safety_future_4'];
	//-------------------------------------
	$order_past_1=$_POST['order_past_1'];
	$order_present_1=$_POST['order_present_1'];
	$order_future_1=$_POST['order_future_1'];
	$order_past_2=$_POST['order_past_2'];
	$order_present_2=$_POST['order_present_2'];
	$order_future_2=$_POST['order_future_2'];
	$order_past_3=$_POST['order_past_3'];
	$order_present_3=$_POST['order_present_3'];
	$order_future_3=$_POST['order_future_3'];
	$order_past_4=$_POST['order_past_4'];
	$order_present_4=$_POST['order_present_4'];
	$order_future_4=$_POST['order_future_4'];
	//-------------------------------------

	//insert query

		$insert="INSERT INTO `generalinfo`(`ip`,`datez`,`gender`,`age`,`tenure`) VALUES('$ip','$date','$gender','$age','$tenure')";
		$query=mysqli_query($con,$insert);
	// if($query==1)
	// {
		$ins="INSERT INTO `caring`(`caring_past_1`,`caring_present_1`,`caring_future_1`,`caring_past_2`,
		`caring_present_2`,`caring_future_2`,`caring_past_3`,`caring_present_3`,`caring_future_3`,`caring_past_4`,`caring_present_4`,`caring_future_4`) VALUES('$caring_past_1','$caring_present_1','$caring_future_1','$caring_past_2','$caring_present_2','$caring_future_2','$caring_past_3','$caring_present_3','$caring_future_3','$caring_past_4','$caring_present_4','$caring_future_4')";
		$quy=mysqli_query($con,$ins);
	// 	if($quy==1)
	// 	{
		$in="INSERT INTO `purpose`(`purpose_past_1`,`purpose_present_1`,`purpose_future_1`,`purpose_past_2`,`purpose_present_2`,`purpose_future_2`,`purpose_past_3`,`purpose_present_3`,`purpose_future_3`,`purpose_past_4`,`purpose_present_4`,`purpose_future_4`) VALUES('$purpose_past_1','$purpose_present_1','$purpose_future_1','$purpose_past_2','$purpose_present_2','$purpose_future_2','$purpose_past_3','$purpose_present_3','$purpose_future_3','$purpose_past_4','$purpose_present_4','$purpose_future_4')";
		$quye=mysqli_query($con,$in);

		$inz="INSERT INTO `learning`(`learning_past_1`,`learning_present_1`,`learning_future_1`,`learning_past_2`,`learning_present_2`,`learning_future_2`,`learning_past_3`,`learning_present_3`,`learning_future_3`,`learning_past_4`,`learning_present_4`,`learning_future_4`) VALUES('$learning_past_1','$learning_present_1','$learning_future_1','$learning_past_2','$learning_present_2','$learning_future_2','$learning_past_3','$learning_present_3','$learning_future_3','$learning_past_4','$learning_present_4','$learning_future_4')";
		$quyez=mysqli_query($con,$inz);

		$inse="INSERT INTO `enjoyment`(`enjoyment_past_1`,`enjoyment_present_1`,`enjoyment_future_1`,`enjoyment_past_2`,
		`enjoyment_present_2`,`enjoyment_future_2`,`enjoyment_past_3`,`enjoyment_present_3`,`enjoyment_future_3`,`enjoyment_past_4`,`enjoyment_present_4`,`enjoyment_future_4`) VALUES('$enjoyment_past_1','$enjoyment_present_1','$enjoyment_future_1','$enjoyment_past_2','$enjoyment_present_2','$enjoyment_future_2','$enjoyment_past_3','$enjoyment_present_3','$enjoyment_future_3','$enjoyment_past_4','$enjoyment_present_4','$enjoyment_future_4')";
		$quyr=mysqli_query($con,$inse);

		$inst="INSERT INTO `results`(`results_past_1`,`results_present_1`,`results_future_1`,`results_past_2`,
		`results_present_2`,`results_future_2`,`results_past_3`,`results_present_3`,`results_future_3`,`results_past_4`,`results_present_4`,`results_future_4`) VALUES('$results_past_1','$results_present_1','$results_future_1','$results_past_2','$results_present_2','$results_future_2','$results_past_3','$results_present_3','$results_future_3','$results_past_4','$results_present_4','$results_future_4')";
		$qury=mysqli_query($con,$inst);

		$insr="INSERT INTO `authority`(`authority_past_1`,`authority_present_1`,`authority_future_1`,`authority_past_2`,
		`authority_present_2`,`authority_future_2`,`authority_past_3`,`authority_present_3`,`authority_future_3`,`authority_past_4`,`authority_present_4`,`authority_future_4`) VALUES('$authority_past_1','$authority_present_1','$authority_future_1','$authority_past_2','$authority_present_2','$authority_future_2','$authority_past_3','$authority_present_3','$authority_future_3','$authority_past_4','$authority_present_4','$authority_future_4')";
		$quey=mysqli_query($con,$insr);

		$inser="INSERT INTO `safety`(`safety_past_1`,`safety_present_1`,`safety_future_1`,`safety_past_2`,
		`safety_present_2`,`safety_future_2`,`safety_past_3`,`safety_present_3`,`safety_future_3`,`safety_past_4`,`safety_present_4`,`safety_future_4`) VALUES('$safety_past_1','$safety_present_1','$safety_future_1','$safety_past_2','$safety_present_2','$safety_future_2','$safety_past_3','$safety_present_3','$safety_future_3','$safety_past_4','$safety_present_4','$safety_future_4')";
		$quer=mysqli_query($con,$inser);

		$insi="INSERT INTO `order`(`order_past_1`,`order_present_1`,`order_future_1`,`order_past_2`,
		`order_present_2`,`order_future_2`,`order_past_3`,`order_present_3`,`order_future_3`,`order_past_4`,`order_present_4`,`order_future_4`) VALUES('$order_past_1','$order_present_1','$order_future_1','$order_past_2','$order_present_2','$order_future_2','$order_past_3','$order_present_3','$order_future_3','$order_past_4','$order_present_4','$order_future_4')";
		$quyi=mysqli_query($con,$insi);
	// 		if($quye==1)
	// 		{
	// 			echo "Successful";
	// 		}
	// 	}
	// }
	// else
	// {
	// 	echo "Fail";
	// }
}



?>