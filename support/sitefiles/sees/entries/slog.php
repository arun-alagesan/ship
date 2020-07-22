<!DOCTYPE html>
<html lang="en">

<div class="sidenav">

<form action="index.php" name="mainitems" method="post">
<input type="hidden" name="srepnum" value="1">

<nav class="navbar navbar">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#itemsmenu" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
      </button>
     </div>
    <div class="collapse navbar-collapse" id="itemsmenu">
		<input type="submit" name="slogheader" class="<?php if($_POST['slogheader']){echo"btn btn-success btn-sm btn-block";}else{echo"btn btn-info btn-block btn-sm ";}?>" value="Header ">
		<input type="submit" name="slogoperations" class="<?php if($_POST['slogoperations']){echo"btn btn-success btn-block btn-sm ";}else{echo"btn btn-info btn-sm  btn-block";}?>" value="Operations ">
		<input type="submit" name="slogengine" class="<?php if($_POST['slogengine']){echo"btn btn-success btn-block btn-sm ";}else{echo"btn btn-info btn-sm  btn-block";}?>" value="Engine ">
		<input type="submit" name="slogdeck" class="<?php if($_POST['slogdeck']){echo"btn btn-success btn-block btn-sm ";}else{echo"btn btn-info btn-sm  btn-block";}?>" value="Deck ">
	</div>
	</nav>
</form>
  </div>

  <?php

if($_POST['slogheader'])
{
include('entries/slogheader.php');  
}
if($_POST['slogoperations'])
{
include('entries/slogoperations.php');  
}
if($_POST['slogengine'])
{
include('entries/slogenginenav.php');  
}

if($_POST['slogdeck'])
{
include('entries/slogdecknav.php');  
}
?>
  
</div>

  