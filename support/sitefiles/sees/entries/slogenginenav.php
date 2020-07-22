<!DOCTYPE html>
<html lang="en">
	<div class="container-fluid">


<br><br>

  <ul class="nav nav-tabs">

    <form action="index.php" method="post">
	<input type="hidden" name="srepnum" value="1">
	<input type="hidden" name="slogengine" value="1">
    <button name="mengine" value="slogheader"  class="<?php if($_POST['mengine']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Main Engine</button>
    <button name="auxiliary" value="auxiliary"  class="<?php if($_POST['auxiliary']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  > Auxiliary</button>
	<button name="sboard" value="sboard"  class="<?php if($_POST['sboard']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  > Switch Board</button>
	<button name="boilers" value="boilers"  class="<?php if($_POST['boilers']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  > Boilers</button>
   	<button  name="syst" value="syst"  class="<?php if($_POST['syst']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Systems</button> 
	<button name="runhrs" value="runhrs"  class="<?php if($_POST['runhrs']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>" >Run Hours </button>
    <button name="consump" value="consump"  class="<?php if($_POST['consump']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  > Consumption</button>
   	<button  name="bunker"  value="bunker"  class="<?php if($_POST['bunker']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Bunker</button>	
	<button name="stock" value="stock"  class="<?php if($_POST['stock']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Stock</button>
	<button name="tank" value="tank"  class="<?php if($_POST['tank']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Tank</button>
    <button name="perform" value="perform"  class="<?php if($_POST['perform']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Performance</button>
   	<button  name="work"  value="work"  class="<?php if($_POST['work']){ echo'btn btn-info active'; }else{echo'btn btn-default';}?>"  >Work Done</button>
	</form>

  </ul>



  
 
<?php

if($_POST['mengine'])
{
include('entries/slogmainengin.php');  
}
if($_POST['auxiliary'])
{
include('entries/slogaux.php');  
}
if($_POST['sboard'])
{
include('entries/slogauxsboard.php');  
}
if($_POST['boilers'])
{
include('entries/slogauxboilers.php');  
}

if($_POST['syst'])
{
include('entries/slogauxsys.php');  
}
if($_POST['runhrs'])
{
include('entries/slogrunhrs.php');  
}
if($_POST['consump'])
{
include('entries/slogconsump.php');  
}
if($_POST['bunker'])
{
include('entries/slogbunker.php');  
}

if($_POST['stock'])
{
include('entries/slogstock.php');  
}

if($_POST['tank'])
{
include('entries/slogtank.php');  
}

if($_POST['perform'])
{
include('entries/slogperform.php');  
}

if($_POST['work'])
{
include('entries/slogwork.php');  
}


?>
</div>

</html>