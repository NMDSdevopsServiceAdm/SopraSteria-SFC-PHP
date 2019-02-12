  


<?php include 'header.php'; ?>

<div id="app-main" class="container-fluid p-0">
  <main class="container" id="main-content" role="main">
    
    
<div class="main-page-container col-12">

<!-- PHP starts -->
<?php 

  if (isset($_POST['submit'])) {

    $ok = true;

    if (!isset($_POST['usernameInput']) ||  $_POST['usernameInput'] === '') {
      $ok = false;
    }
    if (!isset($_POST['passwordInput']) ||  $_POST['passwordInput'] === '') {
      $ok = false;
    }

    if ($ok) {
    // Process form
    printf('Username = %s<br />
    Password = %s', 
      $_POST['usernameInput'], 
      $_POST['passwordInput']);
    }
  }

  // $username = $_POST["usernameInput"];
  // $password = $_POST["passwordInput"];

  // $jsonData = array(
  //   'username' => '$username',
  //   'password' => '$passwordInput'
  // );


  // $jsonDataEncoded = json_encode($jsonData);
  // echo $jsonDataEncoded;
?>

<form method="post" action="">

  <h1 class="h1">Sign in</h1>

  <app-messages></app-messages>

  <div class="form-group mb-5">
    <div class="field-group mb-5">
      <label for="username" class="d-block">Username</label>
      <input type="text"
             placeholder=""
             id="usernameInput"
             name="usernameInput"
             class="form-control col-12 col-lg-6" />
    </div>
    <div class="field-group">
      <label for="password" class="d-block">Password</label>
      <input type="password"
             placeholder=""
             id="passwordInput"
             name="passwordInput"
             class="form-control col-12 col-lg-6" />
    </div>
  </div>

  <div class="btn-container">
    <input type="submit" name="submit" value="Sign In" class="btn btn-primary" />
  </div>

</form>

<ul class="login-nav-list">
  <li><a routerLink="">Forgot your password?</a></li>
  <li><a routerLink="/registered-question" title="Create an account">Create an account</a></li>
</ul>

</div>


  </main>
</div>

<?php include 'footer.php'; ?>








