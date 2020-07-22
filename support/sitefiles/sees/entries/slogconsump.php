


          <?php
  
$lcvhshfo=$_POST['lcvhshfo'];
$lcvvlsfo=$_POST['lcvvlsfo'];
$lcvulsfo=$_POST['lcvulsfo'];
$lcvhsmgo=$_POST['lcvhsmgo'];
$lcvhsmdo=$_POST['lcvhsmdo'];               
$lcvlsmgo=$_POST['lcvlsmgo'];
$lcvlsmdo=$_POST['lcvlsmdo'];

$sulphshfo=$_POST['sulphshfo'];
$sulpvlsfo=$_POST['sulpvlsfo'];
$sulpulsfo=$_POST['sulpulsfo'];
$sulphsmgo=$_POST['sulphsmgo'];
$sulphsmdo=$_POST['sulphsmdo'];               
$sulplsmgo=$_POST['sulplsmgo'];
$sulplsmdo=$_POST['sulplsmdo'];

$denshshfo=$_POST['denshshfo'];
$densvlsfo=$_POST['densvlsfo'];
$densulsfo=$_POST['densulsfo'];
$denshsmgo=$_POST['denshsmgo'];
$denshsmdo=$_POST['denshsmdo'];               
$denslsmgo=$_POST['denslsmgo'];
$denslsmdo=$_POST['denslsmdo'];

$eng1hshfo=$_POST['eng1hshfo'];
$eng1vlsfo=$_POST['eng1vlsfo'];
$eng1ulsfo=$_POST['eng1ulsfo'];
$eng1hsmgo=$_POST['eng1hsmgo'];
$eng1hsmdo=$_POST['eng1hsmdo'];               
$eng1lsmgo=$_POST['eng1lsmgo'];
$eng1lsmdo=$_POST['eng1lsmdo'];

$eng2hshfo=$_POST['eng2hshfo'];
$eng2vlsfo=$_POST['eng2vlsfo'];
$eng2ulsfo=$_POST['eng2ulsfo'];
$eng2hsmgo=$_POST['eng2hsmgo'];
$eng2hsmdo=$_POST['eng2hsmdo'];               
$eng2lsmgo=$_POST['eng2lsmgo'];
$eng2lsmdo=$_POST['eng2lsmdo'];


$aehshfo=$_POST['aehshfo'];
$aevlsfo=$_POST['aevlsfo'];
$aeulsfo=$_POST['aeulsfo'];
$aehsmgo=$_POST['aehsmgo'];
$aehsmdo=$_POST['aehsmdo'];               
$aelsmgo=$_POST['aelsmgo'];
$aelsmdo=$_POST['aelsmdo'];

$boilhshfo=$_POST['boilhshfo'];
$boilvlsfo=$_POST['boilvlsfo'];
$boilulsfo=$_POST['boilulsfo'];
$boilhsmgo=$_POST['boilhsmgo'];
$boilhsmdo=$_POST['boilhsmdo'];               
$boillsmgo=$_POST['boillsmgo'];
$boillsmdo=$_POST['boillsmdo'];

$otherhshfo=$_POST['otherhshfo'];
$othervlsfo=$_POST['othervlsfo'];
$otherulsfo=$_POST['otherulsfo'];
$otherhsmgo=$_POST['otherhsmgo'];
$otherhsmdo=$_POST['otherhsmdo'];               
$otherlsmgo=$_POST['otherlsmgo'];
$otherlsmdo=$_POST['otherlsmdo'];

$totalhshfo=$_POST['totalhshfo'];
$totalvlsfo=$_POST['totalvlsfo'];
$totalulsfo=$_POST['totalulsfo'];
$totalhsmgo=$_POST['totalhsmgo'];
$totalhsmdo=$_POST['totalhsmdo'];               
$totallsmgo=$_POST['totallsmgo'];
$totallsmdo=$_POST['totallsmdo'];


$hshfosludge=$_POST['hshfosludge'];
$hshfobilge=$_POST['hshfobilge'];

$vlsfosludge=$_POST['vlsfosludge'];
$vlsfobilge=$_POST['vlsfobilge'];

