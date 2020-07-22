<br><br>


<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-5">

<?php

if($_POST['srdball'])
{
	$ballsystem=$_POST['ballsystem'];	
	$balldeball=$_POST['balldeball'];
	$typeofoper=$_POST['typeofoper'];
	$ballstart=$_POST['ballstart'];
	$ballstop=$_POST['ballstop'];
	$deballstart=$_POST['deballstart'];
	$deballstop=$_POST['deballstop'];	
	$ballwateron=$_POST['ballwateron'];
	$ballwaterin=$_POST['ballwaterin'];
	$ballwaterdis=$_POST['ballwaterdis'];
	$ballwatersamp=$_POST['ballwatersamp'];
	$ballwaterseal=$_POST['ballwaterseal'];
	$ballwatercount=$_POST['ballwatercount'];
	
	$tank1=$_POST['tank1'];
	$tank2=$_POST['tank2'];
	$tank3=$_POST['tank3'];	
	$tank4=$_POST['tank4'];
	$tank5=$_POST['tank5'];
	$tank6=$_POST['tank6'];
	$tank7=$_POST['tank7'];
	$tank8=$_POST['tank8'];
	$tank9=$_POST['tank9'];
	$tank10=$_POST['tank10'];
	$tank11=$_POST['tank11'];
	$tank12=$_POST['tank12'];
	$tank13=$_POST['tank13'];
	$tank14=$_POST['tank14'];
	$tank15=$_POST['tank15'];
	$tank16=$_POST['tank16'];
	$tank17=$_POST['tank17'];
	$tank18=$_POST['tank18'];
	$tank19=$_POST['tank19'];
	$tank20=$_POST['tank20'];
	
	$fwbunkstart=$_POST['fwbunkstart'];
	$fwbunkstop=$_POST['fwbunkstop'];
	$fwintake=$_POST['fwintake'];
	$fwtank1=$_POST['fwtank1'];
	$fwtank2=$_POST['fwtank2'];
	$fwtank3=$_POST['fwtank3'];
	$fwtank4=$_POST['fwtank4'];
	$fwtank5=$_POST['fwtank5'];
	$reportnum=$_POST['reportnum'];

$sql3="UPDATE `dfwatersys` SET 
`fwtank1`='$fwtank1', `fwtank2`='$fwtank2', `fwtank3`='$fwtank3',`fwtank4`='$fwtank4', `fwtank5`='$fwtank5', `fwbunkstart`='$fwbunkstart', `fwbunkstop`='$fwbunkstop' , `fwintake`='$fwintake' WHERE `reportnum`='$reportnum'";
	 
/* 	 $sql3="INSERT INTO `dfwatersys` (`fwtank1`, `fwtank2`, `fwtank3`, `fwtank4`, `fwtank5`, `fwbunkstart`, `fwbunkstop`, `fwintake`) 
	 VALUES ('$fwtank1','$fwtank2','$fwtank3','$fwtank4','$fwtank5','$fwbunkstart','$fwbunkstop','$fwintake')"; */
	 
	 $sql_3=mysqli_query($con,$sql3);
	 
	 if($sql_3)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Fresh Water Tank Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 		
$sql2="UPDATE `dballtank` SET 
`tank1`='$tank1', `tank2`='$tank2', `tank3`='$tank3',`tank4`='$tank4', `tank5`='$tank5', `tank6`='$tank6', `tank7`='$tank7' , `tank8`='$tank8' ,`tank9`='$tank9', `tank10`='$tank10', `tank11`='$tank11', `tank12`='$tank12', `tank13`='$tank13', `tank14`='$tank14' , `tank15`='$tank15' , `tank16`='$tank16', `tank17`='$tank17', `tank18`='$tank18', `tank19`='$tank19' , `tank20`='$tank20' WHERE `reportnum`='$reportnum'";
	 
	/*  $sqll="INSERT INTO `dballtank` (`tank1`, `tank2`, `tank3`, `tank4`, `tank5`, `tank6`, `tank7`, `tank8`, `tank9`, `tank10`, `tank11`, `tank12`, `tank13`, `tank14`, `tank15`, `tank16`, `tank17`, `tank18`, `tank19`, `tank20`) 
	 VALUES ('$tank1','$tank2','$tank3','$tank4','$tank5','$tank6','$tank7','$tank8','$tank9','$tank10','$tank11','$tank12','$tank13','$tank14','$tank15','$tank16','$tank17','$tank18','$tank19','$tank20')";
	  */
	  
	 $sql_2=mysqli_query($con,$sql2);
	 
	 if($sql_3)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Ballast Tank Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 
	 		
$sql1="UPDATE `dballsystems` SET 
`ballsystem`='$ballsystem', `balldeball`='$balldeball', `typeofoper`='$typeofoper',`ballstart`='$ballstart', `ballstop`='$ballstop', `ballwateron`='$ballwateron', `ballwaterin`='$ballwaterin' , `ballwaterdis`='$ballwaterdis' ,`ballwatersamp`='$ballwatersamp', `ballwaterseal`='$ballwaterseal', `ballwatercount`='$ballwatercount' WHERE `reportnum`='$reportnum'";
	 	 	
/* 	 $sql2="INSERT INTO `dballsystems` (`ballsystem`, `balldeball`, `typeofoper`, `ballstart`, `ballstop`, `deballstart`, `deballstop`, `ballwateron`, `ballwaterin`, `ballwaterdis`, `ballwatersamp`, `ballwaterseal`, `ballwatercount`) 
	 VALUES ('$ballsystem','$balldeball','$typeofoper','$ballstart','$ballstop','$deballstart','$deballstop','$ballwateron','$ballwaterin','$ballwaterdis','$ballwatersamp','$ballwaterseal','$ballwatercount')";
	  */
	 $sql_1=mysqli_query($con,$sql1);
	 
	 if($sql_1)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Ballast System Data Entered Successfully..!!</font></center></td><tr>';
	 }
	 

}

