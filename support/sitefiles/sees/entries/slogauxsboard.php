  <?php
  
if($_POST['srauxpower'])
{
$rnumber=$_POST['rnumber'];
$power1=$_POST['power1'];
$power2=$_POST['power2'];
$power3=$_POST['power3'];
$power4=$_POST['power4'];
$power5=$_POST['power5'];
$powersg1=$_POST['powersg1'];
$powersg2=$_POST['powersg2'];
$powertg=$_POST['powertg'];

$load1=$_POST['load1'];
$load2=$_POST['load2'];
$load3=$_POST['load3'];
$load4=$_POST['load4'];
$load5=$_POST['load5'];
$loadsg1=$_POST['loadsg1'];
$loadsg2=$_POST['loadsg2'];
$loadtg=$_POST['loadtg'];

$load1=$_POST['load1'];
$load2=$_POST['load2'];
$load3=$_POST['load3'];
$load4=$_POST['load4'];
$load5=$_POST['load5'];
$lloadsg1=$_POST['loadsg1'];
$loadsg2=$_POST['loadsg2'];
$loadtg=$_POST['loadtg'];

$current1=$_POST['current1'];
$current2=$_POST['current2'];
$current3=$_POST['current3'];
$current4=$_POST['current4'];
$current5=$_POST['current5'];
$currentsg1=$_POST['currentsg1'];
$currentsg2=$_POST['currentsg2'];
$currenttg=$_POST['currenttg'];

$voltage1=$_POST['voltage1'];
$voltage2=$_POST['voltage2'];
$voltage3=$_POST['voltage3'];
$voltage4=$_POST['voltage4'];
$voltage5=$_POST['voltage5'];
$voltagesg1=$_POST['voltagesg1'];
$voltagesg2=$_POST['voltagesg2'];
$voltagetg=$_POST['voltagetg'];

$pf1=$_POST['pf1'];
$pf2=$_POST['pf2'];
$pf3=$_POST['pf3'];
$pf4=$_POST['pf4'];
$pf5=$_POST['pf5'];
$pfsg1=$_POST['pfsg1'];
$pfsg2=$_POST['pfsg2'];
$pftg=$_POST['pftg'];

$curkwh1=$_POST['curkwh1'];
$curkwh2=$_POST['curkwh2'];
$curkwh3=$_POST['curkwh3'];
$curkwh4=$_POST['curkwh4'];
$curkwh5=$_POST['curkwh5'];
$curkwhsg1=$_POST['curkwhsg1'];
$curkwhsg2=$_POST['curkwhsg2'];
$curkwhtg=$_POST['curkwhtg'];
$curkwhr=$_POST['curkwhr'];

$prevkwh1=$_POST['prevkwh1'];
$prevkwh2=$_POST['prevkwh2'];
$prevkwh3=$_POST['prevkwh3'];
$prevkwh4=$_POST['prevkwh4'];
$prevkwh5=$_POST['prevkwh5'];
$prevkwhsg1=$_POST['prevkwhsg1'];
$prevkwhsg2=$_POST['prevkwhsg2'];
$prevkwhtg=$_POST['prevkwhtg'];
$prevkwhr=$_POST['prevkwhr'];

$dailykwh1=$_POST['dailykwh1'];
$dailykwh2=$_POST['dailykwh2'];
$dailykwh3=$_POST['dailykwh3'];
$dailykwh4=$_POST['dailykwh4'];
$dailykwh5=$_POST['dailykwh5'];
$dailykwhsg1=$_POST['dailykwhsg1'];
$dailykwhsg2=$_POST['dailykwhsg2'];
$dailykwhtg=$_POST['dailykwhtg'];
$dailykwhr=$_POST['dailykwhr'];


		$sql1t="UPDATE `tempengauxp` SET 
		`auxeng1`='$power1', `auxeng2`='$power2', `auxeng3`='$power3', `auxeng4`='$power4', `auxeng5`='$power5', `sgen1`='$powersg1', `sgen2`='$powersg2', `tgen`='$powertg' WHERE `reportnum`='$rnumber' AND items ='power'";
		$sql_1=mysqli_query($con,$sql1t);
		
		$sql2t="UPDATE `tempengauxp` SET 
		`auxeng1`='$load1', `auxeng2`='$load2', `auxeng3`='$load3', `auxeng4`='$load4', `auxeng5`='$load5',  `sgen1`='$loadsg1', `sgen2`='$loadsg2', `tgen`='$loadtg' WHERE `reportnum`='$rnumber' AND items ='load'";
		$sql_2=mysqli_query($con,$sql2t);
		
		$sql3t="UPDATE `tempengauxp` SET 
		`auxeng1`='$current1', `auxeng2`='$current2', `auxeng3`='$current3', `auxeng4`='$current4', `auxeng5`='$current5',  `sgen1`='$currentsg1', `sgen2`='$currentsg2', `tgen`='$currenttg' WHERE `reportnum`='$rnumber' AND items ='current'";
		$sql_3=mysqli_query($con,$sql3t);
		
		$sql4t="UPDATE `tempengauxp` SET 
		`auxeng1`='$voltage1', `auxeng2`='$voltage2', `auxeng3`='$voltage3', `auxeng4`='$voltage4', `auxeng5`='$voltage5',  `sgen1`='$voltagesg1', `sgen2`='$voltagesg2', `tgen`='$voltagetg' WHERE `reportnum`='$rnumber' AND items ='voltage'";
		$sql_4=mysqli_query($con,$sql4t);
		
		$sql5t="UPDATE `tempengauxp` SET 
		`auxeng1`='$pf1', `auxeng2`='$pf2', `auxeng3`='$pf3', `auxeng4`='$pf4', `auxeng5`='$pf5', `sgen1`='$pfsg1', `sgen2`='$pfsg2', `tgen`='$pftg' WHERE `reportnum`='$rnumber' AND items ='pf'";
		$sql_5=mysqli_query($con,$sql5t);
		
		$sql6t="UPDATE `tempengauxp` SET 
		`auxeng1`='$curkwh1', `auxeng2`='$curkwh2', `auxeng3`='$curkwh3', `auxeng4`='$curkwh4', `auxeng5`='$curkwh5' , `sgen1`='$curkwhsg1', `sgen2`='$curkwhsg2', `tgen`='$curkwhtg' , `reefer`='$curkwhr 'WHERE `reportnum`='$rnumber' AND items ='creading'";
		$sql_6=mysqli_query($con,$sql6t);
		
		$sql7t="UPDATE `tempengauxp` SET 
		`auxeng1`='$prevkwh1', `auxeng2`='$prevkwh2', `auxeng3`='$prevkwh3', `auxeng4`='$prevkwh4', `auxeng5`='$prevkwh5' , `sgen1`='$prevkwhsg1', `sgen2`='$prevkwhsg2', `tgen`='$prevkwhtg' , `reefer`='$prevkwhr' WHERE `reportnum`='$rnumber' AND items ='preading'";
		$sql_7=mysqli_query($con,$sql7t);
		
		$sql8t="UPDATE `tempengauxp` SET 
		`auxeng1`='$dailykwh1', `auxeng2`='$dailykwh2',`auxeng3`='$dailykwh3', `auxeng4`='$dailykwh4', `auxeng5`='$dailykwh5', `sgen1`='$dailykwhsg1', `sgen2`='$dailykwhsg2', `tgen`='$dailykwhtg' , `reefer`='$dailykwhr' WHERE `reportnum`='$rnumber' AND items ='dreading'";
		$sql_8=mysqli_query($con,$sql8t);

 
 
 		 $sql1g="UPDATE `engauxgen1` SET 
		`engpower`='$power1', `engload`='$load1', `pfactor`='$pf1', `engcurrent`='$current1', `engvoltage`='$voltage1', `cpowerreading`='$curkwh1', `ppowerreading`='$prekwh1', `dpowerreading`='$dailykwh1'  WHERE `reportnum`='$rnumber'";
		$sql_1=mysqli_query($con,$sql1g);	 
		
	 	$sql2g="UPDATE `engauxgen2` SET 
		`engpower`='$power1', `engload`='$load1', `pfactor`='$pf1', `engcurrent`='$current1', `engvoltage`='$voltage1', `cpowerreading`='$curkwh1', `ppowerreading`='$prekwh1', `dpowerreading`='$dailykwh1'  WHERE `reportnum`='$rnumber'";
		$sql_2=mysqli_query($con,$sql2g);	 
		
		$sql3g="UPDATE `engauxgen3` SET 
		`engpower`='$power1', `engload`='$load1', `pfactor`='$pf1', `engcurrent`='$current1', `engvoltage`='$voltage1', `cpowerreading`='$curkwh1', `ppowerreading`='$prekwh1', `dpowerreading`='$dailykwh1'  WHERE `reportnum`='$rnumber'";
		$sql_3=mysqli_query($con,$sql3g);
		
		 $sql4g="UPDATE `engauxgen4` SET 
		`engpower`='$power1', `engload`='$load1', `pfactor`='$pf1', `engcurrent`='$current1', `engvoltage`='$voltage1', `cpowerreading`='$curkwh1', `ppowerreading`='$prekwh1', `dpowerreading`='$dailykwh1'  WHERE `reportnum`='$rnumber'";
		$sql_4=mysqli_query($con,$sql4g);
		
		 $sql5g="UPDATE `engauxgen5` SET 
		`engpower`='$power1', `engload`='$load1', `pfactor`='$pf1', `engcurrent`='$current1', `engvoltage`='$voltage1', `cpowerreading`='$curkwh1', `ppowerreading`='$prekwh1', `dpowerreading`='$dailykwh1'  WHERE `reportnum`='$rnumber'";
		$sql_5=mysqli_query($con,$sql5g);		
		
 		 $sql6g="UPDATE `engauxshafteng1` SET 
		`engpower`='$power1', `engload`='$load1', `pfactor`='$pf1', `engcurrent`='$current1', `engvoltage`='$voltage1', `cpowerreading`='$curkwh1', `ppowerreading`='$prekwh1', `dpowerreading`='$dailykwh1'  WHERE `reportnum`='$rnumber'";
		$sql_6=mysqli_query($con,$sql6g);
		
		 $sql7g="UPDATE `engauxshafteng2` SET 
		`engpower`='$power1', `engload`='$load1', `pfactor`='$pf1', `engcurrent`='$current1', `engvoltage`='$voltage1', `cpowerreading`='$curkwh1', `ppowerreading`='$prekwh1', `dpowerreading`='$dailykwh1'  WHERE `reportnum`='$rnumber'";
		$sql_7=mysqli_query($con,$sql7g);		
	 
/* 
			 $sql_1g=mysqli_query($con,$sql1g);
			 
			 if($sql_1g)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Generator 1 Data Entered Successfully..!!</font></center></td><tr>';
			 } */
			 
 
 }
 ?>	
 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

