 <?php
if($_POST['srengstock'])
{
$rnumber=$_POST['rnumber'];
$hshfoprev=$_POST['hshfoprev'];
$hshfocur=$_POST['hshfocur'];
$hshfodev=$_POST['hshfodev'];

$vlsfoprev=$_POST['vlsfoprev'];
$vlsfocur=$_POST['vlsfocur'];
$vlsfodev=$_POST['vlsfodev'];

$ulsfoprev=$_POST['ulsfoprev'];
$ulsfocur=$_POST['ulsfocur'];
$ulsfodev=$_POST['ulsfodev'];

$hsmgoprev=$_POST['hsmgoprev'];
$hsmgocur=$_POST['hsmgocur'];
$hsmgodev=$_POST['hsmgodev'];

$hsmdoprev=$_POST['hsmdoprev'];
$hsmdocur=$_POST['hsmdocur'];
$hsmdodev=$_POST['hsmdodev'];

$lsmgoprev=$_POST['lsmgoprev'];
$lsmgocur=$_POST['lsmgocur'];
$lsmgodev=$_POST['lsmgodev'];

$lsmdoprev=$_POST['lsmdoprev'];
$lsmdocur=$_POST['lsmdocur'];
$lsmdodev=$_POST['lsmdodev'];

$melubeest=$_POST['melubeest'];
$melubeact=$_POST['melubeact'];
$melubedev=$_POST['melubedev'];

$lowcylest=$_POST['lowcylest'];
$lowcylact=$_POST['lowcylact'];
$lowcyldev=$_POST['lowcyldev'];

$highcylest=$_POST['highcylest'];
$highcylact=$_POST['highcylact'];
$highcyldev=$_POST['highcyldev'];

$addest=$_POST['addest'];
$addact=$_POST['addact'];
$adddev=$_POST['adddev'];

$aelubeest=$_POST['aelubeest'];
$aelubeact=$_POST['aelubeact'];
$aelubedev=$_POST['aelubedev'];

$steergearest=$_POST['steergearest'];
$steergearact=$_POST['steergearact'];
$steergeardev=$_POST['steergeardev'];

$sterntubeest=$_POST['sterntubeest'];
$sterntubeact=$_POST['sterntubeact'];
$sterntubedev=$_POST['sterntubedev'];

$hydrest=$_POST['hydrest'];
$hydract=$_POST['hydract'];
$hydrdev=$_POST['hydrdev'];

$otheroilest=$_POST['otheroilest'];
$otheroilact=$_POST['otheroilact'];
$otheroildev=$_POST['otheroildev'];


$sql1f="UPDATE `engfoilstock` SET 
`hshfoprev`='$hshfoprev', `hshfocur`='$hshfocur', `hshfodev`='$hshfodev', `vlsfoprev`='$vlsfoprev', `vlsfocur`='$vlsfocur', `vlsfodev`='$vlsfodev', `ulsfoprev`='$ulsfoprev', `ulsfocur`='$ulsfocur', `ulsfodev`='$ulsfodev', 
`hsmgoprev`='$hsmgoprev', `hsmgocur`='$hsmgocur', `hsmgodev`='$hsmgodev', `hsmdoprev`='$hsmdoprev', `hsmdocur`='$hsmdocur', `hsmdodev`='$hsmdodev', `lsmgoprev`='$lsmgoprev', `lsmgocur`='$lsmgocur',
`lsmgodev`='$lsmgodev', `lsmdoprev`='$lsmdoprev', `lsmdocur`='$lsmdocur', `lsmdodev`='$lsmdodev' WHERE `reportnum`='$rnumber' ";
$sql_1f=mysqli_query($con,$sql1f);


$sql1l="UPDATE `engloilstock` SET 
`melubeest`='$melubeest', `melubeact`='$melubeact', `melubedev`='$melubedev', `lowcylest`='$lowcylest', `lowcylact`='$lowcylact', `lowcyldev`='$lowcyldev', `highcylest`='$highcylest', `highcylact`='$highcylact', `highcyldev`='$highcyldev',
`addest`='$addest', `addact`='$addact', `adddev`='$adddev', `aelubeest`='$aelubeest', `aelubeact`='$aelubeact', `aelubedev`='$aelubedev', `steergearest`='$steergearest', `steergearact`='$steergearact', `steergeardev`='$steergeardev',
`sterntubeest`='$sterntubeest', `sterntubeact`='$sterntubeact', `sterntubedev`='$sterntubedev', `hydrest`='$hydrest', `hydract`='$hydract', `hydrdev`='$hydrdev', `otheroilest`='$otheroilest', `otheroilact`='$otheroilact', `otheroildev`='$otheroildev'
 WHERE `reportnum`='$rnumber'";
$sql_1l=mysqli_query($con,$sql1l);
}
?>
<br>

 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

