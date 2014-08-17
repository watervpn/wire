<?php 
if (isset($_POST['username'])) {
  session_start();
  $_SESSION['user_role'] = $_POST['username'];
  
  switch ($_SESSION['user_role']) {
    case 'admin':
      $_GET['dest'] = 'user';
      break;

    case 'user':
      $_GET['dest'] = 'support';
      break;
  }

  if (isset($_GET['dest'])) {
    header("Location: " . $_GET['dest'] . ".php");
  }
  else {
    header("Location: index.php");
  }
  die();
}
?>


<?php include("inc/header.inc"); ?> 


<div class="row">
<h2>Please Sign in</h2>

<form method="post" action=""> 
	<div class="row"> 
		<div class="large-6 columns"> 
			<label>User name<input name="username" type="text" placeholder="username" /> </label> 
			<label>Password<input type="text" placeholder="password" /> </label> 
		</div> 
	</div> 
 

	<div class="row"> 
		<div class="large-12 columns"> 
			<p>Forget Password? <a href="#">Click here</a></p>		
		</div>
	</div> 

  <div class="row">
    <div class="large-12 columns">
      <input class="button" type="submit" value="Log in">
    </div>
  </div>

</form>

</div>



<?php include("inc/footer.inc"); ?>