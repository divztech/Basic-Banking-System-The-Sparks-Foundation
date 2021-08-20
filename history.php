<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="stylesheet2.css" rel="stylesheet">
</head>
<body>
<?php
include 'conn.php';
?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">
    <img src="https://thesparksfoundationsingapore.org/images/logo_small.png" alt="" width="28" height="30" class="d-inline-block align-text-top">
     > History
    </a>
    <div class="column">
    <a href="transactions.php"><button class="btn btn-primary ms-auto" type="submit">Make Transactions</button></div></a>
    
  </div>
</nav>
<?php 
	if(isset($_POST['submit'])){
      if((!empty($_POST['sender']))&&(!empty($_POST['semail']))&&(!empty($_POST['amount']))&&(!empty($_POST['reciever']))){
		  $sender  = $_POST['sender'];
		  $semail = $_POST['semail'];
		  $amount=$_POST['amount'];
		  $reciever=$_POST['reciever'];

		  $query="insert into transactions(sender,semail,amount,reciever) values('$sender','$semail','$amount','$reciever')";
      $update="update customers set balance=balance+$amount where name='$reciever'";
    // echo $query;
		  if(($conn->query($query))&& ($conn->query($update))){
       // echo "new rec added";
      }
      else{
        echo "error".$query."<br>".$conn->error;
        echo "error".$update."<br>".$conn->error;
      }
		
	  }
	  else{
		  echo '<script>
      alert("You did not fill all the details, click on Make Transaction again to complete the process")</script>';
	  }
	}?>
<!-- detail table -->
<table class="table table-hover table-success table-dark table-striped ">
<tr class="table text-warning bg-dark">
<th >SENDER</th>
  <th>SEMAIL</th>
  <th>RECIEVER</th>
  <th>AMOUNT SENT</th>
<th>DATE AND TIME</th>
</tr>
<?php
$sql="Select sender,semail,reciever,amount,timestamps  from transactions";
$result= $conn->query($sql);

  while($row=$result->fetch_assoc())
  {
    echo "<tr><td>".$row["sender"]."</td><td>".$row["semail"]."</td><td>".$row["reciever"]."</td><td>".$row["amount"]."</td><td>".$row["timestamps"]."</td></tr>";
  }
?> 
</table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script></body>
</html>