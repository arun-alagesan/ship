<br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-3">
 
<?php

if($_POST['srmengine'])
{
	$engnum=$_POST['engnum'];	
	$revcounter=$_POST['revcounter'];
	$engrpm=$_POST['engrpm'];
	$torque=$_POST['torque'];
	$power=$_POST['power'];	
	$fuellevel=$_POST['fuellevel'];
	$loadindex=$_POST['loadindex'];
	$govindex=$_POST['govindex'];
	
	$lotemp=$_POST['lotemp'];	
	$lopress=$_POST['lopress'];
	$lochtemp=$_POST['lochtemp'];
	$lochpress=$_POST['lochpress'];
	$losumplevel=$_POST['losumplevel'];
	$fointemp=$_POST['fointemp'];
	$foinpress=$_POST['foinpress'];
	$fodp=$_POST['fodp'];
	$fovisc=$_POST['fovisc'];
	
	$startairpress=$_POST['startairpress'];	
	$conairpress=$_POST['conairpress'];
	$spairpress=$_POST['spairpress'];
	$stloinpress=$_POST['stloinpress'];
	$stanklevel=$_POST['stanklevel'];
	$stgravityh=$_POST['stgravityh'];
	$stgravityl=$_POST['stgravityl'];
	$stbr1temp=$_POST['stbr1temp'];
	$stbr2temp=$_POST['stbr2temp'];
		
	$tbheadtemp=$_POST['tbheadtemp'];	
	$tbastemp=$_POST['tbastemp'];
	$sb1=$_POST['sb1'];
	$sb2=$_POST['sb2'];
	$sb3=$_POST['sb3'];
	$sb4=$_POST['sb4'];
	$sb5=$_POST['sb5'];
	$sb6=$_POST['sb6'];
	$sb7=$_POST['sb7'];	
	$sb8=$_POST['sb8'];		
		
	$cwinpress=$_POST['cwinpress'];
	$cwintemp=$_POST['cwintemp'];
	$cwcyltemp1=$_POST['cwcyltemp1'];
	$cwcyltemp2=$_POST['cwcyltemp2'];
	$cwcyltemp3=$_POST['cwcyltemp3'];
	$cwcyltemp4=$_POST['cwcyltemp4'];
	$cwcyltemp5=$_POST['cwcyltemp5'];	
	$cwcyltemp6=$_POST['cwcyltemp6'];			
	$cwcyltemp7=$_POST['cwcyltemp7'];
	$cwcyltemp8=$_POST['cwcyltemp8'];
	$cwcyltemp9=$_POST['cwcyltemp9'];
	$cwcyltemp10=$_POST['cwcyltemp10'];
	$cwcyltemp11=$_POST['cwcyltemp11'];
	$cwcyltemp12=$_POST['cwcyltemp12'];
	$cwcyltemp13=$_POST['cwcyltemp13'];	
	$cwcyltemp14=$_POST['cwcyltemp14'];			
	$cwcyltemp15=$_POST['cwcyltemp15'];	
	$cwcyltempavg=$_POST['cwcyltempavg'];			
		
	$pcinpress=$_POST['pcinpress'];
	$pcintemp=$_POST['pcintemp'];
	$pccyltemp1=$_POST['pccyltemp1'];
	$pccyltemp2=$_POST['pccyltemp2'];
	$pccyltemp3=$_POST['pccyltemp3'];
	$pccyltemp4=$_POST['pccyltemp4'];
	$pccyltemp5=$_POST['pccyltemp5'];	
	$pccyltemp6=$_POST['pccyltemp6'];			
	$pccyltemp7=$_POST['pccyltemp7'];
	$pccyltemp8=$_POST['pccyltemp8'];
	$pccyltemp9=$_POST['pccyltemp9'];
	$pccyltemp10=$_POST['pccyltemp10'];
	$pccyltemp11=$_POST['pccyltemp11'];
	$pccyltemp12=$_POST['pccyltemp12'];
	$pccyltemp13=$_POST['pccyltemp13'];	
	$pccyltemp14=$_POST['pccyltemp14'];			
	$pccyltemp15=$_POST['pccyltemp15'];	
	$pccyltempavg=$_POST['pccyltempavg'];					
		
	$excyltemp1=$_POST['excyltemp1'];
	$excyltemp2=$_POST['excyltemp2'];
	$excyltemp3=$_POST['excyltemp3'];
	$excyltemp4=$_POST['excyltemp4'];
	$excyltemp5=$_POST['excyltemp5'];	
	$excyltemp6=$_POST['excyltemp6'];			
	$excyltemp7=$_POST['excyltemp7'];
	$excyltemp8=$_POST['excyltemp8'];
	$excyltemp9=$_POST['excyltemp9'];
	$excyltemp10=$_POST['excyltemp10'];
	$excyltemp11=$_POST['excyltemp11'];
	$excyltemp12=$_POST['excyltemp12'];
	$excyltemp13=$_POST['excyltemp13'];	
	$excyltemp14=$_POST['excyltemp14'];			
	$excyltemp15=$_POST['excyltemp15'];	
	$excyltempavg=$_POST['excyltempavg'];			
		
	$exrecpress1=$_POST['exrecpress1'];
	$exrectemp1=$_POST['exrectemp1'];
	$extemptcin1=$_POST['extemptcin1'];
	$extemptcout1=$_POST['extemptcout1'];
	$inletair1=$_POST['inletair1'];
	$tcrpm1=$_POST['tcrpm1'];
	$airfilterdp1=$_POST['airfilterdp1'];	
	
	$exrecpress2=$_POST['exrecpress2'];
	$exrectemp2=$_POST['exrectemp2'];
	$extemptcin2=$_POST['extemptcin2'];
	$extemptcout2=$_POST['extemptcout2'];
	$inletair2=$_POST['inletair2'];
	$tcrpm2=$_POST['tcrpm2'];
	$airfilterdp2=$_POST['airfilterdp2'];		
	
	$exrecpress3=$_POST['exrecpress3'];
	$exrectemp3=$_POST['exrectemp3'];
	$extemptcin3=$_POST['extemptcin3'];
	$extemptcout3=$_POST['extemptcout3'];
	$inletair3=$_POST['inletair3'];
	$tcrpm3=$_POST['tcrpm3'];
	$airfilterdp3=$_POST['airfilterdp3'];	
	
	$exrecpress4=$_POST['exrecpress4'];
	$exrectemp4=$_POST['exrectemp4'];
	$extemptcin4=$_POST['extemptcin4'];
	$extemptcout4=$_POST['extemptcout4'];
	$inletair4=$_POST['inletair4'];
	$tcrpm4=$_POST['tcrpm4'];
	$airfilterdp4=$_POST['airfilterdp4'];

	$airin4=$_POST['airin4'];
	$airout4=$_POST['airout4'];
	$coolwaterin4=$_POST['coolwaterin4'];
	$coolwaterout4=$_POST['coolwaterout4'];
	$scavcooldp4=$_POST['scavcooldp4'];
	$scavrecpress4=$_POST['scavrecpress4'];
	$scavrectemp4=$_POST['scavrectemp4'];	
	
	$airin3=$_POST['airin3'];
	$airout3=$_POST['airout3'];
	$coolwaterin3=$_POST['coolwaterin3'];
	$coolwaterout3=$_POST['coolwaterout3'];
	$scavcooldp3=$_POST['scavcooldp3'];
	$scavrecpress3=$_POST['scavrecpress3'];
	$scavrectemp3=$_POST['scavrectemp3'];	
	
	$airin2=$_POST['airin2'];
	$airout2=$_POST['airout2'];
	$coolwaterin2=$_POST['coolwaterin2'];
	$coolwaterout2=$_POST['coolwaterout2'];
	$scavcooldp2=$_POST['scavcooldp2'];
	$scavrecpress2=$_POST['scavrecpress2'];
	$scavrectemp2=$_POST['scavrectemp2'];		
	
	$airin1=$_POST['airin1'];
	$airout1=$_POST['airout1'];
	$coolwaterin1=$_POST['coolwaterin1'];
	$coolwaterout1=$_POST['coolwaterout1'];
	$scavcooldp1=$_POST['scavcooldp1'];
	$scavrecpress1=$_POST['scavrecpress1'];
	$scavrectemp1=$_POST['scavrectemp1'];	
	
	$reportnumber=$_POST['reportnumber'];
	$rnumber=$_POST['rnumber'];
	
	
	 $sql15="UPDATE `engscav1` SET 
	`airin`='$airin1', `airout`='$airout1', `coolwaterin`='$coolwaterin1',`coolwaterout`='$coolwaterout1', `scavcooldp`='$scavcooldp1', `scavrecpress`='$scavrecpress1', `scavrectemp`='$scavrectemp1'  WHERE `reportnum`='$rnumber'";
	 
	
/* 	 $sql14="INSERT INTO `engscav1` (`airin`,`airout`, `coolwaterin`, `coolwaterout`, `scavcooldp`, `scavrecpress`, `scavrectemp`) 
	 VALUES ('$airin1','$airout1','$coolwaterin1','$coolwaterout1','$scavcooldp1','$scavrecpress1','$scavrectemp1')";
	  */
	 $sql_15=mysqli_query($con,$sql15);
	 
	 if($sql_15)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Scavenge System 1 Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 			
	 $sql14="UPDATE `engscav2` SET 
	`airin`='$airin2', `airout`='$airout2', `coolwaterin`='$coolwaterin2',`coolwaterout`='$coolwaterout2', `scavcooldp`='$scavcooldp2', `scavrecpress`='$scavrecpress2', `scavrectemp`='$scavrectemp2'  WHERE `reportnum`='$rnumber'";
	 
/* 	 $sql14="INSERT INTO `engscav2` (`airin`,`airout`, `coolwaterin`, `coolwaterout`, `scavcooldp`, `scavrecpress`, `scavrectemp`) 
	 VALUES ('$airin2','$airout2','$coolwaterin2','$coolwaterout2','$scavcooldp2','$scavrecpress2','$scavrectemp2')";
	  */
	 $sql_14=mysqli_query($con,$sql14);
	 
	 if($sql_14)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Scavenge System 2 Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 
	 $sql13="UPDATE `engscav3` SET 
	`airin`='$airin3', `airout`='$airout3', `coolwaterin`='$coolwaterin3',`coolwaterout`='$coolwaterout3', `scavcooldp`='$scavcooldp3', `scavrecpress`='$scavrecpress3', `scavrectemp`='$scavrectemp3'  WHERE `reportnum`='$rnumber'";
	 	 
/* 	 $sql13="INSERT INTO `engscav3` (`airin`,`airout`, `coolwaterin`, `coolwaterout`, `scavcooldp`, `scavrecpress`, `scavrectemp`) 
	 VALUES ('$airin3','$airout3','$coolwaterin3','$coolwaterout3','$scavcooldp3','$scavrecpress3','$scavrectemp3')";
	  */
	 $sql_13=mysqli_query($con,$sql13);
	 
	 if($sql_13)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Scavenge System 3 Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 
	 $sql12="UPDATE `engscav4` SET 
	`airin`='$airin4', `airout`='$airout4', `coolwaterin`='$coolwaterin4',`coolwaterout`='$coolwaterout4', `scavcooldp`='$scavcooldp4', `scavrecpress`='$scavrecpress4', `scavrectemp`='$scavrectemp4'  WHERE `reportnum`='$rnumber'";
	 	 
/* 	 $sql12="INSERT INTO `engscav4` (`airin`,`airout`, `coolwaterin`, `coolwaterout`, `scavcooldp`, `scavrecpress`, `scavrectemp`) 
	 VALUES ('$airin4','$airout4','$coolwaterin4','$coolwaterout4','$scavcooldp4','$scavrecpress4','$scavrectemp4')";
	  */
	 $sql_12=mysqli_query($con,$sql12);
	 
	 if($sql_12)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Scavenge System 4 Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 		
	
	 $sql11="UPDATE `engtc4` SET 
	`exrecpress`='$exrecpress4', `exrectemp`='$exrectemp4', `extemptcin`='$extemptcin4',`extemptcout`='$extemptcout4', `inletair`='$inletair4', `tcrpm`='$tcrpm4', `airfilterdp`='$airfilterdp4'  WHERE `reportnum`='$rnumber'";
	 
/* 	 $sql11="INSERT INTO `engtc4` (`exrecpress`,`exrectemp`, `extemptcin`, `extemptcout`, `inletair`, `tcrpm`, `airfilterdp`) 
	 VALUES ('$exrecpress4','$exrectemp4','$extemptcin4','$extemptcout4','$inletair4','$tcrpm4','$airfilterdp4')";
	  */
	 $sql_11=mysqli_query($con,$sql11);
	 
	 if($sql_11)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 4 Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 
	 $sql10="UPDATE `engtc3` SET 
	`exrecpress`='$exrecpress3', `exrectemp`='$exrectemp3', `extemptcin`='$extemptcin3',`extemptcout`='$extemptcout3', `inletair`='$inletair3', `tcrpm`='$tcrpm3', `airfilterdp`='$airfilterdp3'  WHERE `reportnum`='$rnumber'";
	 	 
/* 	 $sql10="INSERT INTO `engtc3` (`exrecpress`,`exrectemp`, `extemptcin`, `extemptcout`, `inletair`, `tcrpm`, `airfilterdp`) 
	 VALUES ('$exrecpress3','$exrectemp3','$extemptcin3','$extemptcout3','$inletair3','$tcrpm3','$airfilterdp3')";
	  */
	 $sql_10=mysqli_query($con,$sql10);
	 
	 if($sql_10)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 3 Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 
	 $sql9="UPDATE `engtc2` SET 
	`exrecpress`='$exrecpress2', `exrectemp`='$exrectemp2', `extemptcin`='$extemptcin2',`extemptcout`='$extemptcout2', `inletair`='$inletair2', `tcrpm`='$tcrpm2', `airfilterdp`='$airfilterdp2'  WHERE `reportnum`='$rnumber'";
	 
/* 	 $sql9="INSERT INTO `engtc2` (`exrecpress`,`exrectemp`, `extemptcin`, `extemptcout`, `inletair`, `tcrpm`, `airfilterdp`) 
	 VALUES ('$exrecpress2','$exrectemp2','$extemptcin2','$extemptcout2','$inletair2','$tcrpm2','$airfilterdp2')";
	  */
	 $sql_9=mysqli_query($con,$sql9);
	 
	 if($sql_9)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 2 Data Entered Successfully..!!</font></center></td><tr>';
	 }	
	 
	 $sql8="UPDATE `engtc1` SET 
	`exrecpress`='$exrecpress1', `exrectemp`='$exrectemp1', `extemptcin`='$extemptcin1',`extemptcout`='$extemptcout1', `inletair`='$inletair1', `tcrpm`='$tcrpm1', `airfilterdp`='$airfilterdp1'  WHERE `reportnum`='$rnumber'";
	 
