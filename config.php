<?php
session_start(); 

$server='localhost';
$username='root';
$password='';
$database='job';
$port_no = 3307;
$jobSuccess = '';

$conn= mysqli_connect($server,$username,$password,$database,$port_no);

if($conn->connect_error){
    die("Connection failed: $conn->connect_error");
}
echo"";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone_no'];
  $password=$_POST['password'];

  $sql = "INSERT INTO `user`(name, email, password,phone_no) VALUES ('$name','$email','$password','$number')";
  // echo $sl;die;
  if(mysqli_query($conn, $sql)){
      echo "Records inserted successfully";
  }
  else{
      echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
  }
}

    if(isset($_POST['login'])){
        // echo "yes";die;
        $email=$_POST['email'];
        $password=$_POST['password'];
        $error = "";

        $query="SELECT * FROM user WHERE email='$email' AND password= '$password' ";
        // echo $query;die;
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email'] = $email;

            header("location:dash.php");
        }
        else{
            $error='emailid or password id invalid';
        }

        echo $error;
    }

    if(isset($_POST['job'])){
        $cname=$_POST['cname'];
        $pos=$_POST['pos'];
        $jdesc=$_POST['jdesc'];
        $skills=$_POST['skills'];
        $ctc=$_POST['CTC'];

        $sql="INSERT INTO `jobs`( cname , pos , jdesc, skills, CTC) VALUES ('$cname','$pos','$jdesc','$skills','$ctc')";
        // echo $sql;die;
        if(mysqli_query($conn,$sql)){ 
            // echo '
            //         <div class="alert alert-success" role="alert">
            //         New JOB Posted
            //         </div>
            //     ';
            // echo"New JOB Posted";
            $jobSuccess = true;

        }
        else{
            echo "Fails to post the job $sql." . mysqli_error($conn);     
          }
    }
    // mysqli_close($conn);

    if(isset($_POST['sub']))
    {
        $name=$_POST['name'];
        $qual=$_POST['qual'];
        $apply=$_POST['apply'];
        $year=$_POST['year'];

        $sql=" INSERT INTO `candidates`(name, apply, qual, year) VALUES ('$name','$qual','$apply','$year')";
        // var_dump($sql);
        // die();
        // echo $sql;die;
        mysqli_query($conn,$sql);
    }
?>