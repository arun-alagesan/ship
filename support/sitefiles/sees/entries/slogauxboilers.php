  <?php
  
if($_POST['srauxboiler'])
{
	$rnumber=$_POST['rnumber'];
	$oilfired=$_POST['oilfired'];
	$exhgasoper=$_POST['exhgasoper'];
	$sersteampress=$_POST['sersteampress'];
	$oilfiredsteampress=$_POST['oilfiredsteampress'];
	$exhsteampress=$_POST['exhsteampress'];
	$lpsteampress=$_POST['lpsteampress'];
	$hpsteampress=$_POST['hpsteampress'];
	$feedwaterinpress=$_POST['feedwaterinpress'];		 
	$hotwelltemp=$_POST['hotwelltemp'];
	$draintanktemp=$_POST['draintanktemp'];
	$exhsteampres=$_POST['exhsteampres'];
	$ph=$_POST['ph'];	 
	$conductivity=$_POST['conductivity'];
	$salinity=$_POST['salinity'];
	$chloride=$_POST['chloride'];
	$hydalk=$_POST['hydalk'];
	$blowdown=$_POST['blowdown'];	
	$dosage=$_POST['dosage'];	
	
		 $sql1b="UPDATE `engauxboiler` SET 
		`oilfired`='$oilfired', `exhgasoper`='$exhgasoper', `sersteampress`='$sersteampress',`oilfiredsteampress`='$oilfiredsteampress', `exhsteampress`='$exhsteampress', `lpsteampress`='$lpsteampress', `hpsteampress`='$hpsteampress',
		`feedwaterinpress`='$feedwaterinpress', `hotwelltemp`='$hotwelltemp', `draintanktemp`='$draintanktemp', `exhsteampres`='$exhsteampres', `ph`='$ph', `conductivity`='$conductivity',
		`salinity`='$salinity', `chloride`='$chloride' , `hydalk`='$hydalk', `blowdown`='$blowdown', `dosage`='$dosage'  WHERE `reportnum`='$rnumber'";
	 

			 $sql_1b=mysqli_query($con,$sql1b);
			 
			 if($sql_1b)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Boiler Data Entered Successfully..!!</font></center></td><tr>';
			 }
			 
	}
?>	

<br>
 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

//print_r($_POST);

?>

<div class="row" >
<div class="col-md-2"></div>
<div class="col-md-4">
	<table class=" table-hover" >	
		<form name="slogengboiler" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="boilers" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
