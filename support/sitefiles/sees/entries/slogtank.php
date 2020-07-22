 <?php
if($_POST['srengstock'])
{
$rnumber=$_POST['rnumber'];
$lsstank1=$_POST['lsstank1'];
$dastank1=$_POST['dastank1'];
$csstank1=$_POST['csstank1'];

$lsstank2=$_POST['lsstank2'];
$dastank2=$_POST['dastank2'];
$csstank2=$_POST['csstank2'];

$lsstank3=$_POST['lsstank3'];
$dastank3=$_POST['dastank3'];
$csstank3=$_POST['csstank3'];  

$sql1f="UPDATE `engtanksludge` SET 
`lsstank1`='$lsstank1', `dastank1`='$dastank1', `csstank1`='$csstank1', `lsstank2`='$lsstank2', `dastank2`='$dastank2', `csstank2`='$csstank2', `lsstank3`='$lsstank3', `dastank3`='$dastank3', `csstank3`='$csstank3'
WHERE `reportnum`='$rnumber' ";
$sql_1f=mysqli_query($con,$sql1f);

$lsbtank1=$_POST['lsbtank1'];
$dabtank1=$_POST['dabtank1'];
$csbtank1=$_POST['csbtank1'];  

$lsbtank2=$_POST['lsbtank2'];
$dabtank2=$_POST['dabtank2'];
$csbtank2=$_POST['csbtank2'];  

$lsbtank3=$_POST['lsbtank3'];
$dabtank3=$_POST['dabtank3'];
$csbtank3=$_POST['csbtank3'];  

$sql2f="UPDATE `engtankbilge` SET 
`lsbtank1`='$lsbtank1', `dabtank1`='$dabtank1', `csbtank1`='$csbtank1', `lsbtank2`='$lsbtank2', `dabtank2`='$dabtank2', `csbtank2`='$csbtank2', `lsbtank3`='$lsbtank3', `dabtank3`='$dabtank3', `csbtank3`='$csbtank3', 
`lastdate`='$lastdate'  WHERE `reportnum`='$rnumber' ";

$sql_2f=mysqli_query($con,$sql2f);

$bunk1=$_POST['bunk1'];
$fgrade1=$_POST['fgrade1'];  
$lcv1=$_POST['lcv1'];
$sulphur1=$_POST['sulphur1'];
$density1=$_POST['density1'];  
$temp1=$_POST['temp1'];
$prestock1=$_POST['prestock1'];
$bunkerqty1=$_POST['bunkerqty1'];  
$curstock1=$_POST['curstock1'];
$differ1=$_POST['differ1'];
$deviation1=$_POST['deviation1'];  

$bunk2=$_POST['bunk2'];
$fgrade2=$_POST['fgrade2'];  
$lcv2=$_POST['lcv2'];
$sulphur2=$_POST['sulphur2'];
$density2=$_POST['density2'];  
$temp2=$_POST['temp2'];
$prestock2=$_POST['prestock2'];
$bunkerqty2=$_POST['bunkerqty2'];  
$curstock2=$_POST['curstock2'];
$differ2=$_POST['differ2'];
$deviation2=$_POST['deviation2'];  

$bunk3=$_POST['bunk3'];
$fgrade3=$_POST['fgrade3'];  
$lcv3=$_POST['lcv3'];
$sulphur3=$_POST['sulphur3'];
$density3=$_POST['density3'];  
$temp3=$_POST['temp3'];
$prestock3=$_POST['prestock3'];
$bunkerqty3=$_POST['bunkerqty3'];  
$curstock3=$_POST['curstock3'];
$differ3=$_POST['differ3'];
$deviation3=$_POST['deviation3'];  

$bunk4=$_POST['bunk4'];
$fgrade4=$_POST['fgrade4'];  
$lcv4=$_POST['lcv4'];
$sulphur4=$_POST['sulphur4'];
$density4=$_POST['density4'];  
$temp4=$_POST['temp4'];
$prestock4=$_POST['prestock4'];
$bunkerqty4=$_POST['bunkerqty4'];  
$curstock4=$_POST['curstock4'];
$differ4=$_POST['differ4'];
$deviation4=$_POST['deviation4'];  

$bunk5=$_POST['bunk5'];
$fgrade5=$_POST['fgrade5'];  
$lcv5=$_POST['lcv5'];
$sulphur5=$_POST['sulphur5'];
$density5=$_POST['density5'];  
$temp5=$_POST['temp5'];
$prestock5=$_POST['prestock5'];
$bunkerqty5=$_POST['bunkerqty5'];  
$curstock5=$_POST['curstock5'];
$differ5=$_POST['differ5'];
$deviation5=$_POST['deviation5'];  

$bunk6=$_POST['bunk6'];
$fgrade6=$_POST['fgrade6'];  
$lcv6=$_POST['lcv6'];
$sulphur6=$_POST['sulphur6'];
$density6=$_POST['density6'];  
$temp6=$_POST['temp6'];
$prestock6=$_POST['prestock6'];
$bunkerqty6=$_POST['bunkerqty6'];  
$curstock6=$_POST['curstock6'];
$differ6=$_POST['differ6'];
$deviation6=$_POST['deviation6'];  

$bunk7=$_POST['bunk7'];
$fgrade7=$_POST['fgrade7'];  
$lcv7=$_POST['lcv7'];
$sulphur7=$_POST['sulphur7'];
$density7=$_POST['density7'];  
$temp7=$_POST['temp7'];
$prestock7=$_POST['prestock7'];
$bunkerqty7=$_POST['bunkerqty7'];  
$curstock7=$_POST['curstock7'];
$differ7=$_POST['differ7'];
$deviation7=$_POST['deviation7'];  

$bunk8=$_POST['bunk8'];
$fgrade8=$_POST['fgrade8'];  
$lcv8=$_POST['lcv8'];
$sulphur8=$_POST['sulphur8'];
$density8=$_POST['density8'];  
$temp8=$_POST['temp8'];
$prestock8=$_POST['prestock8'];
$bunkerqty8=$_POST['bunkerqty8'];  
$curstock8=$_POST['curstock8'];
$differ8=$_POST['differ8'];
$deviation8=$_POST['deviation8'];  

$bunk9=$_POST['bunk9'];
$fgrade9=$_POST['fgrade9'];  
$lcv9=$_POST['lcv9'];
$sulphur9=$_POST['sulphur9'];
$density9=$_POST['density9'];  
$temp9=$_POST['temp9'];
$prestock9=$_POST['prestock9'];
$bunkerqty9=$_POST['bunkerqty9'];  
$curstock9=$_POST['curstock9'];
$differ9=$_POST['differ9'];
$deviation9=$_POST['deviation9'];  

$bunk10=$_POST['bunk10'];
$fgrade10=$_POST['fgrade10'];  
$lcv10=$_POST['lcv10'];
$sulphur10=$_POST['sulphur10'];
$density10=$_POST['density10'];  
$temp10=$_POST['temp10'];
$prestock10=$_POST['prestock10'];
$bunkerqty10=$_POST['bunkerqty10'];  
$curstock10=$_POST['curstock10'];
$differ10=$_POST['differ10'];
$deviation10=$_POST['deviation10'];  

$bunk11=$_POST['bunk11'];
$fgrade11=$_POST['fgrade11'];  
$lcv11=$_POST['lcv11'];
$sulphur11=$_POST['sulphur11'];
$density11=$_POST['density11'];  
$temp11=$_POST['temp11'];
$prestock11=$_POST['prestock11'];
$bunkerqty11=$_POST['bunkerqty11'];  
$curstock11=$_POST['curstock11'];
$differ11=$_POST['differ11'];
$deviation11=$_POST['deviation11'];  

$bunk12=$_POST['bunk12'];
$fgrade12=$_POST['fgrade12'];  
$lcv12=$_POST['lcv12'];
$sulphur12=$_POST['sulphur12'];
$density12=$_POST['density12'];  
$temp12=$_POST['temp12'];
$prestock12=$_POST['prestock12'];
$bunkerqty12=$_POST['bunkerqty12'];  
$curstock12=$_POST['curstock12'];
$differ12=$_POST['differ12'];
$deviation12=$_POST['deviation12'];  

$bunk13=$_POST['bunk13'];
$fgrade13=$_POST['fgrade13'];  
$lcv13=$_POST['lcv13'];
$sulphur13=$_POST['sulphur13'];
$density13=$_POST['density13'];  
$temp13=$_POST['temp13'];
$prestock13=$_POST['prestock13'];
$bunkerqty13=$_POST['bunkerqty13'];  
$curstock13=$_POST['curstock13'];
$differ13=$_POST['differ13'];
$deviation13=$_POST['deviation13'];  

$bunk14=$_POST['bunk14'];
$fgrade14=$_POST['fgrade14'];  
$lcv14=$_POST['lcv14'];
$sulphur14=$_POST['sulphur14'];
$density14=$_POST['density14'];  
$temp14=$_POST['temp14'];
$prestock14=$_POST['prestock14'];
$bunkerqty14=$_POST['bunkerqty14'];  
$curstock14=$_POST['curstock14'];
$differ14=$_POST['differ14'];
$deviation14=$_POST['deviation14'];  

$bunk15=$_POST['bunk15'];
$fgrade15=$_POST['fgrade15'];  
$lcv15=$_POST['lcv15'];
$sulphur15=$_POST['sulphur15'];
$density15=$_POST['density15'];  
$temp15=$_POST['temp15'];
$prestock15=$_POST['prestock15'];
$bunkerqty15=$_POST['bunkerqty15'];  
$curstock15=$_POST['curstock15'];
$differ15=$_POST['differ15'];
$deviation15=$_POST['deviation15'];  

$bunk16=$_POST['bunk16'];
$fgrade16=$_POST['fgrade16'];  
$lcv16=$_POST['lcv16'];
$sulphur16=$_POST['sulphur16'];
$density16=$_POST['density16'];  
$temp16=$_POST['temp16'];
$prestock16=$_POST['prestock16'];
$bunkerqty16=$_POST['bunkerqty16'];  
$curstock16=$_POST['curstock16'];
$differ16=$_POST['differ16'];
$deviation16=$_POST['deviation16'];  

$bunk17=$_POST['bunk17'];
$fgrade17=$_POST['fgrade17'];  
$lcv17=$_POST['lcv17'];
$sulphur17=$_POST['sulphur17'];
$density17=$_POST['density17'];  
$temp17=$_POST['temp17'];
$prestock17=$_POST['prestock17'];
$bunkerqty17=$_POST['bunkerqty17'];  
$curstock17=$_POST['curstock17'];
$differ17=$_POST['differ17'];
$deviation17=$_POST['deviation17'];  

$bunk18=$_POST['bunk18'];
$fgrade18=$_POST['fgrade18'];  
$lcv18=$_POST['lcv18'];
$sulphur18=$_POST['sulphur18'];
$density18=$_POST['density18'];  
$temp18=$_POST['temp18'];
$prestock18=$_POST['prestock18'];
$bunkerqty18=$_POST['bunkerqty18'];  
$curstock18=$_POST['curstock18'];
$differ18=$_POST['differ18'];
$deviation18=$_POST['deviation18'];  

$bunk19=$_POST['bunk19'];
$fgrade19=$_POST['fgrade19'];  
$lcv19=$_POST['lcv19'];
$sulphur19=$_POST['sulphur19'];
$density19=$_POST['density19'];  
$temp19=$_POST['temp19'];
$prestock19=$_POST['prestock19'];
$bunkerqty19=$_POST['bunkerqty19'];  
$curstock19=$_POST['curstock19'];
$differ19=$_POST['differ19'];
$deviation19=$_POST['deviation19'];  

$bunk20=$_POST['bunk20'];
$fgrade20=$_POST['fgrade20'];  
$lcv20=$_POST['lcv20'];
$sulphur20=$_POST['sulphur20'];
$density20=$_POST['density20'];  
$temp20=$_POST['temp20'];
$prestock20=$_POST['prestock20'];
$bunkerqty20=$_POST['bunkerqty20'];  
$curstock20=$_POST['curstock20'];
$differ20=$_POST['differ20'];
$deviation20=$_POST['deviation20'];  

$bunk21=$_POST['bunk21'];
$fgrade21=$_POST['fgrade21'];  
$lcv21=$_POST['lcv21'];
$sulphur21=$_POST['sulphur21'];
$density21=$_POST['density21'];  
$temp21=$_POST['temp21'];
$prestock21=$_POST['prestock21'];
$bunkerqty21=$_POST['bunkerqty21'];  
$curstock21=$_POST['curstock21'];
$differ21=$_POST['differ21'];
$deviation21=$_POST['deviation21'];  

$bunk22=$_POST['bunk22'];
$fgrade22=$_POST['fgrade22'];  
$lcv22=$_POST['lcv22'];
$sulphur22=$_POST['sulphur22'];
$density22=$_POST['density22'];  
$temp22=$_POST['temp22'];
$prestock22=$_POST['prestock22'];
$bunkerqty22=$_POST['bunkerqty22'];  
$curstock22=$_POST['curstock22'];
$differ22=$_POST['differ22'];
$deviation22=$_POST['deviation22'];  



$sql3f="UPDATE `engfoilstock` SET 
`bunk`='$bunk1', `fgrade`='$fgrade1', `lcv`='$lcv1', `sulphur`='$sulphur1', `density`='$density1', `temp`='$temp1', `prestock`='$prestock1', `bunkerqty`='$bunkerqty1', `curstock`='$curstock1', 
`differ`='$differ1', `deviation`='$deviation1' WHERE `reportnum`='$rnumber' AND `tankname`='Tank1'";
$sql_3f=mysqli_query($con,$sql3f);

$sql4f="UPDATE `engfoilstock` SET 
`bunk`='$bunk2', `fgrade`='$fgrade2', `lcv`='$lcv2', `sulphur`='$sulphur2', `density`='$density2', `temp`='$temp2', `prestock`='$prestock2', `bunkerqty`='$bunkerqty2', `curstock`='$curstock2', 
`differ`='$differ2', `deviation`='$deviation2' WHERE `reportnum`='$rnumber' AND `tankname`='Tank2'";
$sql_4f=mysqli_query($con,$sql4f);

$sql5f="UPDATE `engfoilstock` SET 
`bunk`='$bunk3', `fgrade`='$fgrade3', `lcv`='$lcv3', `sulphur`='$sulphur3', `density`='$density3', `temp`='$temp3', `prestock`='$prestock3', `bunkerqty`='$bunkerqty3', `curstock`='$curstock3', 
`differ`='$differ3', `deviation`='$deviation3' WHERE `reportnum`='$rnumber' AND `tankname`='Tank3'";
$sql_5f=mysqli_query($con,$sql5f);

$sql6f="UPDATE `engfoilstock` SET 
`bunk`='$bunk4', `fgrade`='$fgrade4', `lcv`='$lcv4', `sulphur`='$sulphur4', `density`='$density4', `temp`='$temp4', `prestock`='$prestock4', `bunkerqty`='$bunkerqty4', `curstock`='$curstock4', 
`differ`='$differ4', `deviation`='$deviation4' WHERE `reportnum`='$rnumber' AND `tankname`='Tank4'";
$sql_6f=mysqli_query($con,$sql6f);

$sql7f="UPDATE `engfoilstock` SET 
`bunk`='$bunk5', `fgrade`='$fgrade5', `lcv`='$lcv5', `sulphur`='$sulphur5', `density`='$density5', `temp`='$temp5', `prestock`='$prestock5', `bunkerqty`='$bunkerqty5', `curstock`='$curstock5', 
`differ`='$differ5', `deviation`='$deviation5' WHERE `reportnum`='$rnumber' AND `tankname`='Tank5'";
$sql_7f=mysqli_query($con,$sql7f);

$sql8f="UPDATE `engfoilstock` SET 
`bunk`='$bunk6', `fgrade`='$fgrade6', `lcv`='$lcv6', `sulphur`='$sulphur6', `density`='$density6', `temp`='$temp6', `prestock`='$prestock6', `bunkerqty`='$bunkerqty6', `curstock`='$curstock6', 
`differ`='$differ6', `deviation`='$deviation6' WHERE `reportnum`='$rnumber' AND `tankname`='Tank6'";
$sql_8f=mysqli_query($con,$sql8f);

$sql9f="UPDATE `engfoilstock` SET 
`bunk`='$bunk7', `fgrade`='$fgrade7', `lcv`='$lcv7', `sulphur`='$sulphur7', `density`='$density7', `temp`='$temp7', `prestock`='$prestock7', `bunkerqty`='$bunkerqty7', `curstock`='$curstock7', 
`differ`='$differ7', `deviation`='$deviation7' WHERE `reportnum`='$rnumber' AND `tankname`='Tank7'";
$sql_9f=mysqli_query($con,$sql9f);

$sql10f="UPDATE `engfoilstock` SET 
`bunk`='$bunk8', `fgrade`='$fgrade8', `lcv`='$lcv8', `sulphur`='$sulphur8', `density`='$density8', `temp`='$temp8', `prestock`='$prestock8', `bunkerqty`='$bunkerqty8', `curstock`='$curstock8', 
`differ`='$differ8', `deviation`='$deviation8' WHERE `reportnum`='$rnumber' AND `tankname`='Tank8'";
$sql_10f=mysqli_query($con,$sql10f);
          
$sql11f="UPDATE `engfoilstock` SET 
`bunk`='$bunk9', `fgrade`='$fgrade9', `lcv`='$lcv9', `sulphur`='$sulphur9', `density`='$density9', `temp`='$temp9', `prestock`='$prestock9', `bunkerqty`='$bunkerqty9', `curstock`='$curstock9', 
`differ`='$differ9', `deviation`='$deviation9' WHERE `reportnum`='$rnumber' AND `tankname`='Tank9'";
$sql_11f=mysqli_query($con,$sql11f);

$sql12f="UPDATE `engfoilstock` SET 
`bunk`='$bunk10', `fgrade`='$fgrade10', `lcv`='$lcv10', `sulphur`='$sulphur10', `density`='$density10', `temp`='$temp10', `prestock`='$prestock10', `bunkerqty`='$bunkerqty10', `curstock`='$curstock10', 
`differ`='$differ10', `deviation`='$deviation10' WHERE `reportnum`='$rnumber' AND `tankname`='Tank10'";
$sql_12f=mysqli_query($con,$sql12f);

$sql13f="UPDATE `engfoilstock` SET 
`bunk`='$bunk11', `fgrade`='$fgrade11', `lcv`='$lcv11', `sulphur`='$sulphur11', `density`='$density11', `temp`='$temp11', `prestock`='$prestock11', `bunkerqty`='$bunkerqty11', `curstock`='$curstock11', 
`differ`='$differ11', `deviation`='$deviation11' WHERE `reportnum`='$rnumber' AND `tankname`='Tank11'";
$sql_13f=mysqli_query($con,$sql13f);

$sql14f="UPDATE `engfoilstock` SET 
`bunk`='$bunk12', `fgrade`='$fgrade12', `lcv`='$lcv12', `sulphur`='$sulphur12', `density`='$density12', `temp`='$temp12', `prestock`='$prestock12', `bunkerqty`='$bunkerqty12', `curstock`='$curstock12', 
`differ`='$differ12', `deviation`='$deviation12' WHERE `reportnum`='$rnumber' AND `tankname`='Tank12'";
$sql_14f=mysqli_query($con,$sql14f);

$sql15f="UPDATE `engfoilstock` SET 
`bunk`='$bunk13', `fgrade`='$fgrade13', `lcv`='$lcv13', `sulphur`='$sulphur13', `density`='$density13', `temp`='$temp13', `prestock`='$prestock13', `bunkerqty`='$bunkerqty13', `curstock`='$curstock13', 
`differ`='$differ13', `deviation`='$deviation13' WHERE `reportnum`='$rnumber' AND `tankname`='Tank13'";
$sql_15f=mysqli_query($con,$sql15f);

$sql16f="UPDATE `engfoilstock` SET 
`bunk`='$bunk14', `fgrade`='$fgrade14', `lcv`='$lcv14', `sulphur`='$sulphur14', `density`='$density14', `temp`='$temp14', `prestock`='$prestock14', `bunkerqty`='$bunkerqty14', `curstock`='$curstock14', 
`differ`='$differ14', `deviation`='$deviation14' WHERE `reportnum`='$rnumber' AND `tankname`='Tank14'";
$sql_16f=mysqli_query($con,$sql16f);

$sql17f="UPDATE `engfoilstock` SET 
`bunk`='$bunk15', `fgrade`='$fgrade15', `lcv`='$lcv15', `sulphur`='$sulphur15', `density`='$density15', `temp`='$temp15', `prestock`='$prestock15', `bunkerqty`='$bunkerqty15', `curstock`='$curstock15', 
`differ`='$differ15', `deviation`='$deviation15' WHERE `reportnum`='$rnumber' AND `tankname`='Tank15'";
$sql_17f=mysqli_query($con,$sql17f);

$sql18f="UPDATE `engfoilstock` SET 
`bunk`='$bunk16', `fgrade`='$fgrade16', `lcv`='$lcv16', `sulphur`='$sulphur16', `density`='$density16', `temp`='$temp16', `prestock`='$prestock16', `bunkerqty`='$bunkerqty16', `curstock`='$curstock16', 
`differ`='$differ16', `deviation`='$deviation16' WHERE `reportnum`='$rnumber' AND `tankname`='Tank16'";
$sql_18f=mysqli_query($con,$sql18f);

$sql19f="UPDATE `engfoilstock` SET 
`bunk`='$bunk17', `fgrade`='$fgrade17', `lcv`='$lcv17', `sulphur`='$sulphur17', `density`='$density17', `temp`='$temp17', `prestock`='$prestock17', `bunkerqty`='$bunkerqty17', `curstock`='$curstock17', 
`differ`='$differ17', `deviation`='$deviation17' WHERE `reportnum`='$rnumber' AND `tankname`='Tank17'";
$sql_19f=mysqli_query($con,$sql19f);
          
$sql20f="UPDATE `engfoilstock` SET 
`bunk`='$bunk18', `fgrade`='$fgrade18', `lcv`='$lcv18', `sulphur`='$sulphur18', `density`='$density18', `temp`='$temp18', `prestock`='$prestock18', `bunkerqty`='$bunkerqty18', `curstock`='$curstock18', 
`differ`='$differ18', `deviation`='$deviation18' WHERE `reportnum`='$rnumber' AND `tankname`='Tank18'";
$sql_20f=mysqli_query($con,$sql20f);

$sql21f="UPDATE `engfoilstock` SET 
`bunk`='$bunk19', `fgrade`='$fgrade19', `lcv`='$lcv19', `sulphur`='$sulphur19', `density`='$density19', `temp`='$temp19', `prestock`='$prestock19', `bunkerqty`='$bunkerqty19', `curstock`='$curstock19', 
`differ`='$differ19', `deviation`='$deviation19' WHERE `reportnum`='$rnumber' AND `tankname`='Tank19'";
$sql_21f=mysqli_query($con,$sql21f);

$sql22f="UPDATE `engfoilstock` SET 
`bunk`='$bunk20', `fgrade`='$fgrade20', `lcv`='$lcv20', `sulphur`='$sulphur20', `density`='$density20', `temp`='$temp20', `prestock`='$prestock20', `bunkerqty`='$bunkerqty20', `curstock`='$curstock20', 
`differ`='$differ20', `deviation`='$deviation20' WHERE `reportnum`='$rnumber' AND `tankname`='Tank20'";
$sql_22f=mysqli_query($con,$sql22f);

$sql23f="UPDATE `engfoilstock` SET 
`bunk`='$bunk21', `fgrade`='$fgrade21', `lcv`='$lcv21', `sulphur`='$sulphur21', `density`='$density21', `temp`='$temp21', `prestock`='$prestock21', `bunkerqty`='$bunkerqty21', `curstock`='$curstock21', 
`differ`='$differ21', `deviation`='$deviation21' WHERE `reportnum`='$rnumber' AND `tankname`='Tank21'";
$sql_23f=mysqli_query($con,$sql23f);

$sql24f="UPDATE `engfoilstock` SET 
`bunk`='$bunk22', `fgrade`='$fgrade22', `lcv`='$lcv22', `sulphur`='$sulphur22', `density`='$density22', `temp`='$temp22', `prestock`='$prestock22', `bunkerqty`='$bunkerqty22', `curstock`='$curstock22', 
`differ`='$differ22', `deviation`='$deviation22' WHERE `reportnum`='$rnumber' AND `tankname`='Tank22'";
$sql_24f=mysqli_query($con,$sql24f);


}
?>
<br>

 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

