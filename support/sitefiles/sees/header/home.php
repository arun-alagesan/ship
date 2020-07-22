<html>

</head>
<body>
    <!--ALL MENU STRATED TEXT BOX  -->
<div class="container-fluid">
<form action="index.php" method="post">
<nav class="navbar navbar-inverse navbar-fixed-top ">
  
    <div class="navbar-header">
      <img src="http://eliteproducts.in/apurinks/my/design/images/seeas-nwe-2.png" alt="Ritex" style="height: 60px;
    max-width: 100%;" >
    </div>
    <ul class="nav navbar-nav" style="float:right;">


      <li><button name="home"  class="btn btn-info navbar-btn" value="home" ><b><span class="glyphicon glyphicon-home"></span> Home</b></button></li>
      <li><button name="est" class="btn btn-info navbar-btn" value="est" ><b><span class="glyphicon glyphicon-tasks"></span> Vessel Log</b></button></li>
      <li><button name="settin"  class="btn btn-info navbar-btn" value="items" ><span class="glyphicon glyphicon-cog"></span> <b> Settings</b></button></li>
      <li>
            <button name="vreports" class="btn btn-info navbar-btn" value="vreports" ><span class="glyphicon glyphicon-print"></span> <b>View Report</b></button>
</li>
  <li>
    <input type="submit" class="btn btn-info navbar-btn dropdown-toggle" data-toggle="dropdown" value="Create Report" >
    <ul class="dropdown-menu" >
    <button name="preport"  class="btn btn-default btn-block" value="preport" ><span class="glyphicon glyphicon-print"></span> <b>Port Report</b></button>
    <button name="sreport" class="btn btn-default btn-block" value="sreport" ><span class="glyphicon glyphicon-print"></span> <b>Sea Report</b></button>
    </ul>
   </li>
   <li>
    <button  name="logout"  value="logout" class="btn btn-info navbar-btn">Signout<span class="glyphicon glyphicon-log-out"></span></button>
  </li>
    </ul>
  </div>
</nav>
</form>
         <!--ALL MENU ENd TEXT BOX  -->
         

  