/* 	 $sql8="INSERT INTO `engtc1` (`exrecpress`,`exrectemp`, `extemptcin`, `extemptcout`, `inletair`, `tcrpm`, `airfilterdp`) 
	 VALUES ('$exrecpress1','$exrectemp1','$extemptcin1','$extemptcout1','$inletair1','$tcrpm1','$airfilterdp1')";
	  */
	 $sql_8=mysqli_query($con,$sql8);
	 
	 if($sql_8)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 1 Data Entered Successfully..!!</font></center></td><tr>';
	 }
	
	 $sql7="UPDATE `engexhsystem` SET 
	`excyltemp1`='$excyltemp1', `excyltemp2`='$excyltemp2', `excyltemp3`='$excyltemp3',`excyltemp4`='$excyltemp4', `excyltemp5`='$excyltemp5', `excyltemp6`='$excyltemp6', `excyltemp7`='$excyltemp7', `excyltemp8`='$excyltemp8', `excyltemp9`='$excyltemp9',`excyltemp10`='$excyltemp10', `excyltemp11`='$excyltemp11', `excyltemp12`='$excyltemp12', `excyltemp13`='$excyltemp13', `excyltemp14`='$excyltemp14', `excyltemp15`='$excyltemp15', `excyltempavg`='$excyltempavg' WHERE `reportnum`='$rnumber'";
	 	
