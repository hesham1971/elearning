<?php
$docRoot = $_SERVER['DOCUMENT_ROOT'];
$path = "https://".$docRoot."/index.php";
//$path = "http://sql204.iceiy.com/htdocs/uploads/Bhie_Logo.png';
echo $path;
//echo base_url;
//echo '<a href= "https://sql204.iceiy.com/htdocs/uploads/slides/lesson_1/Slide2.jpg"> "slide1" </a>';
echo '<a href= "https://'.$path.'"/Bhie_Logo.png"> "slide1" </a>';
//echo '<a href= "https://elearn/Bhie_Logo.png"> "slide1" </a>';
echo '<a href= "https://www.google.com"> "google" </a>';
?>