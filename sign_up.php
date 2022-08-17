<?php include_once('inc/conn.php'); ?>

<?php
    if(isset($_POST['submit'])){

        //Declaring variables and assign empty values
        $firstname="";
        $lastname="";
        $email="";
        $password="";

        $firstname=input_varify($_POST['firstname']);
        $lastname=input_varify($_POST['lastname']);
        $email=input_varify($_POST['email']);
        $password=input_varify($_POST['password']);

        $query = "INSERT INTO tbl_user(Fname,Lname,Email,Pwd,Reg_DT) 
        VALUES('{$firstname}','{$lastname}','{$email}','{$password}', NOW()) ";

        $result = mysqli_query($conn , $query);
        
        if($result){
            echo "User Registration Success!!";
        }
        else{
            echo mysqli_error($conn);
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
                    <h4>Sign Up Form</h4>
                 </div>
                 <div class="card-body" id="card-body" >
                    
                    <form action="sign_up.php" method="POST" autocomplete="off">

                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Your First Name</small>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Your Last Name</small>
                        </div>
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
                         <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                     </form>   
               </div>
            </div>
        </div>
    </div>
    
</body>
</html>