?>
<div class="row" >
<div class="col-md-2"></div>
 <div class="col-md-4">

 <table style="font-size:14px;">
 		<form name="slogengboiler" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="stock" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
	<tr>
	<tr><td><br></td></tr>
	<tr><td  colspan="18" style="font-size:16px;"> <b>Fuel Oil Stock</b> </td>	</tr>	<tr><td><br></td></tr>
	<tr><td><br></td></tr> 
			<td></td>
			<td><small><b>Previous Stock &nbsp;&nbsp; </b></small></td>
			<td><small><b>Current Stock &nbsp;&nbsp;&nbsp;&nbsp;</b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;Deviation &nbsp;&nbsp;&nbsp;</b></small></td>
	</tr>
<?php
	
		$sql21=mysqli_query($con,"SELECT * FROM engfoilstock where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>HSHFO</small></td>
			<td><input type="text" name="hshfoprev"  id="hshfoprev" value="<?php echo $row['hshfoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hshfocur"  id="hshfocur" value="<?php echo $row['hshfocur'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hshfodev"  id="hshfodev" value="<?php echo $row['hshfodev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small>VLSFO</small></td>
			<td><input type="text" name="vlsfoprev"  id="vlsfoprev" value="<?php echo $row['vlsfoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="vlsfocur"  id="vlsfoprev" value="<?php echo $row['vlsfoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="vlsfodev"  id="vlsfoprev" value="<?php echo $row['vlsfoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small> ULSFO</small></td>
			<td><input type="text" name="ulsfoprev"  id="ulsfoprev" value="<?php echo $row['ulsfoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ulsfocur"  id="ulsfocur" value="<?php echo $row['ulsfocur'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ulsfodev"  id="ulsfodev" value="<?php echo $row['ulsfodev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small> HSMGO</small></td>
			<td><input type="text" name="hsmgoprev"  id="hsmgoprev" value="<?php echo $row['hsmgoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hsmgocur"  id="hsmgocur" value="<?php echo $row['hsmgocur'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hsmgodev"  id="hsmgodev" value="<?php echo $row['hsmgodev'];?>" class="form-control" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small> HSMDO</small></td>
			<td><input type="text" name="hsmdoprev"  id="hsmdoprev" value="<?php echo $row['hsmdoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hsmdocur"  id="hsmdocur" value="<?php echo $row['hsmdocur'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hsmdodev"  id="hsmdodev" value="<?php echo $row['hsmdodev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small> LSMGO</small></td>
			<td><input type="text" name="lsmgoprev"  id="lsmgoprev" value="<?php echo $row['lsmgoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lsmgocur"  id="lsmgocur" value="<?php echo $row['lsmgocur'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lsmgodev"  id="lsmgodev" value="<?php echo $row['lsmgodev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	<tr>
			<td><small> LSMDO</small></td>
			<td><input type="text" name="lsmdoprev"  id="lsmdoprev" value="<?php echo $row['lsmdoprev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lsmdocur"  id="lsmdocur" value="<?php echo $row['lsmdocur'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lsmdodev"  id="lsmdodev" value="<?php echo $row['lsmdodev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
      </table>

</div>
 <div class="col-md-6">
     <table style="font-size:14px;">
	<tr>
	<tr><td><br></td></tr>
	<tr><td  colspan="18" style="font-size:16px;"> <b>Lube Oil Stock</b> </td>	</tr>	<tr><td><br></td></tr>
   <tr><td><br></td></tr>
			<td></td>
			<td><small><b>Estimate Stock  &nbsp; &nbsp;</b></small></td>
			<td><small><b>Actual Stock &nbsp; &nbsp;</b></small></td>
			<td><small><b>Deviation &nbsp; &nbsp;</b></small></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engloilstock where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>ME Lube Oil </small></td>
			<td><input type="text" name="melubeest"  id="melubeest" value="<?php echo $row['melubeest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="melubeact"  id="melubeact" value="<?php echo $row['melubeact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="melubedev"  id="melubedev" value="<?php echo $row['melubedev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
	<tr>
			<td><small> Low BN Cylinder oil </small></td>
			<td><input type="text" name="lowcylest"  id="lowcylest" value="<?php echo $row['lowcylest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lowcylact"  id="lowcylact" value="<?php echo $row['lowcylact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lowcyldev"  id="lowcyldev" value="<?php echo $row['lowcyldev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
	<tr>
			<td><small>High BN Cylinder Oil</small></td>
			<td><input type="text" name="highcylest"  id="highcylest" value="<?php echo $row['highcylest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="highcylact"  id="highcylact" value="<?php echo $row['highcylact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="highcyldev"  id="highcyldev" value="<?php echo $row['highcyldev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	
	</tr>
	<tr>
			<td><small>Additives</small></td>
			<td><input type="text" name="addest"  id="addest" value="<?php echo $row['addest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="addact"  id="addact" value="<?php echo $row['addact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="adddev"  id="adddev" value="<?php echo $row['adddev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
    <tr>
			<td><small>AE lube oil </small></td>
			<td><input type="text" name="aelubeest"  id="aelubeest" value="<?php echo $row['aelubeest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="aelubeact"  id="aelubeact" value="<?php echo $row['aelubeact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="aelubedev"  id="aelubedev" value="<?php echo $row['aelubedev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
	<tr>
			<td><small>Steering Gear Lube Oil</small></td>
			<td><input type="text" name="steergearest"  id="steergearest" value="<?php echo $row['steergearest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="steergearact"  id="steergearact" value="<?php echo $row['steergearact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="steergeardev"  id="steergeardev" value="<?php echo $row['steergeardev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
	<tr>
			<td><small>Stern Tube Lube Oil</small></td>
			<td><input type="text" name="sterntubeest"  id="sterntubeest" value="<?php echo $row['sterntubeest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="sterntubeact"  id="sterntubeact" value="<?php echo $row['sterntubeact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="sterntubedev"  id="sterntubedev" value="<?php echo $row['sterntubedev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
	<tr>
			<td><small>Hydraulic Oil</small></td>
			<td><input type="text" name="hydrest"  id="hydrest" value="<?php echo $row['hydrest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hydract"  id="hydract" value="<?php echo $row['hydract'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrdev"  id="hydrdev" value="<?php echo $row['hydrdev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
	<tr>
			<td><small>Other Oil	Unit</small></td>
			<td><input type="text" name="otheroilest"  id="otheroilest" value="<?php echo $row['otheroilest'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="otheroilact"  id="otheroilact" value="<?php echo $row['otheroilact'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="otheroildev"  id="otheroildev" value="<?php echo $row['otheroildev'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon" ><small>Kg</small></i></i></td>
	</tr>
       </table>
      
</div>
</div>
	<tr><td>	<br></td></tr>
<div style="padding-left:230px;width:98%;padding-top:0%;">
		<textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
</div>
    
<div style="padding-left:250px;">
<div class="col-md-1">
		 <button type="submit" name="srengstock" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
</div>
<?php
}
}
?>
</form>
</div>
      