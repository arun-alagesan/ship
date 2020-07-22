
<div class="row" >

<div align="center">

<!-- ------------------------- Create Vendor Query Begins ---------------------- -->

<?php

if($_POST['elog'])
{
	$revcounter=$_POST['revcounter'];
	$rpm=$_POST['rpm'];
	 $power=$_POST['power'];
	 $torque=$_POST['torque'];
	 $cpress=$_POST['cpress'];
	$ctempin=$_POST['ctempin'];
	$ctemp1=$_POST['ctemp1'];
	$ctemp2=$_POST['ctemp2'];
	$ctemp3=$_POST['ctemp3'];
	$ctemp4=$_POST['ctemp4'];
	$ctemp5=$_POST['ctemp5'];
	$ctemp6=$_POST['ctemp6'];
	$ctemp7=$_POST['ctemp7'];
	$ctemp8=$_POST['ctemp8'];
	$ctemp9=$_POST['ctemp9'];
	$ctemp10=$_POST['ctemp10'];
	$ctemp11=$_POST['ctemp11'];
	$ctemp12=$_POST['ctemp12'];
	$ctemp13=$_POST['ctemp13'];
	$ctemp14=$_POST['ctemp14'];
	$ctemp15=$_POST['ctemp15'];
	$ctempavg=$_POST['ctempavg'];
	
	
	
	
	
	 $sqll="INSERT INTO `elog` (`revcounter`, `rpm`, `power`, `torque`) 
	 VALUES ('$revcounter','$rpm','$power','$torque')";
	 
	 $sql_2=mysqli_query($con,$sqll);
	 
	 if($sql_2)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Data Entered Successfully..!!</font></center></td><tr>';
	 }
}
?>
<!-- ------------------------- Create Vendor Query End ---------------------- -->

<!-- ------------------------- Create  Vendor Begins ---------------------- -->

