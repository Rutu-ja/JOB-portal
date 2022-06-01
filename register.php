<?php
include('config.php');
?>

<!doctype html>
<html>
    <head>
        <title>register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel ="stylesheet" href="style.css">
    </head>
    
    <body>
      
        <div class="container">
        <form method="POST">
        <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName"name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Contact number</label>
    <input type="number" class="form-control" id="exampleInputNumber"name="phone_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit"  class="btn btn-primary"name="submit">Submit</button>
  <br>
  Already register?<a href="login.php">Login</a>
</form>
        </div>
    </body>
</html>