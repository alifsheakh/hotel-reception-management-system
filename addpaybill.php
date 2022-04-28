<?php

include 'conn.php';

if(isset($_POST['done'])){

  $custid = $_POST['CustomerID'];
  $totalamount = $_POST['TotalAmount'];
  $q = "CALL Add_Pay_bill($custid, $totalamount)";

 if($query = mysqli_query($con, $q)){
  header("Location: http://localhost/hotel_reception_management_system/paybill.html");
  echo "\n Inserted";       
}
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Hotel Reception Management System</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Add Payment </h1>
 </div><br>

 <label> Customer ID: </label>
 <input type="number" name="CustomerID" class="form-control"> <br>

 <label> Total Amount: </label>
 <input type="number" name="TotalAmount" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>