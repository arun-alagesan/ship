
<?php
if($_POST['srbunker'])
{
$rnumber=$_POST['rnumber'];
$fuelbunk=$_POST['fuelbunk'];
$startbunk=$_POST['startbunk'];
$stopbunk=$_POST['stopbunk'];

$fueltype1=$_POST['fueltype1'];
$fordered1=$_POST['fordered1'];
$received1=$_POST['received1'];
$qtybdn1=$_POST['qtybdn1'];
$lcvbdn1=$_POST['lcvbdn1'];
$sulphurbdn1=$_POST['sulphurbdn1'];
$denbdn1=$_POST['denbdn1'];
$deviation1=$_POST['deviation1'];
$lop1=$_POST['lop1'];

$fueltype2=$_POST['fueltype2'];
$fordered2=$_POST['fordered2'];
$received2=$_POST['received2'];
$qtybdn2=$_POST['qtybdn2'];
$lcvbdn2=$_POST['lcvbdn2'];
$sulphurbdn2=$_POST['sulphurbdn2'];
$denbdn2=$_POST['denbdn2'];
$deviation2=$_POST['deviation2'];
$lop2=$_POST['lop2'];

$fueltype3=$_POST['fueltype3'];
$fordered3=$_POST['fordered3'];
$received3=$_POST['received3'];
$qtybdn3=$_POST['qtybdn3'];
$lcvbdn3=$_POST['lcvbdn3'];
$sulphurbdn3=$_POST['sulphurbdn3'];
$denbdn3=$_POST['denbdn3'];
$deviation3=$_POST['deviation3'];
$lop3=$_POST['lop3'];

$fueltype4=$_POST['fueltype4'];
$fordered4=$_POST['fordered4'];
$received4=$_POST['received4'];
$qtybdn4=$_POST['qtybdn4'];
$lcvbdn4=$_POST['lcvbdn4'];
$sulphurbdn4=$_POST['sulphurbdn4'];
$denbdn4=$_POST['denbdn4'];
$deviation4=$_POST['deviation4'];
$lop4=$_POST['lop4'];


$fueldebunk=$_POST['fueldebunk'];
$fstartdbunk=$_POST['fstartdbunk'];
$fstopdbunk=$_POST['fstopdbunk'];

$fueltyped1=$_POST['fueltyped1'];
$fdebunk1=$_POST['fdebunk1'];
$fueltyped2=$_POST['fueltyped2'];
$fdebunk2=$_POST['fdebunk2'];
$fueltyped3=$_POST['fueltyped3'];
$fdebunk3=$_POST['fdebunk3'];
$fueltyped4=$_POST['fueltyped4'];
$fdebunk4=$_POST['fdebunk4'];

$lubebunk=$_POST['lubebunk'];
$lstartbunk=$_POST['lstartbunk'];
$lstopbunk=$_POST['lstopbunk'];


$lubetype1=$_POST['lubetype1'];
$lordered1=$_POST['lordered1'];
$lreceived1=$_POST['lreceived1'];
$lqtybdn1=$_POST['lqtybdn1'];
$ldenbdn1=$_POST['ldenbdn1'];
$ldeviation1=$_POST['ldeviation1'];
$llop1=$_POST['llop1'];

$lubetype2=$_POST['lubetype2'];
$lordered2=$_POST['lordered2'];
$lreceived2=$_POST['lreceived2'];
$lqtybdn2=$_POST['lqtybdn2'];
$ldenbdn2=$_POST['ldenbdn2'];
$ldeviation2=$_POST['ldeviation2'];
$llop2=$_POST['llop2'];

$lubetype3=$_POST['lubetype3'];
$lordered3=$_POST['lordered3'];
$lreceived3=$_POST['lreceived3'];
$lqtybdn3=$_POST['lqtybdn3'];
$ldenbdn3=$_POST['ldenbdn3'];
$ldeviation3=$_POST['ldeviation3'];
$llop3=$_POST['llop3'];

$lubetype4=$_POST['lubetype4'];
$lordered4=$_POST['lordered4'];
$lreceived4=$_POST['lreceived4'];
$lqtybdn4=$_POST['lqtybdn4'];
$ldenbdn4=$_POST['ldenbdn4'];
$ldeviation4=$_POST['ldeviation4'];
$llop4=$_POST['llop4'];


$lubedebunk=$_POST['lubedebunk'];
$lstartdbunk=$_POST['lstartdbunk'];
$lstopdbunk=$_POST['lstopdbunk'];


$lubetyped1=$_POST['lubetyped1'];
$ldebunk1=$_POST['ldebunk1'];

$lubetyped2=$_POST['lubetyped2'];
$ldebunk2=$_POST['ldebunk2'];

$lubetyped3=$_POST['lubetyped3'];
$ldebunk3=$_POST['ldebunk3'];

$lubetyped4=$_POST['lubetyped4'];
$ldebunk4=$_POST['ldebunk4'];




	 $sql1="UPDATE `engfoilbunk` SET 
	`startbunk`='$startbunk', `stopbunk`='$stopbunk', `fueltype1`='$fueltype1', `fordered1`='$fordered1', `received1`='$received1', `qtybdn1`='$qtybdn1', `lcvbdn1`='$lcvbdn1', `sulphurbdn1`='$sulphurbdn1', `denbdn1`='$denbdn1',
	 `deviation1`='$deviation1', `lop1`='$lop1',`fueltype2`='$fueltype2', `fordered2`='$fordered2', `received2`='$received2', `qtybdn2`='$qtybdn2', `lcvbdn2`='$lcvbdn2', `sulphurbdn2`='$sulphurbdn2', `denbdn2`='$denbdn2',
	 `deviation2`='$deviation2', `lop2`='$lop2', `fueltype3`='$fueltype3', `fordered3`='$fordered3', `received3`='$received3', `qtybdn3`='$qtybdn3', `lcvbdn3`='$lcvbdn3', `sulphurbdn3`='$sulphurbdn3', `denbdn3`='$denbdn3', 
	 `deviation3`='$deviation3', `lop3`='$lop3', `fueltype4`='$fueltype4', `fordered4`='$fordered4', `received4`='$received4', `qtybdn4`='$qtybdn4', `lcvbdn4`='$lcvbdn4', `sulphurbdn4`='$sulphurbdn4', `denbdn4`='$denbdn4', 
	 `deviation4`='$deviation4', `lop4`='$lop4'  WHERE `reportnum`='$rnumber'";
	$sql_1=mysqli_query($con,$sql1);

        
 $sql2b="UPDATE `engfoildebunk` SET 
`startdbunk`='$fstartdbunk', `stopdbunk`='$fstopdbunk', `fueltyped1`='$fueltyped1',`fdebunk1`='$fdebunk1',`fueltyped2`='$fueltyped2',`fdebunk2`='$fdebunk2',`fueltyped3`='$fueltyped3',`fdebunk3`='$fdebunk3',
`fueltyped4`='$fueltyped4',`fdebunk4`='$fdebunk4'  WHERE `reportnum`='$rnumber'";
	$sql_2b=mysqli_query($con,$sql2b);  

$sql3b="UPDATE `engloilbunk` SET 
`lstartbunk`='$lstartbunk', `lstopbunk`='$lstopbunk',`lubetype1`='$lubetype1',`lordered1`='$lordered1',`lreceived1`='$lreceived1',`lqtybdn1`='$lqtybdn1',`ldenbdn1`='$ldenbdn1',`ldeviation1`='$ldeviation1',`llop1`='$llop1', 
`lubetype2`='$lubetype2', `lordered2`='$lordered2',`lreceived2`='$lreceived2',`lqtybdn2`='$lqtybdn2',`ldenbdn2`='$ldenbdn2',`ldeviation2`='$ldeviation2',`llop2`='$llop2', `lubetype3`='$lubetype3',`lordered3`='$lordered3',
`lreceived3`='$lreceived3', `lqtybdn3`='$lqtybdn3',`ldenbdn3`='$ldenbdn3',`ldeviation3`='$ldeviation3',`llop3`='$llop3',`lubetype4`='$lubetype4',`lordered4`='$lordered4',`lreceived4`='$lreceived4',`lqtybdn4`='$lqtybdn4',
`ldenbdn4`='$ldenbdn4', `ldeviation4`='$ldeviation4',`llop4`='$llop4'  WHERE `reportnum`='$rnumber'";
	$sql_3b=mysqli_query($con,$sql3b);

$sql4b="UPDATE `engloildebunk` SET 
`lstartdbunk`='$lstartdbunk', `lstopdbunk`='$lstopdbunk', `lubetyped1`='$lubetyped1', `ldebunk1`='$ldebunk1', `lubetyped2`='$lubetyped2', `ldebunk2`='$ldebunk2', `lubetyped3`='$lubetyped3', `ldebunk3`='$ldebunk3',
`lubetyped4`='$lubetyped4', `ldebunk4`='$ldebunk4'  WHERE `reportnum`='$rnumber'";  
	$sql_4b=mysqli_query($con,$sql4b);
	
//print_r($_POST);       
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
<div class="col-md-7">
 <table style="font-size:13px;">
 		<form name="slogengboiler" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="bunker" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
    <tr><td><br></td></tr>
	<tr><td  colspan="18" style="font-size:16px;"> <b>Fuel Bunkering</b> </td>	</tr>		<tr><td><br></td></tr>
<?php
	
		$sql21=mysqli_query($con,"SELECT * FROM engfoilbunk where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
		<td><small>Any Fuel Bunkering</small></td>
		<td class="input-container">  
			<input type="hidden"  name="sloc" value="<?php echo $row['oilfired'];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="fuelbunk" id="fuelbunk" value="<?php echo $row['fuelbunk'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
	</tr>
	<tr>
		<td><small>Start of Bunkering</small></td>
		<td class="input-container">  
			<input type="text" name="startbunk" class="input-field datepicker1"   id="startbunk" value="<?php echo $row['startbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
			<span class="input-group-addon">
			<span class="fa fa-calendar" id="datepicker1"></span>
			</span>
		</td>
	</tr>
	<tr>
		<td><small>Stop of Bunkering</small></td>
		<td class="input-container">  
			<input type="text" name="stopbunk" class="input-field datepicker1"   id="stopbunk" value="<?php echo $row['stopbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
			<span class="input-group-addon">
            <span class="fa fa-calendar" id="datepicker1"></span>
            </span>
		</td>
	</tr>
       
 </table>
    
<table style="font-size:13px;">
        <tr><td><Br></td></tr>		
        <tr>
				<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Fuel Type </b></small></td>
				<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp;Ordered </b></small></td>
				<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; Received </b></small></td>
				<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;QTY BDN </b></small></td>
				<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp;LCV BDN </b></small></td>
				<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Sulphur% BDN</b></small></td>
				<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Den BDN 15 &#176;c </b></small></td>
				<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Deviation</b></small></td>
				<td><small><b>&nbsp;&nbsp;LOP  </b></small></td>
        </tr>
		<tr>	<td>
		    <select class="form-control" name="fueltype1"  id="fueltype1"  value="<?php echo $row['fueltype1'];?>">
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
			</select>  </td>	
	        <td><input type="text" name="fordered1"  id="fordered1" value="<?php echo $row['fordered1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="received1"  id="received1" value="<?php echo $row['received1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="qtybdn1"  id="qtybdn1" value="<?php echo $row['qtybdn1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lcvbdn1"  id="lcvbdn1" value="<?php echo $row['lcvbdn1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="sulphurbdn1"  id="sulphurbdn1" value="<?php echo $row['sulphurbdn1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="denbdn1"  id="denbdn1" value="<?php echo $row['denbdn1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="deviation1"  id="deviation1" value="<?php echo $row['deviation1'];?>" class="form-control" maxlength="5" size="7"></td>
		   <td class="input-container">  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
				<input type="checkbox" name="lop1" id="lop1" value="<?php echo $row['lop1'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
			</td>
	</tr>
	<tr>
			<td>
				<select   class="form-control" name="fueltype2"  id="fueltype2"  value="<?php echo $row['fueltype2'];?>">
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
				</select>  </td>	
	        <td><input type="text" name="fordered2"  id="fordered2" value="<?php echo $row['fordered2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="received2"  id="received2" value="<?php echo $row['received2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="qtybdn2"  id="qtybdn2" value="<?php echo $row['qtybdn2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lcvbdn2"  id="lcvbdn2" value="<?php echo $row['lcvbdn2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="sulphurbdn2"  id="sulphurbdn2" value="<?php echo $row['sulphurbdn2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="denbdn2"  id="denbdn2" value="<?php echo $row['denbdn2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="deviation2"  id="deviation2" value="<?php echo $row['deviation2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td class="input-container">  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
				<input type="checkbox" name="lop2" id="lop2" value="<?php echo $row['lop2'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
			</td>
	</tr>
	<tr>	
			<td>
				<select  class="form-control" name="fueltype3"  id="fueltype3"  value="<?php echo $row['fueltype3'];?>">
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
				</select>  </td>	
	        <td><input type="text" name="fordered3"  id="fordered3" value="<?php echo $row['fordered3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="received3"  id="received3" value="<?php echo $row['received3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="qtybdn3"  id="qtybdn3" value="<?php echo $row['qtybdn3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lcvbdn3"  id="lcvbdn3" value="<?php echo $row['lcvbdn3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="sulphurbdn3"  id="sulphurbdn3" value="<?php echo $row['sulphurbdn3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="denbdn3"  id="denbdn3" value="<?php echo $row['denbdn3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="deviation3"  id="deviation3" value="<?php echo $row['deviation3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td class="input-container">  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
				<input type="checkbox" name="lop3" id="lop3" value="<?php echo $row['lop3'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
			</td>
	</tr>
	<tr>
		<td>
		    <select   class="form-control" name="fueltype4"  id="fueltype4"  value="<?php echo $row['fueltype4'];?>">
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
			</select>  </td>	
		<td><input type="text" name="fordered4"  id="fordered4" value="<?php echo $row['fordered4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="received4"  id="received4" value="<?php echo $row['received4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="qtybdn4"  id="qtybdn4" value="<?php echo $row['qtybdn4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="lcvbdn4"  id="lcvbdn4" value="<?php echo $row['lcvbdn4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="sulphurbdn4"  id="sulphurbdn4" value="<?php echo $row['sulphurbdn4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="denbdn4"  id="denbdn4" value="<?php echo $row['denbdn4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="deviation4"  id="deviation4" value="<?php echo $row['deviation4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td class="input-container">  
			 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
			<input type="checkbox" name="lop4" id="lop4" value="<?php echo $row['lop4'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
	</tr>
      </table>
</div>
<div class="col-md-3">
<br>
	<table style="font-size:13px;">
      
	<tr><td  colspan="18" style="font-size:16px;"> <b>Fuel De-Bunkering</b> </td>	</tr>		<tr><td><br></td></tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engfoildebunk where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	
	<tr>
			<td><small>Any Fuel De-Bunkering</small></td>
		 <td class="input-container">  
			<input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="fueldebunk" id="fueldebunk" value="<?php echo $row['fueldebunk'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
	</tr>

	<tr>
		<td><small>Start of De-Bunkering</small></td>
		<td class="input-container">  
			<input type="text" name="fstartdbunk" class="input-field datepicker1"   id="fstartdbunk" value="<?php echo $row['startdbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
			<span class="input-group-addon">
            <span class="fa fa-calendar" id="datepicker1"></span>
            </span>
		</td>
	</tr>
	<tr>
		<td><small>Stop of De-Bunkering</small></td>
		<td class="input-container">  
			<input type="text" name="fstopdbunk" class="input-field datepicker1"   id="fstopdbunk" value="<?php echo $row['stopdbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
			<span class="input-group-addon">
            <span class="fa fa-calendar" id="datepicker1"></span>
               </span>
		</td>
	</tr>
   </table>
		<center> <table style="font-size:13px;">
    <tr><td><Br></td></tr>	
    <tr>
		<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Fuel Type </b></small></td>
		<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp;De-Bunkered</b></small></td>
    </tr>
	<tr>
		<td>
		    <select  class="form-control"   name="fueltyped1"  id="fueltyped1" value="<?php echo $row['fueltyped1'];?>">
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
			</select>  </td>	
				<td><input type="text" name="fdebunk1"  id="fdebunk1" value="<?php echo $row['fdebunk1'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><i class="fa fa- icon"><small>MT</small></i></td>
	</tr>
	<tr>
		<td>
			<select  class="form-control" name="fueltyped2"  id="fueltyped2" value="<?php echo $row['fueltyped2'];?>">
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
			</select>  </td>	
	        <td><input type="text" name="fdebunk2"  id="fdebunk2" value="<?php echo $row['fdebunk2'];?>" class="form-control" maxlength="5" size="7"></td>
	<td><i class="fa fa- icon"><small>MT</small></i></td>
	</tr>
	<tr>
		<td>
		    <select class="form-control" name="fueltyped3"  id="fueltyped3" value="<?php echo $row['fueltyped3'];?>">
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
			</select>  </td>	
	    <td><input type="text" name="fdebunk3"  id="fdebunk3" value="<?php echo $row['fdebunk3'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><i class="fa fa- icon"><small>MT</small></i></td>
	</tr>
	<tr>
		<td>
		    <select  class="form-control" name="fueltyped4"  id="fueltyped4" value="<?php echo $row['fueltyped4'];?>">
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
			</select>  </td>	
	    <td><input type="text" name="fdebunk4"  id="fdebunk4" value="<?php echo $row['fdebunk4'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><i class="fa fa- icon"><small>MT</small></i></td>
	</tr>
	</table> </center>
</div>
</div>


<div class="row" >
<div class="col-md-2"></div>
   <div class="col-md-7">
       <table style="font-size:13px;">
      <tr><td><br></td></tr>
	<tr><td  colspan="18" style="font-size:16px;"> <b>Lube Bunkering</b> </td>	</tr>		<tr><td><br></td></tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engloilbunk where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>	
	<tr>
		<td><small>Any Lube Bunkering</small></td>
		<td class="input-container">  
				<input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
				<input type="checkbox" name="lubebunk" id="lubebunk" value="<?php echo $row['lubebunk'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
	</tr>
	<tr>
		<td><small>Start of Bunkering</small></td>
		<td class="input-container">  
			<input type="text" name="lstartbunk" class="input-field datepicker1"   id="lstartbunk" value="<?php echo $row['lstartbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
			<span class="input-group-addon">
            <span class="fa fa-calendar" id="datepicker1"></span>
            </span>
		</td>
	</tr>
	<tr>
		<td><small>Stop of Bunkering</small></td>
		<td class="input-container">  
			<input type="text" name="lstopbunk" class="input-field datepicker1"   id=" lstopbunk" value="<?php echo $row['lstopbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
			<span class="input-group-addon">
            <span class="fa fa-calendar" id="datepicker1"></span>
            </span>
		</td>
	</tr>
</table>
<table style="font-size:13px;">
    <tr><td><Br></td></tr>		
    <tr>
		<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Lube Type </b></small></td>
		<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp;Ordered </b></small></td>
		<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; Received </b></small></td>
		<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;QTY BDN </b></small></td>
		<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Den BDN 15 &#176;c </b></small></td>
		<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Deviation</b></small></td>
		<td><small><b>&nbsp;&nbsp;LOP  </b></small></td>
	</tr>
	<tr>
		<td>
				<select   class="form-control" name="lubetype1"  id="lubetype1" value="<?php echo $row['lubetype1'];?>" >
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
		<td><input type="text" name="lordered1"  id="lordered1" value="<?php echo $row['lordered1'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="lreceived1"  id="lreceived1" value="<?php echo $row['lreceived1'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="lqtybdn1"  id="lqtybdn1" value="<?php echo $row['lqtybdn1'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="ldenbdn1"  id="ldenbdn1" value="<?php echo $row['ldenbdn1'];?>" class="form-control" maxlength="5" size="7"></td>
		<td><input type="text" name="ldeviation1"  id="ldeviation1" value="<?php echo $row['ldeviation1'];?>" class="form-control" maxlength="5" size="7"></td>
		<td class="input-container">  
			 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
			<input type="checkbox" name="llop1" id="llop1" value="<?php echo $row['llop1'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
	</tr>
	<tr>
		<td>
				<select   class="form-control" name="lubetype2"  id="lubetype2" value="<?php echo $row['lubetype2'];?>" >
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
			<td><input type="text" name="lordered2"  id="lordered2" value="<?php echo $row['lordered2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lreceived2"  id="lreceived2" value="<?php echo $row['lreceived2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lqtybdn2"  id="lqtybdn2" value="<?php echo $row['lqtybdn2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ldenbdn2"  id="ldenbdn2" value="<?php echo $row['ldenbdn2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ldeviation2"  id="ldeviation2" value="<?php echo $row['ldeviation2'];?>" class="form-control" maxlength="5" size="7"></td>
		   <td class="input-container">  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="llop2" id="llop2" value="<?php echo $row['llop2'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
			</td>
	</tr>
	<tr>
		<td>
				<select  class="form-control" name="lubetype3"  id="lubetype3" value="<?php echo $row['lubetype3'];?>" >
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
	        <td><input type="text" name="lordered3"  id="lordered3" value="<?php echo $row['lordered3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lreceived3"  id="lreceived3" value="<?php echo $row['lreceived3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lqtybdn3"  id="lqtybdn3" value="<?php echo $row['lqtybdn3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ldenbdn3"  id="ldenbdn3" value="<?php echo $row['ldenbdn3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ldeviation3"  id="ldeviation3" value="<?php echo $row['ldeviation3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td class="input-container">  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
				<input type="checkbox" name="llop3" id="llop3" value="<?php echo $row['llop3'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
			</td>
	</tr>
	<tr>
		<td>
				<select   class="form-control" name="lubetype4"  id="lubetype4" value="<?php echo $row['lubetype4'];?>" >
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
	        <td><input type="text" name="lordered4"  id="lordered4" value="<?php echo $row['lordered4'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lreceived4"  id="lreceived4" value="<?php echo $row['lreceived4'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="lqtybdn4"  id="lqtybdn4" value="<?php echo $row['lqtybdn4'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ldenbdn4"  id="ldenbdn4" value="<?php echo $row['ldenbdn4'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="ldeviation4"  id="ldeviation4" value="<?php echo $row['ldeviation4'];?>" class="form-control" maxlength="5" size="7"></td>
			<td class="input-container">  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
				<input type="checkbox" name="llop4" id="llop4" value="<?php echo $row['llop4'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
			</td>
	</tr>
</table>
</div>
       <div class="col-md-3">
       <br>
	<table style="font-size:13px;">
		<tr><td  colspan="18" style="font-size:16px;"> <b>Lube De-Bunkering</b> </td>	</tr>		<tr><td><br></td></tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engloildebunk where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Any Lube De-Bunkering</small></td>
			<td class="input-container">  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
				<input type="checkbox" name="lubedebunk" id="lubedebunk" value="<?php echo $row['lubedebunk'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
			</td>
		</tr>
		<tr>
			<td><small>Start of De-Bunkering</small></td>
			<td class="input-container">  
				<input type="text" name="lstartdbunk" class="input-field datepicker1"   id="lstartdbunk" value="<?php echo $row['lstartdbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
				<span class="input-group-addon">
				<span class="fa fa-calendar" id="datepicker1"></span>
                </span>
			</td>
		</tr>
		<tr>
			<td><small>Stop of De-Bunkering</small></td>
			<td class="input-container">  
				<input type="text" name="lstopdbunk" class="input-field datepicker1"   id="lstopdbunk" value="<?php echo $row['lstopdbunk'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
				<span class="input-group-addon">
                <span class="fa fa-calendar" id="datepicker1"></span>
                </span>
			</td>
		</tr>
       </table>
       <table style="font-size:13px;">
			<tr><td><Br></td></tr>	
			<tr>
             	<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Lube Type </b></small></td>
              	<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp;De-Bunkered</b></small></td>
			</tr>
		<tr>	<td  style="font-size:13px;">
				<select   class="form-control"  style="font-size:13px;" name="lubetyped1"  id="lubetyped1" value="<?php echo $row['lubetyped1'];?>">
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
	        <td><input type="text" name="ldebunk1"  id="ldebunk1" value="<?php echo $row['ldebunk1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>Kg</small></i></td>
		</tr>
		<tr>	<td  style="font-size:13px;">
				<select  class="form-control"  style="font-size:13px;" name="lubetyped2"  id="lubetyped2" value="<?php echo $row['lubetyped2'];?>">
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
	        <td><input type="text" name="ldebunk2"  id="ldebunk2" value="<?php echo $row['ldebunk2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>Kg</small></i></td>
	</tr>
	<tr>	<td  style="font-size:13px;">
				<select  class="form-control"  style="font-size:13px;" name="lubetyped3"  id="lubetyped3" value="<?php echo $row['lubetyped3'];?>">
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
	        <td><input type="text" name="ldebunk3"  id="ldebunk3" value="<?php echo $row['ldebunk3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>Kg</small></i></td>
	</tr>
	<tr>	<td  style="font-size:13px;">
				<select   class="form-control"  style="font-size:13px;" name="lubetyped4"  id="lubetyped4" value="<?php echo $row['lubetyped4'];?>">
					<option></option><option> ME Lube Oil</option>
					<option>Low BN Cylinder oil</option>
					<option>High BN Cylinder Oil</option>
					<option>Additives</option>
					<option>AE lube oil</option>
					<option>Steering Gear Lube Oil</option>
					<option>Stern Tube Lube Oil</option>
					<option>Hydraulic Oil</option>
					<option>Other Oil	Unit</option>
				</select>  </td>	
	        <td><input type="text" name="ldebunk4"  id="ldebunk4" value="<?php echo $row['ldebunk4'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>Kg</small></i></td>
	</tr>

	</table>
</div>
    <div style="padding-left:230px;width:98%;padding-top:27%;">
 
  <textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:250px;">

		    <div class="col-md-1">
		        <button type="submit" name="srbunker" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		       
		    </div>
					      </div>
      
 <br><br>
    </form>
<?php
}
}
?>

</div>
