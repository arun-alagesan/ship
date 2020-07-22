  <?php
  
if($_POST['srauxsystem'])
{
	$rnumber=$_POST['rnumber'];
	$swsyspress=$_POST['swsyspress'];
	$swsystemp=$_POST['swsystemp'];	
	$firelinepress=$_POST['firelinepress'];	
	$engroompress=$_POST['engroompress'];
	$engroomtemp=$_POST['engroomtemp'];	
	$acairintemp=$_POST['acairintemp'];	
	$acairouttemp=$_POST['acairouttemp'];
	$ltcwsyspress=$_POST['ltcwsyspress'];	
	$ltcwsystemp=$_POST['ltcwsystemp'];	
	$htcwsyspress=$_POST['htcwsyspress'];
	$htcwsystemp=$_POST['htcwsystemp'];	
	$workairpress=$_POST['workairpress'];	
	$ctrlairpress=$_POST['ctrlairpress'];
	$airrecpress1=$_POST['airrecpress1'];
	$airrecpress2=$_POST['airrecpress2'];
	$airrecpress3=$_POST['airrecpress3'];	
	$jwintemp=$_POST['jwintemp'];	
	$jwouttemp=$_POST['jwouttemp'];
	$condswin=$_POST['condswin'];	
	$condswout=$_POST['condswout'];	
	$shelltemp=$_POST['shelltemp'];
	$ejpumppress=$_POST['ejpumppress'];	
	$fwpumppress=$_POST['fwpumppress'];	
	$flowmeter=$_POST['flowmeter'];
	$tonsprod=$_POST['tonsprod'];	
	
	$sql1b="UPDATE `engauxwatersystems` SET 
	`swsyspress`='$swsyspress', `swsystemp`='$swsystemp', `firelinepress`='$firelinepress',`engroompress`='$engroompress', `engroomtemp`='$engroomtemp', `acairintemp`='$acairintemp', `acairouttemp`='$acairouttemp',
	`ltcwsyspress`='$ltcwsyspress', `ltcwsystemp`='$ltcwsystemp', `htcwsyspress`='$htcwsyspress', `htcwsystemp`='$htcwsystemp', `workairpress`='$workairpress', `ctrlairpress`='$ctrlairpress', `airrecpress1`='$airrecpress1',
	`airrecpress2`='$airrecpress2', `airrecpress3`='$airrecpress3' , `jwintemp`='$jwintemp', `jwouttemp`='$jwouttemp', `condswin`='$condswin', `condswout`='$condswout', `shelltemp`='$shelltemp' , `ejpumppress`='$ejpumppress',
	`fwpumppress`='$fwpumppress', `flowmeter`='$flowmeter', `tonsprod`='$tonsprod' WHERE `reportnum`='$rnumber'";
	$sql_1b=mysqli_query($con,$sql1b);
		
	$acsuctpress1=$_POST['acsuctpress1'];
	$acsuctpress2=$_POST['acsuctpress2'];	
	$acdispress1=$_POST['acdispress1'];	
	$acdispress2=$_POST['acdispress2'];
	$aclopress1=$_POST['aclopress1'];	
	$aclopress2=$_POST['aclopress2'];	
	$acoillevel1=$_POST['acoillevel1'];
	$acoillevel2=$_POST['acoillevel2'];	
	$acliqlevel1=$_POST['acliqlevel1'];	
	$acliqlevel2=$_POST['acliqlevel2'];
	$reefdispress1=$_POST['reefdispress1'];	
	$reefdispress2=$_POST['reefdispress2'];	
	$reeflopress1=$_POST['reeflopress1'];
	$reeflopress2=$_POST['reeflopress2'];
	$reefoillevel1=$_POST['reefoillevel1'];
	$reefoillevel2=$_POST['reefoillevel2'];	
	$reefliqlevel1=$_POST['reefliqlevel1'];	
	$reefliqlevel2=$_POST['reefliqlevel2'];
	$reefsucpress1=$_POST['reefsucpress1'];	
	$reefsucpress2=$_POST['reefsucpress2'];	
	$vegrtemp1=$_POST['vegrtemp1'];
	$vegrtemp2=$_POST['vegrtemp2'];	
	$vegrtemp3=$_POST['vegrtemp3'];	
	$vegrtemp4=$_POST['vegrtemp4'];
	$vegrtemp5=$_POST['vegrtemp5'];	
	$vegrtemp6=$_POST['vegrtemp6'];		
	$meatrtemp1=$_POST['meatrtemp1'];
	$meatrtemp2=$_POST['meatrtemp2'];	
	$meatrtemp3=$_POST['meatrtemp3'];	
	$meatrtemp4=$_POST['meatrtemp4'];
	$meatrtemp5=$_POST['meatrtemp5'];	
	$meatrtemp6=$_POST['meatrtemp6'];			
	
	$sql2b="UPDATE `engauxacsystems` SET 
	`acsuctpress1`='$acsuctpress1', `acsuctpress2`='$acsuctpress2', `acdispress1`='$acdispress1',`acdispress2`='$acdispress2', `aclopress1`='$aclopress1', `aclopress2`='$aclopress2', `acoillevel1`='$acoillevel1',
	`acoillevel2`='$acoillevel2', `acliqlevel1`='$acliqlevel1', `acliqlevel2`='$acliqlevel2', `reefdispress1`='$reefdispress1', `reefdispress2`='$reefdispress2', `reeflopress1`='$reeflopress1', `reeflopress2`='$reeflopress2',
	`reefoillevel1`='$reefoillevel1', `reefoillevel2`='$reefoillevel2', `reefliqlevel1`='$reefliqlevel1', `reefliqlevel2`='$reefliqlevel2', `reefsucpress1`='$reefsucpress1', `reefsucpress2`='$reefsucpress2', `vegrtemp1`='$vegrtemp1',
	`vegrtemp2`='$vegrtemp2', `vegrtemp3`='$vegrtemp3', `vegrtemp4`='$vegrtemp4', `vegrtemp5`='$vegrtemp5', `vegrtemp6`='$vegrtemp6', `meatrtemp1`='$meatrtemp1', `meatrtemp2`='$meatrtemp2',
	`meatrtemp3`='$meatrtemp3', `meatrtemp4`='$meatrtemp4', `meatrtemp5`='$meatrtemp5', `meatrtemp6`='$meatrtemp6' WHERE `reportnum`='$rnumber'";
	$sql_2b=mysqli_query($con,$sql2b);
	
	$sox=$_POST['sox'];
	$swflow=$_POST['swflow'];	
	$sfan=$_POST['sfan'];	
	$swinph=$_POST['swinph'];
	$swinpah=$_POST['swinpah'];	
	$swintemp=$_POST['swintemp'];		
	$swinturb=$_POST['swinturb'];
	$swoutph=$_POST['swoutph'];	
	$swoutpah=$_POST['swoutpah'];	
	$swoutturb=$_POST['swoutturb'];
	$swouttemp=$_POST['swouttemp'];	
	
	$sql3b="UPDATE `engauxscrubsystems` SET 
	`sox`='$sox', `sfan`='$sfan', `swflow`='$swflow', `swinph`='$swinph',`swinpah`='$swinpah', `swintemp`='$swintemp', `swinturb`='$swinturb', `swoutph`='$swoutph', `swoutpah`='$swoutpah', `swoutturb`='$swoutturb', `swouttemp`='$swouttemp' 
	WHERE `reportnum`='$rnumber'";
	$sql_3b=mysqli_query($con,$sql3b);

	$foilpurifierpress1=$_POST['foilpurifierpress1'];
	$foilpurifierpress2=$_POST['foilpurifierpress2'];	
	$foilpurifierpress3=$_POST['foilpurifierpress3'];	
	$foilpurifierpress4=$_POST['foilpurifierpress4'];
	$loilpurifierpress1=$_POST['loilpurifierpress1'];	
	$loilpurifierpress2=$_POST['loilpurifierpress2'];		
	$loilpurifierpress3=$_POST['loilpurifierpress3'];
	$loilpurifierpress4=$_POST['loilpurifierpress4'];	
	$foilpurifiertemp1=$_POST['foilpurifiertemp1'];
	$foilpurifiertemp2=$_POST['foilpurifiertemp2'];	
	$foilpurifiertemp3=$_POST['foilpurifiertemp3'];	
	$foilpurifiertemp4=$_POST['foilpurifiertemp4'];
	$loilpurifiertemp1=$_POST['loilpurifiertemp1'];	
	$loilpurifiertemp2=$_POST['loilpurifiertemp2'];		
	$loilpurifiertemp3=$_POST['loilpurifiertemp3'];
	$loilpurifiertemp4=$_POST['loilpurifiertemp4'];	
	
	$sql4b="UPDATE `engauxpurifiersystems` SET 
	`foilpurifierpress1`='$foilpurifierpress1', `foilpurifierpress2`='$foilpurifierpress2', `foilpurifierpress3`='$foilpurifierpress3',`foilpurifierpress4`='$foilpurifierpress4', `loilpurifierpress1`='$loilpurifierpress1', 
	`loilpurifierpress2`='$loilpurifierpress2', `loilpurifierpress3`='$loilpurifierpress3', `loilpurifierpress4`='$loilpurifierpress4', `foilpurifiertemp1`='$foilpurifiertemp1', `foilpurifiertemp2`='$foilpurifiertemp2', 
	`foilpurifiertemp3`='$foilpurifiertemp3', `foilpurifiertemp4`='$foilpurifiertemp4', `loilpurifiertemp1`='$loilpurifiertemp1', `loilpurifiertemp2`='$loilpurifiertemp2',
	`loilpurifiertemp3`='$loilpurifiertemp3' , `loilpurifiertemp4`='$loilpurifiertemp4' WHERE `reportnum`='$rnumber'";
	$sql_4b=mysqli_query($con,$sql4b);

	$hshfosr=$_POST['hshfosr'];
	$vlsfosr=$_POST['vlsfosr'];	
	$ulsfosr=$_POST['ulsfosr'];	
	$hsmgosr=$_POST['hsmgosr'];
	$hsmdosr=$_POST['hsmdosr'];	
	$lsmgosr=$_POST['lsmgosr'];		
	$lsmdosr=$_POST['lsmdosr'];
	$hshfost=$_POST['hshfost'];
	$vlsfost=$_POST['vlsfost'];	
	$ulsfost=$_POST['ulsfost'];	
	$hsmgost=$_POST['hsmgost'];
	$hsmdost=$_POST['hsmdost'];	
	$lsmgost=$_POST['lsmgost'];		
	$lsmdost=$_POST['lsmdost'];	
	
	$sql5b="UPDATE `engauxtanksystems` SET 
	`hshfosr`='$hshfosr', `vlsfosr`='$vlsfosr', `ulsfosr`='$ulsfosr',`hsmgosr`='$hsmgosr', `hsmdosr`='$hsmdosr', `lsmgosr`='$lsmgosr', `lsmdosr`='$lsmdosr', `hshfost`='$hshfost', `vlsfost`='$vlsfost', `ulsfost`='$ulsfost',
	`hsmgost`='$hsmgost', `hsmdost`='$hsmdost', `lsmgost`='$lsmgost', `lsmdost`='$lsmdost'  WHERE `reportnum`='$rnumber'";
	$sql_5b=mysqli_query($con,$sql5b);

			 
			 if($sql_1b)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Systems Data Entered Successfully..!!</font></center></td><tr>';
			 }
			 
	}

