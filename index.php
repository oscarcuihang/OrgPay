<!DOCTYPE html>

<?php 
    if(!session_start())
        die("Error: fail to start session");
    $conn = mysql_connect("localhost", "test", "");
    mysql_select_db("orgpay", $conn);
    mysql_set_charset('utf8',$conn);

?>

<html>
<head>
<title>OrgPay</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<?php
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM user WHERE user_email = '$email'";
    $result = mysql_query($query);
    $rows = mysql_num_rows($result);
    if ($rows == 0) {
        echo "string";  //  user not exist
    }
    else {
        $row = mysql_fetch_assoc($result);
        //print_r($row);
        $salt = $row["user_salt"];
        $user_hash = md5($salt. $pass);
        $hashpass = $row["user_hashpass"];
    }
    if($hashpass == $user_hash){
        $_SESSION["email"] = $row["user_email"];
        $_SESSION["lname"] = $row["user_lname"];
        $_SESSION["fname"] = $row["user_fname"];
        $_SESSION["id"] = $row["id"];
        $user_id = $row["id"];
        $ip = $_SERVER["REMOTE_ADDR"];
       // mysql_query("INSERT INTO userLog VALUES(DEFAULT, $user_id, '$ip', DEFAULT, 'log in')");
        //  log in successfully
    }   

}
else {
        echo "1111";

}

if(isset($_SESSION["email"])){                



}
?>
<body>
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-7 col-sm-9">

  <h4 style="border-bottom: 1px solid #c5c5c5;">
    <i class="glyphicon glyphicon-user">
    </i>
    OrgPay Account Access
  </h4>
  <div style="padding: 20px;" id="form-olvidado">
          <form accept-charset="UTF-8" role="form" id="login-form" method="post" name="1234" action="">
            <h4 class="">
              Signin!
            </h4>
              <fieldset>
                <div class="form-group input-group">
                  <span class="input-group-addon">
                    @
                  </span>
                  <input class="form-control" placeholder="Email" name="email" type="email" required="" autofocus="">
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-lock">
                    </i>
                  </span>
                  <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" name="login" value="sumbit">
                    Login
                  </button>
                  <p class="help-block">
                    <a class="pull-left text-muted" href="#" id="olvidado2"><small>Signup!</small></a>
                  </p>
                </div>
              </fieldset>
            </form>
  </div>
<!--
  <div style="display: none;" id="form-olvidado1">
    <h4 class="">
      Forgot your password?
    </h4>
                <form accept-charset="UTF-8" role="form" id="login-recordar" method="post" name="">
                  <fieldset>
                    <span class="help-block">
                      Email address you use to log in to your account
                      <br>
                      We'll send you an email with instructions to choose a new password.
                    </span>
                    <div class="form-group input-group">
                      <span class="input-group-addon">
                        @
                      </span>
                      <input class="form-control" placeholder="Email" name="email" type="email" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                      Continue
                    </button>
                    <p class="help-block">
                      <a class="text-muted" href="#" id="acceso1"><small>Account Access</small></a>

                    </p>
                  </fieldset>
                </form>
  </div>-->
<div style="display: none;" id="form-olvidado2">
    <h4 class="">
      Welcome!
    </h4>
            <form accept-charset="UTF-8" role="form" id="login-recordar" method="post" name="register">
              <fieldset>
                <span class="help-block">
                  Signup page
                  <br>
                  Please sign up and start!
                </span>
                <div class="form-group input-group">
                  <span class="input-group-addon">
                    @
                  </span>
                  <input class="form-control" placeholder="Email" name="email" type="email" required="">
                </div>

                <div class="form-group input-group">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-lock">
                    </i>
                  </span>
                  <input class="form-control" placeholder="Password" name="password_new" type="password" required="">
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-lock">
                    </i>
                  </span>
                  <input class="form-control" placeholder="Repeat Password" name="password_new_2" type="password" required="">
                </div>

                <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                  Continue
                </button>
                <p class="help-block">
                  <a class="text-muted" href="#" id="acceso2"><small>Account Access</small></a>
                </p>
              </fieldset>
            </form>
  </div>
</div>
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
  $('#olvidado').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado1').toggle('500');
  });
  $('#olvidado').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
  $('#acceso1').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
  $('#acceso1').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado1').toggle('500');
  });
});

$(document).ready(function() {
  $('#olvidado2').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado2').toggle('500');
  });
  $('#olvidado2').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
  $('#acceso2').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
  $('#acceso2').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado2').toggle('500');
  });
});
</script>

</html>