/* 	 $sql7="INSERT INTO `engexhsystem` (`excyltemp1`, `excyltemp2`, `excyltemp3`, `excyltemp4`, `excyltemp5`, `excyltemp6`, `excyltemp7`, `excyltemp8`,`excyltemp9`, `excyltemp10`, `excyltemp11`, `excyltemp12`, `excyltemp13`, `excyltemp14`, `excyltemp15`, `excyltempavg`) 
	 VALUES ('$excyltemp1','$excyltemp2','$excyltemp3','$excyltemp4','$excyltemp5','$excyltemp6','$excyltemp7','$excyltemp8','$excyltemp9','$excyltemp10','$excyltemp11','$excyltemp12','$excyltemp13','$excyltemp14','$excyltemp15','$excyltempavg')";
	  */
	 $sql_7=mysqli_query($con,$sql7);
	 
	 if($sql_7)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Exhaust System Data Entered Successfully..!!</font></center></td><tr>';
	 }
	
	 $sql6="UPDATE `engpistoncool` SET 
	`pcinpress`='$pcinpress', `pcintemp`='$pcintemp',`pccyltemp1`='$pccyltemp1', `pccyltemp2`='$pccyltemp2', `pccyltemp3`='$pccyltemp3',`pccyltemp4`='$pccyltemp4', `pccyltemp5`='$pccyltemp5', `pccyltemp6`='$pccyltemp6', `pccyltemp7`='$pccyltemp7', `pccyltemp8`='$pccyltemp8', `pccyltemp9`='$pccyltemp9',`pccyltemp10`='$pccyltemp10', `pccyltemp11`='$pccyltemp11', `pccyltemp12`='$pccyltemp12', `pccyltemp13`='$pccyltemp13', `pccyltemp14`='$pccyltemp14', `pccyltemp15`='$pccyltemp15', `pccyltempavg`='$pccyltempavg' WHERE `reportnum`='$rnumber'";
	
