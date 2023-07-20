<?php
	$title = "User SignIn";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="user_verify.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email" name="username">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div style="position:fixed; bottom:400px">
<?php
  

    // require_once($_SERVER['DOCUMENT_ROOT']."/bookland/functions/database_functions.php");
    // $conn = db_connect();
    // if($_SERVER['REQUEST_METHOD'] =="POST"){
    //     $email = $_POST['username'];
    //     $password = $_POST['password'];
    //     if($email =="" || $password == ""){
    //         die("Bitch you think I'm stupid");

    //     }
    //     $ans = login($conn,$email,$password);
    //     if($ans==1){
    //         session_start();
    //     $_SESSION['email'] = $email;
    //     header("Location:".$_SERVER['HTTP_REFERER']);
    //     }
    //     else
    //     {
    //         echo '<p style="color:red"> Incorrect password or username. </p>';
    //     }  
        
        
    // }


    $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signin=empty")==true){
        echo '<P style="color:red">You did not fill in all the fields.</P>';
        exit();
    }
    if(strpos($fullurl,"signin=invalidusername")==true){
        echo '<P style="color:red">Username or password does not match.</P>';
        exit();
    }
    if(strpos($fullurl,"signin=invalidpassword")==true){
        echo '<P style="color:red">Password is not correct.</P>';
        exit();
    }

 
?>
</div>
<?php
	require_once "./template/footer.php";
?>