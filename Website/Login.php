<head>
<title>CineSnob - Login</title>
</head>
<?php
include('Header.php');
?>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<form method="post" action="Logged.php">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<span style="font-size:40px;color:blue;"><u>Login Here</u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Username" name="username" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="password" class="form-control" placeholder="Password" name="password" required>
<small class="form-text text-muted">Successful login will redirect you to home page else you will stay on same page.</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-2">
<button type="submit" class="btn btn-success" style="width:160px;">Login</button>
</div>
<div class="col-md-2">
<button type="Reset" class="btn btn-danger" style="width:160px;">Clear</button>
</div>
</div>
</form>
</div>
</div>
<?php
include('Footer.php');
?>