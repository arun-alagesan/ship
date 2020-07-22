 <div class="container">
 
<?php
// print_r($_POST);
if($_POST['srdobserve'])
{
	$ddatetime=$_POST['ddatetime'];	
	$dtimezone=$_POST['dtimezone'];
	$gyrocourse=$_POST['gyrocourse'];
	$gyroerror=$_POST['gyroerror'];
	$magcourse=$_POST['magcourse'];
	$deviation=$_POST['deviation'];
	$variation=$_POST['variation'];	
	$truecourse=$_POST['truecourse'];
	$heading=$_POST['heading'];
	$seaswell=$_POST['seaswell'];
	$wavehght=$_POST['wavehght'];
	$wavedir=$_POST['wavedir'];
	$truecurrspeed=$_POST['truecurrspeed'];	
	$truecurrdir=$_POST['truecurrdir'];	
	$relcurrspeed=$_POST['relcurrspeed'];	
	$relcurrdir=$_POST['relcurrdir'];
	$waterdepth=$_POST['waterdepth'];
	$oow=$_POST['oow'];	
	
	$windrep=$_POST['windrep'];
	$truewinspeed=$_POST['truewinspeed'];
	$truewinforce=$_POST['truewinforce'];
	$truewindir=$_POST['truewindir'];
	$truewindirhead=$_POST['truewindirhead'];
	$relwinspeed=$_POST['relwinspeed'];	
	$relwindir=$_POST['relwindir'];		
	
	$speedlog=$_POST['speedlog'];	
	$tripcountgps=$_POST['tripcountgps'];
	$tripcountlog=$_POST['tripcountlog'];
	$logspeed=$_POST['logspeed'];
	$logdist=$_POST['logdist'];
	$obsdist=$_POST['obsdist'];
	$obsspeed=$_POST['obsspeed'];	
	$obsdistpass=$_POST['obsdistpass'];	
	$remdist=$_POST['remdist'];		
	
	$ltdeg=$_POST['ltdeg'];	
	$ltmin=$_POST['ltmin'];
	$ltsec=$_POST['ltsec'];
	$ltdir=$_POST['ltdir'];
	$lgdeg=$_POST['lgdeg'];
	$lgmin=$_POST['lgmin'];
	$lgsec=$_POST['lgsec'];	
	$lgdir=$_POST['lgdir'];		
	$reportnumber=$_POST['reportnumber'];
	$rnumber=$_POST['rnumber'];
	echo $rnumber;
	
		$sql4="UPDATE `dspeeddist` SET 
		`speedlog`='$speedlog', `tripcountgps`='$tripcountgps', `tripcountlog`='$tripcountlog',`logspeed`='$logspeed', `logdist`='$logdist', `obsdist`='$obsdist', `obsspeed`='$obsspeed' , `obsdistpass`='$obsdistpass' ,`remdist`='$remdist' WHERE `reportnum`='$rnumber'";
	
			/* $sql4="INSERT INTO `dspeeddist` (`speedlog`,`tripcountgps`, `tripcountlog`, `logspeed`, `logdist`, `obsdist`, `obsspeed`, `obsdistpass`, `remdist`) 
			 VALUES ('$speedlog','$tripcountgps','$tripcountlog','$logspeed','$logdist','$obsdist','$obsspeed','$obsdistpass','$remdist')";	
			  */
			 $sql_4=mysqli_query($con,$sql4);
			 
			 if($sql_4)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Speed Distance Data Entered Successfully..!!</font></center></td><tr>';
			 }

		
		$sql3="UPDATE `dwind` SET 
		`windrep`='$windrep', `truewinspeed`='$truewinspeed', `truewinforce`='$truewinforce',`truewindir`='$truewindir', `truewindirhead`='$truewindirhead', `relwinspeed`='$relwinspeed', `relwindir`='$relwindir'  WHERE `reportnum`='$rnumber'";
	
			/* $sql3="INSERT INTO `dwind` (`windrep`,`truewinspeed`, `truewinforce`, `truewindir`, `truewindirhead`, `relwinspeed`, `relwindir`) 
			 VALUES ('$windrep','$truewinspeed','$truewinforce','$truewindir','$truewindirhead','$relwinspeed','$relwindir')";	
			  */
			 $sql_3=mysqli_query($con,$sql3);
			 
			 if($sql_3)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Wind Data Entered Successfully..!!</font></center></td><tr>';
			 }

		 	
		$sql2="UPDATE `dposition` SET 
		`ltdeg`='$ltdeg', `ltmin`='$ltmin', `ltsec`='$ltsec',`ltdir`='$ltdir', `lgdeg`='$lgdeg', `lgmin`='$lgmin', `lgsec`='$lgsec', `lgdir`='$lgdir'  WHERE `reportnum`='$rnumber'";
	
		/* 	 $sql2="INSERT INTO `dposition` (`ltdeg`,`ltmin`, `ltsec`, `ltdir`, `lgdeg`, `lgmin`, `lgsec`, `lgdir`) 
			 VALUES ('$ltdeg','$ltmin','$ltsec','$ltdir','$lgdeg','$lgmin','$lgsec','$lgdir')";	
			  */
			 $sql_2=mysqli_query($con,$sql2);
			 
			 if($sql_2)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Position Data Entered Successfully..!!</font></center></td><tr>';
			 }

		 $sql1="UPDATE `dobservation` SET 
		`ddatetime`='$ddatetime', `dtimezone`='$dtimezone', `gyrocourse`='$gyrocourse',`gyroerror`='$gyroerror', `magcourse`='$magcourse', `deviation`='$deviation', `variation`='$variation' , `truecourse`='$truecourse' ,`heading`='$heading', `seaswell`='$seaswell', `wavehght`='$wavehght', `wavehght`='$wavehght', `wavedir`='$wavedir', `truecurrspeed`='$truecurrspeed' , `truecurrdir`='$truecurrdir' , `relcurrspeed`='$relcurrspeed', `relcurrdir`='$relcurrdir', `waterdepth`='$waterdepth', `oow`='$oow'  WHERE `reportnum`='$rnumber'";
	 
			/*  $sqll="INSERT INTO `dobservation` (`ddatetime`,`dtimezone`, `gyrocourse`, `gyroerror`, `magcourse`, `deviation`, `variation`,`truecourse`, `heading`, `seaswell`, `wavehght`, `wavedir`, `truecurrspeed`, `truecurrdir`,`relcurrspeed`, `relcurrdir`, `waterdepth`, `oow`) 
			 VALUES ('$ddatetime','$dtimezone','$gyrocourse','$gyroerror','$magcourse','$deviation','$variation','$truecourse','$heading','$seaswell','$wavehght','$wavedir','$truecurrspeed','$truecurrdir','$relcurrspeed','$relcurrdir','$waterdepth','$oow')";
			  */
			 $sql_1=mysqli_query($con,$sql1);
			 
			 if($sql_1)
			 {
				echo'<tr><td colspan="2"><center><font color="green"> Observation Data Entered Successfully..!!</font></center></td><tr>';
			 }
}
?>
 
  <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

	?>
 


