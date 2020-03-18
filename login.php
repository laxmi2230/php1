<!DOCTYPE html>
<html lang="en">
<head>
	<title>login page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="user.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



</head>

<body>
<div class="login-page">
  <h1 align="center">WELCOME</h1>
  <div class="form">
    <form class="login-form" action="validation.php" method="post">
      <input type="text" name="username" placeholder="username" required />
      <input type="password" name="password" placeholder="password" required/>
      <button>Login</button>
    </form>
  </div>
</div>


</body>
</html>
