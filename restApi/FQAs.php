<?php
include 'connection.php';
const cors = require('cors');
const corsOptions ={
    origin:'http://localhost:27501/BR/certificate.html', 
    credentials:true,            //access-control-allow-credentials:true
    optionSuccessStatus:200
    Access-Control-Allow-Origin: *
}
app.use(cors(corsOptions));

$query = "SELECT question, answer FROM FAQs";
$result = mysqli_query($conn,$query);

if($result){

  echo "<table><tr><th>Question</th><th>Answer</th></tr>";

  $json = array()
  while($row = mysqli_fetch_array($result)){
    $json[]=array(

      echo "<tr><td>".$row["question"]."</td><td>".$row["answer"]."</td></tr>";

        'question' => $row['Perguntas'],
        'answer' => $row['Respostas']
    );
  }

  echo "</table>";

  $jsonstring = json_encode($json);
  echo $jsonstring;
else  
  die('Query Failed',mysqli_error($conn));
}


?>