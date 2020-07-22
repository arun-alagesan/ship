     <head>
 
        
       <!--Calendar library start-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
			<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
       <!--Calendar library end-->
   <!--Calendar only date library start-->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <!--Calendar only date library start-->
   


  <script> // Calendar only date//
$(document).ready(function() {
  $(".datepicker1").datepicker();
  $('#datepicker1').click(function() {
    $(".datepicker1").focus();
  });
});

$(document).ready(function() {
  $(".datepicker2").datepicker();
  $('#datepicker2').click(function() {
    $(".datepicker2").focus();
  });
});

$(document).ready(function() {
  $(".datepicker3").datepicker();
  $('#datepicker3').click(function() {
    $(".datepicker3").focus();
  });
});


$(document).ready(function() {
  $(".datepicker4").datepicker();
  $('#datepicker4').click(function() {
    $(".datepicker4").focus();
  });
});

$(document).ready(function() {
  $(".datepicker5").datepicker();
  $('#datepicker5').click(function() {
    $(".datepicker5").focus();
  });
});

$(document).ready(function() {
  $(".datepicker6").datepicker();
  $('#datepicker6').click(function() {
    $(".datepicker6").focus();
  });
});
  </script>


      
        
        <script type="text/javascript">
           // THE SCRIPT THAT CHECKS IF THE KEY PRESSED IS A NUMERIC OR DECIMAL VALUE.//
//1st part- making sure only numbers are typed
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
    return true;
}    
//*ends - allowing only numbers
//2nd part - validates only numbers with in the range 0 to 10 is typed in
function fnc(value, min, max) 
{
    if(parseInt(value) < 0 || isNaN(value)) 
        return "0"; 
    else if(parseInt(value) > 360) 
        return plse check; 
    else return value;
}
//*ends - number range validation
</script>
        <script type="text/javascript">
            $(function () {
                $('#dtpickerdemo').datetimepicker();
            });
        </script>

</head>
 <div class="container">

<?php
//print_r($_POST);

if($_POST['opera'])
{
	$opertype=$_POST['opertype'];
	$startlt=$_POST['startlt'];
	$closelt=$_POST['closelt'];
	$startzoneutc=$_POST['startzoneutc'];
	$closezoneutc=$_POST['closezoneutc'];
	$startutc=$_POST['startutc'];	
	$closeutc=$_POST['closeutc'];		
	$lastreptime=$_POST['lastreptime'];
	
	$cargowt=$_POST['cargowt'];
	$ballwater=$_POST['ballwater'];
	$loadconst=$_POST['loadconst'];
	$draftaft=$_POST['draftaft'];
	$draftfwd=$_POST['draftfwd'];
	$trim=$_POST['trim'];	
	$metaht=$_POST['metaht'];	
	$deadwtres=$_POST['deadwtres'];		
	$maxrollang=$_POST['maxrollang'];	
	
	$sailplan=$_POST['sailplan'];	
	$destport=$_POST['destport'];
	$destportcode=$_POST['destportcode'];
	$destzone=$_POST['destzone'];
	$etapilotlt=$_POST['etapilotlt'];
	$etaportlt=$_POST['etaportlt'];
	$disteosp=$_POST['disteosp'];	
	$timeeosp=$_POST['timeeosp'];		
	
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

	
		 $sql1="UPDATE `operparam` SET 
		`opertype`='$opertype', `starttimeloc`='$startlt', `closetimeloc`='$closelt',`startzone`='$startzoneutc', `closezone`='$closezoneutc', `starttimeutc`='$startutc', `closetimeutc`='$closeutc' , `lastrep`='$lastreptime' ,
		`cargowt`='$cargowt', `ballwater`='$ballwater', `loadconst`='$loadconst', `draftaft`='$draftaft', `draftfwd`='$draftfwd', `trim`='$trim' , `metacentricht`='$metaht' , `deadwtres`='$deadwtres', `maxrollang`='$maxrollang', `sailingplan`='$sailplan',
		`portdest`='$destport', `portdestcode`='$destportcode', `desttimezone`='$destzone', `etastationlt`='$etapilotlt', `etaportlt`='$etaportlt', `disteosp`='$disteosp' , `timeeosp`='$timeeosp'  WHERE `reportnum`='$rnumber'";
	 

			 $sql_1=mysqli_query($con,$sql1);
			 
			 if($sql_1)
			 {
				echo'<tr><td colspan="2"><center><font color="green"> Operating Data Entered Successfully..!!</font></center></td><tr>';
			 }
	 	
		$sql2="UPDATE `operposition` SET 
		`ltdeg`='$ltdeg', `ltmin`='$ltmin', `ltsec`='$ltsec',`ltdir`='$ltdir', `lgdeg`='$lgdeg', `lgmin`='$lgmin', `lgsec`='$lgsec', `lgdir`='$lgdir'  WHERE `reportnum`='$rnumber'";
	

			 $sql_2=mysqli_query($con,$sql2);
			 
			 if($sql_2)
			 {
				echo'<tr><td colspan="2"><center><font color="green">Position Data Entered Successfully..!!</font></center></td><tr>';
			 }
}	