//print_r($_POST);

?>	
<br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
      <center>
<table>
<tr><td>
	<form name="slogmaineng" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="sboard" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">

	
		<tr>
		    <td  colspan="6" style="font-size:16px;padding-left:300px;"><b>
		    Power Management System</b></td>
		    <tr><td><br></td></tr>  <tr><td><br></td></tr>
		<td></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #1</b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #2</b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #3 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #4 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #5 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;SG #1 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;SG #2 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;TG </b></small></td>

		</tr>		
<?php
	
		$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='power'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>	
	<tr>
			<td><small>Power &nbsp;&nbsp;</small></td>
			<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
			<td><input type="text" name="power1" id="power1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="power2" id="power2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="power3" id="power3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="power4" id="power4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="power5" id="power5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="powersg1" id="powersg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="powersg2" id="powersg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="powertg" id="powertg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>KW</small></i></td>
		</tr>
<?php
	}
		$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='load'");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>		
		<tr>
			<td><small>Load&nbsp;&nbsp;</small></td>
			<td><input type="text" name="load1" id="load1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="load2" id="load2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="load3" id="load3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="load4" id="load4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
	        <td><input type="text" name="load5" id="load5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loadsg1" id="loadsg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loadsg2" id="loadsg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loadtg" id="loadtg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>%</small></i></td>	
		</tr>