<?php
if($_POST['vreports'])
{

 
?>
<div class="sidenav w3-animate-left">
<form action="index.php" name="mainitems" method="post">
<input type="hidden" name="vreports" value="1">

<nav class="navbar navbar">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#itemsmenu" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
      </button>
     </div>
    <div class="collapse navbar-collapse" id="itemsmenu">
		<input type="submit" name="vallrep" class="w3-bar-item w3-button w3-hover-black w3-xsmall" value="All Reports ">
		<input type="submit" name="vportrep" class="w3-bar-item w3-button w3-hover-black w3-xsmall" value="Port Reports ">
		<input type="submit" name="vsearep" class="w3-bar-item w3-button w3-hover-black w3-xsmall" value="Sea Reports ">
		<input type="submit" name="vsrep" class="w3-bar-item w3-button w3-hover-black w3-xsmall" value="Search Reports ">
	</div>
	</nav>
</form>

</div>
<?php

}
?>
  <div class="col-md-2"></div>

 <div class="col-md-10">


	<?php
	if($_POST['sreport'])
	{
		
		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];
		$voynum=$row['voynum'];
	?>

	<table  class=" table-hover" >	
		<form name="upsrep" action="index.php" method="post">
		<tr>
			<td id="numaligncenter" colspan="2" style="font-size:20px;"><b>Report Details</b></td>
		</tr>		
		<tr>
			<td id="numaligncenter">Report Type     </td>
			<td><input type="text" name="reptype" class="form-control"  value="SEA REPORT" readonly></td>
		</tr>	
		<tr>
			<td id="numaligncenter">Report Number</td>
			<td><input type="text" name="reportnum" class="form-control"  value="<?php echo $reportnum+1;	?>" placeholder="" autocomplete="off"></td>
		</tr>
		<tr><td id="numaligncenter">Voyage Number</td>
			 <td>  <input type="text" name="voynum" id="voynum" class="form-control" value="<?php echo $row['voynum'];?>"   required />  </td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit" name="srepnum" class="btn btn-block btn-sm btn-primary" value="1">Enter</button></td>
		</tr>
		</form>
	</table>

	<?php
	$imono=98786858;
	$vname='MAERSK HAI PHONG';
	$mast='RAM';
	$chiefoff='GANESH';
	$chiefeng='KRISH';
	$seceng='SRINI';
	$reptype='Sea Report';
	
	?>
		<table  class=" table-hover" >	


	<tr>
		<td id="numaligncenter" colspan="2" style="font-size:20px;"><b>Vessel Details</b></td>
	</tr>	
	<tr>
  		<td id="numaligncenter" ><b>IMO Number<b></td>
		<td id="numaligncenter" ><input type="text" name="seceng" class="form-control" value="<?php echo $imono?>" readonly></td>
	</tr>	
	<tr>
		<td id="numaligncenter" >	<b>Vessel Name<b></td>
		<td id="numaligncenter" ><input type="text" name="seceng" class="form-control" value="<?php echo $vname?>" readonly></td>
	</tr>
	<tr>
		<td id="numaligncenter"  ><b>Master Name<b></td>	
		<td id="numaligncenter" ><input type="text" name="seceng" class="form-control" value="<?php echo $mast?>" readonly></td>
	</tr>	
	<tr>
		<td id="numaligncenter"  >	<b>Chief Officer<b></td>
		<td id="numaligncenter" ><input type="text" name="seceng" class="form-control" value="<?php echo $chiefoff?>" readonly></td>	
	</tr>	
	<tr>
		<td id="numaligncenter"   ><b>Chief Engineer<b></td>	
		<td id="numaligncenter" ><input type="text" name="chiefeng" class="form-control" value="<?php echo $chiefeng?>" readonly></td>
	</tr>	
	<tr>
		<td id="numaligncenter" ><b>Second Engineer <b></td>
		<td id="numaligncenter" ><input type="text" name="seceng"  class="form-control" value="<?php echo $seceng?>" readonly> </td>
	</tr>	

</td></tr>	
</table>