//print_r($_POST);	
?>	

<br>
 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];


?>
<br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-3">

    	<table class=" table-hover" >
				<form name="slogengsystems" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="syst" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
<?php
	
		$sql2a=mysqli_query($con,"SELECT * FROM engauxwatersystems where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql2a))
		{

		//$reportnum=$row['reportnum'];
?>	
	<td colspan="2" style="font-size:16px;"><b>Sea Water Systems</b></td>	
		<tr><td><br></td></tr>
		<tr>
			<td ><small>Sea Water  Pressure</small></td>
			<td class="input-container"><input type="text" name="swsyspress" id="swsyspress" value="<?php echo $row['swsyspress'];?>" class="input-field">
			 <i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>Sea Water  Temp</small></td>
			<td class="input-container"><input type="text" name="swsystemp" id="swsystemp" value="<?php echo $row['swsystemp'];?>" class="input-field">
			 <i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small>Fire Main Line Pressure</small></td>
			<td class="input-container"><input type="text" name="firelinepress" id="firelinepress" value="<?php echo $row['firelinepress'];?>" class="input-field">
			 <i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr><td><br></td></tr>
		<tr><td  colspan="2" style="font-size:16px;"><b>Engine Room</b></td></tr>	
		<tr><td><br></td></tr>
		<tr>
			<td ><small>Engine Room Temp</small></td>
			<td class="input-container"><input type="text" name="engroompress" id="engroompress" value="<?php echo $row['engroompress'];?>" class="input-field" maxlength="5" size="7">
			 <i class="fa fa- icon"><small>&#176;c</small></i>
			</td>
		</tr>
		<tr>
			<td ><small>Engine Room Pressure</small></td>
			<td class="input-container"><input type="text" name="engroomtemp" id="engroomtemp" value="<?php echo $row['engroomtemp'];?>" class="input-field" maxlength="5" size="7">
			 <i class="fa fa- icon"><small>Bar</small></i>
			</td>
		</tr>
		<tr><td><br></td></tr>
			<td colspan="2" style="font-size:16px;"><b>Accom air temp</b></td>	
		<tr><tr><td><br></td></tr>
			<td ><small>Accom. Inlet Air Temp.</small></td>
			<td class="input-container"><input type="text" name="acairintemp" id="acairintemp" value="<?php echo $row['acairintemp'];?>" class="input-field">
			 <i class="fa fa- icon"><small>&#176;c</small></i>
			</td>
		</tr>
		<tr>
			<td ><small>Accom. Outlet Air Temp.</small></td>
			<td class="input-container"><input type="text" name="acairouttemp" id="acairouttemp" value="<?php echo $row['acairouttemp'];?>" class="input-field">
			 <i class="fa fa- icon"><small>&#176;c</small></i>
			</td>	
		</tr>
	</table>
  </div>
    <div class="col-md-4">
        <table>
           <tr><td  colspan="2" style="font-size:16px;"><b>Cooling System</b></td></tr>	
           	<tr><td><br></td></tr>
           	<tr>
			<td><small>LTPressure</small></td>
			<td class="input-container"><input type="text" name="ltcwsyspress" id="ltcwsyspress" value="<?php echo $row['ltcwsyspress'];?>" class="input-field" maxlength="5" size="7">
			 <i class="fa fa- icon"><small>Bar</small></i>
			</td>
		</tr>
		<tr>
			<td ><small>LT Temp</small></td>
			<td class="input-container"><input type="text" name="ltcwsystemp" id="ltcwsystemp" value="<?php echo $row['ltcwsystemp'];?>" class="input-field" maxlength="5" size="7">
			 <i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>

		<tr>
			<td ><small>HT Pressure</small></td>
			<td class="input-container"><input type="text" name="htcwsyspress" id="htcwsyspress" value="<?php echo $row['htcwsyspress'];?>" class="input-field" maxlength="5" size="7">
			<i class="fa fa- icon"><small>Bar</small></i></td>
 		</tr>
		<tr>
			<td ><small>HT Temp</small></td>
			<td class="input-container"><input type="text" name="htcwsystemp" id="htcwsystemp" value="<?php echo $row['htcwsystemp'];?>" class="input-field" maxlength="5" size="7">
			 <i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr><td><br></td></tr>
		<tr><td  colspan="2" style="font-size:16px;"><b>Air</b></td></tr>	
		<tr><td><br></td></tr>
		<tr>
			<td ><small>Working Air Pressure</small></td>
			<td class="input-container"><input type="text" name="workairpress" id="workairpress" value="<?php echo $row['workairpress'];?>" class="input-field">
			 <i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td><small>Control Air Pressure.</small></td>
			<td class="input-container"><input type="text" name="ctrlairpress" id="ctrlairpress" value="<?php echo $row['ctrlairpress'];?>" class="input-field">
			 <i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>Start  Air Receiver 1 Pressure</small></td>
			<td class="input-container"><input type="text" name="airrecpress1" id="airrecpress1" value="<?php echo $row['airrecpress1'];?>" class="input-field">
			 <i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>Start  Air Receiver 2 Pressure</small></td>
			<td class="input-container"><input type="text" name="airrecpress2" id="airrecpress2" value="<?php echo $row['airrecpress2'];?>" class="input-field" maxlength="5" size="7">
			 <i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>	
		<tr>
			<td ><small>Start  Air Receiver 3 Pressure</small></td>
			<td class="input-container"><input type="text" name="airrecpress3" id="airrecpress3" value="<?php echo $row['airrecpress3'];?>" class="input-field" maxlength="5" size="7">
			 <i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>	
	</table>
    </div>
   <div class="col-md-3">
       <table>
           <tr><td  colspan="5" style="font-size:16px;"><b>Fresh Water Generator</b></td></tr>		
			<tr><tr><td><br></td></tr>
			<td ><small>In Operation</small></td>
			<td class="input-container">  
				<input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;">Yes</span>
			</td>
		</tr>
		<tr>
			<td ><small>JW In Temp</small></td>
			<td class="input-container"><input type="text" name="jwintemp" id="jwintemp" value="<?php echo $row['jwintemp'];?>" class="input-field">
			<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small>JW Out Temp</small></td>
			<td class="input-container"><input type="text" name="jwouttemp" id="jwouttemp" value="<?php echo $row['jwouttemp'];?>" class="input-field">
			<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small>Condenser SW In</small></td>
			<td class="input-container"><input type="text" name="condswin" id="condswin" value="<?php echo $row['condswin'];?>" class="input-field">
			<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small>Condenser SW Out</small></td>
			<td class="input-container"><input type="text" name="condswout" id="condswout" value="<?php echo $row['condswout'];?>" class="input-field">
			<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small>Shell Temperature</small></td>
			<td class="input-container"><input type="text" name="shelltemp" id="shelltemp" value="<?php echo $row['shelltemp'];?>" class="input-field">
			<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small>Ejector Pump Pressure</small></td>
			<td class="input-container"><input type="text" name="ejpumppress" id="ejpumppress" value="<?php echo $row['ejpumppress'];?>" class="input-field">
			<i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		</tr>
		<tr>
			<td ><small>Fresh Water Pump Pressure</small></td>
			<td class="input-container"><input type="text" name="fwpumppress" id="fwpumppress" value="<?php echo $row['fwpumppress'];?>" class="input-field">
			<i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>Flow Meter Reading</small></td>
			<td class="input-container"><input type="text" name="flowmeter" id="flowmeter" value="<?php echo $row['flowmeter'];?>" class="input-field">
		</td>
		</tr>
		<tr>
			<td ><small>Tons. Produced</small></td>
			<td class="input-container"><input type="text" name="tonsprod" id="tonsprod" value="<?php echo $row['tonsprod'];?>" class="input-field">
			<i class="fa fa- icon"><small>MT</small></i></td>
		</tr>
     </table>
       
</div>
</div>
<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-3">
      <table>
         <tr><tr><td><br></td></tr>	<tr><td><br></td></tr>
			<td  colspan="3" style="font-size:16px;"><b>Accomodation Air Condition </b></td></tr> 			
		<tr><tr><td><br></td></tr>	
<?php
}
	$sql2v=mysqli_query($con,"SELECT * FROM engauxacsystems where reportnum =$reportnum ");

	while($row=mysqli_fetch_array($sql2v))
	{

	//$reportnum=$row['reportnum'];
?>				
		<tr>
			<td ><small></small></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>#1</b></small></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>#2</b></small></td>
		</tr>
		<tr>
			<td ><small>In Operation</small></td>
			<td >  
					 <input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;"><small>Yes</small></span>
			</td>
			<td>  
					<input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;"><small>Yes</small></span>
			</td>				
		</tr>
		<tr>
			<td ><small>Suction Pressure</small></td>
			<td><input type="text" name="acsuctpress1" id="acsuctpress1" value="<?php echo $row['acsuctpress1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="acsuctpress2" id="acsuctpress2" value="<?php echo $row['acsuctpress2'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>Discharge Pressure</small></td>
			<td><input type="text" name="acdispress1" id="acdispress1" value="<?php echo $row['acdispress1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="acdispress2" id="acdispress2" value="<?php echo $row['acdispress2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>LO Pressure</small></td>
			<td><input type="text" name="aclopress1" id="aclopress1" value="<?php echo $row['aclopress1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aclopress2" id="aclopress2" value="<?php echo $row['aclopress2'];?>" class="input-field" maxlength="5" size="7">	</td>
			<td><i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>Oil Level</small></td>
			<td><select name="acoillevel1"   id="acoillevel1" value="<?php echo $row['acoillevel1'];?>" class="form-control" >
					<option>	<option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
				</select></td>
			<td><select name="acoillevel2"   id="acoillevel2" value="<?php echo $row['acoillevel2'];?>" class="form-control" >
					<option><option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
					</select></td>
		</tr>
		<tr>
			<td ><small>Liquid Level</small></td>
			<td><select name="acliqlevel1"   id="acliqlevel1" value="<?php echo $row['acliqlevel1'];?>" class="form-control" >
					<option><option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
					</select>
			</td>
			<td><select name="acliqlevel2"   id="acliqlevel2" value="<?php echo $row['acliqlevel2'];?>" class="form-control" >
					<option><option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
					</select>
			</td>
		</tr>
			</table>

</div>
      
<div class="col-md-4">
        <table class=" table-hover" >	
		
		<tr>	<tr><td><br></td></tr>	<tr><td><br></td></tr>
			<td  colspan="3" style="font-size:16px;"><b>Domestic Reefer</b></td></tr>			
		<tr><td><br></td></tr>
		<tr>
			<td ><small></small></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>#1</b></small></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>#2</b></small></td>
		</tr>
		<tr>	<td ><small>In Operation</small></td>
			<td >  
				 <input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;"><small>Yes</small></span>
			</td>
			<td>  
				<input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;"><small>Yes</small></span>
			</td>				
		</tr>
		<tr>
			<td><small>Suction Pressure</small></td>
			<td><input type="text" name="reefsucpress1" id="reefsucpress1" value="<?php echo $row['reefsucpress1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="reefsucpress2" id="reefsucpress2" value="<?php echo $row['reefsucpress2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>Discharge Pressure</small></td>
			<td><input type="text" name="reefdispress1" id="reefdispress1" value="<?php echo $row['reefdispress1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="reefdispress2" id="reefdispress2" value="<?php echo $row['reefdispress2'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><i class="fa fa- icon"><small>Bar</small></i></td>
		</tr>
		<tr>
			<td ><small>LO Pressure</small></td>
			<td><input type="text" name="reeflopress1" id="reeflopress1" value="<?php echo $row['reeflopress1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="reeflopress2" id="reeflopress2" value="<?php echo $row['reeflopress2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>Bar</small></i>
			</td>
		</tr>
		<tr>
			<td ><small>Oil Level</small></td>
			<td><select name="reefoillevel1"   id="reefoillevel1" value="<?php echo $row['reefoillevel1'];?>" class="form-control" >
					<option><option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
					</select>
			</td>
			<td><select name="reefoillevel2"   id="reefoillevel2" value="<?php echo $row['reefoillevel2'];?>" class="form-control" >
					<option><option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
					</select>
			</td>
		</tr>
		<tr>
			<td ><small>Liquid Level</small></td>
			<td><select name="reefliqlevel1"   id="reefliqlevel1" value="<?php echo $row['reefliqlevel1'];?>" class="form-control" >
					<option><option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
					</select>
			</td>
			<td><select name="reefliqlevel2"   id="reefliqlevel2" value="<?php echo $row['reefliqlevel2'];?>" class="form-control" >
					<option><option>Normal</option></option>
					<option>Low</option>
					<option>High</option>
					</select></td>
		</tr>
	</table>
</div>
      
<div class="col-md-3"> 
    <table>
        <tr>	<tr><td><br></td></tr>	<tr><td><br></td></tr>
			<td  colspan="3" style="font-size:16px; padding-left:40px;"><b>Room Temperature</b></td></tr>			
		<tr><td><br></td></tr>
		<tr>
            <td ></td>
			<td> <small><b>Veg Room</b></small></td>
			<td > <small><b>Meat Room</b></small></td>
		</tr>
		<tr>
            <td ><small><b>#1</b>&nbsp;&nbsp;</small></td>
				<td><input type="text" name="vegrtemp1" id="vegrtemp1" value="<?php echo $row['vegrtemp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="meatrtemp1" id="meatrtemp1" value="<?php echo $row['meatrtemp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small><b>#2</b>&nbsp;&nbsp;</small></td>
			<td><input type="text" name="vegrtemp2" id="vegrtemp2" value="<?php echo $row['vegrtemp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="meatrtemp2" id="meatrtemp2" value="<?php echo $row['meatrtemp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small><b>#3</b>&nbsp;&nbsp;</small></td>
			<td><input type="text" name="vegrtemp3" id="vegrtemp3" value="<?php echo $row['vegrtemp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="meatrtemp3" id="meatrtemp3" value="<?php echo $row['meatrtemp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td  ><small><b>#4</b>&nbsp;&nbsp;</small></td>
			<td><input type="text" name="vegrtemp4" id="vegrtemp4" value="<?php echo $row['vegrtemp4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="meatrtemp4" id="meatrtemp4" value="<?php echo $row['meatrtemp4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td  ><small><b>#5</b>&nbsp;&nbsp;</small></td>
			<td><input type="text" name="vegrtemp5" id="vegrtemp5" value="<?php echo $row['vegrtemp5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="meatrtemp5" id="meatrtemp5" value="<?php echo $row['meatrtemp5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
			
		</tr>
		<tr>
			<td ><small><b>#6</b>&nbsp;&nbsp;</small></td>
			<td><input type="text" name="vegrtemp6" id="vegrtemp6" value="<?php echo $row['vegrtemp6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="meatrtemp6" id="meatrtemp6" value="<?php echo $row['meatrtemp6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
</table>
</div>
</div>
	  
<?php
}	
		$sql2c=mysqli_query($con,"SELECT * FROM engauxscrubsystems where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql2c))
		{

		//$reportnum=$row['reportnum'];
?>	
<div class="row" id="copycontent">
<div class="col-md-2">1 of 4</div>
<div class="col-md-3">
    <table>
     <tr><td><br></td></tr>
     <tr><td  colspan="2" style="font-size:16px;"><b>Scrubber</b></td></tr>	<tr><td><br></td></tr>
	<tr><td ><small>Scrubber Operated</small></td>	
		<td>  
			<input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['scruboper'];?>">&nbsp;<span style="font-size:16px;"><small>Yes</small></span>
		</td>
	</tr>		
	<tr>
			<td ><small>SOx</small></td>
			<td><input type="text" name="sox" id="sox" value="<?php echo $row['sox'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" style="padding-left: 25px;padding-right: 22px;"><small>%</small></i></td>
	</tr>
	<tr>
			<td ><small>SW Flow</small></td>
			<td><input type="text" name="swflow" id="swflow" value="<?php echo $row['swflow'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>MT/Hr</small></i></td>
	</tr>
	<tr>
			<td ><small>Sealing Air Fan </small></td>
			<td><input type="text" name="sfan" id="sfan" value="<?php echo $row['sfan'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" style="padding-left: 15px;padding-right: 12px;"><small>Amps</small></i></td>
	</tr>
	<tr>
			<td ><small></small></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>Inlet</b></small></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><b>Outlet</b></small></td>
		</tr>
		<tr>
			<td ><small>pH</small></td>
			<td><input type="text" name="swinph" id="swinph" value="<?php echo $row['swinph'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="swoutph" id="swoutph" value="<?php echo $row['swoutph'];?>" class="input-field" maxlength="5" size="7"></td>
		</tr>
		<tr>
			<td ><small>pAH</small></td>
			<td><input type="text" name="swinpah" id="swinpah" value="<?php echo $row['swinpah'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="swoutpah" id="swoutpah" value="<?php echo $row['swoutpah'];?>" class="input-field" maxlength="5" size="7"></td>
		</tr>
		<tr>
			<td ><small>Temp</small></td>
			<td><input type="text" name="swintemp" id="swintemp" value="<?php echo $row['swintemp'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="swouttemp" id="swouttemp" value="<?php echo $row['swouttemp'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
		</tr>
		<tr>
			<td ><small>Turbidity</small></td>
			<td><input type="text" name="swinturb" id="swinturb" value="<?php echo $row['swinturb'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="swoutturb" id="swoutturb" value="<?php echo $row['swoutturb'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>NTU</small></i></td>
		</tr>
</table>
</div>
	  
	  
<div class="col-md-7">
<table>
	<tr><td>	<br></td></tr><tr>
    <tr><td id="numaligncenter" colspan="2" style="font-size:16px;"><b>Purifier</b></td></tr><tr><td><br></td></tr>
	   
<?php
}	
		$sql2d=mysqli_query($con,"SELECT * FROM engauxpurifiersystems where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql2d))
		{

		//$reportnum=$row['reportnum'];
?>	
	<tr>
		<td id="numaligncenter"  style="font-size:15px;"></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;FO # 1</b></small></td>			
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;FO # 2</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;FO # 3</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;FO # 4</b></small></td>			
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;LO # 1</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;LO # 2</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;LO # 3</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>&nbsp;&nbsp;LO # 4</b></small></td>
	</tr>
	
	<tr>
		<td id="numaligncenter"><small>Feed Inlet Temp</small></td>
		<td><input type="text" name="foilpurifiertemp1" id="foilpurifiertemp1" value="<?php echo $row['foilpurifiertemp1'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="foilpurifiertemp2" id="foilpurifiertemp2" value="<?php echo $row['foilpurifiertemp2'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="foilpurifiertemp3" id="foilpurifiertemp3" value="<?php echo $row['foilpurifiertemp3'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="foilpurifiertemp4" id="foilpurifiertemp4" value="<?php echo $row['foilpurifiertemp4'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifiertemp1" id="loilpurifiertemp1" value="<?php echo $row['loilpurifiertemp1'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifiertemp2" id="loilpurifiertemp2" value="<?php echo $row['loilpurifiertemp2'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifiertemp3" id="loilpurifiertemp3" value="<?php echo $row['loilpurifiertemp3'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifiertemp4" id="loilpurifiertemp4" value="<?php echo $row['loilpurifiertemp4'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
	</tr>
	<tr>
		<td id="numaligncenter"><small>Back Pressure</small></td>
		<td><input type="text" name="foilpurifierpress1" id="foilpurifierpress1" value="<?php echo $row['foilpurifierpress1'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="foilpurifierpress2" id="foilpurifierpress2" value="<?php echo $row['foilpurifierpress2'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="foilpurifierpress3" id="foilpurifierpress3" value="<?php echo $row['foilpurifierpress3'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="foilpurifierpress4" id="foilpurifierpress4" value="<?php echo $row['foilpurifierpress4'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifierpress1" id="loilpurifierpress1" value="<?php echo $row['loilpurifierpress1'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifierpress2" id="loilpurifierpress2" value="<?php echo $row['loilpurifierpress2'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifierpress3" id="loilpurifierpress3" value="<?php echo $row['loilpurifierpress3'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="loilpurifierpress4" id="loilpurifierpress4" value="<?php echo $row['loilpurifierpress4'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
</table>
            
<table>
		<tr><td>	<br></td></tr><tr>
		<tr><td id="numaligncenter" colspan="2" style="font-size:16px;"><b>Tank Temperature</b></td></tr><tr><td><br></td></tr>
<?php
}	
		$sql2e=mysqli_query($con,"SELECT * FROM engauxtanksystems where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql2e))
		{

		//$reportnum=$row['reportnum'];
?>	
	<tr>
		<td id="numaligncenter"  style="font-size:15px;"></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>HSHFO</b></small></td>			
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>VLSFO</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>ULSFO</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>HSMGO</b></small></td>			
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>HSMDO</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>LSMGO</b></small></td>
		<td id="numaligncenter"  style="font-size:15px;"><small>&nbsp;&nbsp;<b>LSMDO</b></small></td>
	</tr>
	

	<tr>
		<td id="numaligncenter"><small>Service Tank</small></td>
		<td><input type="text" name="hshfosr" id="hshfosr" value="<?php echo $row['hshfosr'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="vlsfosr" id="vlsfosr" value="<?php echo $row['vlsfosr'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="ulsfosr" id="ulsfosr" value="<?php echo $row['ulsfosr'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="hsmgosr" id="hsmgosr" value="<?php echo $row['hsmgosr'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="hsmdosr" id="hsmdosr" value="<?php echo $row['hsmdosr'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="lsmgosr" id="lsmgosr" value="<?php echo $row['lsmgosr'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="lsmdosr" id="lsmdosr" value="<?php echo $row['lsmdosr'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>	
	</tr>
	<tr>
		<td id="numaligncenter"><small>Settling Tank</small></td>
		<td><input type="text" name="hshfost" id="hshfost" value="<?php echo $row['hshfost'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="vlsfost" id="vlsfost" value="<?php echo $row['vlsfost'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="ulsfost" id="ulsfost" value="<?php echo $row['ulsfost'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="hsmgost" id="hsmgost" value="<?php echo $row['hsmgost'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="hsmdost" id="hsmdost" value="<?php echo $row['hsmdost'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="lsmgost" id="lsmgost" value="<?php echo $row['lsmgost'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><input type="text" name="lsmdost" id="lsmdost" value="<?php echo $row['lsmdost'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon"><small>&#176;c</small></i></td>
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
			 <button type="submit" name="srauxsystem" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		</div>
	</div>
</form>
    <?php
}
}
?>
 
 <br><br>
    