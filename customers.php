<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Detail</title>
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
     > Select and view customers
    </a>
    <div class="column">
    <a href="transactions.php"><button class="btn btn-success ms-auto" type="submit">Make Transactions</button></a>
    <a href="history.php"><button class="btn btn-primary ms-auto" type="submit">Transaction History</button></div></a>
    
  </div>
</nav>
<!-- detail table -->
<table class="table table-hover table-success table-dark table-striped ">
<tr class="table text-warning bg-dark">
<th>S.No.</th>  
<th>NAME</th>
  <th>EMAIL</th>
  <th>BALANCE</th>
</tr>
<?php
$sql="Select sno,name,email,balance from customers";
$result= $conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc())
  {
    echo "<tr><td>".$row["sno"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["balance"]."</td></tr>";
  }
  echo "</table>";
}
else{
  echo "no result";
}
?> 
</table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script></body>
</html>