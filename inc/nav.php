 <style>
#sign_out{
  border:1px solid #f24040;
  color:#f24040;
}
#sign_out:hover{
  border:1px solid #f24040;
  color:#fff;
  background-color:#f24040 ;
}
 </style>
 
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Library Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Librarian</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu">

          <a class="dropdown-item" href="#">Novels</a>
          <a class="dropdown-item" href="#">Love</a>
          <a class="dropdown-item" href="#">Advenctures</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Events</a>
      </li>
    </ul>
    <ul class="navbar-nav">

<?php
if (isset($_SESSION['User_Fname'])){
  echo "
      
      <li class='nav-item'>
      <a id='sign_out' class='nav-link' href='sign_out.php'>Sign out</a>
      </li>
";
}else{
  echo'
      <li class="nav-item">
      <a class="nav-link" href="sign_in.php">Sign In</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="sign_up.php">Sign Up</a>
      </li>
   
  ';
}

?>



      <!-- <li class="nav-item">
        <a class="nav-link" href="sign_in.php">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sign_up.php">Sign Up</a>
      </li> -->
    </ul>
    </div>
</nav>