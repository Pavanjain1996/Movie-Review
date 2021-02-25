<head>
<title>CineSnob - Review Here</title>
</head>
<?php
include('Header.php');
?>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<form method="post" action="Reviewed.php">
<div class="row">
<div class="col-md-12">
<span style="font-size:40px;color:blue;"><u>Write a Review !!</u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Movie Name" name="moviename" required>
<small class="form-text text-muted">Bollywood, Hollywood or Tollywood</small>
</div>
<div class="col-md-4">
<label class="form-check-label">Movie Type : </label>
<div class="form-check form-check-inline">
<div class="input-group mb-3">
<select class="custom-select" name="movietype" style="width:244px;">
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
<div class="col-md-4">
<label class="form-check-label">Language : </label>
<div class="form-check form-check-inline">
<div class="input-group mb-3">
<select class="custom-select" name="language" style="width:244px;">
<option value="English">English</option>
<option value="Hindi">Hindi</option>
<option value="Regional">Regional</option>
</select>
</div>
</div>
</div>
</div>
<br/>
<script>
function inc(){
    var element = document.getElementById('ratingval');
    var numval = Number(element.value);
    if(numval<5){
        numval=numval+0.5;
        element.value=numval;
    }
}
function dec(){
    var element = document.getElementById('ratingval');
    var numval = Number(element.value);
    if(numval>0){
        numval=numval-0.5;
        element.value=numval;
    }
}
</script>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control" placeholder="Starcast" name="starcast" required>
<small class="form-text text-muted">Actors and Actresses.</small>
</div>
<div class="col-md-1">
<button type="button" class="btn btn-primary" onclick="dec()">Decrease</button>
</div>
<div class="col-md-3">
<input type="text" class="form-control" value="2.5" name="rating" style="width:280px;" id="ratingval" required readonly >
<small class="form-text text-muted">Rate movie from 0.5 to 5.0</small>
</div>
<div class="col-md-2">
<button type="button" class="btn btn-primary" onclick="inc()">Increase</button>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-12">
<textarea class="form-control" style="height:150px;" placeholder="Start writing story here................" name="story" required></textarea>
<small class="form-text text-muted">Give a brief description in about 1000 words.</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-12">
<textarea class="form-control" style="height:200px;" placeholder="Start writing review here................" name="review" required></textarea>
<small class="form-text text-muted">Give a brief description in about 1000 words.</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-success" style="width:100%;">Submit your Review</button>
</div>
</div>
</form>
</div>
</div>
<?php
include('Footer.php');
?>