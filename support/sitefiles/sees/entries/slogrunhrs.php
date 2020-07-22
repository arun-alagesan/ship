<br>
 <?php

if($_POST['srrunhrs'])
{

	$rnumber=$_POST['rnumber'];
	$eng1date=$_POST['eng1date'];
	$eng2date=$_POST['eng2date'];	
	$ae1date=$_POST['ae1date'];
	$ae2date=$_POST['ae2date'];	
	$ae3date=$_POST['ae3date'];		
	$ae4date=$_POST['ae4date'];
	$ae5date=$_POST['ae5date'];	
	$sg1date=$_POST['sg1date'];		
	$sg2date=$_POST['sg2date'];	
	$tgdate=$_POST['tgdate'];	

	$eng1prev=$_POST['eng1prev'];
	$eng2prev=$_POST['eng2prev'];	
	$ae1prev=$_POST['ae1prev'];
	$ae2prev=$_POST['ae2prev'];	
	$ae3prev=$_POST['ae3prev'];		
	$ae4prev=$_POST['ae4prev'];
	$ae5prev=$_POST['ae5prev'];	
	$sg1prev=$_POST['sg1prev'];		
	$sg2prev=$_POST['sg2prev'];	
	$tgprev=$_POST['tgprev'];	
	
	$eng1cur=$_POST['eng1cur'];
	$eng2cur=$_POST['eng2cur'];	
	$ae1cur=$_POST['ae1cur'];
	$ae2cur=$_POST['ae2cur'];	
	$ae3cur=$_POST['ae3cur'];		
	$ae4cur=$_POST['ae4cur'];
	$ae5cur=$_POST['ae5cur'];	
	$sg1cur=$_POST['sg1cur'];		
	$sg2cur=$_POST['sg2cur'];	
	$tgcur=$_POST['tgcur'];	
	
	$eng1rhrs=$_POST['eng1rhrs'];
	$eng2rhrs=$_POST['eng2rhrs'];	
	$ae1rhrs=$_POST['ae1rhrs'];
	$ae2rhrs=$_POST['ae2rhrs'];	
	$ae3rhrs=$_POST['ae3rhrs'];		
	$ae4rhrs=$_POST['ae4rhrs'];
	$ae5rhrs=$_POST['ae5rhrs'];	
	$sg1rhrs=$_POST['sg1rhrs'];		
	$sg2rhrs=$_POST['sg2rhrs'];	
	$tgrhrs=$_POST['tgrhrs'];	

	$emgdate=$_POST['emgdate'];
	$stg1date=$_POST['stg1date'];	
	$stg2date=$_POST['stg2date'];
	$stg3date=$_POST['stg3date'];	
	$stg4date=$_POST['stg4date'];		
	$fwgdate=$_POST['fwgdate'];
	$boiler1date=$_POST['boiler1date'];	
	$comp1date=$_POST['comp1date'];		
	$comp2date=$_POST['comp2date'];	
	$comp3date=$_POST['comp3date'];	
	
	$emgprev=$_POST['emgprev'];
	$stg1prev=$_POST['stg1prev'];	
	$stg2prev=$_POST['stg2prev'];
	$stg3prev=$_POST['stg3prev'];	
	$stg4prev=$_POST['stg4prev'];		
	$fwgprev=$_POST['fwgprev'];
	$boiler1prev=$_POST['boiler1prev'];	
	$comp1prev=$_POST['comp1prev'];		
	$comp2prev=$_POST['comp2prev'];	
	$comp3prev=$_POST['comp3prev'];	

	$emgcur=$_POST['emgcur'];
	$stg1cur=$_POST['stg1cur'];	
	$stg2cur=$_POST['stg2cur'];
	$stg3cur=$_POST['stg3cur'];	
	$stg4cur=$_POST['stg4cur'];		
	$fwgcur=$_POST['fwgcur'];
	$boiler1cur=$_POST['boiler1cur'];	
	$comp1cur=$_POST['comp1cur'];		
	$comp2cur=$_POST['comp2cur'];	
	$comp3cur=$_POST['comp3cur'];	
	
	$emgrhrs=$_POST['emgrhrs'];
	$stg1rhrs=$_POST['stg1rhrs'];	
	$stg2rhrs=$_POST['stg2rhrs'];
	$stg3rhrs=$_POST['stg3rhrs'];	
	$stg4rhrs=$_POST['stg4rhrs'];		
	$fwgrhrs=$_POST['fwgrhrs'];
	$boiler1rhrs=$_POST['boiler1rhrs'];	
	$comp1rhrs=$_POST['comp1rhrs'];		
	$comp2rhrs=$_POST['comp2rhrs'];	
	$comp3rhrs=$_POST['comp3rhrs'];	
	
	$fopurifier1date=$_POST['fopurifier1date'];
	$fopurifier2date=$_POST['fopurifier2date'];	
	$fopurifier3date=$_POST['fopurifier3date'];
	$fopurifier4date=$_POST['fopurifier4date'];	
	$lopurifier1date=$_POST['lopurifier1date'];		
	$lopurifier2date=$_POST['lopurifier2date'];
	$lopurifier3date=$_POST['lopurifier3date'];	
	$lopurifier4date=$_POST['lopurifier4date'];		
	$lopurifier5date=$_POST['lopurifier5date'];	
	$lopurifier6date=$_POST['lopurifier6date'];	
	
	$fopurifier1prev=$_POST['fopurifier1prev'];
	$fopurifier2prev=$_POST['fopurifier2prev'];	
	$fopurifier3prev=$_POST['fopurifier3prev'];
	$fopurifier4prev=$_POST['fopurifier4prev'];	
	$lopurifier1prev=$_POST['lopurifier1prev'];		
	$lopurifier2prev=$_POST['lopurifier2prev'];
	$lopurifier3prev=$_POST['lopurifier3prev'];	
	$lopurifier4prev=$_POST['lopurifier4prev'];		
	$lopurifier5prev=$_POST['lopurifier5prev'];	
	$lopurifier6prev=$_POST['lopurifier6prev'];		
	
	$fopurifier1cur=$_POST['fopurifier1cur'];
	$fopurifier2cur=$_POST['fopurifier2cur'];	
	$fopurifier3cur=$_POST['fopurifier3cur'];
	$fopurifier4cur=$_POST['fopurifier4cur'];	
	$lopurifier1cur=$_POST['lopurifier1cur'];		
	$lopurifier2cur=$_POST['lopurifier2cur'];
	$lopurifier3cur=$_POST['lopurifier3cur'];	
	$lopurifier4cur=$_POST['lopurifier4cur'];		
	$lopurifier5cur=$_POST['lopurifier5cur'];	
	$lopurifier6cur=$_POST['lopurifier6cur'];		
	
	$fopurifier1rhrs=$_POST['fopurifier1rhrs'];
	$fopurifier2rhrs=$_POST['fopurifier2rhrs'];	
	$fopurifier3rhrs=$_POST['fopurifier3rhrs'];
	$fopurifier4rhrs=$_POST['fopurifier4rhrs'];	
	$lopurifier1rhrs=$_POST['lopurifier1rhrs'];		
	$lopurifier2rhrs=$_POST['lopurifier2rhrs'];
	$lopurifier3rhrs=$_POST['lopurifier3rhrs'];	
	$lopurifier4rhrs=$_POST['lopurifier4rhrs'];		
	$lopurifier5rhrs=$_POST['lopurifier5rhrs'];	
	$lopurifier6rhrs=$_POST['lopurifier6rhrs'];		
	
	$swpump1date=$_POST['swpump1date'];
	$firepump1date=$_POST['firepump1date'];	
	$efirepump1date=$_POST['efirepump1date'];
	$melopump1date=$_POST['melopump1date'];	
	$htpump1date=$_POST['htpump1date'];		
	$ltpump1date=$_POST['ltpump1date'];
	$fofeedpump1date=$_POST['fofeedpump1date'];	
	$foboospump1date=$_POST['foboospump1date'];		
	$boilerfedpump1date=$_POST['boilerfedpump1date'];	
	$hydrophore1date=$_POST['hydrophore1date'];		
	
	$swpump1prev=$_POST['swpump1prev'];
	$firepump1prev=$_POST['firepump1prev'];	
	$efirepump1prev=$_POST['efirepump1prev'];
	$melopump1prev=$_POST['melopump1prev'];	
	$htpump1prev=$_POST['htpump1prev'];		
	$ltpump1prev=$_POST['ltpump1prev'];
	$fofeedpump1prev=$_POST['fofeedpump1prev'];	
	$foboospump1prev=$_POST['foboospump1prev'];		
	$boilerfedpump1prev=$_POST['boilerfedpump1prev'];	
	$hydrophore1prev=$_POST['hydrophore1prev'];	
	
	$swpump1cur=$_POST['swpump1cur'];
	$firepump1cur=$_POST['firepump1cur'];	
	$efirepump1cur=$_POST['efirepump1cur'];
	$melopump1cur=$_POST['melopump1cur'];	
	$htpump1cur=$_POST['htpump1cur'];		
	$ltpump1cur=$_POST['ltpump1cur'];
	$fofeedpump1cur=$_POST['fofeedpump1cur'];	
	$foboospump1cur=$_POST['foboospump1cur'];		
	$boilerfedpump1cur=$_POST['boilerfedpump1cur'];	
	$hydrophore1cur=$_POST['hydrophore1cur'];	
	
	$swpump1rhrs=$_POST['swpump1rhrs'];
	$firepump1rhrs=$_POST['firepump1rhrs'];	
	$efirepump1rhrs=$_POST['efirepump1rhrs'];
	$melopump1rhrs=$_POST['melopump1rhrs'];	
	$htpump1rhrs=$_POST['htpump1rhrs'];		
	$ltpump1rhrs=$_POST['ltpump1rhrs'];
	$fofeedpump1rhrs=$_POST['fofeedpump1rhrs'];	
	$foboospump1rhrs=$_POST['foboospump1rhrs'];		
	$boilerfedpump1rhrs=$_POST['boilerfedpump1rhrs'];	
	$hydrophore1rhrs=$_POST['hydrophore1rhrs'];		
	
	$swpump2date=$_POST['swpump2date'];
	$firepump2date=$_POST['firepump2date'];	
	$efirepump2date=$_POST['efirepump2date'];
	$melopump2date=$_POST['melopump2date'];	
	$htpump2date=$_POST['htpump2date'];		
	$ltpump2date=$_POST['ltpump2date'];
	$fofeedpump2date=$_POST['fofeedpump2date'];	
	$foboospump2date=$_POST['foboospump2date'];		
	$boilerfedpump2date=$_POST['boilerfedpump2date'];	
	$hydrophore2date=$_POST['hydrophore2date'];		
	
	$swpump2prev=$_POST['swpump2prev'];
	$firepump2prev=$_POST['firepump2prev'];	
	$efirepump2prev=$_POST['efirepump2prev'];
	$melopump2prev=$_POST['melopump2prev'];	
	$htpump2prev=$_POST['htpump2prev'];		
	$ltpump2prev=$_POST['ltpump2prev'];
	$fofeedpump2prev=$_POST['fofeedpump2prev'];	
	$foboospump2prev=$_POST['foboospump2prev'];		
	$boilerfedpump2prev=$_POST['boilerfedpump2prev'];	
	$hydrophore2prev=$_POST['hydrophore2prev'];		
	
	$swpump2cur=$_POST['swpump2cur'];
	$firepump2cur=$_POST['firepump2cur'];	
	$efirepump2cur=$_POST['efirepump2cur'];
	$melopump2cur=$_POST['melopump2cur'];	
	$htpump2cur=$_POST['htpump2cur'];		
	$ltpump2cur=$_POST['ltpump2cur'];
	$fofeedpump2cur=$_POST['fofeedpump2cur'];	
	$foboospump2cur=$_POST['foboospump2cur'];		
	$boilerfedpump2cur=$_POST['boilerfedpump2cur'];	
	$hydrophore2cur=$_POST['hydrophore2cur'];		
	
	$swpump2rhrs=$_POST['swpump2rhrs'];
	$firepump2rhrs=$_POST['firepump2rhrs'];	
	$efirepump2rhrs=$_POST['efirepump2rhrs'];
	$melopump2rhrs=$_POST['melopump2rhrs'];	
	$htpump2rhrs=$_POST['htpump2rhrs'];		
	$ltpump2rhrs=$_POST['ltpump2rhrs'];
	$fofeedpump2rhrs=$_POST['fofeedpump2rhrs'];	
	$foboospump2rhrs=$_POST['foboospump2rhrs'];		
	$boilerfedpump2rhrs=$_POST['boilerfedpump2rhrs'];	
	$hydrophore2rhrs=$_POST['hydrophore2rhrs'];			

	$crane1date=$_POST['crane1date'];
	$crane2date=$_POST['crane2date'];	
	$crane3date=$_POST['crane3date'];
	$crane4date=$_POST['crane4date'];	
	$crane5date=$_POST['crane5date'];		
	$winch1date=$_POST['winch1date'];
	$winch2date=$_POST['winch2date'];	
	$winch3date=$_POST['winch3date'];		
	$winch4date=$_POST['winch4date'];	
	$winch5date=$_POST['winch5date'];		

	$crane1prev=$_POST['crane1prev'];
	$crane2prev=$_POST['crane2prev'];	
	$crane3prev=$_POST['crane3prev'];
	$crane4prev=$_POST['crane4prev'];	
	$crane5prev=$_POST['crane5prev'];		
	$winch1prev=$_POST['winch1prev'];
	$winch2prev=$_POST['winch2prev'];	
	$winch3prev=$_POST['winch3prev'];		
	$winch4prev=$_POST['winch4prev'];	
	$winch5prev=$_POST['winch5prev'];			
	
	$crane1cur=$_POST['crane1cur'];
	$crane2cur=$_POST['crane2cur'];	
	$crane3cur=$_POST['crane3cur'];
	$crane4cur=$_POST['crane4cur'];	
	$crane5cur=$_POST['crane5cur'];		
	$winch1cur=$_POST['winch1cur'];
	$winch2cur=$_POST['winch2cur'];	
	$winch3cur=$_POST['winch3cur'];		
	$winch4cur=$_POST['winch4cur'];	
	$winch5cur=$_POST['winch5cur'];			
	
	$crane1rhrs=$_POST['crane1rhrs'];
	$crane2rhrs=$_POST['crane2rhrs'];	
	$crane3rhrs=$_POST['crane3rhrs'];
	$crane4rhrs=$_POST['crane4rhrs'];	
	$crane5rhrs=$_POST['crane5rhrs'];		
	$winch1rhrs=$_POST['winch1rhrs'];
	$winch2rhrs=$_POST['winch2rhrs'];	
	$winch3rhrs=$_POST['winch3rhrs'];		
	$winch4rhrs=$_POST['winch4rhrs'];	
	$winch5rhrs=$_POST['winch5rhrs'];			
	
	
	
	$sql1r="UPDATE `engrunhrsmain` SET 
	`maineng1`='$eng1date', `maineng2`='$eng2date', `auxeng1`='$ae1date',`auxeng2`='$ae2date', `auxeng3`='$ae3date', `auxeng4`='$ae4date', `auxeng5`='$ae5date', `sg1`='$sg1date', `sg2`='$sg2date', `tg`='$tgdate'  
	 WHERE `reportnum`='$rnumber' AND readings ='repdate'";	
	$sql_1=mysqli_query($con,$sql1r);
	
	$sql2r="UPDATE `engrunhrsmain` SET 
	`maineng1`='$eng1prev', `maineng2`='$eng2prev', `auxeng1`='$ae1prev',`auxeng2`='$ae2prev', `auxeng3`='$ae3prev', `auxeng4`='$ae4prev', `auxeng5`='$ae5prev', `sg1`='$sg1prev', `sg2`='$sg2prev', `tg`='$tgprev'  
	 WHERE `reportnum`='$rnumber' AND readings ='preading'";	
	$sql_2=mysqli_query($con,$sql2r);
	
	$sql3r="UPDATE `engrunhrsmain` SET 
	`maineng1`='$eng1cur', `maineng2`='$eng2cur', `auxeng1`='$ae1cur',`auxeng2`='$ae2cur', `auxeng3`='$ae3cur', `auxeng4`='$ae4cur', `auxeng5`='$ae5cur', `sg1`='$sg1cur', `sg2`='$sg2cur', `tg`='$tgcur'  
	 WHERE `reportnum`='$rnumber' AND readings ='creading'";	
	$sql_3=mysqli_query($con,$sql3r);	
	
	$sql4r="UPDATE `engrunhrsmain` SET 
	`maineng1`='$eng1rhrs', `maineng2`='$eng2rhrs', `auxeng1`='$ae1rhrs',`auxeng2`='$ae2rhrs', `auxeng3`='$ae3rhrs', `auxeng4`='$ae4rhrs', `auxeng5`='$ae5rhrs', `sg1`='$sg1rhrs', `sg2`='$sg2rhrs', `tg`='$tgrhrs'  
	 WHERE `reportnum`='$rnumber' AND readings ='dreading'";	
	$sql_4=mysqli_query($con,$sql4r);	
	
	
	$sql5r="UPDATE `engrunhrsmain` SET 
	`emg`='$emgdate', `stg1`='$stg1date', `stg2`='$stg2date',`stg3`='$stg3date', `stg4`='$stg4date', `fwg`='$fwgdate', `boiler1`='$boiler1date', `comp1`='$comp1date', `comp2`='$comp2date', `comp3`='$comp3date'  
	 WHERE `reportnum`='$rnumber' AND readings ='repdate'";	
	$sql_5=mysqli_query($con,$sql5r);		
	
	$sql6r="UPDATE `engrunhrsmain` SET 
	`emg`='$emgprev', `stg1`='$stg1prev', `stg2`='$stg2prev',`stg3`='$stg3prev', `stg4`='$stg4prev', `fwg`='$fwgprev', `boiler1`='$boiler1prev', `comp1`='$comp1prev', `comp2`='$comp2prev', `comp3`='$comp3prev'  
	 WHERE `reportnum`='$rnumber' AND readings ='preading'";	
	$sql_6=mysqli_query($con,$sql6r);			

	$sql7r="UPDATE `engrunhrsmain` SET 
	`emg`='$emgcur', `stg1`='$stg1cur', `stg2`='$stg2cur',`stg3`='$stg3cur', `stg4`='$stg4cur', `fwg`='$fwgcur', `boiler1`='$boiler1cur', `comp1`='$comp1cur', `comp2`='$comp2cur', `comp3`='$comp3cur'  
	 WHERE `reportnum`='$rnumber' AND readings ='creading'";	
	$sql_7=mysqli_query($con,$sql7r);			
	
	$sql8r="UPDATE `engrunhrsmain` SET 
	`emg`='$emgrhrs', `stg1`='$stg1rhrs', `stg2`='$stg2rhrs',`stg3`='$stg3rhrs', `stg4`='$stg4rhrs', `fwg`='$fwgrhrs', `boiler1`='$boiler1rhrs', `comp1`='$comp1rhrs', `comp2`='$comp2rhrs', `comp3`='$comp3rhrs'  
	 WHERE `reportnum`='$rnumber' AND readings ='dreading'";	
	$sql_8=mysqli_query($con,$sql8r);			

	
	$sql9r="UPDATE `engrunhrsmain` SET 
	`fopurifier1`='$fopurifier1date', `fopurifier2`='$fopurifier2date', `fopurifier3`='$fopurifier3date',`fopurifier4`='$fopurifier4date', `lopurifier1`='$lopurifier1date', `lopurifier2`='$lopurifier2date', `lopurifier3`='$lopurifier3date', `lopurifier4`='$lopurifier4date', `lopurifier5`='$lopurifier5date', `lopurifier6`='$lopurifier6date'  
	 WHERE `reportnum`='$rnumber' AND readings ='repdate'";	
	$sql_9=mysqli_query($con,$sql9r);		
	
	$sql10r="UPDATE `engrunhrsmain` SET 
	`fopurifier1`='$fopurifier1prev', `fopurifier2`='$fopurifier2prev', `fopurifier3`='$fopurifier3prev',`fopurifier4`='$fopurifier4prev', `lopurifier1`='$lopurifier1prev', `lopurifier2`='$lopurifier2prev', `lopurifier3`='$lopurifier3prev', `lopurifier4`='$lopurifier4prev', `lopurifier5`='$lopurifier5prev', `lopurifier6`='$lopurifier6prev'  
	 WHERE `reportnum`='$rnumber' AND readings ='preading'";	
	$sql_10=mysqli_query($con,$sql10r);		
		
	$sql11r="UPDATE `engrunhrsmain` SET 
	`fopurifier1`='$fopurifier1cur', `fopurifier2`='$fopurifier2cur', `fopurifier3`='$fopurifier3cur',`fopurifier4`='$fopurifier4cur', `lopurifier1`='$lopurifier1cur', `lopurifier2`='$lopurifier2cur', `lopurifier3`='$lopurifier3cur', `lopurifier4`='$lopurifier4cur', `lopurifier5`='$lopurifier5cur', `lopurifier6`='$lopurifier6cur'  
	 WHERE `reportnum`='$rnumber' AND readings ='creading'";	
	$sql_11=mysqli_query($con,$sql11r);		
		
	$sql12r="UPDATE `engrunhrsmain` SET 
	`fopurifier1`='$fopurifier1rhrs', `fopurifier2`='$fopurifier2rhrs', `fopurifier3`='$fopurifier3rhrs',`fopurifier4`='$fopurifier4rhrs', `lopurifier1`='$lopurifier1rhrs', `lopurifier2`='$lopurifier2rhrs', `lopurifier3`='$lopurifier3rhrs', `lopurifier4`='$lopurifier4rhrs', `lopurifier5`='$lopurifier5rhrs', `lopurifier6`='$lopurifier6rhrs'  
	 WHERE `reportnum`='$rnumber' AND readings ='dreading'";	
	$sql_12=mysqli_query($con,$sql12r);		
		
		
	$sql13r="UPDATE `engrunhrspump` SET 
	`swpump1`='$swpump1date', `firepump1`='$firepump1date', `emgfirepump1`='$efirepump1date',`melopump1`='$melopump1date', `htpump1`='$htpump1date', `ltpump1`='$ltpump1date', `fofeedpump1`='$fofeedpump1date', `foboospump1`='$foboospump1date', `boilerfedpump1`='$boilerfedpump1date', `hydrophore1`='$hydrophore1date'  
	 WHERE `reportnum`='$rnumber' AND readings ='repdate'";	
	$sql_13=mysqli_query($con,$sql13r);		
			
	$sql14r="UPDATE `engrunhrspump` SET 
	`swpump1`='$swpump1prev', `firepump1`='$firepump1prev', `emgfirepump1`='$efirepump1prev',`melopump1`='$melopump1prev', `htpump1`='$htpump1prev', `ltpump1`='$ltpump1prev', `fofeedpump1`='$fofeedpump1prev', `foboospump1`='$foboospump1prev', `boilerfedpump1`='$boilerfedpump1prev', `hydrophore1`='$hydrophore1prev'  
	 WHERE `reportnum`='$rnumber' AND readings ='preading'";	
	$sql_14=mysqli_query($con,$sql14r);		
				
	$sql15r="UPDATE `engrunhrspump` SET 
	`swpump1`='$swpump1cur', `firepump1`='$firepump1cur', `emgfirepump1`='$efirepump1cur',`melopump1`='$melopump1cur', `htpump1`='$htpump1cur', `ltpump1`='$ltpump1cur', `fofeedpump1`='$fofeedpump1cur', `foboospump1`='$foboospump1cur', `boilerfedpump1`='$boilerfedpump1cur', `hydrophore1`='$hydrophore1cur'  
	 WHERE `reportnum`='$rnumber' AND readings ='creading'";	
	$sql_15=mysqli_query($con,$sql15r);		
				
	$sql16r="UPDATE `engrunhrspump` SET 
	`swpump1`='$swpump1rhrs', `firepump1`='$firepump1rhrs', `emgfirepump1`='$efirepump1rhrs',`melopump1`='$melopump1rhrs', `htpump1`='$htpump1rhrs', `ltpump1`='$ltpump1rhrs', `fofeedpump1`='$fofeedpump1rhrs', `foboospump1`='$foboospump1rhrs', `boilerfedpump1`='$boilerfedpump1rhrs', `hydrophore1`='$hydrophore1rhrs'  
	 WHERE `reportnum`='$rnumber' AND readings ='dreading'";	
	$sql_16=mysqli_query($con,$sql16r);		
				
	
	$sql17r="UPDATE `engrunhrspump` SET 
	`swpump2`='$swpump2date', `firepump2`='$firepump2date', `emgfirepump2`='$efirepump2date',`melopump2`='$melopump2date', `htpump2`='$htpump2date', `ltpump2`='$ltpump2date', `fofeedpump2`='$fofeedpump2date', `foboospump2`='$foboospump2date', `boilerfedpump2`='$boilerfedpump2date', `hydrophore2`='$hydrophore2date'  
	 WHERE `reportnum`='$rnumber' AND readings ='repdate'";	
	$sql_17=mysqli_query($con,$sql17r);			
	
	$sql18r="UPDATE `engrunhrspump` SET 
	`swpump2`='$swpump2prev', `firepump2`='$firepump2prev', `emgfirepump2`='$efirepump2prev',`melopump2`='$melopump2prev', `htpump2`='$htpump2prev', `ltpump2`='$ltpump2prev', `fofeedpump2`='$fofeedpump2prev', `foboospump2`='$foboospump2prev', `boilerfedpump2`='$boilerfedpump2prev', `hydrophore2`='$hydrophore2prev'  
	 WHERE `reportnum`='$rnumber' AND readings ='preading'";	
	$sql_18=mysqli_query($con,$sql18r);			
	
	$sql19r="UPDATE `engrunhrspump` SET 
	`swpump2`='$swpump2cur', `firepump2`='$firepump2cur', `emgfirepump2`='$efirepump2cur',`melopump2`='$melopump2cur', `htpump2`='$htpump2cur', `ltpump2`='$ltpump2cur', `fofeedpump2`='$fofeedpump2cur', `foboospump2`='$foboospump2cur', `boilerfedpump2`='$boilerfedpump2cur', `hydrophore2`='$hydrophore2cur'  
	 WHERE `reportnum`='$rnumber' AND readings ='creading'";	
	$sql_19=mysqli_query($con,$sql19r);			
	
	$sql20r="UPDATE `engrunhrspump` SET 
	`swpump2`='$swpump2rhrs', `firepump2`='$firepump2rhrs', `emgfirepump2`='$efirepump2rhrs',`melopump2`='$melopump2rhrs', `htpump2`='$htpump2rhrs', `ltpump2`='$ltpump2rhrs', `fofeedpump2`='$fofeedpump2rhrs', `foboospump2`='$foboospump2rhrs', `boilerfedpump2`='$boilerfedpump2rhrs', `hydrophore2`='$hydrophore2rhrs'  
	 WHERE `reportnum`='$rnumber' AND readings ='dreading'";	
	$sql_20=mysqli_query($con,$sql20r);		
				
				
	$sql21r="UPDATE `engrunhrsmain` SET 
	`crane1`='$crane1date', `crane2`='$crane2date', `crane3`='$crane3date',`crane4`='$crane4date', `crane5`='$crane5date', `winch1`='$winch1date', `winch2`='$winch2date', `winch3`='$winch3date', `winch4`='$winch4date', `winch5`='$winch5date'  
	 WHERE `reportnum`='$rnumber' AND readings ='repdate'";	
	$sql_21=mysqli_query($con,$sql21r);		
	
	$sql22r="UPDATE `engrunhrsmain` SET 
	`crane1`='$crane1prev', `crane2`='$crane2prev', `crane3`='$crane3prev',`crane4`='$crane4prev', `crane5`='$crane5prev', `winch1`='$winch1prev', `winch2`='$winch2prev', `winch3`='$winch3prev', `winch4`='$winch4prev', `winch5`='$winch5prev'  
	 WHERE `reportnum`='$rnumber' AND readings ='preading'";	
	$sql_22=mysqli_query($con,$sql22r);	
	
	$sql23r="UPDATE `engrunhrsmain` SET 
	`crane1`='$crane1cur', `crane2`='$crane2cur', `crane3`='$crane3cur',`crane4`='$crane4cur', `crane5`='$crane5cur', `winch1`='$winch1cur', `winch2`='$winch2cur', `winch3`='$winch3cur', `winch4`='$winch4cur', `winch5`='$winch5cur'  
	 WHERE `reportnum`='$rnumber' AND readings ='creading'";	
	$sql_23=mysqli_query($con,$sql23r);		
	
	$sql24r="UPDATE `engrunhrsmain` SET 
	`crane1`='$crane1rhrs', `crane2`='$crane2rhrs', `crane3`='$crane3rhrs',`crane4`='$crane4rhrs', `crane5`='$crane5rhrs', `winch1`='$winch1rhrs', `winch2`='$winch2rhrs', `winch3`='$winch3rhrs', `winch4`='$winch4rhrs', `winch5`='$winch5rhrs'  
	 WHERE `reportnum`='$rnumber' AND readings ='dreading'";	
	$sql_24=mysqli_query($con,$sql24r);		
	
	
}

