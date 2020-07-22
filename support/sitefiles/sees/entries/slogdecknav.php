<!DOCTYPE html>
<html lang="en">
<br><br>
<div class="row" >



    
	<ul class="nav nav-tabs">
    <form action="index.php" method="post">
	<input type="hidden" name="srepnum" value="1">
	<input type="hidden" name="slogdeck" value="1">
    <button name="observe" value="observe"  class="<?php if($_POST['observe']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Observations</button>
    <button name="cargo" value="cargo"  class="<?php if($_POST['cargo']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  > Cargo</button>
   	<button  name="dsyst" value="dsyst"  class="<?php if($_POST['dsyst']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Systems</button> 
	<button name="stops" value="stops"  class="<?php if($_POST['stops']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>" >Stoppages </button>
   	<button  name="dwork"  value="dwork"  class="<?php if($_POST['dwork']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Work Done</button>
</form>

  </ul>



  
 
<?php

if($_POST['observe'])
{
include('entries/slogobserve.php');  
}
if($_POST['cargo'])
{
include('entries/slogcargo.php');  
}
if($_POST['dsyst'])
{
include('entries/slogdsys.php');  
}
if($_POST['stops'])
{
include('entries/slogstops.php');  
}
if($_POST['dwork'])
{
include('entries/slogdwork.php');  
}


?>
  </div>
</html>
  