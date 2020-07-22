<?php
error_reporting(E_ERROR|E_PARSE);
ob_start();
session_start();
$username=$_SESSION['username'];
$entry_staff=$_SESSION['username'];
$usertype=$_SESSION['usertype'];
$edit=$_SESSION['edit'];

if(!($_SESSION['username'] && $_SESSION['usertype'] && $_SESSION['edit']))
{
	header('Location: login.php');
	//echo "<script type='text/javascript'> document.location = 'login.php'; </script>";  
}


	if($_SESSION['edit']=='yes')
	{ 
		include('header/home.php');	
	}
	else
	{
	include('header/uhome.php');
		//echo'<h1 align="center" class="text-danger"> Edit disabled by Admin!!</h1>';
	}


if($_POST['vessel'])
{
include('entries/vessel.php');  
}

if($_POST['voyage'])
{
include('entries/voyage.php');  
}

if($_POST['engineerlog'])
{
include('entries/elog.php');  
}

if($_POST['elog'])
{
include('entries/elog.php');  
}

if($_POST['clog'])
{
include('entries/clogmain.php');  
}


if($_POST['decklog'])
{
include('entries/dlog.php');  
}

if($_POST['dlog'])
{
include('entries/dlog.php');  
}


if($_POST['preport'])
{
include('entries/plog.php');  
}

/* if($_POST['sreport'])
{
include('entries/slog.php');  
} */

if($_POST['srepnum'])
{
	include('entries/slog.php');  
//include('entries/slogheader.php');  
}

if($_POST['logout'])
{
include('logout/session_destory.php');  
}
?>