/* 	 $sql6="INSERT INTO `engpistoncool` (`pcinpress`,`pcintemp`, `pccyltemp1`, `pccyltemp2`, `pccyltemp3`, `pccyltemp4`, `pccyltemp5`, `pccyltemp6`, `pccyltemp7`, `pccyltemp8`,`pccyltemp9`, `pccyltemp10`, `pccyltemp11`, `pccyltemp12`, `pccyltemp13`, `pccyltemp14`, `pccyltemp15`, `pccyltempavg`) 
	 VALUES ('$pcinpress','$pcintemp','$pccyltemp1`','$pccyltemp2','$pccyltemp3','$pccyltemp4','$pccyltemp5','$pccyltemp6','$pccyltemp7','$pccyltemp8','$pccyltemp9','$pccyltemp10`','$pccyltemp11','$pccyltemp12','$pccyltemp13','$pccyltemp14','$pccyltemp15','$pccyltempavg')";
	  */
	 $sql_6=mysqli_query($con,$sql6);
	 
	 if($sql_6)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Piston Cooling Data Entered Successfully..!!</font></center></td><tr>';
	 }
						
	 $sql5="UPDATE `engcoolwater` SET 
	`cwinpress`='$cwinpress', `cwintemp`='$cwintemp',`cwcyltemp1`='$cwcyltemp1', `cwcyltemp2`='$cwcyltemp2', `cwcyltemp3`='$cwcyltemp3',`cwcyltemp4`='$cwcyltemp4', `cwcyltemp5`='$cwcyltemp5', `cwcyltemp6`='$cwcyltemp6', `cwcyltemp7`='$cwcyltemp7', `cwcyltemp8`='$cwcyltemp8', `cwcyltemp9`='$cwcyltemp9',`cwcyltemp10`='$cwcyltemp10', `cwcyltemp11`='$cwcyltemp11', `cwcyltemp12`='$cwcyltemp12', `cwcyltemp13`='$cwcyltemp13', `cwcyltemp14`='$cwcyltemp14', `cwcyltemp15`='$cwcyltemp15', `cwcyltempavg`='$cwcyltempavg' WHERE `reportnum`='$rnumber'";
		
/* 	 $sql5="INSERT INTO `engcoolwater` (`cwinpress`,`cwintemp`, `cwcyltemp1`, `cwcyltemp2`, `cwcyltemp3`, `cwcyltemp4`, `cwcyltemp5`, `cwcyltemp6`, `cwcyltemp7`, `cwcyltemp8`,`cwcyltemp9`, `cwcyltemp10`, `cwcyltemp11`, `cwcyltemp12`, `cwcyltemp13`, `cwcyltemp14`, `cwcyltemp15`, `cwcyltempavg`) 
	 VALUES ('$cwinpress','$cwintemp','$cwcyltemp1`','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2`','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltemp2','$cwcyltempavg')";
	  */
	 $sql_5=mysqli_query($con,$sql5);
	 
	 if($sql_5)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Bearings Data Entered Successfully..!!</font></center></td><tr>';
	 }
				
	$sql4="UPDATE `engbearing` SET 
	`tbheadtemp`='$tbheadtemp', `tbastemp`='$tbastemp',`sb1`='$sb1', `sb2`='$sb2', `sb3`='$sb3',`sb4`='$sb4', `sb5`='$sb5', `sb6`='$sb6', `sb7`='$sb7', `sb8`='$sb8' WHERE `reportnum`='$rnumber'";
			
/* 	 $sql4="INSERT INTO `engbearing` (`tbheadtemp`,`tbastemp`, `sb1`, `sb2`, `sb3`, `sb4`, `sb5`, `sb6`, `sb7`, `sb8`) 
	 VALUES ('$tbheadtemp','$tbastemp','$sb1`','$sb2','$sb3','$sb4','$sb5','$sb6','$sb7','$sb8')";
	  */
	 $sql_4=mysqli_query($con,$sql4);
	 
	 if($sql_4)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Bearings Data Entered Successfully..!!</font></center></td><tr>';
	 }
		
	$sql3="UPDATE `engsystems` SET 
	`startairpress`='$startairpress', `conairpress`='$conairpress',`spairpress`='$spairpress', `stloinpress`='$stloinpress', `stanklevel`='$stanklevel',`stgravityh`='$stgravityh', `stgravityl`='$stgravityl', `stgravityl`='$stgravityl', `stbr1temp`='$stbr1temp', `stbr2temp`='$stbr2temp' WHERE `reportnum`='$rnumber'";
			
/* 	 $sql3="INSERT INTO `engsystems` (`startairpress`,`conairpress`, `spairpress`, `stloinpress`, `stanklevel`, `stgravityh`, `stgravityl`, `stbr1temp`, `stbr2temp`) 
	 VALUES ('$startairpress','$conairpress','$spairpress`','$stloinpress','$stanklevel','$stgravityh','$stgravityl','$stbr1temp','$stbr2temp')";
	  */
	 $sql_3=mysqli_query($con,$sql3);
	 
	 if($sql_3)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Air Systems Data Entered Successfully..!!</font></center></td><tr>';
	 }
	
	$sql2="UPDATE `engoilsystems` SET 
	`lotemp`='$lotemp', `lopress`='$lopress',`lochtemp`='$lochtemp', `lochpress`='$lochpress', `losumplevel`='$losumplevel',`fointemp`='$fointemp', `foinpress`='$foinpress', `fodp`='$fodp', `fovisc`='$fovisc' WHERE `reportnum`='$rnumber'";
		
	
/* 	 $sql2="INSERT INTO `engoilsystems` (`lotemp`,`lopress`, `lochtemp`, `lochpress`, `losumplevel`, `fointemp`, `foinpress`, `fodp`, `fovisc`) 
	 VALUES ('$lotemp','$lopress','$lochtemp`','$lochpress','$losumplevel','$fointemp','$foinpress','$fodp','$fovisc')";
	  */
	 $sql_2=mysqli_query($con,$sql2);
	 
	 if($sql_2)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Oil Systems Data Entered Successfully..!!</font></center></td><tr>';
	 }
		
	$sql1="UPDATE `engobservation` SET 
	`engnum`='$engnum', `revcounter`='$revcounter',`engrpm`='$engrpm', `engpower`='$power',`torque`='$torque', `fuellevel`='$fuellevel', `loadindex`='$loadindex', `govindex`='$govindex' WHERE `reportnum`='$rnumber'";
		
/* 	 $sql1="INSERT INTO `engobservation` (`engnum`,`revcounter`, `engrpm`, `torque`, `fuellevel`, `loadindex`, `govindex`) 
	 VALUES ('$engnum','$revcounter','$engrpm','$torque','$fuellevel','$loadindex','$govindex')";
	  */
	 $sql_1=mysqli_query($con,$sql1);
	 
	 if($sql_1)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Engine Observation Data Entered Successfully..!!</font></center></td><tr>';
	 }
}
?>
 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];


?>	
<table  width="100%">	
	<form name="slogmaineng" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="mengine" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
	