?>
 
 <?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

?>	
<br><br><br>
<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-4">
       <table  >  
       <form name="slogoper" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
		<input type="hidden" name="slogoperations" value="1">
			<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
			<table>	

	<tr>
		<td  colspan="2" style="font-size:16px;"><b>Operating Time Stamp</b></td>
	</tr>
<?php

	$sql11=mysqli_query($con,"SELECT * FROM operparam where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql11))
	{
	
?>	
	<tr><td>&nbsp; &nbsp; </td></tr> 
		<tr>
		<td><small>Type of Operation</small></td>
		<td class="input-container">  
				<select name="opertype" id="opertype" value="<?php echo $row['opertype'];?>" class="input-field"  required >
				<option>Normal Crusing</option>
				<option>Variable Speed</option>
				<option>Heavy Weather Operations</option>
				</select>  
			</td>
	</tr>

	<tr>
		<td> <small>Start of the Report,LT</small></td>
		<td class="input-container">  
		<input type="text" name='datepicker startlt' class="input-field datepicker1"   id=" startlt" value="<?php echo $row['starttimeloc'];?>" ng-required="true" placeholder="MM/DD/YYYY" >
		 
		 <span class="input-group-addon">
                        <span class="fa fa-calendar" id="datepicker1"></span>
                    </span>

	</td>
	</tr>
	<tr>
		<td><small>Closing of the Report,LT</small></td>
		<td class="input-container">
		    <input type="text" name="closelt" id="closelt" value="<?php echo $row['closetimeloc'];?>" class="input-field datepicker2" placeholder="MM/DD/YYYY" >
		   <span class="input-group-addon">
                        <span class="fa fa-calendar" id="datepicker2"></span>
                    </span>
	
	
		     </td>
	</tr>
	<tr>
		<td ><small>Start Time Zone (UTC)</small></td>
		<td class="input-container">  
				<select name="startzoneutc" id="startzoneutc" value="<?php echo $row['startzone'];?>" class="input-field"  required >
				<option>-18:00</option><option>-17:00</option><option>-16:00</option><option>-15:00</option><option>-14:00</option><option>-13:00</option><option>-12:00</option><option>-11:00</option><option>-10:00</option>
				<option>-09:00</option><option>-08:00</option><option>-07:00</option><option>-06:00</option><option>-05:00</option><option>-04:00</option><option>-03:00</option><option>-02:00</option><option>-01:00</option>
				<option>00:00</option><option>01:00</option><option>02:00</option><option>03:00</option><option>04:00</option><option>05:00</option><option>06:00</option><option>07:00</option><option>08:00</option><option>09:00</option>
				<option>10:00</option><option>11:00</option><option>12:00</option><option>13:00</option><option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option><option>18:00</option>
				</select>  
		</td>
	</tr>

	<tr>
		<td><small>Closing Time Zone(UTC)</small></td>
		<td class="input-container">  
			<select name="closezoneutc" id="closezoneutc" value="<?php echo $row['closezone'];?>" class="input-field"  required >
			<option>-18:00</option><option>-17:00</option><option>-16:00</option><option>-15:00</option><option>-14:00</option><option>-13:00</option><option>-12:00</option><option>-11:00</option><option>-10:00</option>
			<option>-09:00</option><option>-08:00</option><option>-07:00</option><option>-06:00</option><option>-05:00</option><option>-04:00</option><option>-03:00</option><option>-02:00</option><option>-01:00</option>
			<option>00:00</option><option>01:00</option><option>02:00</option><option>03:00</option><option>04:00</option><option>05:00</option><option>06:00</option><option>07:00</option><option>08:00</option><option>09:00</option>
			<option>10:00</option><option>11:00</option><option>12:00</option><option>13:00</option><option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option><option>18:00</option>
			</select>  
		</td>
	</tr>
	<tr>
		<td><small>Start Date/Time(UTC)</small></td>
		<td class="input-container">
		    
		    <input type="text" name="startutc" id="startutc" value="<?php echo $row['starttimeutc'];?>" class="input-field datepicker3" placeholder="MM/DD/YYYY" >
		     <span class="input-group-addon">
                        <span class="fa fa-calendar" id="datepicker3"></span>
                    </span>
		    </td>
	</tr>
	<tr>
		<td><small>Closing Date/Time(UTC)</small></td>
		<td class="input-container">
		    <input type="text" name="closeutc" id="closeutc" value="<?php echo $row['closetimeutc'];?>" class="input-field datepicker4" placeholder="MM/DD/YYYY">
		      <span class="input-group-addon">
                        <span class="fa fa-calendar" id="datepicker4"></span>
                    </span>
		    </td>
	</tr>
	<tr>
		<td><small>Period since Last Report</small></td>
		<td class="input-container"><input type="text" name="lastreptime" id="lastreptime" value="<?php echo $row['lastrep'];?>" class="input-field" placeholder="" autocomplete="off">
		  <i class="fa fa- icon"><small>Hrs</small></i>
		</td>
	</tr>	

       
           </table>	 </table>
           <tr><td>&nbsp &nbsp </td></tr><tr><td>&nbsp &nbsp </td></tr>

<?php
}
	$sql12=mysqli_query($con,"SELECT * FROM operposition where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql12))
	{
	
?>
           <table>
               
             	<tr>
			<td  colspan="2" style="font-size:16px;"><b>Position</b></td>
		</tr>		
		<tr><td>&nbsp &nbsp </td></tr>
		<tr>
			<td ><small>Latitude</small></td>
			<td>
			
			<table>
			<tr><td><input type="text" name="ltdeg" id="ltdeg" value="<?php echo $row['ltdeg'];?>" class="input-field"  placeholder="Deg"maxlength="2" size="3" title='between 0 to 90' required></td>
			<td><input type="text" name="ltmin" id="ltmin" value="<?php echo $row['ltmin'];?>" class="input-field" placeholder="Min"maxlength="2" size="3" title='between 0 to 60' required></td>
			<td><input type="text" name="ltsec" id="ltsec" value="<?php echo $row['ltsec'];?>" class="input-field" placeholder="Sec"maxlength="2" size="3"  title='between 0 to 60' required></td>
			<td>  
					<select name="ltdir"  value="<?php echo $row['ltdir'];?>" class="form-control" >
					<option>N</option><option>S</option>	
					</select>  
			</td>
			</tr>
			</table>
			
			</td>
		</tr>	
		<tr>
			<td><small>Longitude</small></td>
			<td>
			<table>
			<tr><td><input type="text" name="lgdeg" id="lgdeg" value="<?php echo $row['lgdeg'];?>" class="input-field" placeholder="Deg"maxlength="3" size="3"  title='between 0 to 180' required></td>
			<td><input type="text" name="lgmin" id="lgmin" value="<?php echo $row['lgmin'];?>" class="input-field" placeholder="Min"maxlength="2" size="3"  title='between 0 to 60' required></td>
			<td><input type="text" name="lgsec" id="lgsec" value="<?php echo $row['lgsec'];?>" class="input-field" placeholder="Sec"maxlength="2" size="3"  title='between 0 to 60' required></td><td >  
					<select name="lgdir" id="lgdir" value="<?php echo $row['lgdir'];?>" class="form-control" >
					<option>E</option>	<option>W</option>
					</select>  
				</td></tr>
			</table>
			</td>
		</tr>	
           </table>
           
  </div>
  <div class="col-md-3">
<?php
}
	$sql11=mysqli_query($con,"SELECT * FROM operparam where reportnum =$reportnum");
	while($row=mysqli_fetch_array($sql11))
	{
	
?>	
<table>
	<tr>
		<td  colspan="2" style="font-size:20px;"><small><b>Operating Condition</b></small></td>

		<tr><td>&nbsp; &nbsp; </td></tr> 
	<tr>
		<td><small>Cargo Weight</small></td>
		<td  class="input-container">
		    <input type="number"  maxlength="4" name="cargowt" id="cargowt" value="<?php echo $row['cargowt'];?>" class="input-field" placeholder="" autocomplete="off">
		     <i class="fa fa- icon"><small>MT</small></i>
		    
		    </td>
	</tr>	
	<tr>
		<td><small>Ballast Water</small></td>
		<td  class="input-container"><input type="text" name="ballwater" id="ballwater" value="<?php echo $row['ballwater'];?>" class="input-field" placeholder="" autocomplete="off">
		<i class="fa fa- icon"><small>MT</small></i>
		</td>
	</tr>
	<tr>
		<td > <small>Load Constrain</small></td>
		<td class="input-container">  
			<select name="loadconst" id="loadconst" value="<?php echo $row['loadconst'];?>" class="input-field"  required >
			<option>Yes</option>
			<option>No</option>
			</select>  
		</td>
	</tr>
	<tr>
		<td ><small>Aft Draft</small></td>
		<td class="input-container"><input type="text" name="draftaft" id="draftaft" value="<?php echo $row['draftaft'];?>" class="input-field" placeholder="" autocomplete="off">
		 <i class="fa fa- icon"><small>m</small></i>
		</td>
	</tr>
	<tr>
		<td><small>Fwd Draft</small></td>
		<td class="input-container"><input type="text" name="draftfwd" id="draftfwd" value="<?php echo $row['draftfwd'];?>" class="input-field" placeholder="" autocomplete="off">
		 <i class="fa fa- icon"><small>m</small></i>
		</td>
	</tr>
	<tr>
		<td ><small>Trim</small></td>
		<td class="input-container"><input type="text" name="trim" id="trim" value="<?php echo $row['trim'];?>" class="input-field" placeholder="" autocomplete="off">
		 <i class="fa fa- icon"><small>m</small></i></td>
	</tr>
	<tr>
		<td><small>Metacentric Height</small></td>
		<td class="input-container">
		    <input type="text" name="metaht" id="metaht" value="<?php echo $row['metacentricht'];?>" class="input-field" placeholder="" autocomplete="off">
		     <i class="fa fa- icon"><small>m</small></i>
		    </td>
	</tr>
	<tr>
		<td><small>DWT Reserve</small></td>
		<td class="input-container">
		    <input type="text" name="deadwtres" id="deadwtres" value="<?php echo $row['deadwtres'];?>" class="input-field" placeholder="" autocomplete="off">
		    
		     <i class="fa fa- icon"><small>MT</small></i>
		    </td>
	</tr>
	<tr>
		<td><small>Max Roll Angle</small></td>
		<td class="input-container">
		    <input type="text" name="maxrollang" id="maxrollang" value="<?php echo $row['maxrollang'];?>" class="input-field" placeholder="" autocomplete="off">
		    <i class="fa fa- icon">&#176;</i>
		    </td>
	</tr>
</table>
  </div>
    <div class="col-md-3">
<table>
    	<tr>
			<td colspan="2" style="font-size:16px;">	<b>Voyage Plan</b></td>
		</tr>			<tr><td>&nbsp &nbsp </td></tr> 
		<tr>
			<td><small>Sailing Plan</small></td>
			<td class="input-container">  
					<select name="sailplan" id="sailplan"  class="input-field"  required >
					<option><?php echo $row['sailingplan'];?></option>
					<option>Plan Available</option>
					<option>Plan Unavailable</option>
					<option>No Change in plan</option>
					<option>Change in plan</option>
					</select>  
			</td>
		</tr>
		<tr>
			<td><small>Destination Port</small></td>
			<td class="input-container">
			    <input type="text" name="destport" id="destport" value="<?php echo $row['portdest'];?>" class="input-field" placeholder="" autocomplete="off"></td>
		</tr>
		<tr>
			<td ><small>Destination Port Code</small></td>
			<td class="input-container"><input type="text" name="destportcode" id="destportcode" value="<?php echo $row['portdestcode'];?>" class="input-field" placeholder="" autocomplete="off"></td>
		</tr>
		<tr>
			<td ><small>Destination Port Time Zone</small></td>
			<td class="input-container">  
				<select name="destzone" id="destzone" value="<?php echo $row['desttimezone'];?>" class="input-field"  required >
				<option>-18:00</option><option>-17:00</option><option>-16:00</option><option>-15:00</option><option>-14:00</option><option>-13:00</option><option>-12:00</option><option>-11:00</option><option>-10:00</option>
				<option>-09:00</option><option>-08:00</option><option>-07:00</option><option>-06:00</option><option>-05:00</option><option>-04:00</option><option>-03:00</option><option>-02:00</option><option>-01:00</option>
				<option>00:00</option><option>01:00</option><option>02:00</option><option>03:00</option><option>04:00</option><option>05:00</option><option>06:00</option><option>07:00</option><option>08:00</option><option>09:00</option>
				<option>10:00</option><option>11:00</option><option>12:00</option><option>13:00</option><option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option><option>18:00</option>
				</select>  
			</td>
		</tr>
		<tr>
			<td ><small> ETA Pilot Station</small></td>
			<td class="input-container">  <input type="text" id="etapilotlt" value="<?php echo $row['etastationlt'];?>" class="input-field datepicker5" name="etapilotlt"   value="<?php echo $date;?>" required >  
			 <span class="input-group-addon">
                        <span class="fa fa-calendar" id="datepicker5"></span>
                    </span>
		    </td>
			</td>
		</tr>
		<tr>
			<td><small> ETA Port</small></td>
			<td class="input-container"> 
			<input type="text" id="etaportlt" value="<?php echo $row['etaportlt'];?>" class="input-field datepicker6" name="etaportlt"   value="<?php echo $date;?>" required >  
			 <span class="input-group-addon">
                        <span class="fa fa-calendar" id="datepicker6"></span>
                    </span>
		    </td>
			</td>
		</tr>			
		<tr>
			<td ><small>Remaining Distance to EOSP</small></td>
			<td class="input-container"><input type="text" name="disteosp" id="disteosp" value="<?php echo $row['disteosp'];?>" class="input-field" placeholder="" autocomplete="off">
			 			  <i class="fa fa- icon"><small>Nm</small></i>
			</td>
		</tr>
		<tr>
			<td><small>Remaining Time to EOSP</small></td>
			<td class="input-container"><input type="text" name="timeeosp" id="timeeosp" value="<?php echo $row['timeeosp'];?>" class="input-field" placeholder="" autocomplete="off">
			  <i class="fa fa- icon"><small>Hrs</small></i>
			</td>
		</tr>						

    
</table>
<?php
}
}
?>	
  </div>

<tr><td>	<br></td></tr><tr><td>	<br></td></tr>
    <div style="padding-left:230px;width:95%;padding-top:29%;">
 
  <textarea class="form-control" rows="4" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:240px;">
			 <button type="submit" name="upsreport" class="btn btn-block btn-sm btn-primary" value="1" style="width:80px;">Save</button>			 
		</div>
      
 <br><br>

</div>
 
    