<?php
	}
	$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='current'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>	
		<tr>
			<td><small>Current&nbsp;&nbsp;</small></td>
			<td><input type="text" name="current1" id="current1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="current2" id="current2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="current3" id="current3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="current4" id="current4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="current5" id="current5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="currentsg1" id="currentsg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="currentsg2" id="currentsg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="currenttg" id="currenttg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>A</small></i></td>
		</tr>
<?php
	}
	$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='voltage'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Voltage&nbsp;&nbsp;</small></td>
			<td><input type="text" name="voltage1" id="voltage1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="voltage2" id="voltage2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="voltage3" id="voltage3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="voltage4" id="voltage4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="voltage5" id="voltage5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="voltagesg1" id="voltagesg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="voltagesg2" id="voltagesg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="voltagetg" id="voltagetg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>V</small></i></td>
		</tr>
<?php
	}
	$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='pf'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>PF&nbsp;&nbsp;</small></td>
			<td><input type="text" name="pf1" id="pf1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pf2" id="pf2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pf3" id="pf3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pf4" id="pf4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pf5" id="pf5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pfsg1" id="pfsg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pfsg2" id="pfsg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="pftg" id="pftg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
		<td><i class="fa fa- icon"> &Phi;</i></td>
		</tr>
		
		
		
</table></center>