<?php
	
		$sql21=mysqli_query($con,"SELECT * FROM engauxboiler where reportnum =$reportnum ");

		while($row=mysqli_fetch_array($sql21))
		{

		//$reportnum=$row['reportnum'];
?>	
	<td  colspan="2" style="font-size:16px; padding-left:200px;"><b>Boilers</b></td>	  <tr><td><br></td></tr>		
		<tr>
			<td><small>Oil Fired Boiler in Operation</small></td>
		
				
						<td class="input-container">  
			  
				 <input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
								
    <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:16px;">Yes</span>
   
    
		</td>
		</tr>
				<tr>
			<td><small>Exhaust Gas Boiler in Operation</small></td>
			
				<td class="input-container">  
			  
				 <input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;
								
    <input type="checkbox" name="exhgasoper" id="exhgasoper" value="<?php echo $row['exhgasoper'];?>">&nbsp;<span style="font-size:16px;">Yes</span>
   
    
		</td>
		</tr>
				<tr>
			<td><small>Service Steam Press</small></td>
			<td class="input-container"><input type="text" name="sersteampress" id="sersteampress" value="<?php echo $row['sersteampress'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i>
			</td>

		</tr>
				<tr>
			<td><small>Oil Fired Boiler Steam Press</small></td>
			<td class="input-container">
			    <input type="text" name="oilfiredsteampress" id="oilfiredsteampress" value="<?php echo $row['oilfiredsteampress'];?>" class="" maxlength="5" size="7">
				<i class="fa fa- icon"><small>Bar</small></i>
				</td>

		</tr>
				<tr>
			<td><small>Exhaust Boiler Steam Press</small></td>
			<td class="input-container"><input type="text" name="exhsteampress" id="exhsteampress" value="<?php echo $row['exhsteampress'];?>" class="" maxlength="5" size="7">
				<i class="fa fa- icon"><small>Bar</small></i></td>

		</tr>
				<tr>
			<td><small>LP Steam Press</small></td>
			<td class="input-container"><input type="text" name="lpsteampress" id="lpsteampress" value="<?php echo $row['lpsteampress'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon"><small>Bar</small></i></td>

		</tr>
				<tr>
			<td><small>HP Steam Press</small></td>
			<td class="input-container"><input type="text" name="hpsteampress" id="hpsteampress" value="<?php echo $row['hpsteampress'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon"><small>Bar</small></i></td>

		</tr>
				<tr>
			<td><small>Feed Water Inlet Press.</small></td>
			<td class="input-container"><input type="text" name="feedwaterinpress" id="feedwaterinpress" value="<?php echo $row['feedwaterinpress'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon"><small>Bar</small></i></td>

		</tr>
				<tr>
			<td><small>Hot Well Temp</small></td>
			<td class="input-container"><input type="text" name="hotwelltemp" id="hotwelltemp" value="<?php echo $row['hotwelltemp'];?>" class="" maxlength="5" size="7">
		<i class="fa fa- icon">&#176;c</i>	</td>

		</tr>
				<tr>
			<td><small>Drain Tank Temp</small></td>
			<td class="input-container"><input type="text" name="draintanktemp" id="draintanktemp" value="<?php echo $row['draintanktemp'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i></td>

		</tr>
				<tr>
			<td><small>Exhaust Steam Press</small></td>
			<td class="input-container"><input type="text" name="exhsteampres" id="exhsteampres" value="<?php echo $row['exhsteampres'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i></td>

		</tr>
</table>
</div>

<div class="col-md-4">

    <table>
		<tr><td  colspan="2" style="font-size:16px;"><b>Boiler Water System </b></td></tr>		  <tr><td><br></td></tr>
				<tr>
			<td><small>pH.</small></td>
			<td class="input-container"><input type="text" name="ph" id="ph" value="<?php echo $row['ph'];?>" class="" maxlength="5" size="7">
			
			<i class="fa fa- icon">&#176;c</i></td>

		</tr>
				<tr>
			<td><small>Conductivity</small></td>
			<td class="input-container"><input type="text" name="conductivity" id="conductivity" value="<?php echo $row['conductivity'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i>
			</td>

		</tr>
				<tr>
			<td><small>Salinity</small></td>
			<td class="input-container"><input type="text" name="salinity" id="salinity" value="<?php echo $row['salinity'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i></td>

		</tr>
				<tr>
			<td><small>Chloride</small></td>
			<td class="input-container"><input type="text" name="chloride" id="chloride" value="<?php echo $row['chloride'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i>
			</td>

		</tr>
				<tr>
			<td><small>Hydrate Alkalinity</small></td>
			<td class="input-container"><input type="text" name="hydalk" id="hydalk" value="<?php echo $row['hydalk'];?>" class="" maxlength="5" size="7">
			
			<i class="fa fa- icon">&#176;c</i></td>

		</tr>
				<tr>
			<td><small>Blow Down</small></td>
			<td class="input-container"><input type="text" name="blowdown" id="blowdown" value="<?php echo $row['blowdown'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i></td>

		</tr>
				<tr>
			<td><small>Dosage</small></td>
			<td class="input-container"><input type="text" name="dosage" id="dosage" value="<?php echo $row['dosage'];?>" class="" maxlength="5" size="7">
			<i class="fa fa- icon">&#176;c</i></td>

		</tr>
		<tr><td>&nbsp &nbsp </td></tr> <tr><td>&nbsp &nbsp </td></tr> <tr><td>&nbsp &nbsp </td></tr> <tr><td>&nbsp &nbsp </td></tr> <tr><td>&nbsp &nbsp </td></tr> <tr><td>&nbsp &nbsp </td></tr> 
	</table>
	
    
    
</div>





      <tr><td>	<br></td></tr><tr><td>	<br></td></tr>
    <div style="padding-left:230px;width:98%;padding-top:27%;">
 
  <textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:250px;">

		    <div class="col-md-1">
		        <button type="submit" name="srauxboiler" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		       
		    </div>
					      </div>
      
 <br><br>
    </form>
<?php
}
}
?>


</div>
</td><td>