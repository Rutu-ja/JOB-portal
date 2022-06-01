<?php 
include 'header.php';
include 'config.php';
if (!isset($_SESSION['email'])) {
  header("location:login.php");
  }
?>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate name</th>
      <th scope="col">Position</th>
      <th scope="col">Year passout</th>
      <th scope="col">resume</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT name,apply,year from candidates";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
    <tr>
      <td>'.++$i.'</td>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['apply'].'</td>
      <td>'.$rows['year'].'</td>
      <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
    </tr>';
      }
    }
    else{
      echo"";
    }
    ?>
  </tbody>
</table>
</div>