</td><td>
  </div>

</div>


<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
      <center>
<table>
<tr><td>
	
	
		<tr><tr><td><br></td></tr>
		    <td  colspan="6" style="font-size:16px;padding-left:300px;"><b>
		    Power Production and Consumption</b></td>
		    <tr><td><br></td></tr>  <tr><td><br></td></tr>
			<td></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #1</b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #2</b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #3 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #4 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;AE #5 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;	SG #1 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;	SG #2 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;TG </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;Reefer </b></small></td>
			
		</tr>		
<?php
	}
	$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='creading'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Current KWH Counter  &nbsp;&nbsp;</small></td>
			<td><input type="text" name="curkwh1" id="curkwh1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwh2" id="curkwh2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwh3" id="curkwh3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwh4" id="curkwh4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwh5" id="curkwh5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwhsg1" id="curkwhsg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwhsg2" id="curkwhsg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwhtg" id="curkwhtg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="curkwhr" id="curkwhr" value="<?php echo $row['reefer'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>KWH</small></i></td>
		</tr>
<?php
	}
	$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='preading'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Prev KWH Counter</small></td>
			<td><input type="text" name="prevkwh1" id="prevkwh1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwh2" id="prevkwh2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwh3" id="prevkwh3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwh4" id="prevkwh4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwh5" id="prevkwh5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwhsg1" id="prevkwhsg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwhsg2" id="prevkwhsg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwhtg" id="prevkwhtg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="prevkwhr" id="prevkwhr" value="<?php echo $row['reefer'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>KWH</small></i></td>	
		</tr>
<?php
	}
	$sql21=mysqli_query($con,"SELECT * FROM tempengauxp where reportnum =$reportnum AND items='dreading'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td><small>Daily KWH </small></td>
			<td><input type="text" name="dailykwh1" id="dailykwh1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwh2" id="dailykwh2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwh3" id="dailykwh3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwh4" id="dailykwh4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwh5" id="dailykwh5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwhsg1" id="dailykwhsg1" value="<?php echo $row['sgen1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwhsg2" id="dailykwhsg2" value="<?php echo $row['sgen2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwhtg" id="dailykwhtg" value="<?php echo $row['tgen'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="dailykwhr" id="dailykwhr" value="<?php echo $row['reefer'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><i class="fa fa- icon"><small>KWH</small></i></td>
		</tr>

		
		
</table></center>

</td><td>
  </div>

<?php
}
}
?>




      <tr><td>	<br></td></tr><tr><td>	<br></td></tr>
		 <div style="padding-left:230px;width:98%;padding-top:1%;">
		 
		  <textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
		   
		</div>
    
		<div style="padding-left:250px;">

		    <div class="col-md-1">
		        <button type="submit" name="srauxpower" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		       
		    </div>
		 </div>
      </form>
 <br><br>
    



</div>
</td><td>