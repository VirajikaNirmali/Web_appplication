<?php 
    session_start();
?>
<?php include_once('inc/conn.php'); ?>

<?php
    if(isset($_POST['submit'])){

        //Declaring variables and assign empty values
        $email="";
        $password="";
        $msg ="";

        $email=input_varify($_POST['email']);
        $password=input_varify($_POST['password']);

        $query2 = "SELECT * FROM tbl_user WHERE email = '{$email}' AND Pwd='{$password}' LIMIT 1";

        $Showresult = mysqli_query($conn, $query2);
        
        if($Showresult){
            if(mysqli_num_rows($Showresult) == 1){
                $User = mysqli_fetch_assoc($Showresult);
                $_SESSION['User_Fname'] = $User['Fname'];
                $_SESSION['User_Lname'] = $User['Lname'];
                header("Location:Home.php");
            }
            else{
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> Please check your Email or Password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                } 
            }
    }
      
    

    //inbuilt function 
    function input_varify($data){
        //remove empty space from user input
        $data=trim($data);

        //remove backslash from user input
        $data=stripcslashes($data);

        //convert special charcters to html entities
        $data=htmlspecialchars($data);

        return $data;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="Plugin/bootstrap.min.css">
    <script src ="plugin/jquery.min.js"></script>
    <script src ="plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sign_up.css">
    <title>web application</title>
</head>
<body>
    <?php  include_once("inc/nav.php")  ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card mt-4">
                 <div class="card-header" id="card-header">
                    <h4>Sign In Form</h4>
                 </div>
                 <div class="card-body" id="card-body" >
                    
                    <form action="sign_in.php" method="POST" autocomplete="off">

                    <?php  if(!empty($msg)){echo $msg;}  ?>

                        <div class="form-group">
                  
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Your Email address</small>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Your own Password</small>
                        </div>
                      </div>
                         <div class="card-footer" id="card-footer">
                         <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                        </div>
                     </form>   
               </div>
            </div>
        </div>
    </div>
    
</body>
</html>