?>
<?php
 
 		$sql=mysqli_query($con,"SELECT * FROM reportnumb order by reportnum desc limit 1");
		while($row=mysqli_fetch_array($sql))
		{
		$reportnum=$row['reportnum'];

print_r($_POST);

?>	
<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
    
    	<table class=" table-hover" >	
			<form name="slogengrunhrs" action="index.php" method="post">
		<input type="hidden" name="srepnum" value="1">
			<input type="hidden" name="slogengine" value="1">
				<input type="hidden" name="runhrs" value="1">
				<input type="hidden" name="rnumber" value="<?php echo $row['reportnum'];?>">
	
		<tr><td  colspan="4" style="font-size:16px;"><b><small>Main Machinery</small></b></td></tr>
		<tr><td><br></td></tr>
		<tr>
		    	<td ></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Engine 1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Engine 2</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;AE #1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;AE #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;AE #3</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;AE #4</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;AE #5</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;SG 1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;SG 2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;TG</small></b></td>
			
		</tr>
<?php

	$sql21=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum AND readings='repdate'");

	while($row=mysqli_fetch_array($sql21))
	{

		//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Last Update</small></td>
			<td><input type="text" name="eng1date"  id="eng1date" value="<?php echo $row['maineng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2date"  id="eng2date" value="<?php echo $row['maineng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae1date"  id="ae1date" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae2date"  id="ae2d" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae3date"  id="ae3date" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae4date"  id="ae4date" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae5date"  id="ae5date" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg1date"  id="sg1date" value="<?php echo $row['sg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg2date"  id="sg2date" value="<?php echo $row['sg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tgdate"  id="tgdate" value="<?php echo $row['tg'];?>" class="input-field" maxlength="5" size="7"></td>
		<td style="padding-right:20px;">	<i class="fa fa- icon"><small>Date</small></i></td>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='preading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>		
			
		</tr>
		<tr>
			<td ><small >Last RH Counter</small></td>
			<td><input type="text" name="eng1prev"  id="eng1prev" value="<?php echo $row['maineng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2prev"  id="eng2prev" value="<?php echo $row['maineng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae1prev"  id="ae1prev" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae2prev"  id="ae2prev" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae3prev"  id="ae3prev" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae4prev"  id="ae4prev" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae5prev"  id="ae5prev" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg1prev"  id="sg1prev" value="<?php echo $row['sg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg2prev"  id="sg2prev" value="<?php echo $row['sg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tgprev"  id="tgprev" value="<?php echo $row['tg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='creading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>	
		<tr>
			<td ><small>Current RH Counter</small></td>
			<td><input type="text" name="eng1cur"  id="eng1cur" value="<?php echo $row['maineng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2cur"  id="eng2cur" value="<?php echo $row['maineng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae1cur"  id="ae1cur" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae2cur"  id="ae2cur" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae3cur"  id="ae3cur" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae4cur"  id="ae4cur" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae5cur"  id="ae5cur" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg1cur"  id="sg1cur" value="<?php echo $row['sg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg2cur"  id="sg2cur" value="<?php echo $row['sg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tgcur"  id="tgcur" value="<?php echo $row['tg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='dreading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Running Hours</small></td>
			<td><input type="text" name="eng1rhrs"  id="eng1rhrs" value="<?php echo $row['maineng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2rhrs"  id="eng2rhrs" value="<?php echo $row['maineng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae1rhrs"  id="ae1rhrs" value="<?php echo $row['auxeng1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae2rhrs"  id="ae2rhrs" value="<?php echo $row['auxeng2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae3rhrs"  id="ae3rhrs" value="<?php echo $row['auxeng3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae4rhrs"  id="ae4rhrs" value="<?php echo $row['auxeng4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ae5rhrs"  id="ae5rhrs" value="<?php echo $row['auxeng5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg1rhrs"  id="sg1rhrs" value="<?php echo $row['sg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sg2rhrs"  id="sg2rhrs" value="<?php echo $row['sg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="tgrhrs"  id="tgrhrs" value="<?php echo $row['tg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
				
    
    </table>
    
  </div>
</div>

<br><br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
    
    	<table class=" table-hover" >	
	
		<tr><td  colspan="4" style="font-size:16px;"><b><small>Auxiliary Machinery 1 </small></b></td></tr>
		<tr><td><br></td></tr>
		<tr>
		    	<td ></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;EMG</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;STG #1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;STG #2</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;STG #3</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;STG #4</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;FWG</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Bolier </small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Compressor 1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp; Compressor 2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Compressor 3</small></b></td>
			
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='repdate'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Last Update</small></td>
			<td><input type="text" name="emgdate"  id="emgdate" value="<?php echo $row['emg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg1date"  id="stg1date" value="<?php echo $row['stg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg2date"  id="stg2date" value="<?php echo $row['stg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg3date"  id="stg3date" value="<?php echo $row['stg3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg4date"  id="stg4date" value="<?php echo $row['stg4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fwgdate"  id="fwgdate" value="<?php echo $row['fwg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boiler1date"  id="boiler1date" value="<?php echo $row['boiler1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp1date"  id="comp1date" value="<?php echo $row['comp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp2date"  id="comp2date" value="<?php echo $row['comp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp3date"  id="comp3date" value="<?php echo $row['comp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td style="padding-right:20px;">	<i class="fa fa- icon"><small>Hrs</small></i></td>

		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='preading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>	
		
		<tr>
			<td ><small >Last RH Counter</small></td>
			<td><input type="text" name="emgprev"  id="emgprev" value="<?php echo $row['emg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg1prev"  id="stg1prev" value="<?php echo $row['stg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg2prev"  id="stg2prev" value="<?php echo $row['stg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg3prev"  id="stg3prev" value="<?php echo $row['stg3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg4prev"  id="stg4prev" value="<?php echo $row['stg4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fwgprev"  id="fwgprev" value="<?php echo $row['fwg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boiler1prev"  id="boiler1prev" value="<?php echo $row['boiler1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp1prev"  id="comp1prev" value="<?php echo $row['comp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp2prev"  id="comp2prev" value="<?php echo $row['comp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp3prev"  id="comp3prev" value="<?php echo $row['comp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='creading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Current RH Counter</small></td>
			<td><input type="text" name="emgcur"  id="emgcur" value="<?php echo $row['emg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg1cur"  id="stg1cur" value="<?php echo $row['stg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg2cur"  id="stg2cur" value="<?php echo $row['stg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg3cur"  id="stg3cur" value="<?php echo $row['stg3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg4cur"  id="stg4cur" value="<?php echo $row['stg4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fwgcur"  id="fwgcur" value="<?php echo $row['fwg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boiler1cur"  id="boiler1cur" value="<?php echo $row['boiler1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp1cur"  id="comp1cur" value="<?php echo $row['comp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp2cur"  id="comp2cur" value="<?php echo $row['comp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp3cur"  id="comp3cur" value="<?php echo $row['comp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='dreading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Running Hours</small></td>
			<td><input type="text" name="emgrhrs"  id="emgrhrs" value="<?php echo $row['emg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg1rhrs"  id="stg1rhrs" value="<?php echo $row['stg1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg2rhrs"  id="stg2rhrs" value="<?php echo $row['stg2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg3rhrs"  id="stg3rhrs" value="<?php echo $row['stg3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stg4rhrs"  id="stg4rhrs" value="<?php echo $row['stg4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fwgrhrs"  id="fwgrhrs" value="<?php echo $row['fwg'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boiler1rhrs"  id="boiler1rhrs" value="<?php echo $row['boiler1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp1rhrs"  id="comp1rhrs" value="<?php echo $row['comp1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp2rhrs"  id="comp2rhrs" value="<?php echo $row['comp2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="comp3rhrs"  id="comp3rhrs" value="<?php echo $row['comp3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
				
    
    </table>
    
  </div>
</div>


<br><br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
    
    	<table class=" table-hover" >	
	
		<tr><td  colspan="4" style="font-size:16px;"><b><small>Auxiliary Machinery 2</small></b></td></tr>
		<tr><td><br></td></tr>
		<tr>
		    	<td ></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Fo Puri #1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Fo Puri #2</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Fo Puri #3</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Fo Puri #4</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Lo Puri #1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Lo Puri #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Lo Puri #3</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Lo Puri #4</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;</small></b></td>
			
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='repdate'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Last Update</small></td>
			<td><input type="text" name="fopurifier1date"  id="fopurifier1date" value="<?php echo $row['fopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier2date"  id="fopurifier2date" value="<?php echo $row['fopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier3date"  id="fopurifier3date" value="<?php echo $row['fopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier4date"  id="fopurifier4date" value="<?php echo $row['fopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier1date"  id="lopurifier1date" value="<?php echo $row['lopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier2date"  id="lopurifier2date" value="<?php echo $row['lopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier3date"  id="lopurifier3date" value="<?php echo $row['lopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier4date"  id="lopurifier4date" value="<?php echo $row['lopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier5date"  id="lopurifier5date" value="<?php echo $row['lopurifier5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier6date"  id="lopurifier6date" value="<?php echo $row['lopurifier6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td style="padding-right:20px;">	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='preading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small >Last RH Counter</small></td>
			<td><input type="text" name="fopurifier1prev"  id="fopurifier1prev" value="<?php echo $row['fopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier2prev"  id="fopurifier2prev" value="<?php echo $row['fopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier3prev"  id="fopurifier3prev" value="<?php echo $row['fopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier4prev"  id="fopurifier4prev" value="<?php echo $row['fopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier1prev"  id="lopurifier1prev" value="<?php echo $row['lopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier2prev"  id="lopurifier2prev" value="<?php echo $row['lopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier3prev"  id="lopurifier3prev" value="<?php echo $row['lopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier4prev"  id="lopurifier4prev" value="<?php echo $row['lopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier5prev"  id="lopurifier5prev" value="<?php echo $row['lopurifier5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier6prev"  id="lopurifier6prev" value="<?php echo $row['lopurifier6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='creading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Current RH Counter</small></td>
			<td><input type="text" name="fopurifier1cur"  id="fopurifier1cur" value="<?php echo $row['fopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier2cur"  id="fopurifier2cur" value="<?php echo $row['fopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier3cur"  id="fopurifier3cur" value="<?php echo $row['fopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier4cur"  id="fopurifier4cur" value="<?php echo $row['fopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier1cur"  id="lopurifier1cur" value="<?php echo $row['lopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier2cur"  id="lopurifier2cur" value="<?php echo $row['lopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier3cur"  id="lopurifier3cur" value="<?php echo $row['lopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier4cur"  id="lopurifier4cur" value="<?php echo $row['lopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier5cur"  id="lopurifier5cur" value="<?php echo $row['lopurifier5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier6cur"  id="lopurifier6cur" value="<?php echo $row['lopurifier6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='dreading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Running Hours</small></td>
			<td><input type="text" name="fopurifier1rhrs"  id="fopurifier1rhrs" value="<?php echo $row['fopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier2rhrs"  id="fopurifier2rhrs" value="<?php echo $row['fopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier3rhrs"  id="fopurifier3rhrs" value="<?php echo $row['fopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fopurifier4rhrs"  id="fopurifier4rhrs" value="<?php echo $row['fopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier1rhrs"  id="lopurifier1rhrs" value="<?php echo $row['lopurifier1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier2rhrs"  id="lopurifier2rhrs" value="<?php echo $row['lopurifier2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier3rhrs"  id="lopurifier3rhrs" value="<?php echo $row['lopurifier3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier4rhrs"  id="lopurifier4rhrs" value="<?php echo $row['lopurifier4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier5rhrs"  id="lopurifier5rhrs" value="<?php echo $row['lopurifier5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lopurifier6rhrs"  id="lopurifier6rhrs" value="<?php echo $row['lopurifier6'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
				
    
    </table>
    
  </div>
</div>


<br><br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
    
    	<table class=" table-hover" >	
	
		<tr><td  colspan="4" style="font-size:16px;"><b><small>Pump 1</small></b></td></tr>
		<tr><td><br></td></tr>
		<tr>
		    	<td ></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Sea Water #1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Fire #1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Emg Fire #1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;ME LO #1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;HT #1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;LT #1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;FO Feed #1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;FO Booster #1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Boiler Feed #1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Hydrophore #1</small></b></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='repdate'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Last Update</small></td>
			<td><input type="text" name="swpump1date"  id="swpump1date" value="<?php echo $row['swpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump1date"  id="firepump1date" value="<?php echo $row['firepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump1date"  id="efirepump1date" value="<?php echo $row['emgfirepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump1date"  id="melopump1date" value="<?php echo $row['melopump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump1date"  id="htpump1date" value="<?php echo $row['htpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump1date"  id="ltpump1date" value="<?php echo $row['ltpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump1date"  id="fofeedpump1date" value="<?php echo $row['fofeedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump1date"  id="foboospump1date" value="<?php echo $row['foboospump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump1date"  id="boilerfedpump1date" value="<?php echo $row['boilerfedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore1date"  id="hydrophore1date" value="<?php echo $row['hydrophore1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td style="padding-right:20px;">	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='preading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small >Last RH Counter</small></td>
			<td><input type="text" name="swpump1prev"  id="swpump1prev" value="<?php echo $row['swpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump1prev"  id="firepump1prev" value="<?php echo $row['firepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump1prev"  id="efirepump1prev" value="<?php echo $row['emgfirepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump1prev"  id="melopump1prev" value="<?php echo $row['melopump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump1prev"  id="htpump1prev" value="<?php echo $row['htpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump1prev"  id="ltpump1prev" value="<?php echo $row['ltpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump1prev"  id="fofeedpump1prev" value="<?php echo $row['fofeedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump1prev"  id="foboospump1prev" value="<?php echo $row['foboospump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump1prev"  id="boilerfedpump1prev" value="<?php echo $row['boilerfedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore1prev"  id="hydrophore1prev" value="<?php echo $row['hydrophore1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='creading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Current RH Counter</small></td>
			<td><input type="text" name="swpump1cur"  id="swpump1cur" value="<?php echo $row['swpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump1cur"  id="firepump1cur" value="<?php echo $row['firepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump1cur"  id="efirepump1cur" value="<?php echo $row['emgfirepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump1cur"  id="melopump1cur" value="<?php echo $row['melopump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump1cur"  id="htpump1cur" value="<?php echo $row['htpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump1cur"  id="ltpump1cur" value="<?php echo $row['ltpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump1cur"  id="fofeedpump1cur" value="<?php echo $row['fofeedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump1cur"  id="foboospump1cur" value="<?php echo $row['foboospump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump1cur"  id="boilerfedpump1cur" value="<?php echo $row['boilerfedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore1cur"  id="hydrophore1cur" value="<?php echo $row['hydrophore1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='dreading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Running Hours</small></td>
			<td><input type="text" name="swpump1rhrs"  id="swpump1rhrs" value="<?php echo $row['swpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump1rhrs"  id="firepump1rhrs" value="<?php echo $row['firepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump1rhrs"  id="efirepump1rhrs" value="<?php echo $row['emgfirepump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump1rhrs"  id="melopump1rhrs" value="<?php echo $row['melopump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump1rhrs"  id="htpump1rhrs" value="<?php echo $row['htpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump1rhrs"  id="ltpump1rhrs" value="<?php echo $row['ltpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump1rhrs"  id="fofeedpump1rhrs" value="<?php echo $row['fofeedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump1rhrs"  id="foboospump1rhrs" value="<?php echo $row['foboospump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump1rhrs"  id="boilerfedpump1rhrs" value="<?php echo $row['boilerfedpump1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore1rhrs"  id="hydrophore1rhrs" value="<?php echo $row['hydrophore1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>

    </table>
    
  </div>
</div>

<br><br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
    
    	<table class=" table-hover" >	
	
		<tr><td  colspan="4" style="font-size:16px;"><b><small>Pump 2</small></b></td></tr>
		<tr><td><br></td></tr>
		<tr>
		    	<td ></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Sea Water #2</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Fire #2</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Emcy.Fire #2</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;ME LO #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;HT #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;LT #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;FO Feed #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;FO Booster #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Boiler Feed #2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Hydrophore #2</small></b></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='repdate'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>	
		<tr>
			<td ><small>Last Update</small></td>
			<td><input type="text" name="swpump2date"  id="swpump2date" value="<?php echo $row['swpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump2date"  id="firepump2date" value="<?php echo $row['firepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump2date"  id="efirepump2date" value="<?php echo $row['emgfirepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump2date"  id="melopump2date" value="<?php echo $row['melopump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump2date"  id="htpump2date" value="<?php echo $row['htpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump2date"  id="ltpump2date" value="<?php echo $row['ltpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump2date"  id="fofeedpump2date" value="<?php echo $row['fofeedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump2date"  id="foboospump2date" value="<?php echo $row['foboospump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump2date"  id="boilerfedpump2date" value="<?php echo $row['boilerfedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore2date"  id="hydrophore2date" value="<?php echo $row['hydrophore2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td style="padding-right:20px;">	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='preading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small >Last RH Counter</small></td>
			<td><input type="text" name="swpump2prev"  id="swpump2prev" value="<?php echo $row['swpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump2prev"  id="firepump2prev" value="<?php echo $row['firepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump2prev"  id="efirepump2prev" value="<?php echo $row['emgfirepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump2prev"  id="melopump2prev" value="<?php echo $row['melopump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump2prev"  id="htpump2prev" value="<?php echo $row['htpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump2prev"  id="ltpump2prev" value="<?php echo $row['ltpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump2prev"  id="fofeedpump2prev" value="<?php echo $row['fofeedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump2prev"  id="foboospump2prev" value="<?php echo $row['foboospump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump2prev"  id="boilerfedpump2prev" value="<?php echo $row['boilerfedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore2prev"  id="hydrophore2prev" value="<?php echo $row['hydrophore2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='creading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Current RH Counter</small></td>
			<td><input type="text" name="swpump2cur"  id="swpump2cur" value="<?php echo $row['swpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump2cur"  id="firepump2cur" value="<?php echo $row['firepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump2cur"  id="efirepump2cur" value="<?php echo $row['emgfirepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump2cur"  id="melopump2cur" value="<?php echo $row['melopump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump2cur"  id="htpump2cur" value="<?php echo $row['htpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump2cur"  id="ltpump2cur" value="<?php echo $row['ltpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump2cur"  id="fofeedpump2cur" value="<?php echo $row['fofeedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump2cur"  id="foboospump2cur" value="<?php echo $row['foboospump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump2cur"  id="boilerfedpump2cur" value="<?php echo $row['boilerfedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore2cur"  id="hydrophore2cur" value="<?php echo $row['hydrophore2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrspump where reportnum =$reportnum and readings ='dreading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Running Hours</small></td>
			<td><input type="text" name="swpump2rhrs"  id="swpump2rhrs" value="<?php echo $row['swpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="firepump2rhrs"  id="firepump2rhrs" value="<?php echo $row['firepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="efirepump2rhrs"  id="efirepump2rhrs" value="<?php echo $row['emgfirepump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="melopump2rhrs"  id="melopump2rhrs" value="<?php echo $row['melopump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="htpump2rhrs"  id="htpump2rhrs" value="<?php echo $row['htpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="ltpump2rhrs"  id="ltpump2rhrs" value="<?php echo $row['ltpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="fofeedpump2rhrs"  id="fofeedpump2rhrs" value="<?php echo $row['fofeedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="foboospump2rhrs"  id="foboospump2rhrs" value="<?php echo $row['foboospump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilerfedpump2rhrs"  id="boilerfedpump2rhrs" value="<?php echo $row['boilerfedpump2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydrophore2rhrs"  id="hydrophore2rhrs" value="<?php echo $row['hydrophore2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
    </table>
    
  </div>
</div>

<br><br>

<div class="row" id="copycontent">
  <div class="col-md-2">1 of 4</div>
  <div class="col-md-10">
    
    	<table class=" table-hover" >	
	
		<tr><td  colspan="4" style="font-size:16px;"><b><small>Deck Machinery</small></b></td></tr>
		<tr><td><br></td></tr>
		<tr>
		    	<td ></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Crane #1</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Crane #2</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Crane #3</small></b></td>
			<td ><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Crane #4</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Crane #5</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Mooring winch 1</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Mooring winch 2</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Mooring winch 3</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Mooring winch 4</small></b></td>
			<td><b><small>&nbsp;&nbsp;&nbsp;&nbsp;Mooring winch 5</small></b></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='repdate'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Last Update</small></td>
			<td><input type="text" name="crane1date"  id="crane1date" value="<?php echo $row['crane1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane2date"  id="crane2date" value="<?php echo $row['crane2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane3date"  id="crane3date" value="<?php echo $row['crane3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane4date"  id="crane4date" value="<?php echo $row['crane4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane5date"  id="crane5date" value="<?php echo $row['crane5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch1date"  id="winch1date" value="<?php echo $row['winch1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch2date"  id="winch2date" value="<?php echo $row['winch2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch3date"  id="winch3date" value="<?php echo $row['winch3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch4date"  id="winch4date" value="<?php echo $row['winch4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch5date"  id="winch5date" value="<?php echo $row['winch5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td style="padding-right:20px;">	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='preading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small >Last RH Counter</small></td>
			<td><input type="text" name="crane1prev"  id="crane1prev" value="<?php echo $row['crane1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane2prev"  id="crane2prev" value="<?php echo $row['crane2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane3prev"  id="crane3prev" value="<?php echo $row['crane3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane4prev"  id="crane4prev" value="<?php echo $row['crane4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane5prev"  id="crane5prev" value="<?php echo $row['crane5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch1prev"  id="winch1prev" value="<?php echo $row['winch1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch2prev"  id="winch2prev" value="<?php echo $row['winch2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch3prev"  id="winch3prev" value="<?php echo $row['winch3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch4prev"  id="winch4prev" value="<?php echo $row['winch4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch5prev"  id="winch5prev" value="<?php echo $row['winch5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='creading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Current RH Counter</small></td>
			<td><input type="text" name="crane1cur"  id="crane1cur" value="<?php echo $row['crane1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane2cur"  id="crane2cur" value="<?php echo $row['crane2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane3cur"  id="crane3cur" value="<?php echo $row['crane3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane4cur"  id="crane4cur" value="<?php echo $row['crane4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane5cur"  id="crane5cur" value="<?php echo $row['crane5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch1cur"  id="winch1cur" value="<?php echo $row['winch1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch2cur"  id="winch2cur" value="<?php echo $row['winch2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch3cur"  id="winch3cur" value="<?php echo $row['winch3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch4cur"  id="winch4cur" value="<?php echo $row['winch4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch5cur"  id="winch5cur" value="<?php echo $row['winch5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
	$sql22=mysqli_query($con,"SELECT * FROM engrunhrsmain where reportnum =$reportnum and readings ='dreading'");
	while($row=mysqli_fetch_array($sql22))
	{
			//$reportnum=$row['reportnum'];
?>
		<tr>
			<td ><small>Running Hours</small></td>
			<td><input type="text" name="crane1rhrs"  id="crane1rhrs" value="<?php echo $row['crane1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane2rhrs"  id="crane2rhrs" value="<?php echo $row['crane2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane3rhrs"  id="crane3rhrs" value="<?php echo $row['crane3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane4rhrs"  id="crane4rhrs" value="<?php echo $row['crane4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="crane5rhrs"  id="crane5rhrs" value="<?php echo $row['crane5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch1rhrs"  id="winch1rhrs" value="<?php echo $row['winch1'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch2rhrs"  id="winch2rhrs" value="<?php echo $row['winch2'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch3rhrs"  id="winch3rhrs" value="<?php echo $row['winch3'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch4rhrs"  id="winch4rhrs" value="<?php echo $row['winch4'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="winch5rhrs"  id="winch5rhrs" value="<?php echo $row['winch5'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon"><small>Hrs</small></i></td>
		</tr>
<?php
}
}
?>				
    
    </table>
    
  </div>
</div>



      <tr><td>	<br></td></tr>
    <div style="padding-left:230px;width:98%;padding-top:0%;">
 
		<textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
   
	</div>
    
		<div style="padding-left:250px;">

		    <div class="col-md-1">
		        <button type="submit" name="srrunhrs" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		       
		    </div>
		</div>
      </form>

 <br><br>
    




</td><td>