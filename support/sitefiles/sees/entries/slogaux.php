<br>


<div class="row" >
<div class="col-md-2"></div>
   <div class="col-md-5">
 
 <?php

if($_POST['srauxiliary'])
{

	$rnumber=$_POST['rnumber'];
	$foilinpress1=$_POST['foilinpress1'];
	$foilintemp1=$_POST['foilintemp1'];	
	$loilinpress1=$_POST['loilinpress1'];
	$loilintemp1=$_POST['loilintemp1'];	
	$sumplevel1=$_POST['sumplevel1'];		
	$cwaterpress1=$_POST['cwaterpress1'];
	$cwaterintemp1=$_POST['cwaterintemp1'];	
	$cwateroutavg1=$_POST['cwateroutavg1'];		
	$cwatertempoutlow1=$_POST['cwatertempoutlow1'];	
	$cwatertempouthigh1=$_POST['cwatertempouthigh1'];	
	$exhtempavg1=$_POST['exhtempavg1'];		
	$exhtemplow1=$_POST['exhtemplow1'];	
	$exhtemphigh1=$_POST['exhtemphigh1'];	
	$tcintemp1=$_POST['tcintemp1'];
	$tcouttemp1=$_POST['tcouttemp1'];	
	$scavairpress1=$_POST['scavairpress1'];
	$scavairtemp1=$_POST['scavairtemp1'];
 	$bearingtemp1=$_POST['bearingtemp1'];
	$windingtemp1=$_POST['windingtemp1'];


	$foilinpress2=$_POST['foilinpress2'];
	$foilintemp2=$_POST['foilintemp2'];	
	$loilinpress2=$_POST['loilinpress2'];
	$loilintemp2=$_POST['loilintemp2'];	
	$sumplevel2=$_POST['sumplevel2'];		
	$cwaterpress2=$_POST['cwaterpress2'];
	$cwaterintemp2=$_POST['cwaterintemp2'];	
	$cwateroutavg2=$_POST['cwateroutavg2'];		
	$cwatertempoutlow2=$_POST['cwatertempoutlow2'];	
	$cwatertempouthigh2=$_POST['cwatertempouthigh2'];	
	$exhtempavg2=$_POST['exhtempavg2'];		
	$exhtemplow2=$_POST['exhtemplow2'];	
	$exhtemphigh2=$_POST['exhtemphigh2'];	
	$tcintemp2=$_POST['tcintemp2'];
	$tcouttemp2=$_POST['tcouttemp2'];	
	$scavairpress2=$_POST['scavairpress2'];
	$scavairtemp2=$_POST['scavairtemp2'];
 	$bearingtemp2=$_POST['bearingtemp2'];
	$windingtemp2=$_POST['windingtemp2'];
	
	$foilinpress3=$_POST['foilinpress3'];
	$foilintemp3=$_POST['foilintemp3'];	
	$loilinpress3=$_POST['loilinpress3'];
	$loilintemp3=$_POST['loilintemp3'];	
	$sumplevel3=$_POST['sumplevel3'];		
	$cwaterpress3=$_POST['cwaterpress3'];
	$cwaterintemp3=$_POST['cwaterintemp3'];	
	$cwateroutavg3=$_POST['cwateroutavg3'];		
	$cwatertempoutlow3=$_POST['cwatertempoutlow3'];	
	$cwatertempouthigh3=$_POST['cwatertempouthigh3'];	
	$exhtempavg3=$_POST['exhtempavg3'];		
	$exhtemplow3=$_POST['exhtemplow3'];	
	$exhtemphigh3=$_POST['exhtemphigh3'];	
	$tcintemp3=$_POST['tcintemp3'];
	$tcouttemp3=$_POST['tcouttemp3'];	
	$scavairpress3=$_POST['scavairpress3'];
	$scavairtemp3=$_POST['scavairtemp3'];
 	$bearingtemp3=$_POST['bearingtemp3'];
	$windingtemp3=$_POST['windingtemp3'];
	
	$foilinpress4=$_POST['foilinpress4'];
	$foilintemp4=$_POST['foilintemp4'];	
	$loilinpress4=$_POST['loilinpress4'];
	$loilintemp4=$_POST['loilintemp4'];	
	$sumplevel4=$_POST['sumplevel4'];		
	$cwaterpress4=$_POST['cwaterpress4'];
	$cwaterintemp4=$_POST['cwaterintemp4'];	
	$cwateroutavg4=$_POST['cwateroutavg4'];		
	$cwatertempoutlow4=$_POST['cwatertempoutlow4'];	
	$cwatertempouthigh4=$_POST['cwatertempouthigh4'];	
	$exhtempavg4=$_POST['exhtempavg4'];		
	$exhtemplow4=$_POST['exhtemplow4'];	
	$exhtemphigh4=$_POST['exhtemphigh4'];	
	$tcintemp4=$_POST['tcintemp4'];
	$tcouttemp4=$_POST['tcouttemp4'];	
	$scavairpress4=$_POST['scavairpress4'];
	$scavairtemp4=$_POST['scavairtemp4'];
 	$bearingtemp4=$_POST['bearingtemp4'];
	$windingtemp4=$_POST['windingtemp4'];
	
	$foilinpress5=$_POST['foilinpress5'];
	$foilintemp5=$_POST['foilintemp5'];	
	$loilinpress5=$_POST['loilinpress5'];
	$loilintemp5=$_POST['loilintemp5'];	
	$sumplevel5=$_POST['sumplevel5'];		
	$cwaterpress5=$_POST['cwaterpress5'];
	$cwaterintemp5=$_POST['cwaterintemp5'];	
	$cwateroutavg5=$_POST['cwateroutavg5'];		
	$cwatertempoutlow5=$_POST['cwatertempoutlow5'];	
	$cwatertempouthigh5=$_POST['cwatertempouthigh5'];	
	$exhtempavg5=$_POST['exhtempavg5'];		
	$exhtemplow5=$_POST['exhtemplow5'];	
	$exhtemphigh5=$_POST['exhtemphigh5'];	
	$tcintemp5=$_POST['tcintemp5'];
	$tcouttemp5=$_POST['tcouttemp5'];	
	$scavairpress5=$_POST['scavairpress5'];
	$scavairtemp5=$_POST['scavairtemp5'];
 	$bearingtemp5=$_POST['bearingtemp5'];
	$windingtemp5=$_POST['windingtemp5'];	
	

	
			 $sql1t="UPDATE `tempengaux` SET 
			`auxeng1`='$foilinpress1', `auxeng2`='$foilinpress2',`auxeng3`='$foilinpress3', `auxeng4`='$foilinpress4', `auxeng5`='$foilinpress5'  WHERE `reportnum`='$rnumber' AND items ='foilinpress'";
			 $sql_1=mysqli_query($con,$sql1t);
			 
			 if($sql_1)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Generator Temp Data Entered Successfully..!!</font></center></td><tr>';
			 }
	
			$sql4t="UPDATE `tempengaux` SET 
			`auxeng1`='$foilintemp1', `auxeng2`='$foilintemp2',`auxeng3`='$foilintemp3', `auxeng4`='$foilintemp4', `auxeng5`='$foilintemp5'  WHERE `reportnum`='$rnumber' AND items ='foilintemp'";	
			$sql_1=mysqli_query($con,$sql4t);
			
			$sql2t="UPDATE `tempengaux` SET 
			`auxeng1`='$loilinpress1', `auxeng2`='$loilinpress2',`auxeng3`='$loilinpress3', `auxeng4`='$loilinpress4', `auxeng5`='$loilinpress5'  WHERE `reportnum`='$rnumber' AND items ='loilinpress'";		
			$sql_1=mysqli_query($con,$sql2t);
			
			$sql3t="UPDATE `tempengaux` SET 
			`auxeng1`='$loilintemp1', `auxeng2`='$loilintemp2',`auxeng3`='$loilintemp3', `auxeng4`='$loilintemp4', `auxeng5`='$loilintemp5'  WHERE `reportnum`='$rnumber' AND items ='loilintemp'";
			$sql_1=mysqli_query($con,$sql3t);
		 
			$sql5t="UPDATE `tempengaux` SET 
			`auxeng1`='$sumplevel1', `auxeng2`='$sumplevel2',`auxeng3`='$sumplevel3', `auxeng4`='$sumplevel4', `auxeng5`='$sumplevel5'  WHERE `reportnum`='$rnumber' AND items ='sumplevel'";	
			$sql_1=mysqli_query($con,$sql5t);
	
	
			 $sql6t="UPDATE `tempengaux` SET 
			`auxeng1`='$cwaterpress1', `auxeng2`='$cwaterpress2',`auxeng3`='$cwaterpress3', `auxeng4`='$cwaterpress4', `auxeng5`='$cwaterpress5'  WHERE `reportnum`='$rnumber' AND items ='cwaterpress'";
			$sql_1=mysqli_query($con,$sql6t);
			
			$sql7t="UPDATE `tempengaux` SET 
			`auxeng1`='$cwaterintemp1', `auxeng2`='$cwaterintemp2',`auxeng3`='$cwaterintemp3', `auxeng4`='$cwaterintemp4', `auxeng5`='$cwaterintemp5'  WHERE `reportnum`='$rnumber' AND items ='cwintemp'";		
			$sql_1=mysqli_query($con,$sql7t);
			
			$sql8t="UPDATE `tempengaux` SET 
			`auxeng1`='$cwateroutavg1', `auxeng2`='$cwateroutavg2',`auxeng3`='$cwateroutavg3', `auxeng4`='$cwateroutavg4', `auxeng5`='$cwateroutavg5'  WHERE `reportnum`='$rnumber' AND items ='cwintempoutavg'";
			$sql_1=mysqli_query($con,$sql8t);
			
			$sql9t="UPDATE `tempengaux` SET 
			`auxeng1`='$cwatertempoutlow1', `auxeng2`='$cwatertempoutlow2',`auxeng3`='$cwatertempoutlow3', `auxeng4`='$cwatertempoutlow4', `auxeng5`='$cwatertempoutlow5'  WHERE `reportnum`='$rnumber' AND items ='cwintempoutl'";		
			$sql_1=mysqli_query($con,$sql9t);
			
			
			$sql10t="UPDATE `tempengaux` SET 
			`auxeng1`='$cwatertempouthigh1', `auxeng2`='$cwatertempouthigh2',`auxeng3`='$cwatertempouthigh3', `auxeng4`='$cwatertempouthigh4', `auxeng5`='$cwatertempouthigh5'  WHERE `reportnum`='$rnumber' AND items ='cwintempouth'";	
			$sql_1=mysqli_query($con,$sql10t);

			 $sql11t="UPDATE `tempengaux` SET 
			`auxeng1`='$exhtempavg1', `auxeng2`='$exhtempavg2',`auxeng3`='$exhtempavg3', `auxeng4`='$exhtempavg4', `auxeng5`='$exhtempavg5'  WHERE `reportnum`='$rnumber' AND items ='exhtempavg'";
			$sql_1=mysqli_query($con,$sql11t);
			
			$sql12t="UPDATE `tempengaux` SET 
			`auxeng1`='$exhtemplow1', `auxeng2`='$exhtemplow2',`auxeng3`='$exhtemplow3', `auxeng4`='$exhtemplow4', `auxeng5`='$exhtemplow5'  WHERE `reportnum`='$rnumber' AND items ='exhtempl'";		
			$sql_1=mysqli_query($con,$sql12t);
			
			$sql13t="UPDATE `tempengaux` SET 
			`auxeng1`='$exhtemphigh1', `auxeng2`='$exhtemphigh2',`auxeng3`='$exhtemphigh3', `auxeng4`='$exhtemphigh4', `auxeng5`='$exhtemphigh5'  WHERE `reportnum`='$rnumber' AND items ='exhtemph'";
			$sql_1=mysqli_query($con,$sql13t);
			
			$sql14t="UPDATE `tempengaux` SET 
			`auxeng1`='$tcintemp1', `auxeng2`='$tcintemp2',`auxeng3`='$tcintemp3', `auxeng4`='$tcintemp4', `auxeng5`='$tcintemp5'  WHERE `reportnum`='$rnumber' AND items ='tcintemp'";		
			$sql_1=mysqli_query($con,$sql14t);
			
			$sql15t="UPDATE `tempengaux` SET 
			`auxeng1`='$tcouttemp1', `auxeng2`='$tcouttemp2',`auxeng3`='$tcouttemp3', `auxeng4`='$tcouttemp4', `auxeng5`='$tcouttemp5'  WHERE `reportnum`='$rnumber' AND items ='tcouttemp'";	
			$sql_1=mysqli_query($con,$sql15t);

			 $sql16t="UPDATE `tempengaux` SET 
			`auxeng1`='$scavairpress1', `auxeng2`='$scavairpress2',`auxeng3`='$scavairpress3', `auxeng4`='$scavairpress4', `auxeng5`='$scavairpress5'  WHERE `reportnum`='$rnumber' AND items ='scavairpress'";
			$sql_1=mysqli_query($con,$sql16t);
			
			$sql17t="UPDATE `tempengaux` SET 
			`auxeng1`='$scavairtemp1', `auxeng2`='$scavairtemp2',`auxeng3`='$scavairtemp3', `auxeng4`='$scavairtemp4', `auxeng5`='$scavairtemp5'  WHERE `reportnum`='$rnumber' AND items ='scavairtemp'";		
			$sql_1=mysqli_query($con,$sql17t);
			
			$sql18t="UPDATE `tempengaux` SET 
			`auxeng1`='$bearingtemp1', `auxeng2`='$bearingtemp2',`auxeng3`='$bearingtemp3', `auxeng4`='$bearingtemp4', `auxeng5`='$bearingtemp5'  WHERE `reportnum`='$rnumber' AND items ='bearingtemp'";
			$sql_1=mysqli_query($con,$sql18t);
			
			$sql19t="UPDATE `tempengaux` SET 
			`auxeng1`='$windingtemp1', `auxeng2`='$windingtemp2',`auxeng3`='$windingtemp3', `auxeng4`='$windingtemp4', `auxeng5`='$windingtemp5'  WHERE `reportnum`='$rnumber' AND items ='windingtemp'";		
			$sql_1=mysqli_query($con,$sql19t);
		
	
		 $sql1g="UPDATE `engauxgen1` SET 
		`foilinpress`='$foilinpress1', `foilintemp`='$foilintemp1', `loilinpress`='$loilinpress1', `loilintemp`='$loilintemp1', `sumplevel`='$sumplevel1', `cwaterpress`='$cwaterpress1', `cwaterintemp`='$cwaterintemp1', 
		`cwateroutavg`='$cwateroutavg1', `cwatertempoutlow`='$cwatertempoutlow1', `cwatertempouthigh`='$cwatertempouthigh1', `exhtempavg`='$exhtempavg1', `exhtemplow`='$exhtemplow1', `exhtemphigh`='$exhtemphigh1', 
		 `tcintemp`='$tcintemp1', `tcouttemp`='$tcouttemp1', `scavairpress`='$scavairpress1',  `scavairtemp`='$scavairtemp1', `bearingtemp`='$bearingtemp1', `windingtemp`='$windingtemp1'  WHERE `reportnum`='$rnumber'";
	 

			 $sql_1g=mysqli_query($con,$sql1g);
			 
			 if($sql_1g)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Generator 1 Data Entered Successfully..!!</font></center></td><tr>';
			 }
			 
		 $sql2g="UPDATE `engauxgen2` SET 
		`foilinpress`='$foilinpress2', `foilintemp`='$foilintemp2', `loilinpress`='$loilinpress2', `loilintemp`='$loilintemp2', `sumplevel`='$sumplevel2', `cwaterpress`='$cwaterpress2', `cwaterintemp`='$cwaterintemp2', 
		`cwateroutavg`='$cwateroutavg2', `cwatertempoutlow`='$cwatertempoutlow2', `cwatertempouthigh`='$cwatertempouthigh2', `exhtempavg`='$exhtempavg2', `exhtemplow`='$exhtemplow2', `exhtemphigh`='$exhtemphigh2', 
		 `tcintemp`='$tcintemp2', `tcouttemp`='$tcouttemp2', `scavairpress`='$scavairpress2',  `scavairtemp`='$scavairtemp2', `bearingtemp`='$bearingtemp2', `windingtemp`='$windingtemp2'  WHERE `reportnum`='$rnumber'";
	 

			 $sql_2g=mysqli_query($con,$sql2g);
			 
			 if($sql_2g)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Generator 2 Data Entered Successfully..!!</font></center></td><tr>';
			 }		
			 
		 $sql3g="UPDATE `engauxgen3` SET 
		`foilinpress`='$foilinpress3', `foilintemp`='$foilintemp3', `loilinpress`='$loilinpress3', `loilintemp`='$loilintemp3', `sumplevel`='$sumplevel3', `cwaterpress`='$cwaterpress3', `cwaterintemp`='$cwaterintemp3', 
		`cwateroutavg`='$cwateroutavg3', `cwatertempoutlow`='$cwatertempoutlow3', `cwatertempouthigh`='$cwatertempouthigh3', `exhtempavg`='$exhtempavg3', `exhtemplow`='$exhtemplow3', `exhtemphigh`='$exhtemphigh3', 
		 `tcintemp`='$tcintemp3', `tcouttemp`='$tcouttemp3', `scavairpress`='$scavairpress3',  `scavairtemp`='$scavairtemp3', `bearingtemp`='$bearingtemp3', `windingtemp`='$windingtemp3'  WHERE `reportnum`='$rnumber'";
	 

			 $sql_3g=mysqli_query($con,$sql3g);
			 
			 if($sql_3g)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Generator 3 Data Entered Successfully..!!</font></center></td><tr>';
			 }
			 
		 $sql4g="UPDATE `engauxgen4` SET 
		`foilinpress`='$foilinpress4', `foilintemp`='$foilintemp4', `loilinpress`='$loilinpress4', `loilintemp`='$loilintemp4', `sumplevel`='$sumplevel4', `cwaterpress`='$cwaterpress4', `cwaterintemp`='$cwaterintemp4', 
		`cwateroutavg`='$cwateroutavg4', `cwatertempoutlow`='$cwatertempoutlow4', `cwatertempouthigh`='$cwatertempouthigh4', `exhtempavg`='$exhtempavg4', `exhtemplow`='$exhtemplow4', `exhtemphigh`='$exhtemphigh4', 
		 `tcintemp`='$tcintemp4', `tcouttemp`='$tcouttemp4', `scavairpress`='$scavairpress4',  `scavairtemp`='$scavairtemp4', `bearingtemp`='$bearingtemp4', `windingtemp`='$windingtemp4'  WHERE `reportnum`='$rnumber'";
	 

			 $sql_4g=mysqli_query($con,$sql4g);
			 
			 if($sql_4g)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Generator 4 Data Entered Successfully..!!</font></center></td><tr>';
			 }
			 
		 $sql5g="UPDATE `engauxgen5` SET 
		`foilinpress`='$foilinpress5', `foilintemp`='$foilintemp5', `loilinpress`='$loilinpress5', `loilintemp`='$loilintemp5', `sumplevel`='$sumplevel5', `cwaterpress`='$cwaterpress5', `cwaterintemp`='$cwaterintemp5', 
		`cwateroutavg`='$cwateroutavg5', `cwatertempoutlow`='$cwatertempoutlow5', `cwatertempouthigh`='$cwatertempouthigh5', `exhtempavg`='$exhtempavg5', `exhtemplow`='$exhtemplow5', `exhtemphigh`='$exhtemphigh5', 
		 `tcintemp`='$tcintemp5', `tcouttemp`='$tcouttemp5', `scavairpress`='$scavairpress5',  `scavairtemp`='$scavairtemp5', `bearingtemp`='$bearingtemp5', `windingtemp`='$windingtemp5'  WHERE `reportnum`='$rnumber'";
	 

			 $sql_5g=mysqli_query($con,$sql5g);
			 
			 if($sql_5g)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Generator 5 Data Entered Successfully..!!</font></center></td><tr>';
			 }	
	



		
}

