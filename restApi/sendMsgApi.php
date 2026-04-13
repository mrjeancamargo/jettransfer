<?php
include 'connection.php';

if(isset($_POST['submitBtn'])) {
    
	$senderName = $_POST['senderName'];
	$senderEmail = $_POST['senderEmail'];
	$senderMessage = $_POST['senderMessage'];


    $sql = "INSERT INTO jettransfer.contactUs(id,senderName,senderEmail,senderMessage,dateSent,senderReplied)VALUES(null,'$senderName','$senderEmail','$senderMessage',CURRENT_TIMESTAMP(),'N')";
   
     
   if ($conn->query($sql) === TRUE) {
	   echo '<script type="text/javascript">
				alert("Message successfully")
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