<form name="elog" action="index.php" method="post">
<input type="hidden" name="elog" value="1">
<!-- <input type="hidden" name="newitem" value="1">-->
<table class="table-bordered table-hover" width="50%">		

		<tr>
			<td id="numaligncenter" colspan="2">
					<h4><b>Engine Observation</b><h4>
			</td>
		</tr>		
		<tr>
			<td>
				Revolution Counter
			</td>
			<td>
				<input type="text" name="revcounter" class="form-control" placeholder="Rev. Counter" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				RPM
			</td>
			<td>
				<input type="text" name="rpm" class="form-control" placeholder="RPM" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Power in KW
			</td>
			<td>
			<input type="text" name="power" class="form-control" placeholder="Power" required autocomplete="off">
			</td>
		</tr>

		<tr>
			<td>
			Torque
			</td>
			<td>
				<input type="text" name="torque" class="form-control" placeholder="Torque" required autocomplete="off">
			</td>
		</tr>
				<tr>
			<td id="numaligncenter" colspan="2">
					<b>Cooling Water </b>
			</td>
		</tr>		
		<tr>
			<td>
				Pressure 
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature IN
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 1
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 2
			</td>
			<td>
				<input type="text" name="ctemp2" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 3
			</td>
			<td>
				<input type="text" name="ctemp3" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 4
			</td>
			<td>
				<input type="text" name="ctemp4" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 5
			</td>
			<td>
				<input type="text" name="ctemp5" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 6
			</td>
			<td>
				<input type="text" name="ctemp6" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>	
		<tr>
			<td>
				Temperature Out 7
			</td>
			<td>
				<input type="text" name="ctemp7" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 8
			</td>
			<td>
				<input type="text" name="ctemp8" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 9
			</td>
			<td>
				<input type="text" name="ctemp9" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 10
			</td>
			<td>
				<input type="text" name="ctemp10" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 11
			</td>
			<td>
				<input type="text" name="ctemp11" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 12
			</td>
			<td>
				<input type="text" name="ctemp12" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 13
			</td>
			<td>
				<input type="text" name="ctemp13" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 14
			</td>
			<td>
				<input type="text" name="ctemp14" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 15
			</td>
			<td>
				<input type="text" name="ctemp15" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out Average
			</td>
			<td>
				<input type="text" name="ctempavg" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>		
		<tr>
			<td id="numaligncenter" colspan="2">
					<b>Piston Cooling Water </b>
			</td>
		</tr>		
		<tr>
			<td>
				Pressure 
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature IN
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 1
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 2
			</td>
			<td>
				<input type="text" name="ctemp2" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 3
			</td>
			<td>
				<input type="text" name="ctemp3" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 4
			</td>
			<td>
				<input type="text" name="ctemp4" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 5
			</td>
			<td>
				<input type="text" name="ctemp5" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 6
			</td>
			<td>
				<input type="text" name="ctemp6" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>	
		<tr>
			<td>
				Temperature Out 7
			</td>
			<td>
				<input type="text" name="ctemp7" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 8
			</td>
			<td>
				<input type="text" name="ctemp8" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 9
			</td>
			<td>
				<input type="text" name="ctemp9" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 10
			</td>
			<td>
				<input type="text" name="ctemp10" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 11
			</td>
			<td>
				<input type="text" name="ctemp11" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 12
			</td>
			<td>
				<input type="text" name="ctemp12" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 13
			</td>
			<td>
				<input type="text" name="ctemp13" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 14
			</td>
			<td>
				<input type="text" name="ctemp14" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 15
			</td>
			<td>
				<input type="text" name="ctemp15" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out Average
			</td>
			<td>
				<input type="text" name="ctempavg" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>		
		
		<tr>
			<td id="numaligncenter" colspan="2">
					<b>Exhaust System</b>
			</td>
		</tr>		
		<tr>
			<td>
				Exhaust Rec. Pressure 
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Exhaust Rec. Temperature
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 1
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 2
			</td>
			<td>
				<input type="text" name="ctemp2" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 3
			</td>
			<td>
				<input type="text" name="ctemp3" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 4
			</td>
			<td>
				<input type="text" name="ctemp4" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 5
			</td>
			<td>
				<input type="text" name="ctemp5" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 6
			</td>
			<td>
				<input type="text" name="ctemp6" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>	
		<tr>
			<td>
				Temperature Out 7
			</td>
			<td>
				<input type="text" name="ctemp7" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 8
			</td>
			<td>
				<input type="text" name="ctemp8" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 9
			</td>
			<td>
				<input type="text" name="ctemp9" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 10
			</td>
			<td>
				<input type="text" name="ctemp10" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 11
			</td>
			<td>
				<input type="text" name="ctemp11" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Temperature Out 12
			</td>
			<td>
				<input type="text" name="ctemp12" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
			<tr>
			<td>
				Temperature Out 13
			</td>
			<td>
				<input type="text" name="ctemp13" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 14
			</td>
			<td>
				<input type="text" name="ctemp14" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out 15
			</td>
			<td>
				<input type="text" name="ctemp15" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Temperature Out Average
			</td>
			<td>
				<input type="text" name="ctempavg" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>		
		<tr>
			<td id="numaligncenter" colspan="2">
					<b>Turbocharger 1</b>
			</td>
		</tr>		
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Inlet Air
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				RPM
			</td>
			<td>
				<input type="text" name="ctemp2" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Air filter DP
			</td>
			<td>
				<input type="text" name="ctemp3" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		
				<tr>
			<td id="numaligncenter" colspan="2">
					<b>Turbocharger 2</b>
			</td>
		</tr>		
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Inlet Air
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				RPM
			</td>
			<td>
				<input type="text" name="ctemp2" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Air filter DP
			</td>
			<td>
				<input type="text" name="ctemp3" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td id="numaligncenter" colspan="2">
					<b>Turbocharger 3</b>
			</td>
		</tr>		
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Inlet Air
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				RPM
			</td>
			<td>
				<input type="text" name="ctemp2" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Air filter DP
			</td>
			<td>
				<input type="text" name="ctemp3" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td id="numaligncenter" colspan="2">
					<b>Turbocharger 4</b>
			</td>
		</tr>		
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Exhaust out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Inlet Air
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				RPM
			</td>
			<td>
				<input type="text" name="ctemp2" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td>
				Air filter DP
			</td>
			<td>
				<input type="text" name="ctemp3" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
								<tr>
			<td id="numaligncenter" colspan="2">
					<b>Scavenge Air Cooler 1</b>
			</td>
		</tr>		
		<tr>
			<td>
				Air In
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Air Out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Scavenge Cooler DP
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
				<tr>
			<td id="numaligncenter" colspan="2">
					<b>Scavenge Air Cooler 2</b>
			</td>
		</tr>		
		<tr>
			<td>
				Air In
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Air Out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Scavenge Cooler DP
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
						<tr>
			<td id="numaligncenter" colspan="2">
					<b>Scavenge Air Cooler 3</b>
			</td>
		</tr>		
		<tr>
			<td>
				Air In
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Air Out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Scavenge Cooler DP
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td id="numaligncenter" colspan="2">
					<b>Scavenge Air Cooler 4</b>
			</td>
		</tr>		
		<tr>
			<td>
				Air In
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Air Out
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Scavenge Cooler DP
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td id="numaligncenter" colspan="2">
					<b>Scavenge Air Receiver</b>
			</td>
		</tr>		
		<tr>
			<td>
				Scavenge Rec. Pressure
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Scavange Rec. Temperature
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
			<tr>
			<td id="numaligncenter" colspan="2">
					<b>Air System</b>
			</td>
		</tr>		
		<tr>
			<td>
				ME Start Air Pressure
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				ME Control Air Pressure
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				ME Spring Air Pressure
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
		<tr>
			<td>
			 Start Air Receiver 1
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Start Air Receiver 2
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Start Air Receiver 3
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Start Air Receiver 4
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
					<tr>
			<td id="numaligncenter" colspan="2">
					<b>MF Fuel Oil System</b>
			</td>
		</tr>		
		<tr>
			<td>
				ME Fuel Inlet Temperature
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				ME LO Inlet Pressure
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				ME fuel filter DP
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
								<tr>
			<td id="numaligncenter" colspan="2">
					<b>ME Lube Oil System</b>
			</td>
		</tr>		
		<tr>
			<td>
				ME LO Temp
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				ME LO Inlet Pressure
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				ME LO Sump Level
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>	
			<tr>
			<td id="numaligncenter" colspan="2">
					<b>Thrust Bearing</b>
			</td>
		</tr>		
		<tr>
			<td>
				Ahead Temperature
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Astern Temperature
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
						<tr>
			<td id="numaligncenter" colspan="2">
					<b>Shafting</b>
			</td>
		</tr>		
		<tr>
			<td>
				Stern Tube LO Inlet Pressure
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Stern Tube Bearing 1 Temperature
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Stern Tube Bearing 2 Temperature
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
		<tr>
			<td>
				Intermediate Shaft Bearing 1
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Intermediate Shaft Bearing 2
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Intermediate Shaft Bearing 3
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
		<tr>
			<td>
				Intermediate Shaft Bearing 4
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Intermediate Shaft Bearing 5
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Intermediate Shaft Bearing 6
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Intermediate Shaft Bearing 7
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>	
		<tr>
			<td>
				Intermediate Shaft Bearing 8
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>	
						<tr>
			<td id="numaligncenter" colspan="2">
					<b>Auxiliary Engine</b>
			</td>
		</tr>		
		<tr>
			<td>
				AE1 Power in KW
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE1 Current in Amps
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE2 Power in KW
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
		<tr>
			<td>
				AE2 Current in Amps
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE3 Power in KW
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE3 Current in Amps
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
		<tr>
			<td>
				AE4 Power in KW
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE4 Current in Amps
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE5 Power in KW
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE5 Current in Amps
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>	
		<tr>
			<td>
				SG Power in KW
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				SG Current in Amps
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>			
		<tr>
			<td id="numaligncenter" colspan="2">
					<b>Auxiliary Systems</b>
			</td>
		</tr>		
		<tr>
			<td>
				Sea Water System Pressure
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				Sea Water System Temperature
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				LT CW System Pressure
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
		<tr>
			<td>
				LT CW System Temperature
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				HT CW System Pressure
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE3 Current in Amps
			</td>
			<td>
				<input type="text" name="ctemp1" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
					</tr>		
		<tr>
			<td>
				AE4 Power in KW
			</td>
			<td>
				<input type="text" name="cpress" class="form-control" placeholder="Pressure in Bar" required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE4 Current in Amps
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE5 Power in KW
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				AE5 Current in Amps
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>	
		<tr>
			<td>
				SG Power in KW
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td>
				SG Current in Amps
			</td>
			<td>
				<input type="text" name="ctempin" class="form-control" placeholder="Temperature in  Degree Celsius" autocomplete="off">
			</td>
		</tr>			
		<tr>
			<td colspan="2">
				<button type="submit" name="elog" class="btn btn-block btn-sm btn-primary" value="1">Enter</button>
			</td>
		</tr>

	</table>
</form>

</div>

</div>

