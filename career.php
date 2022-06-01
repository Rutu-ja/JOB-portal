<?php
include('config.php');
if (!isset($_SESSION['email'])) {
  header("location:login.php");
  }
?>
<!doctype html>
<html>
    <head>
        <title>Career</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .row{
                margin:5px;
                padding:5px;
            }
            /* .row:hover{
                box-shadow: 0px 3px 65px 0px rgba(0, 0,0, 0.5) ;
            } */
            .img-fluid{
              border:0.5px solid black;
                margin:10px;
                padding:10px;
                background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-simple-e-commerce-jobs-cooperation-image_21195.jpg');
                background-position: center;
                background-size: 100%;
                background-repeat: no-repeat;
                height: 70vh;
                width: 100%;
            }
            .img-fluid h1{
                margin-top: 0px;
                color:black;
                font-size: 60px;
                font-family: cosmic,sans-serif;
                font-weight: bolder;
                text-align:center;
                line-height: 100px;
            }
            .img-fluid h4{
                margin-top: 60px;
                color:black;
                font-size: 40px;
                font-family: cosmic,sans-serif;
                text-align:center;
            }
            
h1,p{
  color:#fff;
}
.col-md-4{
      width: 24rem;
      border:0.5px solid black;
      box-shadow:2px 2px 2px 1px grey;
      margin:3px;
      padding:1px;
    }
        </style>
    </head>
    <body>
        <!-- <div class="conatiner-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div> -->
<div class="img-fluid">
<H1>JOB PORTAL</H1>
<h4>Job that matches your profile</h4>
</div>
<!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">PHP Developer</h5>
      <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;">Company Name</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

      <p>
          <b>Skills Required: </b> qwertsjjdn
      </p>
      <p>
        <b>Job Location: </b> qwertsjjdn
    </p>
    <p>
        <b>CTC: </b> qwertsjjdn
    </p>
    </div>
  </div> -->
  <div class="row">
      <?php
      $sql="SELECT cname,pos,jdesc,CTC,skills from jobs";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows>0)
      {
        while($rows=$result->fetch_assoc())
        {
          echo'
          <div class="col-md-4">
            <div class="jobs" style="width: 18rem;">
            <h3 style = "text-align: center;">'.$rows['pos'].'</h3>
            <h4 style = "text-align: center;">'.$rows['cname'].'</h4>
            <p style = "color:black; text-align: justify;">'.$rows['jdesc'].'</p>
            <p style = "color:black;"><b>SKILLS REQUIRED</b>'.$rows['skills'].'</p>
            <p style = "color:black;"><B>CTC-</B>'.$rows['CTC'].'</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
              Apply Job
              </button>
            </div>
          </div>';
        }
      }
      ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">NAME:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for:</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout:</label>
            <input type="text" class="form-control" name="year">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="sub" class="btn btn-primary">Apply</button> </form>
      </div>
    </div>
  </div>
</div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    </body>
</html>