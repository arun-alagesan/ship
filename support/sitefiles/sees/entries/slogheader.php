 <html lang="en">
 <div class="container">

<?php

		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
			$reportnum=$row['reportnum'];
			$voynum=$row['voynum'];
?>

          
         
<br><br><br>



<br><br>

<div class="row" id="copycontent">
  <div class="col-md-4">1 of 4</div>
  <div class="col-md-4">
     <table>
        <tr><td>
		<form name="upsreport" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
		<input type="hidden" name="slogheader" value="1">
	     <tr>
			<td  colspan="2" style="font-size:16px;"><b>Report Details</b></td>
		</tr>
		<tr><td><br></td></tr>
		<tr><td><small>Report Type</small></td>
			<td><input type="text" name="reptype" id="reptype" class="input-field" value="<?php echo $row['reptype'];?>"  readonly />  </td>
		</tr>
		<tr>
			<td><small>Report Number</small></td>
			<td>  <input type="text" name="reportnum" id="reportnum" class="input-field" value="<?php echo $row['reportnum'];?>"  readonly />  </td>
		</tr>
			<tr><td><small>Voyage Number</small></td>
			 <td>  <input type="text" name="voynum" id="voynum" class="input-field" value="<?php echo $row['voynum'];?>"   />  </td>
		</tr>
		<form>
     </table>
   </div>       		
<?php
}
	$imono=98786858;
	$vname='MAERSK HAI PHONG';
	$mast='RAM';
	$chiefoff='GANESH';
	$chiefeng='KRISH';
	$seceng='SRINI';
	$reptype='Sea Report';
?>

  <div class="col-md-4">
	<table  class=" table-hover" >	
	<tr>
		<td style="font-size:16px;"><b>Vessel Details</b></td>
	</tr>	
	<tr><td>	<br></td></tr>
	<tr>
  		<td><small>IMO Number</small></td>
		<td><input type="text" name="seceng" class="input-field" value="<?php echo $imono?>" readonly></td>
	</tr>	
	<tr>
		<td><small>Vessel Name</small></td>
		<td><input type="text" name="seceng" class="input-field" value="<?php echo $vname?>" readonly></td>
	</tr>
    <tr>  	
      	<td style="font-size:16px;"><small>Master Name</small></td>	
		<td ><input type="text" name="seceng" class="input-field" value="<?php echo $mast?>" readonly></td>
	</tr>	
	<tr>
		<td><small>	Chief Officer</small></td>
		<td><input type="text" name="seceng" class="input-field" value="<?php echo $chiefoff?>" readonly></td>	
	</tr>	
	<tr>
		<td><small>Chief Engineer</small></td>	
		<td><input type="text" name="chiefeng" class="input-field" value="<?php echo $chiefeng?>" readonly></td>
	</tr>	
	<tr>
		<td><small>Second Engineer </small></td>
		<td><input type="text" name="seceng"  class="input-field" value="<?php echo $seceng?>" readonly> </td>
	</tr>	
 </table>  
  </div>

	<tr><td>	<br></td></tr><tr><td>	<br>
    <div style="padding-left:230px;width:95%;padding-top:20%;">
 	 <textarea class="form-control" rows="5" id="comment" placeholder="Comments"></textarea><br>
	</div>
    
	<div style="padding-left:500px;">
	 <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:80px;">Save</button>			 
	 </div>
  </td></tr>
  
 <br>
	<div style="padding-left:250px;">

		    <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Submit and sent</button>
		    </div>
		    <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Edit Report</button>
		    </div>
		       <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Validate Engine</button>
		    </div>
		       <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Submit Engine</button>
		    </div>
		       <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Edit Engine</button>
		    </div>
		       <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Validate deck</button>
		    </div>
		       <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">submit Deck</button>
		    </div>
		       <div class="col-md-1">
		       <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Edit Deck</button>
		    </div>
		  	
			</div>
      
 <br><br>

</div>
 
</div>


   
   <?php

if($_POST['upsreport'])
{
  $voynum=$_POST['voynum'];
  $reportnum=$_POST['reportnum'];
  $reptype=$_POST['reptype'];
  //$createdby=$_SESSION['username'];
  
   $sqll="UPDATE `reportnumb` SET 
  `voynum`='$voynum' WHERE `reportnum`='$reportnum'";
   
   $sql_2=mysqli_query($con,$sqll);
   
   if($sql_2)
   {
    echo'<tr><td colspan="2"><center><font color="green">Voyage Number Saved!!!</font></center></td><tr>';
   }
   
   

}
?>
</html>  
    

