<html>
    <head>
       <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="style.css" type="text/css" /> <!--Slider Library-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Slider Library-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--Slider Library-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--icon library-->

  <!--login start-->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
       <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <!--login end-->
        
       <!--Calendar library start-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
      <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
       <!--Calendar library end-->
    <style>
    
    /* start*/
    .navbar-inverse {
    background-color: #34A1C1!important;
    border-color: #34A1C1!important;
}
    
      .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
 top: 5%;
  left: 0;
  background-color: #124167;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #ffffff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #34a1c1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size:10px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */


/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

    /* menu dropdown */
    .dropbtn {
  background-color:#34a1c1;
  color: white;
  padding: 16px;
  font-size: 9px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
    
    /*end*/

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #74cce0;
   color: white;
   text-align: center;
   padding-top:10px;
}



/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 20%;
  
  height: 100px; /* Should be removed. Only for demonstration */
}

.nav-tabs {
    border-bottom: 1px solid #ddd;
    height: 40px;
    padding-left: 500px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



* {
  box-sizing: border-box;
}
.column1 {
  float: left;
  width: 20%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
.column {
  float: left;
  width: 40%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.w3-top, .w3-bottom {
    position: fixed;
    width: 100%;
    z-index: 1;
    height: 5px;
}

.col-md-4 {
    width: 32.33333333%;
}


* {box-sizing: border-box;}

.input-container {
  
  display: flex;
  width: 80%;
      height: 35;
}

.icon {
  padding: 10px;
  background: #eee;
  color: black;
  min-width: 50px;
  text-align: center;
  float:left;
  border: 1px solid #ccc;
    border-top-color: rgb(204, 204, 204);
    border-top-style: solid;
    border-top-width: 1px;
    border-right-color: rgb(204, 204, 204);
    border-right-style: solid;
    border-right-width: 1px;
    border-bottom-color: rgb(204, 204, 204);
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-left-color: rgb(204, 204, 204);
    border-left-style: solid;
    border-left-width: 1px;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  font-size: 9;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}
.btn-block {
    display: block;
    /* width: 100%; */
}
.btn-info {
    color: #124167;
    background-color: #ddd!important;
    border-color: #ddd!important;
}

.navbar-inverse {
    background-color: #ddd!important;
    border-color: #ddd!important;
}

.btn-info:hover {
  background-color:red;
  color: white;
}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

$(document).ready(function(){
  $("#clone2").click(function(){
    $("#copycontent").clone().appendTo("body");
  });
});
/* only numeric value */
    $(document).ready(function() {

        // MULTIPLE "ID's" ARE SEPARATED BY COMMAS.
        $("#tb1, #tb2").keypress(function(event){ 
            return isNumber(event, this);
        });
    });

               var minLength = 5;
var maxLength = 10;
$(document).ready(function(){
    $('#card').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minLength){
            $('span').text('Length is short, minimum '+minLength+' required.');
        }else if(charLength > maxLength){
            $('span').text('Length is not valid, maximum '+maxLength+' allowed.');
            $(this).val(char.substring(0, maxLength));
        }else{
            $('span').text('');
        }
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
   <body >
        

<?php
error_reporting(E_ERROR | E_PARSE);
include('db/db.php');
//print_r($_POST);
?>

<?php
  include('include.php');
?>

<?php
  $mycheck = count($_POST);
  if(!$mycheck)
  {
    echo '<center><font color="green"><h3>Welcome !!</h3></font></center>';
    echo'<br>';
    //include('dashboard.php');
  }
  if($_POST['home'])
  {
  echo '<center><font color="green"><h3>Welcome !!</h3></font></center>'; // include('dashboard.php');
  }
  ?>

<?php
  mysqli_close($con);
?>

  </body>
  
</html>