<br><br>

<div class="row" id="dad">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-3">
  
  
  <table>
	<form name="slogobserve" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
		<input type="hidden" name="slogdeck" value="1">
		<input type="hidden" name="observe" value="1">
		
		<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">

      <h6 style="font-size:16px;"><b>Observations 1/1<i style="color:#2196f3;">(next/previous)</i></b></h6>
      <tr><td>&nbsp &nbsp </td></tr> 
<?php

	$sql11=mysqli_query($con,"SELECT * FROM dobservation where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql11))
	{
	
?>
      <tr>
        <td style="font-size:14px;"><b>Details</b></td>
	</tr>
			<tr>
			<td ><small>OOW</small></td>
			<td class="input-container">  
					<select name="oow"  class="input-field" required >
					<option></option><option>Master</option>
					<option>Chief Officier</option>
						<option>Second Officier</option>
							<option>Third Officier</option>
					</select>  
				</td>
		</tr>
	
	        	<tr>
		<td><small>Date/Time</small>  </td>
	
				<td class="input-container"> 
    <input class="input-field" type="text" placeholder="" name="usrnm">
     <i class="fa fa-calendar icon"></i>
		 
		</td>
	
	</tr>
	
	</tr>
		<tr>
			<td><small>Time Zone</small></td>
			<td class="input-container">  
					<select name="dtimezone"  class="input-field">
					<option>-18:00</option><option>-17:30</option><option>-17:00</option><option>-16:30</option><option>-16:00</option><option>-15:30</option><option>-15:00</option><option>-14:30</option><option>-14:00</option><option>-13:30</option><option>-13:00</option><option>-12:30</option><option>-12:00</option><option>-11:30</option><option>-11:00</option><option>-10:30</option><option>-10:00</option>
					<option>-09:30</option><option>-09:00</option><option>-08:30</option><option>-08:00</option><option>-07:30</option><option>-07:00</option><option>-06:30</option><option>-06:00</option><option>-05:30</option><option>-05:00</option><option>-04:30</option><option>-04:00</option><option>-03:30</option><option>-03:00</option><option>-02:30</option><option>-02:00</option><option>-01:30</option><option>-01:00</option>
					<option>-00:30</option><option>00:00</option><option>00:30</option><option>01:00</option><option>01:30</option><option>02:00</option><option>02:30</option><option>03:00</option><option>03:30</option><option>04:00</option><option>04:30</option><option>05:00</option><option>05:30</option><option>06:00</option><option>06:30</option><option>07:00</option><option>07:30</option><option>08:00</option><option>08:30</option><option>09:00</option>
					<option>10:00</option><option>11:00</option><option>12:00</option><option>13:00</option><option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option><option>18:00</option>
					</select>  
				</td>
		</tr>
			<tr>
			<td ><small>Air temp</small></td>
			<td class="input-container">
	     <input type="text" name="gyrocourse" class="input-field" >
	        <i class="fa fa- icon">&#176;c</i>
	     
			  
			</td>
		</tr>
						<tr>
			<td><small>SW Temp</small></td>
			<td class="input-container">
	     <input type="text" name="gyrocourse" class="input-field" id="tb2" >
			   <i class="fa fa- icon">&#176;c</i>
			</td>
		</tr>
						<tr>
			<td ><small>Barometric press</small></td>
			<td class="input-container">
	     <input type="text" name="gyrocourse" class="input-field" id="tb2">
	       <i class="fa fa- icon">mBar</i>
			
			</td>
		</tr>
								<tr>
			<td ><small>Visibility</small></td>
			<td class="input-container">
	     <input type="text" name="gyrocourse" class="input-field" id="tb2">
	      <i class="fa fa- icon">m</i>
			 
			</td>
		</tr>
	<tr>
		<tr><td>&nbsp &nbsp </td></tr> 
			<td colspan="2" style="font-size:14px;"><b>Position</b></td>
		</tr>

				<tr>
			<td ><small>Latitude</small></td>
			<td>
<?php
}
	$sql12=mysqli_query($con,"SELECT * FROM dposition where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql12))
	{
	
?>			
	
			<table>
			<tr><td><input type="text" name="ltdeg" class="form-control"  placeholder="Deg"maxlength="2" size="3" title='between 0 to 90' required></td>
			<td><input type="text" name="ltmin" class="form-control" placeholder="Min"maxlength="2" size="3" title='between 0 to 60' required></td>
			<td><input type="text" name="ltsec" class="form-control" placeholder="Sec"maxlength="2" size="3"  title='between 0 to 60' required></td><td >  
					<select name="ltdir" class="form-control" >
					<option>N</option><option>S</option>	
					</select>  
				</td></tr>
			</table>    
			</td>
		</tr>
				<tr>
			<td id="numaligncenter"><small>Longitude</small></td>
			<td>
			<table>
			<tr><td><input type="text" name="lgdeg" class="form-control" placeholder="Deg"maxlength="3" size="3"  title='between 0 to 180' required></td>
			<td><input type="text" name="lgmin" class="form-control" placeholder="Min"maxlength="2" size="3"  title='between 0 to 60' required></td>
			<td><input type="text" name="lgsec" class="form-control" placeholder="Sec"maxlength="2" size="3"  title='between 0 to 60' required></td><td >  
					<select name="lgdir" class="form-control" >
					<option>E</option><option>W</option>
					</select>  
				</td></tr>
			</table>
			</td>
		</tr>
  

		<tr><td>&nbsp &nbsp </td></tr> 	<tr><td>&nbsp &nbsp </td></tr> 
    	<tr>
			<td  colspan="2" style="font-size:14px;"><b>Ship's Course</b></td>
		</tr>	
<?php
}
	$sql11=mysqli_query($con,"SELECT * FROM dobservation where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql11))
	{
	
?>	
			<tr>
			<td ><small>Gyro Course</small></td>
			<td class="input-container">
	     <input type="text" name="gyrocourse" class="input-field" placeholder="0to360" maxlength="5"  onkeyup="this.value = fnc(this.value, 0, 360)">
	       <i class="fa fa- icon">&#176;</i>
			 
			</td>
		</tr>
		<tr>
			<td ><small>Gyro Error<small></td>
			<td class="input-container"><input type="text" name="gyroerror" class="input-field" id="tb2">
	        <i class="fa fa- icon">&#176;</i>
			</td>
	    	</tr>	
				<tr>
			<td ><small>Magnetic Course</small></td>
			<td class="input-container"><input type="text" name="magcourse" class="input-field" id="tb2">
				  <i class="fa fa- icon">&#176;</i>
			</td>
		</tr>	
		<tr>
			<td><small>Deviation</small></td>
			<td class="input-container"><input type="text" name="deviation" class="input-field" id="tb2">
			<i class="fa fa- icon">&#176;</i>
			</td>
		</tr>
								<tr>
			<td ><small>Variation</small></td>
			<td class="input-container"><input type="text" name="variation" class="input-field" id="tb2">
			 <i class="fa fa- icon">&#176;</i>
			</td>
		</tr>
		<tr>
			<td ><small> Course over ground</small></td>
			<td class="input-container"><input type="text" name="truecourse" class="input-field" id="tb2">
			 <i class="fa fa- icon">&#176;</i>
			</td>
		</tr>
								<tr>
			<td id="tb2"><small>Heading</small></td>
			<td class="input-container"><input type="text" name="heading" class="input-field" id="tb2">
			 <i class="fa fa- icon">&#176;</i>
			
			</td>
		</tr>
		
			<tr>
          <td ><br></td></tr>
          	<tr>
          <td><br></td></tr>	<tr>
          
	</table>
  
  
  
  
  
  </div>
  <div class="col-md-4">
        <table>
	<tr><td>&nbsp; &nbsp; </td></tr> 	<tr><td>&nbsp; </td></tr> 	<tr><td>&nbsp; </td></tr> 
					<tr>
			<td   style="font-size:14px;">	<b>Speed and Distance</b></td>
		</tr>	
<?php
}
	$sql13=mysqli_query($con,"SELECT * FROM dspeeddist where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql13))
	{
	
?>	
					<tr>
			<td ><small>Speed Log Functional</small></td>
			<td class="input-container">  
					<select name="speedlog"   class="input-field" required >
					<option></option><option>Yes</option>
					<option>No</option>
					</select>  
				</td>

		</tr>
			<tr>
			<td ><small>Trip Counter GPS</small></td>
			<td class="input-container"><input type="text" name="tripcountgps" class="input-field" id="tb2">
			<i class="fa fa- icon">Nm</i>
			 
			</td>
		</tr>	
			<tr>
			<td ><small>Trip Counter Log</small></td>
			<td class="input-container"><input type="text" name="" class="input-field" id="tb2">
				<i class="fa fa- icon">Nm</i>
			
			</td>
		</tr>	
		<tr>
			<td ><small>Long Distance</small></td>
			<td class="input-container">
			    <input type="text" name="" class="input-field" id="tb2">
				<i class="fa fa- icon">Nm</i>
			</td>
		</tr>	
		<tr>
			<td ><small>Log Speed </small></td>
			<td class="input-container">
			    <input type="text" name="" class="input-field" id="tb2">
				<i class="fa fa- icon">Knots</i>
		
			</td>
		</tr>	
		<tr>
			<td ><small>Observed Distance</small></td>
			<td class="input-container">
			    <input type="text" name="" class="input-field" id="tb2">
		<i class="fa fa- icon">Nm</i>
			</td>
		</tr>
				<tr>
			<td ><small>Observed Speed </small></td>
			<td class="input-container">
			    <input type="text" name="obsspeed" class="input-field" id="tb2">
				<i class="fa fa- icon">Knots</i>
			
			</td>
		</tr>
				<tr>
			<td ><small>Observed Distance of Sea Passage</small></td>
			<td class="input-container">
			    <input type="text" name="obsdistpass" class="input-field" id="tb2">
			<i class="fa fa- icon">Nm</i>
			</td>
		</tr>
		<tr>
			<td ><small>Remaining Distance</small></td>
			<td class="input-container"><input type="text" name="remdist" class="input-field" id="tb2">
			<i class="fa fa- icon">Nm</i>
			</td>
		</tr>
	

	    <tr><td>&nbsp &nbsp </td></tr> 
				<tr>
		<td  colspan="2" style="font-size:14px;"><b>Wind</b></td>
	</tr>
<tr>

<?php
}
	$sql14=mysqli_query($con,"SELECT * FROM dwind where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql14))
{

?>
  		<td  ><small>Wind Reporting</small></td>
			<td  class="input-container">  
					<select name="" class="input-field" required >
					<option></option><option>True</option>
					<option>Relative</option>
					</select>  
				</td></tr>	
	<tr>
		<td  >	<small>True Wind Speed</small></td>
		<td  class="input-container" ><input type="text" name="" class="input-field" id="tb2">
			<i class="fa fa- icon">m/s</i>
		
		</td>
	</tr>
	<tr>
		<td  >	<small>True Wind Force </small></td>
		<td class="input-container"><input type="text" name="" class="input-field" id="tb2">
			<i class="fa fa- icon">BF</i>
	
		</td>
	</tr>
		<tr>
		<td >	<small>True Wind Direction</small></td>
		<td  class="input-container"><input type="text" name="truewindir" class="input-field">
			<i class="fa fa- icon">&#176;</i>
	
		</td>
	</tr>
		<tr>
		<td  >	<small>True Wind Direction Heading</small></td>
		<td  class="input-container"><input type="text" name="" class="input-field" id="tb2">
			<i class="fa fa- icon">&#176;</i>
		</td>
	</tr>
		<tr>
		<td>	<small>Rel. Wind Speed</small></td>
		<td  class="input-container"><input type="text" name="" class="input-field" >
		<i class="fa fa- icon">m/s</i>
	
		</td>
	</tr>
		<tr>
		<td >	<small>Rel. Wind Direction</small></td>
		<td  class="input-container"><input type="text" name="" class="input-field" id="tb2">
			<i class="fa fa- icon">&#176;</i>
		</td>
	</tr>

	</table>
<?php
}

?>	  
      
  </div>
  <div class="col-md-3">
    
        <table>
            	<tr>
	
	</td>
					    	      <td><button   class="btn  btn-sm btn-primary">Add Observation</button></td>
	  
					  
					    
					    	
					    	      <td><button  id="clone2" class="btn btn-block btn-sm btn-primary" style="width:120px;">Delete Observation</button></td>
					    </tr>
					    	<tr ><td>&nbsp; &nbsp; &nbsp;</td></tr> 		
    	<tr style="padding-top: 20px;">
			<td  style="font-size:14px;"><b>Sea</b></td>
		</tr>	
			
<?php

	$sql11=mysqli_query($con,"SELECT * FROM dobservation where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql11))
{

?>	
		<tr>
			<td><small>Sea Swell</small></td>
			<td class="input-container">  
					<select name="seaswell" class="input-field"  required >
					<option></option>
					<option>No Swell</option>
					<option>Very Low</option>
					<option>Low</option>
					<option>Light</option>
					<option>Moderate</option>
					<option>Moderate Rough</option>
					<option>High</option>
					<option>Very High</option>
					<option>Confused</option>
					</select>  
				</td>
		</tr>	
		<tr>
			<td ><small>Wave Height</small></td>
			<td class="input-container"><input type="text" name="wavehght" class="input-field" id="tb2">
				<i class="fa fa- icon">m</i>
				
			</td>
		</tr>
				<tr>
			<td ><small>Wave Direction</small></td>
			<td class="input-container"><input type="text" name="wavedir" class="input-field" id="tb2">
				<i class="fa fa- icon">&#176;</i>
		
			</td>
		</tr>
				<tr>
			<td ><small>True Current Speed</small></td>
			<td class="input-container"><input type="text" name="truecurrspeed" class="input-field" id="tb2">
				<i class="fa fa- icon">Knots</i>
				
			
			</td>
		</tr>
		<tr>
			<td ><small>True Current Direction</small></td>
			<td class="input-container"><input type="text" name="truecurrdir" class="input-field" id="tb2">
				<i class="fa fa- icon">&#176;</i>
			
			</td>
		</tr>
						<tr>
			<td><small>Rel Current Speed</small></td>
			<td class="input-container"><input type="text" name="relcurrspeed" class="input-field" id="tb2">
				<i class="fa fa- icon">Knots</i>
			
			
			</td>
		</tr>
						<tr>
			<td><small>Rel Current Direction</small></td>
			<td class="input-container"><input type="text" name="relcurrdir" class="input-field" id="tb2">
				<i class="fa fa- icon">&#176;</i>
			</td>
		</tr>
						<tr>
			<td><small>Water Depth</small></td>
			<td class="input-container"><input type="text" name="waterdepth" class="input-field" id="tb2">
				<i class="fa fa- icon">m</i>
			
			</td>
		</tr>


	
				<tr><td>&nbsp &nbsp </td></tr> 
				<tr><td>&nbsp &nbsp </td></tr>
				<tr><td>&nbsp &nbsp </td></tr>
			

      </table>

      <br>
    					   
      
  </div>
<br>
    <div style="padding-left:230px;width:95%;">
 
  <textarea class="form-control" rows="5" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:334px;">
					    <button type="submit"  class="btn btn-block btn-sm btn-primary" style="width:80px;">save</button>			 
					      </div>
      
 <br><br>

</div>
 
</form>    
		
</td></tr>
<?php
}
}

?>			


</div>