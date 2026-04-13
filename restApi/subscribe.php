<?php
include 'connection.php';

if(isset($_POST['submitBtn'])) {
    
	$email = $_POST['senderEmail'];
	$emailLang = "PT";

    $sql = "INSERT INTO jettransfer.tblEmailSubscribe(emailId,email,emailLang,emailSignUpDate)VALUES(null,'$email','$emailLang',CURRENT_TIMESTAMP())";
   
     
   if ($conn->query($sql) === TRUE) {
	   echo '<script type="text/javascript">
				alert("New record created successfully")
				setTimeout(function(){location.href="https://www.jettransfer.ie"} , 1000);   
			</script>';
   } else {
       echo json_encode(array("Error: " . $sql . "<br>" . $conn->error=>$sql));
   }
   
   $conn->close();

}

?>