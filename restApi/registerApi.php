<?php
include 'connection.php';

if(isset($_POST['submitBtn'])) {
    
	$memberName = $_POST['memberName'];
	$memberSurname = $_POST['memberSurname'];
	$memberAddress = $_POST['memberAddress'];
	$memberTown = $_POST['memberTown'];
	$memberCounty = $_POST['memberCounty'];
	$memberPostCode = $_POST['memberPostCode'];
	$memberCountry = $_POST['memberCountry'];
	$memberDoculmentType = $_POST['memberDoculmentType'];
	$memberIdNumber = $_POST['memberIdNumber'];
	$memberIdExpiryDate = $_POST['memberIdExpiryDate'];
	$memberIdIssuedBy = $_POST['memberIdIssuedBy'];
	$memberIdIssuePlace = $_POST['memberIdIssuePlace'];
	
	$dob = $_POST['birthday'];
	$dobArray = strtotime($dob);
	
	$memberDayOfBirth = date('d',$dobArray);
	$memberMonthOfBirth = date('m',$dobArray);
	$memberYearOfBirth = date('Y',$dobArray);
	
	
	$memberJobTitle = $_POST['memberJobTitle'];
	$memberNationality = $_POST['memberNationality'];
	$memberMobilePhone1 = $_POST['memberMobilePhone1'];
	$memberMobilePhone2 = $_POST['memberMobilePhone2'];
	$memberStatues = $_POST['memberStatues'];
	$memberMaritalStatues = $_POST['memberMaritalStatues'];
	$memberGender = $_POST['memberGender'];
	$memberSocialMedia = $_POST['memberSocialMedia'];
	$memberEmail = $_POST['memberEmail'];
	$memberPassword = $_POST['memberPassword'];
	$memberSecurityQuestion = $_POST['memberSecurityQuestion'];
	$memberSecurityQuestionAnswer = $_POST['memberSecurityQuestionAnswer'];
	$memberTransactionCount = $_POST['memberTransactionCount'];
	$memberLoginCount = $_POST['memberLoginCount'];
	$memberPreferredPaymentType = $_POST['memberPreferredPaymentType'];
	$memberSecurityId = $_POST['memberSecurityId'];
	$memberNickname = $_POST['memberNickname'];
	$agentId = $_POST['agentId'];
	
	
	
    $sql = "INSERT INTO jettransfer.tblmembers (memberId,memberName,memberSurname,memberAddress,memberTown,memberCounty,memberPostCode,memberCountry,memberDoculmentType,memberIdNumber,memberIdExpiryDate,memberIdIssuedBy,memberIdIssuePlace,memberDayOfBirth,memberMonthOfBirth,memberYearOfBirth,memberJobTitle,memberNationality,memberMobilePhone1,memberMobilePhone2,memberStatues,memberMaritalStatues,memberGender,memberSocialMedia,memberEmail,memberPassword,memberSecurityQuestion,memberSecurityQuestionAnswer,memberTransactionCount,memberLoginCount,memberPreferredPaymentType,memberSecurityId,memberNickname,agentId) VALUES (null,'$memberName','$memberSurname','$memberAddress','$memberTown','$memberCounty','$memberPostCode','$memberCountry','$memberDoculmentType','$memberIdNumber','$memberIdExpiryDate','$memberIdIssuedBy','$memberIdIssuePlace','$memberDayOfBirth','$memberMonthOfBirth','$memberYearOfBirth','$memberJobTitle','$memberNationality','$memberMobilePhone1','$memberMobilePhone2','$memberStatues','$memberMaritalStatues','$memberGender','$memberSocialMedia','$memberEmail','$memberPassword','$memberSecurityQuestion','$memberSecurityQuestionAnswer','0','0','$memberPreferredPaymentType','$memberSecurityId','$memberNickname','0')";
   
     
   if ($conn->query($sql) === TRUE) {
	   echo '<script type="text/javascript">
				alert("User created successfully")
				location.href="https://www.jettransfer.ie";  
			</script>';
   } else {
       echo json_encode(array("Error: " . $sql . "<br>" . $conn->error=>$sql));
   }
   
   $conn->close();
   
}else{
    echo json_encode(array("los" =>$sql));
}

?>