</div>
<?php
	}

	$createdby=$_SESSION['username'];
	$reportnum=$_POST['reportnum'];
	$reptype=$_POST['reptype'];
	$voynum=$_POST['voynum'];

		
		 $sql="INSERT INTO `reportnumb` (`createdby`, `reportnum`,`repstatus`, `reptype`) 
			 VALUES ('$createdby','$reportnum','OPEN','SEA REPORT')";
			 

		$sql_1a=mysqli_query($con,$sql);
	 if($sql_1a)
	 {
	 	echo'<tr><td colspan="2"><center><font color="green"> Sea Report  Created Successfully..!!</font></center></td><tr>';
	 }
	 
	 
	 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$rnum=$row['reportnum'];
	 
	
	 $sql1="INSERT INTO `dcargo` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_1=mysqli_query($con,$sql1);
		 if($sql_1)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Cargo  Created Successfully..!!</font></center></td><tr>';
		 }
	 	 
	$sql2="INSERT INTO `dballsystems` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_2=mysqli_query($con,$sql2);
		 if($sql_2)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> DBall Systems Report  Created Successfully..!!</font></center></td><tr>';
		 }
	 
	$sql3="INSERT INTO `dfwatersys` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_3=mysqli_query($con,$sql3);
		 if($sql_3)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Fresh Water Systems Report  Created Successfully..!!</font></center></td><tr>';
		 }
		 
	$sql4="INSERT INTO `dballtank` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_4=mysqli_query($con,$sql4);
		 if($sql_4)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Ball Tank Report  Created Successfully..!!</font></center></td><tr>';
		 }
		 
	$sql5="INSERT INTO `dspeeddist` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_5=mysqli_query($con,$sql5);
		 if($sql_5)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Speed Distance  Created Successfully..!!</font></center></td><tr>';
		 }
		 
	$sql6="INSERT INTO `dwind` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_6=mysqli_query($con,$sql6);
		 if($sql_6)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Wind Data  Created Successfully..!!</font></center></td><tr>';
		 }
	$reportnum=$_POST['reportnum'];		 
	$sql7="INSERT INTO `dposition` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_7=mysqli_query($con,$sql7);
		 if($sql_7)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Position Data  Created Successfully..!!</font></center></td><tr>';
		 }	
		 
	$sql8="INSERT INTO `dobservation` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_8=mysqli_query($con,$sql8);
		 if($sql_8)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Observation Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
	$sql9="INSERT INTO `operparam` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_9=mysqli_query($con,$sql9);
		 if($sql_9)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Operation Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
	$sql10="INSERT INTO `operposition` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_10=mysqli_query($con,$sql10);
		 if($sql_10)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Operation Position Data  Created Successfully..!!</font></center></td><tr>';
		 }	
	
	$sql11="INSERT INTO `engobservation` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_11=mysqli_query($con,$sql11);
		 if($sql_11)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine ObservationData  Created Successfully..!!</font></center></td><tr>';
		 }	
		 
	$sql12="INSERT INTO `engoilsystems` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_12=mysqli_query($con,$sql12);
		 if($sql_12)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine OIl Systems Data  Created Successfully..!!</font></center></td><tr>';
		 }	
		 
	$sql13="INSERT INTO `engsystems` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_13=mysqli_query($con,$sql13);
		 if($sql_13)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine Systems Data  Created Successfully..!!</font></center></td><tr>';
		 }		
	
	$sql14="INSERT INTO `engbearing` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_14=mysqli_query($con,$sql14);
		 if($sql_14)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine Bearing Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
	$sql15="INSERT INTO `engcoolwater` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_15=mysqli_query($con,$sql15);
		 if($sql_15)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine Cool Water Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
	$sql16="INSERT INTO `engpistoncool` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_16=mysqli_query($con,$sql16);
		 if($sql_16)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine PIston Cool  Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
	$sql17="INSERT INTO `engexhsystem` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_17=mysqli_query($con,$sql17);
		 if($sql_17)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine Exhaust System Data  Created Successfully..!!</font></center></td><tr>';
		 }	

	$sql18="INSERT INTO `engtc1` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_18=mysqli_query($con,$sql18);
		 if($sql_18)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 1 Data  Created Successfully..!!</font></center></td><tr>';
		 }	
		 
	$sql19="INSERT INTO `engtc2` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_19=mysqli_query($con,$sql19);
		 if($sql_19)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 2 Data  Created Successfully..!!</font></center></td><tr>';
		 }	
		 
	$sql20="INSERT INTO `engtc3` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_20=mysqli_query($con,$sql20);
		 if($sql_20)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 3 Data  Created Successfully..!!</font></center></td><tr>';
		 }		
	
	$sql21="INSERT INTO `engtc4` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_21=mysqli_query($con,$sql21);
		 if($sql_21)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Turbocharger 4 Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
	$sql22="INSERT INTO `engscav1` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_22=mysqli_query($con,$sql22);
		 if($sql_22)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Scavanger 1 Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
	$sql23="INSERT INTO `engscav2` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_23=mysqli_query($con,$sql23);
		 if($sql_23)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Scavanger 2 Data  Created Successfully..!!</font></center></td><tr>';
		 }		
		 
		$sql24="INSERT INTO `engscav3` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_24=mysqli_query($con,$sql24);
		 if($sql_24)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Scavanger 3 Data  Created Successfully..!!</font></center></td><tr>';
		 }			

		 $sql25="INSERT INTO `engscav4` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_25=mysqli_query($con,$sql25);
		 if($sql_25)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Scavanger 4 Data  Created Successfully..!!</font></center></td><tr>';
		 }	
		 
		$sql26="INSERT INTO `engauxpower` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_26=mysqli_query($con,$sql26);
		 if($sql_26)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Engine Power Data  Created Successfully..!!</font></center></td><tr>';
		 }			
		 

		$sql52="INSERT INTO `engauxgen1` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_52=mysqli_query($con,$sql52);
		 if($sql_52)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Generator1 Data  Created Successfully..!!</font></center></td><tr>';
		 }			

		$sql53="INSERT INTO `engauxgen2` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_53=mysqli_query($con,$sql53);
		 if($sql_53)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Generator2 Data  Created Successfully..!!</font></center></td><tr>';
		 }			

		$sql54="INSERT INTO `engauxgen3` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_54=mysqli_query($con,$sql54);
		 if($sql_54)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Generator3 Data  Created Successfully..!!</font></center></td><tr>';
		 }			

		$sql55="INSERT INTO `engauxgen4` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_55=mysqli_query($con,$sql55);
		 if($sql_55)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Generator4 Data  Created Successfully..!!</font></center></td><tr>';
		 }			

		$sql56="INSERT INTO `engauxgen5` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_56=mysqli_query($con,$sql56);
		 if($sql_56)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Generator5 Data  Created Successfully..!!</font></center></td><tr>';
		 }			

		 
		 $sql28="INSERT INTO `engauxboiler` ( `reportnum`,`repstatus`) 
		VALUES ('$rnum','OPEN')";
		
		$sql_28=mysqli_query($con,$sql28);
		 if($sql_28)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Boiler Data  Created Successfully..!!</font></center></td><tr>';
		 }	
		 
		 $sql30="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','foilinpress','1','1','1','1','1','1')";
			
		$sql_30=mysqli_query($con,$sql30);
		 if($sql_30)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Temp Data  Created Successfully..!!</font></center></td><tr>';
		 }	 	
		 
		 $sql31="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','foilintemp','1','1','1','1','1','1')";
			
		$sql_31=mysqli_query($con,$sql31); 

		 $sql32="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','loilinpress','1','1','1','1','1','1')";
			
		$sql_32=mysqli_query($con,$sql32);
		
		 $sql33="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','loilintemp','1','1','1','1','1','1')";
			
		$sql_33=mysqli_query($con,$sql33);

		 $sql34="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','sumplevel','1','1','1','1','1','1')";
			
		$sql_34=mysqli_query($con,$sql34);
		
 		 $sql36="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','cwaterpress','1','1','1','1','1','1')";
			
		$sql_36=mysqli_query($con,$sql36); 

		 $sql37="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','cwintemp','1','1','1','1','1','1')";
			
		$sql_37=mysqli_query($con,$sql37);
		
		 $sql38="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','cwintempoutavg','1','1','1','1','1','1')";
			
		$sql_38=mysqli_query($con,$sql38);

		 $sql39="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','cwintempoutl','1','1','1','1','1','1')";
			
		$sql_39=mysqli_query($con,$sql39);		

		 if($sql_39)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Temp 2 Data  Created Successfully..!!</font></center></td><tr>';
		 }	 
		 
		 $sql41="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','cwintempouth','1','1','1','1','1','1')";
			
		$sql_41=mysqli_query($con,$sql41); 

		 $sql42="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','exhtempavg','1','1','1','1','1','1')";
			
		$sql_42=mysqli_query($con,$sql42);
		
		 $sql43="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','exhtempl','1','1','1','1','1','1')";
			
		$sql_43=mysqli_query($con,$sql43);

		 $sql44="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','exhtemph','1','1','1','1','1','1')";
			
		$sql_44=mysqli_query($con,$sql44);				
		
		 if($sql_44)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Temp Data 3 Created Successfully..!!</font></center></td><tr>';
		 }	 
		 
		 $sql46="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','tcintemp','1','1','1','1','1','1')";
			
		$sql_46=mysqli_query($con,$sql46); 

		 $sql47="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','tcouttemp','1','1','1','1','1','1')";
			
		$sql_47=mysqli_query($con,$sql47);
		
		 $sql48="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','scavairpress','1','1','1','1','1','1')";
			
		$sql_48=mysqli_query($con,$sql48);

		 $sql49="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','scavairtemp','1','1','1','1','1','1')";
			
		$sql_49=mysqli_query($con,$sql49);		
		
		 $sql50="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','bearingtemp','1','1','1','1','1','1')";
			
		$sql_50=mysqli_query($con,$sql50);
		 if($sql_50)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Temp cooling Data  Created Successfully..!!</font></center></td><tr>';
		 }	 
		 
		 $sql51="INSERT INTO `tempengaux` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`observno`) 
		VALUES ('$rnum','windingtemp','1','1','1','1','1','1')";
			
		$sql_51=mysqli_query($con,$sql51);
		 if($sql_51)
		 {
			echo'<tr><td colspan="2"><center><font color="green"> Temp cooling Data  Created Successfully..!!</font></center></td><tr>';
		 }	 		 
		
		$sql52="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','power','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_52=mysqli_query($con,$sql52); 

		 $sql53="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','load','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_53=mysqli_query($con,$sql53);
		
		 $sql54="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','voltage','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_54=mysqli_query($con,$sql54);

		 $sql55="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','pf','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_55=mysqli_query($con,$sql55);		
		
		 $sql56="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','creading','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_56=mysqli_query($con,$sql56);	
		
		$sql57="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','preading','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_57=mysqli_query($con,$sql57); 

		 $sql58="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','dreading','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_58=mysqli_query($con,$sql58);
		
		 $sql59="INSERT INTO `tempengauxp` ( `reportnum`,`items`,`auxeng1`,`auxeng2`,`auxeng3`,`auxeng4`,`auxeng5`,`sgen1`,`sgen2`,`tgen`,`reefer`,`observno`) 
		VALUES ('$rnum','current','1','1','1','1','1','1','1','1','1','1')";
			
		$sql_59=mysqli_query($con,$sql59);
		
		
		$sql60="INSERT INTO `engrunhrsmain` ( `reportnum`,`readings`,`repstatus`)  VALUES ('$rnum','creading','OPEN')";
		$sql_60=mysqli_query($con,$sql60);	
			
		$sql61="INSERT INTO `engrunhrsmain` ( `reportnum`,`readings`,`repstatus`) 	VALUES ('$rnum','preading','OPEN')";		
		$sql_61=mysqli_query($con,$sql61);	
			
		$sql62="INSERT INTO `engrunhrsmain` ( `reportnum`,`readings`,`repstatus`)  VALUES ('$rnum','dreading','OPEN')";		
		$sql_62=mysqli_query($con,$sql62);	
			
		 $sql66="INSERT INTO `engrunhrsmain` ( `reportnum`,`readings`,`repstatus`)  VALUES ('$rnum','repdate','OPEN')";		
		$sql_62=mysqli_query($con,$sql66);		
			
		 $sql63="INSERT INTO `engrunhrspump` ( `reportnum`,`readings`,`repstatus`)  VALUES ('$rnum','creading','OPEN')";
		$sql_63=mysqli_query($con,$sql63);
			
		 $sql64="INSERT INTO `engrunhrspump` ( `reportnum`,`readings`,`repstatus`)  VALUES ('$rnum','preading','OPEN')";		
		$sql_64=mysqli_query($con,$sql64);	
			
		$sql65="INSERT INTO `engrunhrspump` ( `reportnum`,`readings`,`repstatus`)  VALUES ('$rnum','dreading','OPEN')";					
		$sql_65=mysqli_query($con,$sql65);	
			
		$sql67="INSERT INTO `engrunhrspump` ( `reportnum`,`readings`,`repstatus`)  VALUES ('$rnum','repdate','OPEN')";					
		$sql_65=mysqli_query($con,$sql67);	

		$sql68="INSERT INTO `engauxwatersystems` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_68=mysqli_query($con,$sql68);
		
		$sql69="INSERT INTO `engauxacsystems` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_69=mysqli_query($con,$sql69);		
		
		$sql70="INSERT INTO `engauxscrubsystems` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_70=mysqli_query($con,$sql70);
		
		$sql71="INSERT INTO `engauxpurifiersystems` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_71=mysqli_query($con,$sql71);		
		
		$sql72="INSERT INTO `engauxtanksystems` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_72=mysqli_query($con,$sql72);
	
		$sql73="INSERT INTO `engfoilbunk` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_73=mysqli_query($con,$sql73);		
		
		$sql74="INSERT INTO `engfoildebunk` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_74=mysqli_query($con,$sql74);		

		$sql75="INSERT INTO `engloilbunk` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_75=mysqli_query($con,$sql75);		

		$sql76="INSERT INTO `engloildebunk` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_76=mysqli_query($con,$sql76);		

		$sql77="INSERT INTO `engfoilstock` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_77=mysqli_query($con,$sql77);		

		$sql78="INSERT INTO `engloilstock` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_78=mysqli_query($con,$sql78);	
		
		$sql79="INSERT INTO `engtanksludge` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_79=mysqli_query($con,$sql79);	
		
		$sql80="INSERT INTO `engtankbilge` ( `reportnum`,`repstatus`) 	VALUES ('$rnum','OPEN')";
		$sql_80=mysqli_query($con,$sql80);	

		$sql81="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank1')";
		$sql_81=mysqli_query($con,$sql81);	

		$sql82="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank2')";
		$sql_82=mysqli_query($con,$sql82);	
		
		$sql83="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank3')";
		$sql_83=mysqli_query($con,$sql83);	

		$sql84="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank4')";
		$sql_84=mysqli_query($con,$sql84);			
		
		$sql85="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank5')";
		$sql_85=mysqli_query($con,$sql85);	

		$sql86="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank6')";
		$sql_86=mysqli_query($con,$sql86);			
		
		$sql87="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank7')";
		$sql_87=mysqli_query($con,$sql87);	

		$sql88="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank8')";
		$sql_88=mysqli_query($con,$sql88);			
		
		$sql89="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank9')";
		$sql_89=mysqli_query($con,$sql89);	

		$sql90="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank10')";
		$sql_90=mysqli_query($con,$sql90);			
		
		$sql91="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank11')";
		$sql_91=mysqli_query($con,$sql91);	

		$sql92="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank12')";
		$sql_92=mysqli_query($con,$sql92);	
		
		$sql93="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank13')";
		$sql_93=mysqli_query($con,$sql93);	

		$sql94="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank14')";
		$sql_94=mysqli_query($con,$sql94);			
		
		$sql95="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank15')";
		$sql_95=mysqli_query($con,$sql95);	

		$sql96="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank16')";
		$sql_96=mysqli_query($con,$sql96);			
		
		$sql97="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank17')";
		$sql_97=mysqli_query($con,$sql97);	

		$sql98="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank18')";
		$sql_98=mysqli_query($con,$sql98);			
		
		$sql99="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank19')";
		$sql_99=mysqli_query($con,$sql99);	

		$sql100="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank20')";
		$sql_100=mysqli_query($con,$sql100);			
		
		$sql101="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank21')";
		$sql_101=mysqli_query($con,$sql101);	

		$sql102="INSERT INTO `engtankstock` ( `reportnum`,`repstatus`,`tankname`) 	VALUES ('$rnum','OPEN','Tank22')";
		$sql_102=mysqli_query($con,$sql102);			
				
		

		
	}
	}

{
//include('entries/slogheader.php');  
}		







if($_POST['vallrep'])
{
include('entries/vreports.php');  
}

?> 
</div> 
</body>
</html>
