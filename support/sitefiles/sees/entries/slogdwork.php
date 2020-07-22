     <div style="padding-right:20px;">
    <div class="col-md-2"></div>

<div align="center"> 
	<div class="col-md-10" >
  <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];
		$voynum=$row['voynum'];
	?>
 <table class=" table-hover"  width="100%">	
	<form name="dcomments" action="index.php" method="post">
			<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogdeck" value="1">
			<input type="hidden" name="dwork" value="1">
			<input type="hidden" name="reportnum" value="<?php echo $reportnum;?>">
		<tr><td id="numaligncenter" colspan="6"  style="font-size:20px;"><b>Work Done</b></td></tr>	
		<tr>
			<td><small><b>Date</b></small></td>
			<td><small><b>Description</b></small></td>
			<td><small><b>Frequency</b></small></td>
			<td><small><b>Done By</b><s/mall></td>	
			<td><small><b>Approved By</b></small></td>
		</tr>
		<tr>		
			<td>  <input type="datetime-local" class="form-control" maxlength="2" size="3" name="ddatetime" required>  </td>
			<td>  
					<select name="testing" class="form-control" >
					<option>Stearing Gear</option>
					<option>Emergency Generator</option>
					<option>Emergency Fire Pump</option>
					<option>Emergency Lighting</option>
					<option>Dead Man Alarm</option>	
					<option>Emergency Compressor</option>
					<option>Fire Alarm System</option>
					<option>ME Safety Alarms / Shutdown</option>
					<option>ME Local Manouvering</option>
					<option>Oily Water Seperator</option>
					<option>AE Alarm Systems</option>
					<option>Engine Room Bilge Alarms</option>	
					<option>Quick Closing Valves</option>
					<option>Emergency Bilge Suction</option>
					<option>Auxiliary Boiler</option>
					<option>Water Tight Doors</option>
					<option>Ventilation and Fire Flaps</option>
					<option>Overboard Valves</option>
					<option>Purifier Alarms</option>
					<option>Water Spray System</option>
					<option>Emergency Exits</option>
					<option>Cargo Hold Bilge Alarms</option>
					<option>Fixed Fire Fighting Systems</option>
					<option>Life Boat Engine</option>
					<option>Rescue Boat Engine</option>
					<option>Life Boat and Davit</option>
					<option>Rescue Boat and Davit</option>
					<option>Life Rafts</option>
					<option>EEBD</option>
					<option>Immersion Suits</option>
					<option>BA Sets</option>
					<option>Chemical Suit</option>
					<option>EPIRB</option>
					<option>General Alarm and Whistle</option>
					<option>IMDG</option>
					<option>Cargo</option>
					<option>Lashings</option>
					<option>Reefer Cargo</option>
					<option>OOG Cargo</option>
					<option>Navigational Lights</option>
					<option>INMAR SAT C</option>
					<option>GMDSS</option>
					<option>Fire Extinguishers</option>
					<option>Paint Store</option>
					<option>Anchor Windlass</option>
					<option>Mooring Winch</option>
					<option>Other</option>
					</select>  
			</td>
			<td >  
					<select name="freq" class="form-control" >
					<option>Daily</option>
					<option>Weekly</option>
					<option>Monthly</option>
					<option>3 Monthly</option>
					<option>6 Monthly</option>	
					<option>Annual</option>
					<option>Bi Annual</option>
					<option>5 Yearly</option>
					</select> 
			</td>
			<td >  
					<select name="testby" class="form-control" >
					<option>Master</option>
					<option>Chief Officer</option>
					<option>Second Officer</option>
					<option>Third Officer</option>
					<option>Able Seaman</option>
					<option>Chief Engineer</option>
					<option>Second Engineer</option>
					<option>Third Engineer</option>
					<option>Fourth Engineer</option>
					<option>Junior Engineer</option>
					<option>Motorman</option>
					<option>Master</option>
					</select> 
			</td>
			<td >  
					<select name="appby" class="form-control" >
					<option>Master</option>
					<option>Chief Officer</option>
					<option>Chief Engineer</option>
					<option>Second Engineer</option>
					</select> 
			</td>
	</tr>	
	<tr>	
		<td  colspan="6"><textarea name = "comments"  class="form-control"placeholder = "Comments" id = "comment" ></textarea></td>
	</tr>
	<tr>
		<td colspan="6"><button name="srdcomments" class="btn btn-block btn-sm btn-primary" value="srdcomments" style="width:100px;">Save</button></td>
	</tr>
</form>	
<tr><td>	<br></td></tr><tr><td>	<br></td></tr>

</table>
 <?php
if($_POST['srdcomments'])
{
	$ddatetime=$_POST['ddatetime'];	
	$testing=$_POST['testing'];
	$freq=$_POST['freq'];
	$testby=$_POST['testby'];
	$appby=$_POST['appby'];
	$comments=$_POST['comments'];
	$reportnum=$row['reportnum'];
	$voynum=$row['voynum'];

	//print_r($_POST);
	
	 $sqll="INSERT INTO `dworkdone` (`reportnum`, `voynum`,`ddatetime`, `testing`, `freq`, `testby`, `appby`, `comments`) 
	 VALUES ('$reportnum','$voynum','$ddatetime','$testing','$freq','$testby','$appby','$comments')";
	 
	 $sql_1=mysqli_query($con,$sqll);
	 
	 if($sql_1)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Data Entered Successfully..!!</font></center></td><tr>';
	 }

	  }
?>
<table width="100%">
	<tr><td colspan="2" style="font-size:16px;"><b> Work Lists<b></td></tr>
		<tr style="background-color:#3ad; color:white;" id="numaligncenter">
			<td>DATE</td>
			<td>DESCRIPTION</td>
			<td>FREQUENCY</td>
			<td>TESTED BY</td>
			<td>APPROVED BY</td>
		</tr>
	</table>
<?php
		$sql10=mysqli_query($con,"SELECT * FROM dworkdone where reportnum =$reportnum");
					while($row1=mysqli_fetch_array($sql10))
					{
?>
<table width="100%">
		<tr>
			 <td>  <input type="text" name="ddatetime"  class="form-control" value="<?php echo $row1['ddatetime'];?>"   readonly/>  </td>
			 <td>  <input type="text" name="testing"  class="form-control" value="<?php echo $row1['testing'];?>"  readonly/>  </td>
			<td>  <input type="text" name="freq" class="form-control" value="<?php echo $row1['freq'];?>"  readonly/>  </td>
			<td>  <input type="text" name="testby"  class="form-control" value="<?php echo $row1['testby'];?>" readonly />  </td>	
			<td>  <input type="text" name="appby"  class="form-control" value="<?php echo $row1['appby'];?>" readonly />  </td>	
		</tr>	
		<tr><td  colspan="6"><input textarea name = "comments"  class="form-control" value="<?php echo $row1['comments'];?>" readonly/></textarea></td></tr>	
</table>
<?php
		}
}
?>
</div>
</div>
</div>