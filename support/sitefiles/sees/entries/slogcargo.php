 <div class="container">
 <div class="main">
<?php


if($_POST['srdcargo'])
{
	$contai=$_POST['contai'];	
	$totunits=$_POST['totunits'];
	$reeferunits=$_POST['reeferunits'];
	$numteu=$_POST['numteu'];
	$numcranes=$_POST['numcranes'];
	$cargowt=$_POST['cargowt'];
	$lashings=$_POST['lashings'];
	$reportnum=$_POST['reportnum'];

	
		 $sqll="UPDATE `dcargo` SET 
		`contai`='$contai', `totunits`='$totunits', `reeferunits`='$reeferunits',`numteu`='$numteu', `numcranes`='$numcranes', `cargowt`='$cargowt', `lashings`='$lashings' WHERE `reportnum`='$reportnum'";
	 
	
	 /* $sqll="INSERT INTO `dcargo` (`contai`,`totunits`, `reeferunits`, `numteu`, `numcranes`, `cargowt`, `lashings`) 
	 VALUES ('$contai','$totunits','$reeferunits','$numteu','$numcranes','$cargowt','$lashings')"; */
	 
	 $sql_2=mysqli_query($con,$sqll);

	 if($sql_2)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Data Entered Successfully..!!</font></center></td><tr>';
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

<div class="row" id="copycontent">



    <div class="col-md-4">
<table class=" table-hover" >	
	<form name="dcargo" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
		<input type="hidden" name="slogdeck" value="1">
		<input type="hidden" name="cargo" value="1">
	<tr>
		<td  colspan="4" style="font-size:16px;"><b>Cargo</b></td>
	</tr><tr><td>	<br></td></tr>	
	<tr>
		<input type="hidden" name="reportnum" value="<?php echo $row['reportnum'];?>">
	<?php

	 		$sql1=mysqli_query($con,"SELECT * FROM dcargo where reportnum =$reportnum");
		
		while($row=mysqli_fetch_array($sql1))
		{
		
	?>
	<td><small>Container</small></td>
					<td >  
					<select name="contai" id="contai"value="<?php echo $row['contai'];?>"class="form-control"  required >
					<option></option>
					<option>Yes</option>
					<option>No</option>
					</select>
  
				</td>
	</tr>	
	
	
			<tr>
			<td ><small>Total Number of Units</small></td>
			<td><input type="text" name="totunits" id="totunits" value="<?php echo $row['totunits'];?> " class="input-field" placeholder="" autocomplete="off"></td>
		</tr>
			<tr>
			<td><small>Refer Units</small></td>
			<td><input type="text" name="reeferunits" id="reeferunits" value="<?php echo $row['reeferunits'];?>" class="input-field" placeholder="" autocomplete="off"></td>
		</tr>	
				<tr>
			<td><small>Number of TEU</small></td>
			<td><input type="text" name="numteu"  id="numteu" value="<?php echo $row['numteu'];?>"class="input-field" placeholder="" autocomplete="off"></td>
		</tr>	
		<tr>
			<td ><small>Number of Cranes Operated</small></td>
			<td><input type="text" name="numcranes" id="numcranes" value="<?php echo $row['numcranes'];?>" class="input-field" placeholder="" autocomplete="off"></td>
		</tr>
		<tr>
			<td><small>Cargo Weight</small></td>
			<td><input type="text" name="cargowt"  id="cargowt" value="<?php echo $row['cargowt'];?>" class="input-field" placeholder="" autocomplete="off"></td>
		</tr>
			<tr>
		<td><small>Lashings Checked </small>  </td>
					<td >  
					<select name="lashings" id="lashings" value="<?php echo $row['lashings'];?>"class="form-control"  required >
					<option></option><option>Yes</option>
					<option>No</option>
					</select>  
				</td>
	</tr>	
	

</form>
</table>


  </div>
    <div class="col-md-4"></div>


<tr><td>	<br></td></tr>
    <div style="padding-left:10px;width:95%;padding-top:25%;">
 
  <textarea class="form-control" rows="5" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
	<div style="padding-left:100px;">

	    <div class="col-md-1">
	        <button type="submit" name="srdcargo" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
	      
	    </div>
		 
 	</div>


</div>
<?php
}
}

?>	

</div>
</div>