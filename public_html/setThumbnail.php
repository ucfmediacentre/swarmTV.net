<?php
session_start();
include_once "../../dbinfo.php";

$id=$_GET["id"];
$currentPos=$_GET["currentPos"];

//connect to database
$db = mysql_connect($_SESSION['serverName'], $_SESSION['userName'], $_SESSION['pword']);
if (!$db) {
	echo "Error: Could not connect to database. Please try again later.";
	exit;
}
mysql_select_db($_SESSION['databaseName']);

$query = "SELECT * FROM `elements` WHERE `id` = '".$id."';";

//echo $query."<br>";
$result = mysql_query($query);
$record = mysql_fetch_assoc($result);
//echo $record['filename']."<br>";

//set string variables for ffmpeg string
$filename = $record['filename'];
$filename = substr($filename, 0, -4);
//$videoDirectory = "/Users/media/Sites/swarmtv.net/public_html/assets/video/";
$videoDirectory = "/home/swarmtvn/public_html/assets/video/";
//$videopostersDirectory = "/Users/media/Sites/swarmtv.net/public_html/assets/videoposters/";
$videopostersDirectory = "/home/swarmtvn/public_html/assets/videoposters/";

//create Terminal string for ffmpeg and execute it
$makeFrameString = "/usr/bin/ffmpeg -i " . $videoDirectory . $filename . ".mp4";
$makeFrameString = $makeFrameString . " -vframes 1 -an -s 200x115 -ss " . $currentPos . " ";
$makeFrameString = $makeFrameString . $videopostersDirectory . $filename . ".jpg";
$execute = shell_exec($makeFrameString);

?>