$ulsfosludge=$_POST['ulsfosludge'];
$ulsfobilge=$_POST['ulsfobilge'];

$hsmgosludge=$_POST['hsmgosludge'];
$hsmgobilge=$_POST['hsmgobilge'];


$hsmdosludge=$_POST['hsmdosludge'];
$hsmdobilge=$_POST['hsmdobilge'];

$ulsfosludge=$_POST['ulsfosludge'];
$ulsfobilge=$_POST['ulsfobilge'];

$lsmgosludge=$_POST['lsmgosludge'];
$lsmgobilge=$_POST['lsmgobilge'];

$lsmdosludge=$_POST['lsmdosludge'];
$lsmdobilge=$_POST['lsmdobilge'];

$totalsludge=$_POST['totalsludge'];
$totalbilge=$_POST['totalbilge'];

$opertype=$_POST['opertype'];
$basenum=$_POST['basenum'];
$density15=$_POST['density15'];
$fueluseds=$_POST['fueluseds'];
$clotanktemp=$_POST['clotanktemp'];
$actualconsl=$_POST['actualconsl'];
$actualconskgl=$_POST['actualconskg'];



$melubeoil=$_POST['melubeoil'];
$lbncyloil=$_POST['lbncyloil'];
$hbncyloil=$_POST['hbncyloil'];
$additives=$_POST['additives'];
$aelubeoil=$_POST['aelubeoil'];
$gelubeoil=$_POST['gelubeoil'];
$tulubeoil=$_POST['tulubeoil'];
$hydoil=$_POST['hydoil'];
$otheroil=$_POST['otheroil'];