<h6 style="font-size:16px;"><b>Observations 1/1<i style="color:#2196f3;">(next/previous)</i></b></h6>
      <tr><td>&nbsp &nbsp </td></tr> 	
      <tr>
        <td style="font-size:14px;"><b>Details</b></td>
	</tr>	<tr><td>&nbsp &nbsp </td></tr>
	
	<?php

	$sql36=mysqli_query($con,"SELECT * FROM engobservation where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql36))
	{
			//$reportnum=$row['reportnum'];
?>
			<tr>
			<td ><small>EOW</small></td>
			<td class="input-container">  
					<select name="oow"  class="input-field" required >
					<option></option><option>Chief Engineer</option>
					<option>Second Engineer</option>
						<option>Third Engineer</option>
							<option>Fourth Engineer</option>
								<option>Junior Engineer</option>
					</select>  
				</td>
		</tr>
	
	        	<tr>

		<td>
		    
		    <small>Date/time:</small>
		    </td>
	
				<td>
				     
  
     <div class=' input-group date' id='dtpickerdemo'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
		 
		</td>
	
	</tr>
	
	</tr>
	<tr>
			<td><small>Main Engine</small></td>
			<td class="input-container">  
				<select name="engnum"  id="engnum" value="<?php echo $row['engnum'];?>" class="form-control" >
					<option>Engine 1</option>	<option>Engine 2</option>
				</select>  
			</td>
	</tr>	
<tr><td><br></td></tr>	<tr>
			<td colspan="4"><b><small>Engine Observation</small></b></td>
	</tr>	<tr><td><br></td></tr>

	<tr>
			<td><small>Rev Counter</small></td>
			<td class="input-container"><input type="text" name="revcounter"  id="revcounter" value="<?php echo $row['revcounter'];?>" class="input-field" placeholder="" autocomplete="off"></td>
	</tr>
	<tr>
			<td><small>RPM</small></td>
			<td class="input-container"><input type="text" name="engrpm"  id="engrpm" value="<?php echo $row['engrpm'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon"><small>rev/m</small></i></td>
	</tr>
	<tr>
			<td><small>Torque</small></td>
			<td class="input-container"><input type="text" name="torque"  id="torque" value="<?php echo $row['torque'];?>" class="input-field" placeholder="" autocomplete="off"><i class="fa fa- icon"><small>NM</small></i></td>
 	</tr>
		<tr>
			<td><small>Power</small></td>
			<td class="input-container"><input type="text" name="power"  id="power" value="<?php echo $row['power'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>KW</small></i></td>
	</tr>
<tr><td><br></td></tr>	<tr>
			<td colspan="2" ><b><small>ME Controls</small></b></td>
	</tr>	<tr><td><br></td></tr>
	<tr>
			<td><small>Fuel Level</small></td>
			<td class="input-container"><input type="text" name="fuellevel"  id="fuellevel" value="<?php echo $row['fuellevel'];?>"  class="input-field" placeholder="" autocomplete="off">
			 <i class="fa fa- icon"><small>mm</small></i></td>
	</tr>
	<tr>
			<td><small>Load Index</small></td>
			<td class="input-container"><input type="text" name="loadindex"  id="loadindex" value="<?php echo $row['loadindex'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>mm</small></i></td>
	</tr>
	<tr>
			<td><small>Gov Index</small></td>
			<td class="input-container"><input type="text" name="govindex"  id="govindex" value="<?php echo $row['govindex'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>mm</small></i></td>
	</tr>
	
	
          	<tr><tr><td><br></td></tr>
			<td colspan="2" ><b><small>Air System</small></b></td>
	</tr>	<tr><td><br></td></tr>
		<?php
}
	$sql34=mysqli_query($con,"SELECT * FROM engsystems where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql34))
	{
			//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small> Start Air Press</small></td>
			<td class="input-container"><input type="text" name="startairpress"  id="startairpress" value="<?php echo $row['startairpress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>	
	<tr>
			<td >	<small> Control Air Press</small></td>
			<td class="input-container"><input type="text" name="conairpress"  id="conairpress" value="<?php echo $row['conairpress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	<tr>
			<td ><small> Spring Air Press</small></td>	
			<td class="input-container"><input type="text" name="spairpress"  id="spairpress" value="<?php echo $row['spairpress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>	


			

	
</table>
  </div>
  <div class="col-md-3">
	<table class=" table-hover" >	
	
		    		  
		       
		     
		
	<tr><td><br></td></tr>	<tr><td><br></td></tr>	<tr><td><br></td></tr>
			<td colspan="2"><b><small>ME Lube Oil System</small></b></td>
	</tr>		<tr><td><br></td></tr>
	<?php
}
	$sql35=mysqli_query($con,"SELECT * FROM engoilsystems where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql35))
	{
			//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>LO Temperature</small></td>
			<td class="input-container"><input type="text" name="lotemp"  id="lotemp" value="<?php echo $row['lotemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>						
	<tr>
			<td ><small>LO Inlet Pressure</small></td>
			<td class="input-container"><input type="text" name="lopress"  id="lopress" value="<?php echo $row['lopress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	<tr>
			<td><small>Cross Head LO Temp</small></td>
			<td class="input-container"><input type="text" name="lochtemp"  id="lochtemp" value="<?php echo $row['lochtemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>
			<td ><small>Cross Head LO Press</small></td>
			<td class="input-container"><input type="text" name="lochpress"  id="lochpress" value="<?php echo $row['lochpress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	<tr>
			<td ><small> LO Sump Level</small></td>
			<td class="input-container"><input type="text" name="losumplevel"  id="losumplevel" value="<?php echo $row['losumplevel'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>m</small></i></td>
	</tr>
	<tr>
	<tr><td><br></td></tr>	<tr>
	    
	    
	<td colspan="2" ><b><small>ME Fuel Oil System</small></b></td>
	
	</tr>	<tr><td><br></td></tr>
	<tr>
			<td><small> Fuel Inlet Temp</small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;</i></td>
	</tr>
	<tr>
			<td><small> Fuel Inlet Press</small></td>
			<td class="input-container"><input type="text" name="foinpress"  id="foinpress" value="<?php echo $row['foinpress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	<tr>
			<td><small> Fuel filter &#916;P</small></td>
			<td class="input-container"><input type="text" name="fodp"  id="fodp" value="<?php echo $row['fodp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	<tr>
			<td ><small>Fuel Oil Viscosity</small></td>
			<td class="input-container"><input type="text" name="fovisc"  id="fovisc" value="<?php echo $row['fovisc'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon"><small>cst</small></i></td></td>
	</tr>
	<tr><td><br></td></tr>	<tr>
	<td colspan="4" ><b><small>Cooling System </small></b></td>
	</tr>	<tr><td><br></td></tr>

<tr>
			<td><small>  Jacket water Inlet Press </small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	<tr>
			<td><small>  Jacket water Inlet Temp </small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>
			<td><small> Piston Cooling Inlet Press</small></td>
			<td class="input-container"><input type="text" name="foinpress"  id="foinpress" value="<?php echo $row['foinpress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
		<tr>
			<td><small> Piston Cooling Inlet Temp</small></td>
			<td class="input-container"><input type="text" name="foinpress"  id="foinpress" value="<?php echo $row['foinpress'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	
	</table>
  </div>
  <div class="col-md-4">
      <table>
                     	<tr>
	<td><button   class="btn  btn-sm btn-primary">Add Observation</button></td>
	   <td><button  id="clone2" class="btn btn-block btn-sm btn-primary" style="width:130px;">Delete Observation</button></td>
					    </tr>
          
         <tr><td><br></td></tr>	
	<td colspan="4" ><b><small>Main Engine Exhaust  </small></b></td>
	</tr>	<tr><td><br></td></tr>

<tr>
			<td><small>  Exhaust Rec  Press &nbsp;&nbsp; </small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	<tr>
			<td><small>  Exhaust Rec  Temp &nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>

        	<tr><td><br></td></tr>
	<td colspan="4" ><b><small>Turbocharger  </small></b></td>
	</tr>	<tr><td><br></td></tr>

<tr>
			<td><small>  Inlet Air </small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>


        </table>
        <table>
          <tr><td><br></td></tr>	<tr>	<tr>
			<td> </td>
		
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;# 1 </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;# 2 </b></small></td>
		
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;# 3 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;# 4 </b></small></td>
	</tr>
	

	<tr>	<td><small>Exh. In</small></td>
<?php
}
	$sql28=mysqli_query($con,"SELECT * FROM engtc1 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql28))
	{
			//$reportnum=$row['reportnum'];
?>		
			<td><input type="text" name="extemptcin1"  id="extemptcin1" value="<?php echo $row['extemptcin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="extemptcout1"  id="extemptcout1" value="<?php echo $row['extemptcout'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="tcrpm1"  id="tcrpm1" value="<?php echo $row['tcrpm'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airfilterdp1"  id="airfilterdp1" value="<?php echo $row['airfilterdp'];?>" class="input-field" maxlength="5" size="7"></td>			
		<td>	<i class="fa fa- icon" style="padding-left:22px; padding-right:17px;">&#176;c </i></td></td>
	</tr>

	<tr>
			<td><small>Exh.out</small></td>
	<?php
}
	$sql27=mysqli_query($con,"SELECT * FROM engtc2 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql27))
	{
			//$reportnum=$row['reportnum'];
?>	
			<td><input type="text" name="extemptcin2"  id="extemptcin2" value="<?php echo $row['extemptcin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="extemptcout2"  id="extemptcout2" value="<?php echo $row['extemptcout'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="tcrpm2"  id="tcrpm2" value="<?php echo $row['tcrpm'];?>" class="input-field" maxlength="5" size="7"></td>	
			<td><input type="text" name="airfilterdp2"  id="airfilterdp2" value="<?php echo $row['airfilterdp'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" style="padding-left:22px; padding-right:17px;">&#176;c </i></td></td>
	</tr>

	<tr>
			<td><small>RPM</small></td>
	<?php
}
	$sql26=mysqli_query($con,"SELECT * FROM engtc3 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql26))
	{
			//$reportnum=$row['reportnum'];
?>		
			<td><input type="text" name="extemptcin3"  id="extemptcin3" value="<?php echo $row['extemptcin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="extemptcout3"  id="extemptcout3" value="<?php echo $row['extemptcout'];?>" class="input-field" maxlength="5" size="7"></td>
		
			<td><input type="text" name="tcrpm3"  id="tcrpm3" value="<?php echo $row['tcrpm'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airfilterdp3"  id="airfilterdp3" value="<?php echo $row['airfilterdp'];?>" class="input-field" maxlength="5" size="7"></td>	
	<td>	<i class="fa fa- icon" ><small>rev/m</small></i></td></td>
	</tr>
	
	<tr>
			<td><small>Filter  &#916;P</small></td>
		<?php
}
	$sql25=mysqli_query($con,"SELECT * FROM engtc4 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql25))
	{
			//$reportnum=$row['reportnum'];
?>					
			<td><input type="text" name="extemptcin4"  id="extemptcin4" value="<?php echo $row['extemptcin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="extemptcout4"  id="extemptcout4" value="<?php echo $row['extemptcout'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcrpm4"  id="tcrpm4" value="<?php echo $row['tcrpm'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airfilterdp4"  id="airfilterdp4" value="<?php echo $row['airfilterdp'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" style="padding-left:18px; padding-right:14px;"><small>Bar</small></i></td></td>
	</tr>
      </table>
      
      <table>
          
        	<tr><td><br></td></tr>
	<td colspan="4" ><b><small>Scavenge Air System  </small></b></td>
	</tr>	<tr><td><br></td></tr>
	<?php
}
	$sql24=mysqli_query($con,"SELECT * FROM engscav1 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql24))
	{
			//$reportnum=$row['reportnum'];
?>	
	
<tr>
			<td><small>Scav. Rec. Press &nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon"><small>Bar</small></i></td></td>
	</tr>
	
	
	
<tr>
			<td><small>Scav. Rec. Temp &nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="fointemp"  id="fointemp" value="<?php echo $row['fointemp'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon">&#176;c</i></td></td>
	</tr>


        </table>
       
          
          <table>	
          
<tr><td>	<br></td></tr>
	<td colspan="4" ><b><small>Scavenge Air Coolers  </small></b></td>
	</tr>	<tr><td><br></td></tr>
<tr>
			<td></td>
			
				<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;# 1 </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;# 2 </b></small></td>
		
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;# 3 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;# 4 </b></small></td>
			
	</tr>
	<tr>

			
			<td style="font-size:12px;"small>Inlet Air</small></td>
			<td><input type="text" name="airin1"  id="airin1" value="<?php echo $row['airin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airout1"  id="airout1" value="<?php echo $row['airout'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterin1"  id="coolwaterin1" value="<?php echo $row['coolwaterin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterout1"  id="coolwaterout1" value="<?php echo $row['coolwaterout'];?>" class="input-field" maxlength="5" size="7"></td>
		
			<td>	<i class="fa fa- icon">&#176;c</i></td>
	</tr>		
	<tr>	
		<?php
}
	$sql24=mysqli_query($con,"SELECT * FROM engscav1 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql24))
	{
			//$reportnum=$row['reportnum'];
?>	
	
			<td><small>Outlet Air &nbsp;&nbsp;</small></td>
			<td><input type="text" name="airin2"  id="airin2" value="<?php echo $row['airin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airout2"  id="airout2" value="<?php echo $row['airout'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterin2"  id="coolwaterin2" value="<?php echo $row['coolwaterin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterout2"  id="coolwaterout2" value="<?php echo $row['coolwaterout'];?>" class="input-field" maxlength="5" size="7"></td>
		
			<td>	<i class="fa fa- icon">&#176;c</i></td>
	</tr>			
	<tr>	
		<?php
}
	$sql23=mysqli_query($con,"SELECT * FROM engscav2 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql23))
	{
			//$reportnum=$row['reportnum'];
?>	
			<td><small>Inlet Water</small></td>
			<td><input type="text" name="airin3"  id="airin3" value="<?php echo $row['airin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airout3"  id="airout3" value="<?php echo $row['airout'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterin3"  id="coolwaterin3" value="<?php echo $row['coolwaterin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterout3"  id="coolwaterout3" value="<?php echo $row['coolwaterout'];?>" class="input-field" maxlength="5" size="7"></td>
		
				<td>	<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>	
		<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engscav3 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>	
			<td><small>Outlet Water</small></td>
			<td><input type="text" name="airin4"  id="airin4" value="<?php echo $row['airin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airout4"  id="airout4" value="<?php echo $row['airout'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterin4"  id="coolwaterin4" value="<?php echo $row['coolwaterin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterout4"  id="coolwaterout4" value="<?php echo $row['coolwaterout'];?>" class="input-field" maxlength="5" size="7"></td>
		
				<td>	<i class="fa fa- icon">&#176;c</i></td>
	</tr>

		<tr>	
	<?php
}
	$sql21=mysqli_query($con,"SELECT * FROM engscav4 where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql21))
	{
			//$reportnum=$row['reportnum'];
?>
			<td><small>Cooler &#916;P</small></td>
			<td><input type="text" name="airin4"  id="airin4" value="<?php echo $row['airin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="airout4"  id="airout4" value="<?php echo $row['airout'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterin4"  id="coolwaterin4" value="<?php echo $row['coolwaterin'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="coolwaterout4"  id="coolwaterout4" value="<?php echo $row['coolwaterout'];?>" class="input-field" maxlength="5" size="7"></td>
		
				<td>	<i class="fa fa- icon"><small>Bar</small></i></td>
	</tr>
	</table>
</td></tr>

</table>
          
      </table>
      
      
      
  </div>
</div>
 <div class="row">
        <div class="col-md-2">1 of 4</div>
  <div class="col-md-10" style="padding-right: 30px;">
      	<table class=" table-hover" >	
<tr><td><br></td></tr>	<tr>
		
			<td colspan="4" style="font-size:16px;"><b>Outlet Temperature<b></td>
	</tr>  <tr><td><br></td></tr>	
	<tr>
			<td></td>
			
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 3</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 4</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 5</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 6</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 7</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 8</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 9</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 10</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 11</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 12</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 13</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 14</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl 15</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Cyl Avg</small></b></td>
	</tr>

	<tr>
			<td ><small>Cooling Water</small></td>
<?php
}
	$sql31=mysqli_query($con,"SELECT * FROM engcoolwater where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql31))
	{
			//$reportnum=$row['reportnum'];
?>
			<td><input type="text" name="cwcyltemp1"  id="cwcyltemp1" value="<?php echo $row['cwcyltemp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp2"  id="cwcyltemp2" value="<?php echo $row['cwcyltemp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp3"  id="cwcyltemp3" value="<?php echo $row['cwcyltemp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp4"  id="cwcyltemp4" value="<?php echo $row['cwcyltemp4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp5"  id="cwcyltemp5" value="<?php echo $row['cwcyltemp5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp6"  id="cwcyltemp6" value="<?php echo $row['cwcyltemp6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp7"  id="cwcyltemp7" value="<?php echo $row['cwcyltemp7'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp8"  id="cwcyltemp8" value="<?php echo $row['cwcyltemp8'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp9"  id="cwcyltemp9" value="<?php echo $row['cwcyltemp9'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp10"  id="cwcyltemp10" value="<?php echo $row['cwcyltemp10'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp11"  id="cwcyltemp11" value="<?php echo $row['cwcyltemp11'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp12"  id="cwcyltemp12" value="<?php echo $row['cwcyltemp12'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp13"  id="cwcyltemp13" value="<?php echo $row['cwcyltemp13'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp14"  id="cwcyltemp14" value="<?php echo $row['cwcyltemp14'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltemp15"  id="cwcyltemp15" value="<?php echo $row['cwcyltemp15'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwcyltempavg"  id="cwcyltempavg" value="<?php echo $row['cwcyltempavg'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon">&#176;c</i></td>
	</tr>		

	<tr>
			<td><small>Piston Cooling</small></td>
						<?php
}
	$sql30=mysqli_query($con,"SELECT * FROM engpistoncool where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql30))
	{
			$reportnum=$row['reportnum'];
?>
			<td><input type="text" name="pccyltemp1"  id="pccyltemp1" value="<?php echo $row['pccyltemp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp2"  id="pccyltemp2" value="<?php echo $row['pccyltemp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp3"  id="pccyltemp3" value="<?php echo $row['pccyltemp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp4"  id="pccyltemp4" value="<?php echo $row['pccyltemp4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp5"  id="pccyltemp5" value="<?php echo $row['pccyltemp5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp6"  id="pccyltemp6" value="<?php echo $row['pccyltemp6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp7"  id="pccyltemp7" value="<?php echo $row['pccyltemp7'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp8"  id="pccyltemp8" value="<?php echo $row['pccyltemp8'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp9"  id="pccyltemp9" value="<?php echo $row['pccyltemp9'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp10"  id="pccyltemp10" value="<?php echo $row['pccyltemp10'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp11"  id="pccyltemp11" value="<?php echo $row['pccyltemp11'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp12"  id="pccyltemp12" value="<?php echo $row['pccyltemp12'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp13"  id="pccyltemp13" value="<?php echo $row['pccyltemp13'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp14"  id="pccyltemp14" value="<?php echo $row['pccyltemp14'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltemp15"  id="pccyltemp15" value="<?php echo $row['pccyltemp15'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pccyltempavg"  id="pccyltempavg" value="<?php echo $row['pccyltempavg'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon">&#176;c</i></td>
	</tr>			

	<tr>
			<td ><small>Exhaust System</small></td>
		<?php
}
	$sql29=mysqli_query($con,"SELECT * FROM engexhsystem where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql29))
	{
			//$reportnum=$row['reportnum'];
?>
			<td><input type="text" name="excyltemp1"  id="excyltemp1" value="<?php echo $row['excyltemp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp2"  id="excyltemp2" value="<?php echo $row['excyltemp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp3"  id="excyltemp3" value="<?php echo $row['excyltemp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp4"  id="excyltemp4" value="<?php echo $row['excyltemp4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp5"  id="excyltemp5" value="<?php echo $row['excyltemp5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp6"  id="excyltemp6" value="<?php echo $row['excyltemp6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp7"  id="excyltemp7" value="<?php echo $row['excyltemp7'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp8"  id="excyltemp8" value="<?php echo $row['excyltemp8'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp9"  id="excyltemp9" value="<?php echo $row['excyltemp9'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp10"  id="excyltemp10" value="<?php echo $row['excyltemp10'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp11"  id="excyltemp11" value="<?php echo $row['excyltemp11'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp12"  id="excyltemp12" value="<?php echo $row['excyltemp12'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp13"  id="excyltemp13" value="<?php echo $row['excyltemp13'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp14"  id="excyltemp14" value="<?php echo $row['excyltemp14'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltemp15"  id="excyltemp15" value="<?php echo $row['excyltemp15'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="excyltempavg"  id="excyltempavg" value="<?php echo $row['excyltempavg'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon">&#176;c</i></td>
	</tr>		
</table>
      
      </div>
</div>  
<br><br>
      <div class="row">
      


 
 
      <div class="col-md-2">1 of 4</div>
  <div class="col-md-4">
     <table>
          <tr>
			<td  colspan="2" ><b><small>Thrust Bearing</small></b></td>
	</tr>	<tr><td><br></td></tr>
			<?php
}
	$sql33=mysqli_query($con,"SELECT * FROM engbearing where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql33))
	{
			//$reportnum=$row['reportnum'];
?>	
	<tr>
			<td  >	<small>Ahead Temp</small></td>
			<td class="input-container"><input type="text" name="tbheadtemp"  id="tbheadtemp" value="<?php echo $row['tbheadtemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>	
	</tr>	
	<tr>
			<td  ><small>Astern Temp<small></td>	
			<td class="input-container"><input type="text" name="tbastemp"  id="tbastemp" value="<?php echo $row['tbastemp'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
          
		<tr><td><br></td></tr><tr>
			<td  colspan="2" ><b><small>Intermediate Shaft Bearings</small></b></td>
	</tr>	<tr><td><br></td></tr>
	<tr>
			<td ><small> Shaft Bearing 1&nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="sb1"  id="sb1" value="<?php echo $row['sb1'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>	
	<tr>
			<td ><small> Shaft Bearing 2&nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="sb2"  id="sb2" value="<?php echo $row['sb2'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>
			<td ><small> Shaft Bearing 3&nbsp;&nbsp;<small></td>
			<td class="input-container"> <input type="text" name="sb3"  id="sb3" value="<?php echo $row['sb3'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i>
			</td>
	</tr>
	<tr>
			<td ><small> Shaft Bearing 4&nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="sb4"  id="sb4" value="<?php echo $row['sb4'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>
			<td ><small> Shaft Bearing 5&nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="sb5"  id="sb5" value="<?php echo $row['sb5'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>
			<td ><small> Shaft Bearing 6&nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="sb6"  id="sb6" value="<?php echo $row['sb6'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>
			<td ><small> Shaft Bearing 7&nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="sb7"  id="sb7" value="<?php echo $row['sb7'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<tr>
			<td><small> Shaft Bearing 8 &nbsp;&nbsp;</small></td>
			<td class="input-container"><input type="text" name="sb8"  id="sb8" value="<?php echo $row['sb8'];?>" class="input-field" placeholder="" autocomplete="off">
			<i class="fa fa- icon">&#176;c</i></td>
	</tr>
      </table>

 </div>
 
   <div class="col-md-4">
   	<table>

			<?php
}
	$sql34=mysqli_query($con,"SELECT * FROM engsystems where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql34))
	{
			//$reportnum=$row['reportnum'];
?>
	
	
			<td colspan="2" ><b><small>Stern Tube System</small></b></td>
	</tr>	<tr><td><br></td></tr>
	<tr>
			<td >	<small>Stern Tube LO Inlet Press</small></td>
			<td class="input-container"><input type="text" name="stloinpress"  id="stloinpress" value="<?php echo $row['stloinpress'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon">Bar</i></td>	
	</tr>	
	<tr>
			<td><small>Stern Tank Level, m</small></td>	
			<td class="input-container"><input type="text" name="stanklevel"  id="stanklevel" value="<?php echo $row['stanklevel'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon">m</i></td>
	</tr>
	<tr>
			<td>	<small>Stern Tube Gravity Tank (High)</small></td>
			<td class="input-container"><input type="text" name="stgravityh"  id="stgravityh" value="<?php echo $row['stgravityh'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon">m</i></td>	
	</tr>	
	<tr>
			<td ><small>Stern Tube Gravity Tank (Low)</small></td>	
			<td class="input-container"><input type="text" name="stgravityl"  id="stgravityl" value="<?php echo $row['stgravityl'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon">m</i></td>
	</tr>
	<tr>
			<td >	<small>Stern Tube Bearing 1 Temp</small></td>
			<td class="input-container"><input type="text" name="stbr1temp"  id="stbr1temp" value="<?php echo $row['stbr1temp'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon">&#176;c</i></td>	
	</tr>	
	<tr>
			<td><small>Stern Tube Bearing 2 Temp</small></td>	
			<td class="input-container"><input type="text" name="stbr2temp"  id="stbr2temp" value="<?php echo $row['stbr2temp'];?>" class="input-field" placeholder="" autocomplete="off">
				<i class="fa fa- icon">&#176;c</i></td>
	</tr>
	<?php 
}
}
?>	
</table>
   
   </div>

<tr><td>	<br></td></tr><tr><td>	<br></td></tr>


    <div style="padding-left:230px;width:95%;padding-top:27%;">
 
  <textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:250px;">

		    
		    		  
		    <div class="col-md-2">
		        <button type="submit" name="srmengine" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		     
		    </div>
		    
		    

		    
		    
					      </div>
      
 <br><br>
</div>