?>

 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

	?>

  <table>
  	<form name="dballsystems" action="index.php" method="post">
	<input type="hidden" name="srepnum" value="1">
	<input type="hidden" name="slogdeck" value="1">
	<input type="hidden" name="dsyst" value="1">
	<input type="hidden" name="reportnum" value="<?php echo $row['reportnum'];?>">
<tr>
	<td  colspan="2" style="font-size:16px;"><b><small>Fresh Water System</small></b></td>
</tr>	
<tr><td><br></td></tr>
		<input type="hidden" name="reportnum" value="<?php echo $row['reportnum'];?>">

<?php

	$sql2=mysqli_query($con,"SELECT * FROM dfwatersys where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql2))
	{
	
?>
<tr>
	<td ><small>Any Fresh Water Bunkering</small></td>
	<td class="input-container">  
					
    <input type="checkbox"  name="sloc" value="">&nbsp;<span style="font-size:16px;">Yes</span>&nbsp;&nbsp;
    <input type="hidden"  name="sloc" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;
   <input type="checkbox"    name="sloc" value="">&nbsp;<span style="font-size:16px;">No</span>
    
	</td>
</tr>		
<tr>
	<td><small>FW bunkering Start </small></td>
	<td class="input-container">  <input type="datetime-local"  id="fwbunkstart" value="<?php echo $row['fwbunkstart'];?>" class="input-field" name="fwbunkstart" >  </td>
</tr>	
<tr>
	<td><small>FW bunkering Stop</small> </td>
	<td class="input-container">  <input type="datetime-local" id="fwbunkstop" value="<?php echo $row['fwbunkstop'];?>"class="input-field" name="fwbunkstop" >  </td>
</tr>	
<tr>
	<td><small>Fresh Water Intake</small></td>
	<td class="input-container"><input type="text" id="fwintake" value="<?php echo $row['fwintake'];?>" name="fwintake" class="input-field" placeholder="" autocomplete="off">
	
	 <i class="fa fa- icon"><small>MT</small></i>
	</td>
</tr>	
<?php
	}
?>
<tr><td><br><br></td></tr><tr><td><br></td></tr>  <tr><td><br></td></tr>
<tr>
	<td colspan="2" style="font-size:16px;"><b><small>Ballast System<small></b></td>
		
</tr>
<tr><td><br></td></tr>
<tr>
	<td ><small>Any Ballasting/Deballasting Operation</small></td>
	<td class="input-container">  
		
	<input type="hidden" name="balldeball" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;										
	<input type="checkbox" name="balldeball" value="">&nbsp;<span style="font-size:16px;">Yes</span>&nbsp;&nbsp;
	<input type="hidden" name="balldeball" value="">&nbsp;<span style="font-size:16px;"></span>&nbsp;&nbsp;
	<input type="checkbox"   name="balldeball" value="">&nbsp;<span style="font-size:16px;">No</span>
	</td>
			
</tr>	
<?php

	$sql1=mysqli_query($con,"SELECT * FROM dballsystems where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql1))
	{
	
?>	
<tr>
	<td ><small>Type of Operation</small></td>
	<td class="input-container">  
		<select name="typeofoper" class="form-control"  required >
		<option></option><option>Ballasting</option>
		<option>Deballasting</option>
		<option>Ballasting and De-Ballasting</option>
		<option>None</option>
		</select>  
	</td>
</tr>	
<tr>
	<td ><small>Ballasting Start Date/Time </small>  </td>
	<td class="input-container">  <input type="datetime-local" id="ballstart" value="<?php echo $row['ballstart'];?>"class="input-field" name="ballstart"  required >  </td>
</tr>	
<tr>
	<td ><small>Ballasting Stop Date/Time </small>  </td>
	<td class="input-container">  <input type="datetime-local" id="ballstop" value="<?php echo $row['ballstop'];?>" class="input-field" name="ballstop" >  </td>
</tr>	
<tr>
	<td ><small>De-Ballasting Start </small>  </td>
	<td class="input-container">  <input type="datetime-local" id="deballstart" value="<?php echo $row['deballstart'];?>" class="input-field" name="deballstart"  required >  </td>
</tr>	
<tr>
	<td ><small>De-Ballasting Stop </small>  </td>
	<td class="input-container">  <input type="datetime-local" id="deballstop" value="<?php echo $row['deballstop'];?>" class="input-field" name="deballstop"  required >  </td>
</tr>	
<tr>
	<td ><small>Ballast Water Onboard</small></td>
	<td class="input-container"><input type="text" name="ballwateron" id="ballwateron" value="<?php echo $row['ballwateron'];?>" class="input-field" placeholder="" autocomplete="off">
	<i class="fa fa- icon"><small>MT</small></i>
	</td>
</tr>	
<tr>
	<td><small>Ballast Water Intake</small></td>
	<td class="input-container"><input type="text" name="ballwaterin" id="ballwaterin" value="<?php echo $row['ballwaterin'];?>" class="input-field" placeholder="" autocomplete="off">
	 <i class="fa fa- icon"><small>MT</small></i>
	</td>
</tr>	
<tr>
	<td><small>Ballast Water Discharge</small></td>
	<td class="input-container"><input type="text" name="ballwaterdis" id="ballwaterdis" value="<?php echo $row['ballwaterdis'];?>" class="input-field" placeholder="" autocomplete="off">
	   <i class="fa fa- icon"><small>MT</small></i>
	</td>
</tr>	
<tr>
	<td><small>Ballast Water Sample</small></td>
	<td class="input-container"><input type="text" name="ballwatersamp" id="ballwatersamp" value="<?php echo $row['ballwatersamp'];?>" class="input-field" placeholder="" autocomplete="off"></td>
</tr>	
<tr>
	<td ><small>Ballast Water Sample Seal</small></td>
	<td class="input-container"><input type="text" name="ballwaterseal" id="ballwaterseal" value="<?php echo $row['ballwaterseal'];?>" class="input-field" placeholder="" autocomplete="off"></td>
</tr>	
<tr>
	<td ><small>Ballast Water Count Cells</small></td>
	<td class="input-container"><input type="text" name="ballwatercount" id="ballwatercount" value="<?php echo $row['ballwatercount'];?>" class="input-field" placeholder="" autocomplete="off"></td>
</tr>	

<?php
	}
?>
</table>
  
  </div>
    <div class="col-md-5">
      <table>
          <tr>
              
		<td></td>
		<td><small><b>Fresh Water Tanks</b></small></td>
	
</tr>	<tr><td><br></td></tr>
<?php

	$sql2=mysqli_query($con,"SELECT * FROM dfwatersys where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql2))
	{
	
?>
<tr>
		<td><small>Tank 1</small></td>
		<td class="input-container"><input type="text" name="fwtank1" id="fwtank1" value="<?php echo $row['fwtank1'];?>" class="input-field" placeholder="" autocomplete="off">
			 <i class="fa fa- icon"><small>MT</small></i>
		</td>
</tr>	
<tr>
		<td ><small>Tank 2</small></td>
		<td class="input-container"><input type="text" name="fwtank2" id="fwtank2" value="<?php echo $row['fwtank2'];?>" class="input-field" placeholder="" autocomplete="off">
			 <i class="fa fa- icon"><small>MT</small></i>
		</td>
</tr>	
<tr>
		<td><small>Tank 3</small></td>
		<td class="input-container"><input type="text" name="fwtank3" id="fwtank3" value="<?php echo $row['fwtank3'];?>" class="input-field" placeholder="" autocomplete="off">
			 <i class="fa fa- icon"><small>MT</small></i>
		</td>
</tr>	
<tr>
		<td><small>Tank 4</small></td>
		<td class="input-container"><input type="text" name="fwtank4" id="fwtank4" value="<?php echo $row['fwtank4'];?>" class="input-field" placeholder="" autocomplete="off">
			 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
		<td><small>Tank 5</small></td>
		<td class="input-container"> <input type="text" name="fwtank5" id="fwtank5" value="<?php echo $row['fwtank5'];?>" class="input-field" placeholder="" autocomplete="off">
			 <i class="fa fa- icon"><small>MT</small></i>
		</td>
</tr>
<?php
	}
?>        
          
          <tr><td><br></td></tr>  <tr><td><br></td></tr>
          <tr>			
        <td><small>&nbsp;&nbsp;&nbsp;&nbsp;<b></b></small></td>
	<td><small><b>Ballast water Tanks</b></small></td>
<td><small>&nbsp;&nbsp;&nbsp;&nbsp;<b></b></small></td>
	<td><small><b></b></small></td>
	
</tr> <tr><td><br></td></tr> 
<?php
	$sql2=mysqli_query($con,"SELECT * FROM dballtank where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql2))
	{
?>	
<tr>
	<td><small>Tank 1</small></td>
	<td class="input-container"><input type="text" name="tank1" id="tank1" value="<?php echo $row['tank1'];?>" class="input-field" placeholder="" autocomplete="off">
	
		 <i class="fa fa- icon"><small>MT</small></i></td>	
	<td><small>Tank 11</small></td>
	<td class="input-container"><input type="text" name="tank11" id="tank11" value="<?php echo $row['tank11'];?>" class="input-field" placeholder="" autocomplete="off">
		 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 2</small></td>
	<td class="input-container"><input type="text" name="tank2" id="tank2" value="<?php echo $row['tank2'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 12</small></td>
	<td class="input-container"><input type="text" name="tank12" id="tank12" value="<?php echo $row['tank12'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 3</small></td>
	<td class="input-container"><input type="text" name="tank3" id="tank3" value="<?php echo $row['tank3'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 13</small></td>
	<td class="input-container"><input type="text" name="tank13" id="tank13" value="<?php echo $row['tank13'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 4</small></td>
	<td class="input-container"><input type="text" name="tank4" id="tank4" value="<?php echo $row['tank4'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 14</small></td>
	<td class="input-container"><input type="text" name="tank14" id="tank14" value="<?php echo $row['tank14'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 5</small></td>
	<td class="input-container"><input type="text" name="tank5" id="tank5" value="<?php echo $row['tank5'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 15</small></td>
	<td class="input-container"><input type="text" name="tank15" id="tank15" value="<?php echo $row['tank15'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 6</small></td>
	<td class="input-container"><input type="text" name="tank6" id="tank6" value="<?php echo $row['tank6'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank16</small></td>
	<td class="input-container"><input type="text" name="tank16" id="tank16" value="<?php echo $row['tank16'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 7</small></td>
	<td class="input-container"><input type="text" name="tank7" id="tank7" value="<?php echo $row['tank7'];?>" class="input-field" placeholder="" autocomplete="off"> <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 17</small></td>
	<td class="input-container"><input type="text" name="tank17" id="tank17" value="<?php echo $row['tank17'];?>" class="input-field" placeholder="" autocomplete="off"> <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 8</small></td>
	<td class="input-container"><input type="text" name="tank8" id="tank8" value="<?php echo $row['tank8'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 18</small></td>
	<td class="input-container"><input type="text" name="tank18" id="tank18" value="<?php echo $row['tank18'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
<tr>
	<td><small>Tank 9</small></td>
	<td class="input-container"><input type="text" name="tank9" id="tank9" value="<?php echo $row['tank9'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 19</small></td>
	<td class="input-container"><input type="text" name="tank19" id="tank19" value="<?php echo $row['tank19'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>				
<tr>
	<td ><small>Tank 10</small></td>
	<td class="input-container"><input type="text" name="tank10" id="tank10" value="<?php echo $row['tank10'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
	<td><small>Tank 20</small></td>
	<td class="input-container"><input type="text" name="tank20" id="tank20" value="<?php echo $row['tank20'];?>" class="input-field" placeholder="" autocomplete="off">	 <i class="fa fa- icon"><small>MT</small></i></td>
</tr>	
          
          </form>
      </table>

  </div>

<tr><td>	<br></td></tr>
    <div style="padding-left:230px;width:95%;padding-top:45%;">
 
  <textarea class="form-control" rows="5" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:250px;">

		    
		       <div class="col-md-1">
		       <button type="submit" name="srdball" class="btn btn-block btn-sm btn-primary" value="1">Save</button>
		    </div>
		  	
					  		 
					      </div>
      
 <br><br>
<?php
	}
	}
?>		

</div>