$meloils=$_POST['meloils'];
$meloilb=$_POST['meloilb'];
$lbncyloils=$_POST['lbncyloils'];
$lbncyloilb=$_POST['lbncyloilb'];
$hbncyloils=$_POST['hbncyloils'];
$hbncyloilb=$_POST['hbncyloilb'];
$Additivess=$_POST['Additivess'];
$Additivesb=$_POST['Additivesb'];
$aelubeoils=$_POST['aelubeoils'];
$aelubeoilb=$_POST['aelubeoilb'];
$stregears=$_POST['stregears'];
$stregearb=$_POST['stregearb'];
$sterntubes=$_POST['sterntubes'];
$sterntubeb=$_POST['sterntubeb'];
$hydraulics=$_POST['hydraulics'];
$hydraulicb=$_POST['hydraulicb'];
$otheroils=$_POST['otheroils'];
$otheroilb=$_POST['otheroilb'];

 $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$lcvhshfo', `vlsfo`='$lcvvlsfo',`ulsfo`='$lcvulsfo', `hsmgo`='$lcvhsmgo', `hsmdo`='$lcvhsmdo'  , `lsmgo`='$lcvlsmgo', `lsmdo`='$lcvlsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$lcvhshfo', `vlsfo`='$lcvvlsfo',`ulsfo`='$lcvulsfo', `hsmgo`='$lcvhsmgo', `hsmdo`='$lcvhsmdo'  , `lsmgo`='$lcvlsmgo', `lsmdo`='$lcvlsmdo'  WHERE `reportnum`='$rnumber'";
 
    
 $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$sulphshfo', `vlsfo`='$sulpvlsfo',`ulsfo`='$sulpulsfo', `hsmgo`='$sulphsmgo', `hsmdo`='$sulphsmdo'  , `lsmgo`='$sulplsmgo', `lsmdo`='$sulplsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$sulphshfo', `vlsfo`='$sulpvlsfo',`ulsfo`='$sulpulsfo', `hsmgo`='$sulphsmgo', `hsmdo`='$sulphsmdo'  , `lsmgo`='$sulplsmgo', `lsmdo`='$sulplsmdo'  WHERE `reportnum`='$rnumber'";
 
 
  $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$denshshfo', `vlsfo`='$densvlsfo',`ulsfo`='$densulsfo', `hsmgo`='$denshsmgo', `hsmdo`='$denshsmdo'  , `lsmgo`='$denslsmgo', `lsmdo`='$denslsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$denshshfo', `vlsfo`='$densvlsfo',`ulsfo`='$densulsfo', `hsmgo`='$denshsmgo', `hsmdo`='$denshsmdo'  , `lsmgo`='$denslsmgo',   WHERE `reportnum`='$rnumber'";
         

  $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$eng1hshfo', `vlsfo`='$eng1vlsfo',`ulsfo`='$eng1ulsfo', `hsmgo`='$eng1hsmgo', `hsmdo`='$eng1hsmdo'  , `lsmgo`='$eng1lsmgo', `lsmdo`='$eng1lsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$eng1hshfo', `vlsfo`='$eng1vlsfo',`ulsfo`='$eng1ulsfo', `hsmgo`='$eng1hsmgo', `hsmdo`='$eng1hsmdo'  , `lsmgo`='$eng1lsmgo', `lsmdo`='$eng1lsmdo'   WHERE `reportnum`='$rnumber'";
 
   $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$eng2hshfo', `vlsfo`='$eng2vlsfo',`ulsfo`='$eng2ulsfo', `hsmgo`='$eng2hsmgo', `hsmdo`='$eng2hsmdo'  , `lsmgo`='$eng2lsmgo', `lsmdo`='$eng2lsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$eng2hshfo', `vlsfo`='$eng2vlsfo',`ulsfo`='$eng2ulsfo', `hsmgo`='$eng2hsmgo', `hsmdo`='$eng2hsmdo'  , `lsmgo`='$eng2lsmgo', `lsmdo`='$eng2lsmdo'   WHERE `reportnum`='$rnumber'";
 

 $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$aehshfo', `vlsfo`='$aevlsfo',`ulsfo`='$aeulsfo', `hsmgo`='$aehsmgo', `hsmdo`='$aehsmdo'  , `lsmgo`='$aelsmgo', `lsmdo`='$aelsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$aehshfo', `vlsfo`='$aevlsfo',`ulsfo`='$aeulsfo', `hsmgo`='$aehsmgo', `hsmdo`='$aehsmdo'  , `lsmgo`='$aelsmgo', `lsmdo`='$aelsmdo'   WHERE `reportnum`='$rnumber'";
 


 $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$boilhshfo', `vlsfo`='$boilvlsfo',`ulsfo`='$boilulsfo', `hsmgo`='$boilhsmgo', `hsmdo`='$boilhsmdo'  , `lsmgo`='$boillsmgo', `lsmdo`='$boillsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$boilhshfo', `vlsfo`='$boilvlsfo',`ulsfo`='$boilulsfo', `hsmgo`='$boilhsmgo', `hsmdo`='$boilhsmdo'  , `lsmgo`='$boillsmgo', `lsmdo`='$boillsmdo'  WHERE `reportnum`='$rnumber'";
 

 $sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$otherhshfo', `vlsfo`='$othervlsfo',`ulsfo`='$otherulsfo', `hsmgo`='$otherhsmgo', `hsmdo`='$otherhsmdo'  , `lsmgo`='$otherlsmgo', `lsmdo`='$otherlsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$otherhshfo', `vlsfo`='$othervlsfo',`ulsfo`='$otherulsfo', `hsmgo`='$otherhsmgo', `hsmdo`='$otherhsmdo'  , `lsmgo`='$otherlsmgo', `lsmdo`='$otherlsmdo'  WHERE `reportnum`='$rnumber'";
 

$sql1t="UPDATE `tempengauxp` SET 
`hshfo`='$totalhshfo', `vlsfo`='$totalvlsfo',`ulsfo`='$totalulsfo', `hsmgo`='$totalhsmgo', `hsmdo`='$totalhsmdo'  , `lsmgo`='$totallsmgo', `lsmdo`='$totallsmdo' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`hshfo`='$totalhshfo', `vlsfo`='$totalvlsfo',`ulsfo`='$totalulsfo', `hsmgo`='$totalhsmgo', `hsmdo`='$totalhsmdo'  , `lsmgo`='$totallsmgo', `lsmdo`='$totallsmdo'  WHERE `reportnum`='$rnumber'";
 
