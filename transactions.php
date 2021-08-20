<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
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
     > Transactions
    </a>
    <div class="column">
    <a href="index.html"><button class="btn btn-success ms-auto" type="submit">Home</button></a>
    <a href="history.php"><button class="btn btn-primary ms-auto" type="submit">Transaction History</button></div></a>
    
  </div>
</nav>
<!-- form -->

<div class="row" style="margin-left:10%">
<form  method="POST" action="history.php" class="row g-3 needs-validation" novalidate>
  <div class="col-md-5">
    <label for="validationCustom01" class="form-label"> Name</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your name" required name="sender">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom01" class="form-label"> Email</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your email address" required name="semail"/>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom03" class="form-label">Amount</label>
    <input type="number" class="form-control" id="validationCustom03" placeholder="Enter amount" required name="amount">
    <div class="invalid-feedback">
     Enter proper amount
    </div>
  </div>
  <div class="col-md-5">
   <label for="validationCustom04" class="form-label">Reciever</label>
    <select class="form-select" id="validationCustom04"  required name="reciever">
    <?php 
     $sql="Select name from customers";
     $result= $conn->query($sql);
     echo"<option selected disabled value=''>".'Select Reciever'."</option>";
    while($row = $result->fetch_assoc()) {
     
      echo "<option>".$row["name"]."</option>";
    }
     
      ?>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required/>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Commit Transaction</button>
  </div>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script></body>
</html>