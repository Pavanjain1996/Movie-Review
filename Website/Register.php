<head>
<title>CineSnob - Register</title>
</head>
<?php
include('Header.php');;
?>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<form method="post" action="Registration.php">
<div class="row">
<div class="col-md-12">
<span style="font-size:40px;color:blue;"><u>Register Here</u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<input type="text" class="form-control" placeholder="First name" name="fname" required>
<small class="form-text text-muted">Minimum 3 Characters.</small>
</div>
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Middle name" name="mname">
<small class="form-text text-muted">Minimum 3 Characters.</small>
</div>
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Last name" name="lname" required>
<small class="form-text text-muted">Minimum 3 Characters.</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control" placeholder="Username" name="username" required>
<small class="form-text text-muted">Starts with capital letter.</small>
</div>
<div class="col-md-6">
<input type="password" class="form-control" placeholder="Password" name="password" required>
<small class="form-text text-muted">Must contain capital and small letters. Also must have special characters.</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-5">
<input type="text" class="form-control" placeholder="Mobile No." name="mobile" required>
</div>
<div class="col-md-3">
<label>Gender : &nbsp;</label>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
<label class="form-check-label" for="male">Male</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
<label class="form-check-label" for="female">Female</label>
</div>
</div>
<div class="col-md-4">
<label>Category : &nbsp;</label>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="category" id="sc" value="SC">
<label class="form-check-label" for="sc">SC</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="category" id="st" value="ST">
<label class="form-check-label" for="st">ST</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="category" id="obc" value="OBC">
<label class="form-check-label" for="obc">OBC</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="category" id="general" value="General" checked>
<label class="form-check-label" for="general">General</label>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Email" name="email" required>
<small class="form-text text-muted">Enter a valid E-Mail ID.</small>
</div>
<div class="col-md-5">
<label class="form-check-label">Movie Interest Area : </label>
<div class="form-check form-check-inline">
<div class="input-group mb-3">
<select class="custom-select" name="movietype" style="width:282px">
<option value="Action">Action</option>
<option value="Comedy">Comedy</option>
<option value="Romantic">Romantic</option>
<option value="Animation">Animation</option>
<option value="Horror">Horror</option>
<option value="Documentary">Documentary</option>
<option value="Drama">Drama</option>
</select>
</div>
</div>
</div>
<div class="col-md-3">
<button type="submit" class="btn btn-success" style="width:100%;">Register</button>
</div>
</div>
</form>
</div>
</div></div>
</form>
</div>
</div>
<?php
include('Footer.php');
?>