$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$hshfosludge', `bilge`='$hshfobilge' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$hshfosludge', `bilge`='$hshfobilge'  WHERE `reportnum`='$rnumber'";
 
$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$vlsfosludge', `bilge`='$vlsfobilge' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$vlsfosludge', `bilge`='$vlsfobilge'  WHERE `reportnum`='$rnumber'";
 
$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$ulsfosludge', `bilge`='$ulsfobilge' WHERE `reportnum`='$rnumber' AND items ='power'";
 
  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$ulsfosludge', `bilge`='$ulsfobilge' WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$hsmgosludge', `bilge`='$hsmgobilge' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$hsmgosludge', `bilge`='$hsmgobilge'  WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$hsmdosludge', `bilge`='$hsmdobilge' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$hsmdosludge', `bilge`='$hsmdobilge'  WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$ulsfosludge', `bilge`='$ulsfobilge' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$ulsfosludge', `bilge`='$ulsfobilge'  WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$lsmgosludge', `bilge`='$lsmgobilge' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$lsmgosludge', `bilge`='$lsmgobilge'  WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$lsmdosludge', `bilge`='$lsmdobilge' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$lsmdosludge', `bilge`='$lsmdobilge'  WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$totalsludge', `bilge`='$totalbilge' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$totalsludge', `bilge`='$totalbilge'  WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`opertype`='$opertype', `basenum`='$basenum', `density15`='$density15', `fueluseds`='$fueluseds', `clotanktemp`='$clotanktemp', `actualconsl`='$actualconsl' , `actualconskg`='$actualconskg' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`opertype`='$opertype', `basenum`='$basenum', `density15`='$density15', `fueluseds`='$fueluseds', `clotanktemp`='$clotanktemp', `actualconsl`='$actualconsl' , `actualconskg`='$actualconskg'  WHERE `reportnum`='$rnumber'";

$sql1g="UPDATE `engauxgen1` SET 
`melubeoil`='$melubeoil', `lbncyloil`='$lbncyloil', `hbncyloil`='$hbncyloil', `additives`='$additives', `aelubeoil`='$aelubeoil', `gelubeoil`='$gelubeoil' , `tulubeoil`='$tulubeoil' , `hydoil`='$hydoil' , `otheroil`='$otheroil'  WHERE `reportnum`='$rnumber'";


$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$meloils', `bilge`='$meloilb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$meloils', `bilge`='$meloilb'  WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$lbncyloils', `bilge`='$lbncyloilb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$lbncyloils', `bilge`='$lbncyloilb' WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$hbncyloils', `bilge`='$hbncyloilb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$hbncyloils', `bilge`='$hbncyloilb' WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$Additivess', `bilge`='$Additivesb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$Additivess', `bilge`='$Additivesb' WHERE `reportnum`='$rnumber'";
	
$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$aelubeoils', `bilge`='$aelubeoilb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$aelubeoils', `bilge`='$aelubeoilb' WHERE `reportnum`='$rnumber'";


$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$stregears', `bilge`='$stregearb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$stregears', `bilge`='$stregearb' WHERE `reportnum`='$rnumber'";


$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$sterntubes', `bilge`='$sterntubeb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$sterntubes', `bilge`='$sterntubeb' WHERE `reportnum`='$rnumber'";


$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$hydraulics', `bilge`='$hydraulicb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$hydraulics', `bilge`='$hydraulicb' WHERE `reportnum`='$rnumber'";

$sql1t="UPDATE `tempengauxp` SET 
`sludge`='$otheroils', `bilge`='$otheroilb' WHERE `reportnum`='$rnumber' AND items ='power'";

  $sql1g="UPDATE `engauxgen1` SET 
`sludge`='$otheroils', `bilge`='$otheroilb' WHERE `reportnum`='$rnumber'";


?>


         
<br>