?>
<br>


<div class="row" >
<div class="col-md-2"></div>
<div class="col-md-5">
	<table>
	 		<form name="slogengboiler" action="index.php" method="post">
			<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
			<input type="hidden" name="tank" value="1">
			<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
		<tr><td><br></td></tr>
		
<?php
	
		$sql21=mysqli_query($con,"SELECT * FROM engtanksludge where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Last Update </small></td>
			<td class="input-container">  <input type="datetime-local" name="lastdate" id="lastdate" value="<?php echo $row['lastdate'];?>" class="form-control" >  </td>
</tr>
 </table>
		<tr>
		<tr><td><br></td></tr>
		<tr><td  colspan="18" style="font-size:16px;"> <b></b> </td>	</tr>	
	   <tr><td><br></td></tr>
	   </tr>
<table>
		<tr>
			<td><small><b>Sludge Tanks( IOPP 3.1)   </b></small></td>	
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp;Last Stock &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MT</b></small></td>
			<td><small><b> &nbsp;&nbsp;  Discharge Ashore &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MT</b></small></td>
			<td><small><b> &nbsp;&nbsp;Current Stock &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MT</b></small></td>
	</tr>
	<tr>	<td><small>Tank 1 </small></td>
			<td><input type="text" name="lsstank1"  id="lsstank1" value="<?php echo $row['lsstank1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="dastank1"  id="dastank1" value="<?php echo $row['dastank1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="csstank1"  id="csstank1" value="<?php echo $row['csstank1'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
	<tr>
			<td><small>Tank 2</small></td>
			<td><input type="text" name="lsstank2"  id="lsstank2" value="<?php echo $row['lsstank2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="dastank2"  id="dastank2" value="<?php echo $row['dastank2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="csstank2"  id="csstank2" value="<?php echo $row['csstank2'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
	<tr>
			<td><small>Tank 3</small></td>
			<td><input type="text" name="lsstank3"  id="lsstank3" value="<?php echo $row['lsstank3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="dastank3"  id="dastank3" value="<?php echo $row['dastank3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="csstank3"  id="csstank3" value="<?php echo $row['csstank3'];?>" class="form-control" maxlength="5" size="7"></td>
	 </table>
      
</div>
   <div class="col-md-5">
		<table>
            <tr><td><br></td></tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankbilge where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
           	<tr>
				<td><small>Last Update </small></td>
				<td class="input-container">  <input type="datetime-local"  id="lastdate" value="<?php echo $row['lastdate'];?>" class="form-control" name="lastdate" >  </td>
			</tr>
	</table>
	<table>
			<tr>
		   <tr><td><br></td></tr>
			<tr><td  colspan="18" style="font-size:16px;"> <b></b> </td>	</tr>	
		   <tr><td><br></td></tr>
			<td><small><b>Bilge Tanks (IOPP 3.3)  </b></small></td>	
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp;Last Stock &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MT</b></small></td>
			<td><small><b> &nbsp;&nbsp;  Discharge Ashore &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MT</b></small></td>
			<td><small><b> &nbsp;&nbsp;Current Stock &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MT</b></small></td>
	</tr>
	<tr>	<td><small>Tank 1</small></td>
			<td><input type="text" name="lsbtank1"  id="lsbtank1" value="<?php echo $row['lsbtank1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="dabtank1"  id="dabtank1" value="<?php echo $row['dabtank1'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="csbtank1"  id="csbtank1" value="<?php echo $row['csbtank1'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
	<tr>
			<td><small>Tank 2</small></td>
			<td><input type="text" name="lsbtank2"  id="lsbtank2" value="<?php echo $row['lsbtank2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="dabtank2"  id="dabtank2" value="<?php echo $row['dabtank2'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="csbtank2"  id="csbtank2" value="<?php echo $row['csbtank2'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
	<tr>
			<td><small>Tank 3</small></td>
			<td><input type="text" name="lsbtank3"  id="lsbtank3" value="<?php echo $row['lsbtank3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="dabtank3"  id="dabtank3" value="<?php echo $row['dabtank3'];?>" class="form-control" maxlength="5" size="7"></td>
			<td><input type="text" name="csbtank3"  id="csbtank3" value="<?php echo $row['csbtank3'];?>" class="form-control" maxlength="5" size="7"></td>>
	</tr>
	</table>
</div>
</div>

<div class="row" >
<div class="col-md-2"></div>
   <div class="col-md-10">
       <table>
			<tr>
			<tr><td><br></td></tr>
			<tr><td  colspan="18" style="font-size:16px;"> <b> </b> </td>	</tr>	<tr><td><br></td></tr>
			<tr>
				<td><small>Fuel Tank Soundings Taken </small></td>
				<td class="input-container">  
					 <input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;"><small>Yes</small></span>
					<input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;
					<input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;"><small>No</small></span>
				</td>
			</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank1'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
			<tr>
				<td><small>Last Update </small></td>
				<td class="input-container">  <input type="datetime-local"  id="lastdate" value="<?php echo $row['lastdate'];?>" class="form-control" name="lastdate" >  </td>
			</tr>
	</table>
	
	<table>
		   <tr><td><br></td></tr>
				<td><small><b>Tank Name  </b></small></td>	
				<td><small><b> Bunkered <br>in Tanks </b></small></td>
				<td><small><b> Fuel Grade </b></small></td>
				<td><small><b> LCV KJ/KG</b></small></td>
				<td><small><b> Sulphur %</b></small></td>
				<td><small><b>Density Kg/m3</b></small></td>
				<td><small><b>Temperature C</b></small></td>
				<td><small><b>Last Stock MT</b></small></td>
				<td><small><b>Bunkered quantity MT</b></small></td>
				<td><small><b>Current Stock MT</b></small></td>
				<td><small><b>Diffrence MT</b></small></td>
				<td><small><b> Deviation %</b></small></td>
			</tr>
			<tr>
				<td><small>Tank 1</small></td>
				<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
				<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv1"  id="lcv1" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur1"  id="sulphur1" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density1"  id="density1" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp1"  id="temp1" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock1"  id="prestock1" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty1"  id="bunkerqty1" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock1"  id="curstock1" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ1"  id="differ1" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation1"  id="deviation1" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
			</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank2'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
			<tr>
				<td><small>Tank 2</small></td>
				<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
					<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv2"  id="lcv2" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur2"  id="sulphur2" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density2"  id="density2" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp2"  id="temp2" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock2"  id="prestock2" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty2"  id="bunkerqty2" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock2"  id="curstock2" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ2"  id="differ2" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation2"  id="deviation2" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank3'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
				<td><small>Tank 3</small></td>
				<td><select name="bunk"  class="form-control" required >
				<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				</select>  </td>
				<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv3"  id="lcv3" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur3"  id="sulphur3" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density3"  id="density3" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp3"  id="temp3" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock3"  id="prestock3" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty3"  id="bunkerqty3" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock3"  id="curstock3" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ3"  id="differ3" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation3"  id="deviation3" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank4'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
				<td><small>Tank 4</small></td>
				<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
				<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv4"  id="lcv4" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur4"  id="sulphur4" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density4"  id="density4" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp4"  id="temp4" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock4"  id="prestock4" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty4"  id="bunkerqty4" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock4"  id="curstock4" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ4"  id="differ4" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation4"  id="deviation4" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank5'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Tank 5</small></td>
			<td><select name="bunk"  class="form-control" required >
				<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv5"  id="lcv5" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur5"  id="sulphur5" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density5"  id="density5" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp5"  id="temp5" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock5"  id="prestock5" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty5"  id="bunkerqty5" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock5"  id="curstock5" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ5"  id="differ5" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation5"  id="deviation5" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank6'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
         <tr>
				<td><small>Tank 6</small></td>
				<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
				<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv6"  id="lcv6" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur6"  id="sulphur6" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density6"  id="density6" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp6"  id="temp6" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock6"  id="prestock6" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty6"  id="bunkerqty6" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock6"  id="curstock6" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ6"  id="differ6" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation6"  id="deviation6" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank7'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
				<td><small>Tank 7</small></td>
				<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
				<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv7"  id="lcv7" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur7"  id="sulphur7" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density7"  id="density7" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp7"  id="temp7" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock7"  id="prestock7" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty7"  id="bunkerqty7" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock7"  id="curstock7" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ7"  id="differ7" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation7"  id="deviation7" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank8'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
				<td><small>Tank 8</small></td>
				<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
				<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv8"  id="lcv8" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur8"  id="sulphur8" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density8"  id="density8" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp8"  id="temp8" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock8"  id="prestock8" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty8"  id="bunkerqty8" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock8"  id="curstock8" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ8"  id="differ8" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation8"  id="deviation8" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank9'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Tank 9</small></td>
			<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
			
					<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv9"  id="lcv9" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur9"  id="sulphur9" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density9"  id="density9" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp9"  id="temp9" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock9"  id="prestock9" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty9"  id="bunkerqty9" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock9"  id="curstock9" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ9"  id="differ9" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation9"  id="deviation9" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>

	<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank10'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 10</small></td>
			<td><select name="bunk"  class="form-control" required >
			<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv10"  id="lcv10" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur10"  id="sulphur10" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density10"  id="density10" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp10"  id="temp10" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock10"  id="prestock10" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty10"  id="bunkerqty10" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock10"  id="curstock10" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ10"  id="differ10" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation10"  id="deviation10" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank11'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 11</small></td>
			<td><select name="bunk"  class="form-control" required >
			<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>ULSFO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
				</select>  </td>
				<td><input type="text" name="lcv11"  id="lcv11" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur11"  id="sulphur11" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density11"  id="density11" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp11"  id="temp11" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock11"  id="prestock11" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty11"  id="bunkerqty11" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock11"  id="curstock11" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ11"  id="differ11" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation11"  id="deviation11" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank12'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 12</small></td>
			<td><select name="bunk"  class="form-control" required >
			<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
				<option></option><option>HSHFO</option>
				<option>VLSFO</option>
				<option>ULSFO</option>
				<option>HSMGO</option>
				<option>HSMDO</option>
				<option>ULSFO</option>
				<option>LSMGO</option>
				<option>LSMDO</option>
				</select>  </td>
				<td><input type="text" name="lcv12"  id="lcv12" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur12"  id="sulphur12" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density12"  id="density12" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp12"  id="temp12" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock12"  id="prestock12" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty12"  id="bunkerqty12" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock12"  id="curstock12" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ12"  id="differ12" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation12"  id="deviation12" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank13'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 13</small></td>
			<td><select name="bunk"  class="form-control" required >
			<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv13"  id="lcv13" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur13"  id="sulphur13" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density13"  id="density13" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp13"  id="temp13" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock13"  id="prestock13" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty13"  id="bunkerqty13" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock13"  id="curstock13" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ13"  id="differ13" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation13"  id="deviation13" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank14'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 14</small></td>
			<td><select name="bunk"  class="form-control" required >
			<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv14"  id="lcv14" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur14"  id="sulphur14" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density14"  id="density14" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp14"  id="temp14" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock14"  id="prestock14" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty14"  id="bunkerqty14" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock14"  id="curstock14" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ14"  id="differ14" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation14"  id="deviation14" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank15'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 15</small></td>
			<td><select name="bunk"  class="form-control" required >
			<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
			</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv15"  id="lcv15" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur15"  id="sulphur15" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density15"  id="density15" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp15"  id="temp15" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock15"  id="prestock15" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty15"  id="bunkerqty15" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock15"  id="curstock15" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ15"  id="differ15" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation15"  id="deviation15" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank16'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 16</small></td>
			<td><select name="bunk"  class="form-control" required >
				<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv16"  id="lcv16" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur16"  id="sulphur16" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density16"  id="density16" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp16"  id="temp16" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock16"  id="prestock16" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty16"  id="bunkerqty16" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock16"  id="curstock16" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ16"  id="differ16" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation16"  id="deviation16" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank17'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 17</small></td>
			<td><select name="bunk"  class="form-control" required >
				<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv17"  id="lcv17" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur17"  id="sulphur17" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density17"  id="density17" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp17"  id="temp17" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock17"  id="prestock17" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty17"  id="bunkerqty17" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock17"  id="curstock17" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ17"  id="differ17" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation17"  id="deviation17" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank18'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 18</small></td>
			<td><select name="bunk"  class="form-control" required >
				<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv18"  id="lcv18" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur18"  id="sulphur18" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density18"  id="density18" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp18"  id="temp18" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock18"  id="prestock18" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty18"  id="bunkerqty18" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock18"  id="curstock18" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ18"  id="differ18" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation18"  id="deviation18" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank19'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 19</small></td>
			<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv19"  id="lcv19" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur19"  id="sulphur19" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density19"  id="density19" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp19"  id="temp19" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock19"  id="prestock19" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty19"  id="bunkerqty19" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock19"  id="curstock19" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ19"  id="differ19" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation19"  id="deviation19" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank20'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Tank 20</small></td>
			<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv20"  id="lcv20" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur20"  id="sulphur20" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density20"  id="density20" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp20"  id="temp20" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock20"  id="prestock20" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty20"  id="bunkerqty20" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock20"  id="curstock20" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ20"  id="differ20" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation20"  id="deviation20" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank21'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Difference</small></td>
			<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv21"  id="lcv21" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur21"  id="sulphur21" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density21"  id="density21" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp21"  id="temp21" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock21"  id="prestock21" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty21"  id="bunkerqty21" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock21"  id="curstock21" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ21"  id="differ21" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation21"  id="deviation21" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM engtankstock where reportnum =$reportnum AND tankname='Tank22'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Deviation </small></td>
			<td><select name="bunk"  class="form-control" required >
					<option>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option>No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					</select>  </td>
			<td><select name="fgrade"  class="form-control" required >
					<option></option><option>HSHFO</option>
					<option>VLSFO</option>
					<option>ULSFO</option>
					<option>HSMGO</option>
					<option>HSMDO</option>
					<option>ULSFO</option>
					<option>LSMGO</option>
					<option>LSMDO</option>
					</select>  </td>
				<td><input type="text" name="lcv22"  id="lcv22" value="<?php echo $row['lcv'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="sulphur22"  id="sulphur22" value="<?php echo $row['sulphur'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="density22"  id="density22" value="<?php echo $row['density'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="temp22"  id="temp22" value="<?php echo $row['temp'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="prestock22"  id="prestock22" value="<?php echo $row['prestock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="bunkerqty22"  id="bunkerqty22" value="<?php echo $row['bunkerqty'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="curstock22"  id="curstock22" value="<?php echo $row['curstock'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="differ22"  id="differ22" value="<?php echo $row['differ'];?>" class="form-control" maxlength="5" size="7"></td>
				<td><input type="text" name="deviation22"  id="deviation22" value="<?php echo $row['deviation'];?>" class="form-control" maxlength="5" size="7"></td>
	</tr>
 </table>
 <?php
	}
}
?>
</div>

</div>


      <tr><td>	<br></td></tr><tr><td>	<br></td></tr>
    <div style="padding-left:230px;width:98%;padding-top:0%;">
		<textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
	</div>
	<div style="padding-left:250px;">
		    <div class="col-md-1">
		        <button type="submit" name="srengtank" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		    </div>
	</div>
  