?>

<?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

//print_r($_POST);

?>	
 
 
 <table>
	<form name="slogmaineng" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="auxiliary" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
		   <tr><td><br></td></tr>
		<tr><td  colspan="6" style="font-size:16px;"> <b>Fuel and Lube oil System</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	<td> </td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; AE #1 </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #2 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #3 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #4 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #5 </b></small></td>
			
	</tr>

<?php
	
	$sql21=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum AND items='foilinpress'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>	
	<tr>	<td><small>Fuel Oil Press</small></td>
			<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
			<td><input type="text" name="foilinpress1"  id="foilinpress1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilinpress2"  id="foilinpress2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilinpress3"  id="foilinpress3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilinpress4"  id="foilinpress4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilinpress5"  id="foilinpress5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>Bar</small> </i></td></td>
	</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='loilinpress'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>	
	<tr>
			<td><small>Lube Oil Press</small></td>
			<td><input type="text" name="loilinpress1"  id="loilinpress1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loilinpress2"  id="loilinpress2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loilinpress3"  id="loilinpress3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>	
			<td><input type="text" name="loilinpress4"  id="loilinpress4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loilinpress5"  id="loilinpress5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>Bar</small> </i></td></td>
	</tr>
<?php
}
	$sql23=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='foilintemp'");
	while($row=mysqli_fetch_array($sql23))
	{
			//$reportnum=$row['reportnum'];
?>	
	<tr>
			<td><small>Fuel Oil Temp </small></td>
			<td><input type="text" name="foilintemp1"  id="foilintemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilintemp2"  id="foilintemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilintemp3"  id="foilintemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilintemp4"  id="foilintemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foilintemp5"  id="foilintemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
<?php
}
	$sql24=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='loilintemp'");
	while($row=mysqli_fetch_array($sql24))
	{
			//$reportnum=$row['reportnum'];
?>		
	<tr>
			<td><small>Lube Oil Temp</small></td>
			<td><input type="text" name="loilintemp1"  id="loilintemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loilintemp2"  id="loilintemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loilintemp3"  id="loilintemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loilintemp4"  id="loilintemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="loilintemp5"  id="loilintemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
<?php
}
	$sql25=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='sumplevel'");
	while($row=mysqli_fetch_array($sql25))
	{
			//$reportnum=$row['reportnum'];
?>		
	<tr>
			<td><small>Sump Level</small></td>
			<td><input type="text" name="sumplevel1"  id="sumplevel1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sumplevel2"  id="sumplevel2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sumplevel3"  id="sumplevel3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sumplevel4"  id="sumplevel4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sumplevel5"  id="sumplevel5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>m</small></i></i></td></td>
	</tr>

      </table>
   <table>
          <tr><td><br></td></tr> <tr>	<tr>
              
		
		  
		<tr><td  colspan="18" style="font-size:16px;"> <b>Cooling Water System</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	<td> </td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; AE #1 </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #2 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #3 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #4 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #5 </b></small></td>
			
	</tr>
	<?php
}
	$sql26=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='cwaterpress'");
	while($row=mysqli_fetch_array($sql26))
	{
			//$reportnum=$row['reportnum'];
?>

	<tr>	<td><small>Cooling Water Press </small></td>
			<td><input type="text" name="cwaterpress1"  id="cwaterpress1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterpress2"  id="cwaterpress2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterpress3"  id="cwaterpress3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterpress4"  id="cwaterpress4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterpress5"  id="cwaterpress5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>Bar</small> </i></td></td>
	</tr>
	<?php
}
	$sql27=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='cwintemp'");
	while($row=mysqli_fetch_array($sql27))
	{
			//$reportnum=$row['reportnum'];

?>
	<tr>
			<td><small>CW Inlet Temp</small></td>
			<td><input type="text" name="cwaterintemp1"  id="cwintemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterintemp2"  id="cwintemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterintemp3"  id="cwintemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterintemp4"  id="cwintemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwaterintemp5"  id="cwintemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
	<?php
}
	$sql28=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='cwintempoutavg'");
	while($row=mysqli_fetch_array($sql28))
	{
			//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>CW Temp Out Avg</small></td>
			<td><input type="text" name="cwateroutavg1"  id="cwateroutavg1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwateroutavg2"  id="cwateroutavg2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwateroutavg3"  id="cwateroutavg3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwateroutavg4"  id="cwateroutavg4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwateroutavg5"  id="cwateroutavg5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
	<?php
}
	$sql29=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='cwintempoutl'");
	while($row=mysqli_fetch_array($sql29))
	{
			//$reportnum=$row['reportnum'];
?>	
	<tr>
			<td><small>CW Temp Out Low</small></td>
			<td><input type="text" name="cwatertempoutlow1"  id="cwatertempoutlow1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempoutlow2"  id="cwatertempoutlow2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempoutlow3"  id="cwatertempoutlow3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempoutlow4"  id="cwatertempoutlow4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempoutlow5"  id="cwatertempoutlow5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
		<?php
}
	$sql30=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='cwintempouth'");
	while($row=mysqli_fetch_array($sql30))
	{
//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>CW Temp Out High</small></td>
			<td><input type="text" name="cwatertempouthigh1"  id="cwatertempouthigh1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempouthigh2"  id="cwatertempouthigh2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempouthigh3"  id="cwatertempouthigh3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempouthigh4"  id="cwatertempouthigh4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="cwatertempouthigh5"  id="cwatertempouthigh5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" >&#176;c</i></i></td></td>
	</tr>
      </table>
      	</tr>
</table>

</div>

 <div class="col-md-5">
     
 <table>
        
              
		<tr><td><br></td></tr>
	
		  
		<tr><td  colspan="18" style="font-size:16px;"> <b>Exhaust System</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	<td> </td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp;  AE #1 </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #2 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #3 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #4 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #5 </b></small></td>
			
	</tr>
<?php
}
	$sql31=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='exhtempavg'");
	while($row=mysqli_fetch_array($sql31))
	{
			//$reportnum=$row['reportnum'];
?>

	<tr>	<td><small>Exh Temp Avg </small></td>
			<td><input type="text" name="exhtempavg1"  id="exhtempavg1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtempavg2"  id="exhtempavg2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtempavg3"  id="exhtempavg3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtempavg4"  id="exhtempavg4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtempavg5"  id="exhtempavg5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" >&#176;c </i></td></td>
	</tr>
<?php
}
	$sql32=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='exhtempl'");
	while($row=mysqli_fetch_array($sql32))
	{
			
		//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>ExhTemp Low (Cyl)</small></td>
			<td><input type="text" name="exhtemplow1"  id="exhtemplow1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemplow2"  id="exhtemplow2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemplow3"  id="exhtemplow3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemplow4"  id="exhtemplow4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemplow5"  id="exhtemplow5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
<?php
}
	$sql33=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='exhtemph'");
	while($row=mysqli_fetch_array($sql33))
	{
			//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Ex Temp  High (Cyl)</small></td>
			<td><input type="text" name="exhtemphigh1"  id="exhtemphigh1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemphigh2"  id="exhtemphigh2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemphigh3"  id="exhtemphigh3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemphigh4"  id="exhtemphigh4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="exhtemphigh5"  id="exhtemphigh5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
<?php
}
	$sql34=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='tcintemp'");
	while($row=mysqli_fetch_array($sql34))
	{
			//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>TC In Temp</small></td>
			<td><input type="text" name="tcintemp1"  id="tcintemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcintemp2"  id="tcintemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcintemp3"  id="tcintemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcintemp4"  id="tcintemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcintemp5"  id="tcintemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>
<?php
}
	$sql35=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='tcouttemp'");
	while($row=mysqli_fetch_array($sql35))
	{
	//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>TC Out Temp </small></td>
			<td><input type="text" name="tcouttemp1"  id="tcouttemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcouttemp2"  id="tcouttemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcouttemp3"  id="tcouttemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcouttemp4"  id="tcouttemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tcouttemp5"  id="tcouttemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" >&#176;c</i></i></td></td>
	</tr>
      </table>

      <table>
		<tr><td><br></td></tr>
		  
		<tr><td  colspan="18" style="font-size:16px;"> <b>Scavenge System</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	<td> </td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; AE #1 </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #2 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #3 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #4 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #5 </b></small></td>
	</tr>
	
<?php
}
	$sql36=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='scavairpress'");
	while($row=mysqli_fetch_array($sql36))
	{
			//$reportnum=$row['reportnum'];
?>
     
	<tr>	<td><small>Scav. Air Press </small></td>
			<td><input type="text" name="scavairpress1"  id="scavairpress1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairpress2"  id="scavairpress2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairpress3"  id="scavairpress3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairpress4"  id="scavairpress4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairpress5"  id="scavairpress5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>Bar</small> </i></td></td>
	</tr>
<?php
}
	$sql37=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='scavairtemp'");
	while($row=mysqli_fetch_array($sql37))
	{

	//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Scav. Air Temp</small></td>
			<td><input type="text" name="scavairtemp1"  id="scavairtemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairtemp2"  id="scavairtemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairtemp3"  id="scavairtemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairtemp4"  id="scavairtemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="scavairtemp5"  id="scavairtemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>

      </table>     
     
      <table>
   
		<tr><td><br></td></tr>
		  
		<tr><td  colspan="18" style="font-size:16px;"> <b>Alternator</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	<td> </td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; AE #1 </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #2 </b></small></td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #3 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #4 </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;AE #5 </b></small></td>
	</tr>
	
<?php
}
	$sql38=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='bearingtemp'");
	while($row=mysqli_fetch_array($sql38))
	{
	//$reportnum=$row['reportnum'];
?>
	<tr>	<td><small>Bearing Temp </small></td>
			<td><input type="text" name="bearingtemp1"  id="bearingtemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="bearingtemp2"  id="bearingtemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="bearingtemp3"  id="bearingtemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="bearingtemp4"  id="bearingtemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="bearingtemp5"  id="bearingtemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>Bar</small> </i></td></td>
	</tr>
<?php
}
	$sql39=mysqli_query($con,"SELECT * FROM tempengaux where reportnum =$reportnum and items ='windingtemp'");
	while($row=mysqli_fetch_array($sql39))
	{
			//$reportnum=$row['reportnum'];
?>
	<tr>
			<td><small>Winding Temp</small></td>
			<td><input type="text" name="windingtemp1"  id="windingtemp1" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="windingtemp2"  id="windingtemp2" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="windingtemp3"  id="windingtemp3" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="windingtemp4"  id="windingtemp4" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="windingtemp5"  id="windingtemp5" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" >&#176;c</i></td></td>
	</tr>

<?php
}
}
?>
      </table>

</div>


      <tr><td>	<br></td></tr><tr><td>	<br></td></tr>
    <div style="padding-left:230px;width:98%;padding-top:33%;">
 
  <textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:250px;">
		    <div class="col-md-1">
		        <button type="submit" name="srauxiliary" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
</form>		       
		    </div>
		 </div>
      
 <br><br>
    



</div>
</td><td>