<div class="row" >
<div class="col-md-2"></div>
   <div class="col-md-7">

 <table style="font-size:14px;">
    
          		<tr>
             
		
		   <tr><td><br></td></tr>
		<tr><td  colspan="18" style="font-size:16px;"> <b>Fuel Properties</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	<td> </td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;HSHFO  </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;VLSFO  </b></small></td>
		
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;ULSFO </b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;HSMGO </b></small></td>
				<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;HSMDO</b></small></td>
			
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;LSMGO </b></small></td>
				<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;LSMDO</b></small></td>
			
	</tr>

	<tr>	<td><small>In use</small></td>
		
			   <td>  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
			
		   <td>  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
			   <td>  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
			
		   <td>  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
			   <td>  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
			
		   <td>  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
		   <td>  
				 <input type="hidden"  name="sloc" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:16px;"></span>
            <input type="checkbox" name="oilfired" id="oilfired" value="<?php echo $row['oilfired'];?>">&nbsp;<span style="font-size:18px;"><small></small> </span>
		</td>
			
	</tr>

	<tr>	<td><small>LCV</small></td>
		
			<td><input type="text" name="lcvhshfo"  id="lcvhshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lcvvlsfo"  id="lcvvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="lcvulsfo"  id="lcvulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lcvhsmgo"  id="lcvhsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="lcvhsmdo"  id="lcvhsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
		
			<td><input type="text" name="lcvlsmgo"  id="lcvlsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lcvlsmdo"  id="lcvlsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>KJ/Kg</small> </i></td></td>
	</tr>

	<tr>
			<td><small>Sulphur%</small></td>
		<td><input type="text" name="sulphshfo"  id="sulphshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sulpvlsfo"  id="sulpvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="sulpulsfo"  id="lcvulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sulphsmgo"  id="lcvhsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="sulphsmdo"  id="lcvhsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
	
			<td><input type="text" name="sulplsmgo"  id="lcvlsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sulplsmdo"  id="lcvlsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" style="padding-right:17px;;padding-left:25px;"><small>%</small> </i></td></td>
	</tr>

	<tr>
			<td><small>Density at 15C </small></td>
			
			<td><input type="text" name="denshshfo"  id="denshshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="denspvlsfo"  id="denspvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="denspulsfo"  id="denspulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="densphsmgo"  id="densphsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="densphsmdo"  id="densphsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td><input type="text" name="densplsmgo"  id="densplsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="densplsmdo"  id="densplsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" ><small>Kg/m3</small></i></td></td>
	</tr>

	<tr><td><br></td></tr>
	
	          		<tr>
             
		
		   <tr><td><br></td></tr>
		<tr><td  colspan="18" style="font-size:16px;"> <b>Fuel Consumption</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	<td> </td>
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;HSHFO </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;VLSFO </b></small></td>
		
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;ULSFO</b></small></td>
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;HSMGO</b></small></td>
				<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;HSMDO</b></small></td>
			
			<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;LSMGO</b></small></td>
				<td><small><b> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;LSMDO</b></small></td>
			
	</tr>
	

	<tr>
			<td><small>Engine 1</small></td>
					
			<td><input type="text" name="eng1hshfo"  id="eng1hshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng1pvlsfo"  id="eng1pvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng1pulsfo"  id="eng1pulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng1phsmgo"  id="eng1phsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng1phsmdo"  id="eng1phsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng1plsmgo"  id="eng1plsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng1plsmdo"  id="eng1plsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small>Engine 2</small></td>
					
				<td><input type="text" name="eng2hshfo"  id="eng1hshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2pvlsfo"  id="eng2pvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2pulsfo"  id="eng2pulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2phsmgo"  id="eng2phsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2phsmdo"  id="eng2phsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2plsmgo"  id="eng2plsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="eng2plsmdo"  id="eng2plsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
		<tr>
			<td><small>AE</small></td>
					
				<td><input type="text" name="aehshfo"  id="aehshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aepvlsfo"  id="aepvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aepulsfo"  id="aepulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aephsmgo"  id="aephsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aephsmdo"  id="aephsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aeplsmgo"  id="aeplsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aeplsmdo"  id="aeplsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small>Boiler </small></td>
					
			<td><input type="text" name="boilhshfo"  id="boilhshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilpvlsfo"  id="boilpvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilpulsfo"  id="boilpulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilphsmgo"  id="boilphsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilphsmdo"  id="boilphsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilplsmgo"  id="boilplsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="boilplsmdo"  id="boilplsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
			<tr>
			<td><small>Other</small></td>
					
				<td><input type="text" name="Otherhshfo"  id="Otherhshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="otherpvlsfo"  id="otherpvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="otherpulsfo"  id="otherpulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="otherphsmgo"  id="otherphsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="otherphsmdo"  id="Otherphsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="Otherplsmgo"  id="otherplsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="otherplsmdo"  id="otherplsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>
	<tr>
			<td><small>Total </small></td>
					<td><input type="text" name="Totalhshfo"  id="Totalhshfo" value="<?php echo $row['hshfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="totalpvlsfo"  id="totalpvlsfo" value="<?php echo $row['vlsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="totalpulsfo"  id="totalpulsfo" value="<?php echo $row['ulsfo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="totalphsmgo"  id="totalphsmgo" value="<?php echo $row['hsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="totalphsmdo"  id="totalphsmdo" value="<?php echo $row['hsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="totalplsmgo"  id="totalplsmgo" value="<?php echo $row['lsmgo'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="totalplsmdo"  id="totalplsmdo" value="<?php echo $row['lsmdo'];?>" class="input-field" maxlength="5" size="7"></td>
	<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td>
	</tr>


      </table>
      
</div>

 <div class="col-md-3">
     
    
   <table  style="font-size:14px;">
    
          		<tr>
             
		
		   <tr><td><br></td></tr>
		<tr><td  colspan="18" style="font-size:16px;"> <b>Fuel Oil Losses</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   
			<td></td>	
			<td><small><b> Sludge  </b></small></td>
		
			<td><small><b> Oily Bilge </b></small></td>
		
		
		
	



	<tr>
			<td><small>HSHFO &nbsp;&nbsp;</small></td>
		
			<td><input type="text" name="hshfosludge"  id="hshfosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			
				<td><input type="text" name="hshfobilge"  id="hshfobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>

	
	</tr>


	<tr>	<td><small>VLSFO &nbsp;&nbsp;</small></td>
		
			
			<td><input type="text" name="vlsfosludge"  id="vlsfosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="vlsfobilge"  id="vlsfobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>
	</tr>
		<tr>	
		<td><small>ULSFO &nbsp;&nbsp;</small></td>
	
			<td><input type="text" name="ulsfosludge"  id="ulsfosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="ulsfobilge"  id="ulsfobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>
	</tr>
		<tr>	<td><small>HSMGO &nbsp;&nbsp;</small></td>
		
			
			<td><input type="text" name="hsmgosludge"  id="hsmgosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="hsmgobilge"  id="hsmgobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>
	</tr>
		<tr>	<td><small>HSMDO</small></td>
		
			
		<td><input type="text" name="hsmdosludge"  id="hsmdosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="hsmdobilge"  id="hsmdobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>
	<td>	
	</tr>

		<tr>	<td><small>ULSFO &nbsp;&nbsp;</small></td>
		
			
			<td><input type="text" name="ulsfosludge"  id="ulsfosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="ulsfobilge"  id="ulsfobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>	
	</tr>
		<tr>	<td><small>LSMGO &nbsp;&nbsp;</small></td>
		
			
			<td><input type="text" name="lsmgosludge"  id="lsmgosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="lsmgobilge"  id="lsmgobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>
	</tr>
		<tr>	<td><small>LSMDO &nbsp;&nbsp;</small></td>
		
			
			<td><input type="text" name="lsmdosludge"  id="lsmdosludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="lsmdobilge"  id="lsmdobilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>
			</tr>

	<tr>	<td><small>Total&nbsp;&nbsp;</small></td>
		
			
			<td><input type="text" name="totalsludge"  id="totalsludge" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td><input type="text" name="totalbilge"  id="totalbilge" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
				<td>	<i class="fa fa- icon" ><small>MT</small></i></i></td></td>
	</tr>


      </table>
  

</div>
</div>

<div class="row" >
<div class="col-md-2"></div>
   <div class="col-md-3">
       <table style="font-size:14px;">
    
          		<tr>
             
		
		   <tr><td><br></td></tr>  <tr><td><br></td></tr>
		<tr><td  colspan="18" style="font-size:16px;"> <b>Cylinder Oil Consumption</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	
		
			
			
	</tr>
		<tr>	<td><small>Type Of Operation</small></td>
		
		<td class="input-container">  
				<select name="opertype" id="opertype" value="<?php echo $row['opertype'];?>" class="input-field"  required >
				<option>Normal </option>
				<option>Running In</option>
				
				</select>  
			</td>
			</tr>
	

	<tr>	<td><small>Base Number</small></td>
		
			<td class="input-container"><input type="text" name="basenum"  id="basenum" value="<?php echo $row['basenum'];?>" class="input-field" >
			
			<i class="fa fa- icon" ><small>TBN</small> </i></td>
	</tr>


	<tr>
			<td><small>Density at 15 C</small></td>
		
			<td class="input-container"><input type="text" name="density15"  id="density15" value="<?php echo $row['density15'];?>" class="input-field" >
			
			<i class="fa fa- icon" ><small>Kg/m3</small> </i></td>
	</tr>

	<tr>
			<td><small>Fuel Used S %</small></td>
			
		
			<td class="input-container"><input type="text" name="fueluseds"  id="fueluseds" value="<?php echo $row['fueluseds'];?>" class="input-field" >
			
			<i class="fa fa- icon" ><small>%</small> </i></td>
	</tr>
	
	<tr>
			<td><small>CLO Tank Temp</small></td>
					
		
			<td class="input-container"><input type="text" name="clotanktemp"  id="clotanktemp" value="<?php echo $row['clotanktemp'];?>" class="input-field" >
			
		<i class="fa fa- icon" ><small>&#176;c</small> </i></td>
	</tr>
	<tr>
			<td><small>Actual Cons </small></td>
					
		
			<td class="input-container"><input type="text" name="actualconsl"  id="actualconsl" value="<?php echo $row['actualconsl'];?>" class="input-field" >
			
		<i class="fa fa- icon" ><small>l</small> </i></td>
	</tr>
		<tr>
			<td><small>Actual Cons </small></td>
				
			<td class="input-container"><input type="text" name="actualconskg"  id="actualconskg" value="<?php echo $row['actualconskg'];?>" class="input-field" >
			
			<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	

      </table>
      

 
      
</div>

 <div class="col-md-4">
     
<table style="font-size:14px;">
    
          		<tr>
             
		
		   <tr><td><br></td></tr>  <tr><td><br></td></tr>
		<tr><td  colspan="18" style="font-size:16px;"> <b>Lube Oil Consumption</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	
			
			
			
	</tr>
	

	<tr>	<td><small>ME Lube oil</small></td>
		
			<td><input type="text" name="melubeoil"  id="melubeoil" value="<?php echo $row['melubeoil'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>

	<tr>
			<td><small>Low BN Cylinder oil</small></td>
		
			<td><input type="text" name="lbncyloil"  id="lbncyloil" value="<?php echo $row['lbncyloil'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>

	<tr>
			<td><small>High BN Cylinder Oil</small></td>
			
		
			<td><input type="text" name="hbncyloil"  id="hbncyloil" value="<?php echo $row['hbncyloil'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	
	<tr>
			<td><small>Additives</small></td>
					
		
			<td><input type="text" name="additives"  id="additives" value="<?php echo $row['additives'];?>" class="input-field" maxlength="5" size="7"></td>
			
			<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	<tr>
			<td><small>AE lube oil</small></td>
					
		
			<td><input type="text" name="aelubeoil"  id="aelubeoil" value="<?php echo $row['aelubeoil'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
		<tr>
			<td><small>Steering Gear Lube Oil</small></td>
				
			<td><input type="text" name="gelubeoil"  id="gelubeoil" value="<?php echo $row['gelubeoil'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	
	<tr>
			<td><small>Stern Tube Lube Oil</small></td>
				
			<td><input type="text" name="tulubeoil"  id="tulubeoil" value="<?php echo $row['tulubeoil'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	
	<tr>
			<td><small>Hydraulic Oil</small></td>
				
			<td><input type="text" name="hydoil"  id="hydoil" value="<?php echo $row['hydoil'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
		<tr>
			<td><small>Other Oil</small></td>
				
			<td><input type="text" name="otheroil"  id="otheroil" value="<?php echo $row['otheroil'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	

      </table>
  

</div>
 <div class="col-md-3">
     
<table style="font-size:14px;">
    
          		<tr>
             
		
		   <tr><td><br></td></tr>  <tr><td><br></td></tr>
		<tr><td  colspan="18" style="font-size:16px;"> <b>Lube Oil Losses</b> </td>	</tr>	
		   <tr><td><br></td></tr>
		   	
			<td><small><b>&nbsp;&nbsp;&nbsp;   </b></small></td>	
			<td><small><b>&nbsp;&nbsp;&nbsp; sludge </b></small></td>
				<td><small><b>&nbsp;&nbsp;&nbsp oily Bilge </b></small></td>
		
			<td><small><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; </b></small></td>
			
			
	</tr>


	<tr>	<td><small>ME Lube oil</small></td>
		
			<td><input type="text" name="meloils"  id="meloils" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="meloilb"  id="meloilb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>

	<tr>
			<td><small>Low BN Cylinder oil</small></td>
		
			<td><input type="text" name="lbncyloils"  id="lbncyloils" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="lbncyloilb"  id="lbncyloilb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>

	<tr>
			<td><small>High BN Cylinder Oil</small></td>
			
		
			<td><input type="text" name="hbncyloils"  id="hbncyloils" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hbncyloilb"  id="hbncyloilb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	
	<tr>
			<td><small>Additives</small></td>
					
		
			<td><input type="text" name="Additivess"  id="Additivess" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="Additivesb"  id="Additivesb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	<tr>
			<td><small>AE lube oil</small></td>
					
		
			<td><input type="text" name="aelubeoils"  id="aelubeoils" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="aelubeoilb"  id="aelubeoilb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
			
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td></td>
	</tr>
		<tr>
			<td><small>Steering Gear Lube Oil</small></td>
				
			<td><input type="text" name="stregears"  id="stregears" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="stregearb"  id="stregearb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>

	<tr>
			<td><small>Stern Tube Lube Oil</small></td>
				
			<td><input type="text" name="sterntubes"  id="sterntubes" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="sterntubeb"  id="sterntubeb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	
	<tr>
			<td><small>Hydraulic Oil</small></td>
				
			<td><input type="text" name="hydraulics"  id="hydraulics" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="hydraulicb"  id="hydraulicb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
		<tr>
			<td><small>Other Oil</small></td>
				
			<td><input type="text" name="otheroils"  id="otheroils" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="otheroilb"  id="otheroilb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>Kg</small> </i></td>
	</tr>
	
			<tr>
			<td><small>Total</small></td>
				
			<td><input type="text" name="totals"  id="totals" value="<?php echo $row['sludge'];?>" class="input-field" maxlength="5" size="7"></td>
			<td><input type="text" name="totalb"  id="totalb" value="<?php echo $row['bilge'];?>" class="input-field" maxlength="5" size="7"></td>
		<td>	<i class="fa fa- icon" ><small>MT</small> </i></td>
	</tr>
	

      </table>
  

</div>
</div>


      <tr><td>	<br></td></tr><tr><td>	<br></td></tr>
    <div style="padding-left:230px;width:98%;padding-top:0%;">
 
  <textarea class="form-control" rows="3" id="comment" placeholder="Comments"></textarea><br>
   
</div>
    
		<div style="padding-left:250px;">

		    <div class="col-md-1">
		        <button type="submit" name="srauxiliary" class="btn btn-block btn-sm btn-primary" value="1" style="width:100px;">Save</button>
		       
		    </div>
					      </div>