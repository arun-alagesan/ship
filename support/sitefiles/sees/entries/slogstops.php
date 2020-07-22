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
<table class=" table-hover" width="100%" >	
	<form name="dstoppages" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
		<input type="hidden" name="slogdeck" value="1">
		<input type="hidden" name="stops" value="1">
				<input type="hidden" name="reportnum" value="<?php echo $reportnum;?>">
	<tr>
		<td id="numaligncenter" colspan="5" style="font-size:16px;"><b>Stoppages & Driftings</b></td>
	</tr>		
					<tr><td>&nbsp &nbsp </td></tr> 
	<tr>
		<td id="numaligncenter">Start of Event</td>
		<td id="numaligncenter">Stop of Event</td>
		<td id="numaligncenter">Number of Hours</td>
		<td id="numaligncenter">Category</td>
		<td id="numaligncenter">Reason</td>
	</tr>		
	<tr>	

			<td><input type="datetime-local" name="startevent" class="form-control" placeholder=""  required></td>	
			<td><input type="datetime-local" name="stopevent" class="form-control" placeholder="" required></td>
			<td><input type="text" name="numhrs" class="form-control" placeholder="" ></td>
			<td >  
					<select name="category" class="form-control"  required >
						<option></option>
						<option>Technical </option>
						<option>Operational</option>
						<option>Others</option>
					</select>  
			</td>
			<td >  
					<select name="reason" class="form-control"  required >
					<option>DEVIATION FOR YARD/DRYDOCK/HULL CLEANING </option>
					<option>YARDSTAY INCLUDING DRYDOCKING </option>
					<option>YARDSTAY WITHOUT DRYDOCKING </option>
					<option>UNDERWATER CLEANING FOR IMPROVING SPEED </option>
					<option>STRUCTURAL DAMAGE AND REINFORCEMENT </option>
					<option>ENGINE STOP AT SEA </option>
					<option>PROLONGED PORTSTAY DUE TO TECH.TROUBLES </option>
					<option>REDUCED SPEED DUE TO TECHNICAL TROUBLES </option>
					<option>DEVIATION DUE TO TECHNICAL TROUBLES </option>
					<option>DEVIATION FOR SPARE PARTS/EXPERTS </option>
					<option>OVERHAUL ALLOWANCE ACC. CHARTER PARTY </option>
					<option>PROLONGED PORTSTAY DUE TO DEF.CARGO GEAR </option>
					<option>DELAY OF OPERATION </option>
					<option>STOP AT SEA DUE TO CASUALTY </option>
					<option>PROLONGED PORTSTAY DUE TO CASUALTY </option>
					<option>REDUCED SPEED DUE TO CASUALTY </option>
					<option>DEVIATION DUE TO CASUALTY </option>
					<option>GROUNDING </option>
					<option>COLLISION </option>
					<option>LANDING INJURED/SICK CREW MEMBERS </option>
					<option>FIRE </option>
					<option>DEVIATION/ASSISTANCE TO DISTRESSED </option>
					<option>BUNKERING </option>
					<option>POLLUTION </option>
					<option>INSPECTION BY AUTHORITIES </option>
					<option>REASON NOT DEFINED UNDER ABOVE CODES </option>
					<option>NAVIGATIONAL </option>
					<option>HULL </option>
					<option>CARGO HANDLING EQUIPMENT </option>
					<option>MAIN ENGINE </option>
					<option>AUX. ENGINES </option>
					<option>AUX. MACHINERY </option>
					<option>FUEL PROBLEMS </option>
					<option>CREW </option>
					<option>Delays on arrival </option>
					<option>OTHER </option>
					<option>Delays whilst alongside </option>
					<option>Delays on departure </option>
					</select>  
			</td>

		</tr>	
		<tr>	
			<td  colspan="5"><textarea name = "comments"  class="form-control"placeholder = "Comments" id = "comment" ></textarea></td>
		</tr>

<tr>
	<td colspan="5"><button type="submit" name="srdstop" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button></td>
</tr>
</form>
<tr><td>	<br></td></tr><tr><td>	<br></td></tr>
</table>
<?php

if($_POST['srdstop'])
{
	$category=$_POST['category'];	
	$reason=$_POST['reason'];
	$comments=$_POST['comments'];
	$startevent=$_POST['startevent'];
	$stopevent=$_POST['stopevent'];
	$numhrs=$_POST['numhrs'];
	$reportnum=$row['reportnum'];
	$voynum=$row['voynum'];



	 $sqll="INSERT INTO `dstoppages` (`reportnum`,`voynum`,`category`,`reason`, `comments`, `startevent`, `stopevent`, `numhrs`) 
	 VALUES ('$reportnum','$voynum','$category','$reason','$comments','$startevent','$stopevent','$numhrs')";
	 
	 $sql_2=mysqli_query($con,$sqll);

	 if($sql_2)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Data Entered Successfully..!!</font></center></td><tr>';
	 }
}
?>

 
<table width="100%">
	<tr><td colspan="5"><h4> Stoppages & Driftings Lists</h4></td></tr>

	
	<tr style="background-color:#3ad; color:white;" id="numaligncenter">
	
			<td>Start of Event</td>
			<td>Stop of Event</td>
			<td>Number of Hours</td>
			<td>Category</td>
			<td>Reason</td>

		</tr>
	</table>
	<?php

	 	$sql1=mysqli_query($con,"SELECT * FROM dstoppages where reportnum =$reportnum order by id  desc limit 10");
		
		while($row=mysqli_fetch_array($sql1))
		{
	
	?>	
		
<table width="100%">
		<tr>
			 <td>  <input type="text" name="startevent" id="startevent" class="form-control" value="<?php echo $row['startevent'];?>"   readonly/>  </td>
			 <td>  <input type="text" name="stopevent"  id="stopevent" class="form-control" value="<?php echo $row['stopevent'];?>"  readonly/>  </td>
			<td>  <input type="text" name="numhrs" id="numhrs" class="form-control" value="<?php echo $row['numhrs'];?>"  readonly/>  </td>
			<td>  <input type="text" name="category" id="category" class="form-control" value="<?php echo $row['category'];?>" readonly />  </td>	
			<td>  <input type="text" name="reason" id="reason" class="form-control" value="<?php echo $row['reason'];?>" readonly />  </td>	
		</tr>	
		<tr><td  colspan="6"><input  textarea name = "comments" id="comments" class="form-control" value="<?php echo $row['comments'];?>" readonly/></textarea></td></tr>	
</table>
<?php
		 //echo $reportnum;
		}
	}
?>
</div>
</div>
</div>