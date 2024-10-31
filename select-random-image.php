<?php

$rigwppz_dir = get_option('rigwppz_dir');

$rigwppz_siteurl = get_option('siteurl') . "/" . $rigwppz_dir ;

$imglist='';
//$img_folder is the variable that holds the path to the banner images. Mine is images/tutorials/
// see that you don't forget about the "/" at the end 
$img_folder = $rigwppz_dir;

mt_srand((double)microtime()*1000);

//use the directory class
$imgs = dir($img_folder);

//read all files from the  directory, checks if are images and ads them to a list (see below how to display flash banners)
while ($file = $imgs->read()) 
{
	if(strpos(strtoupper($file), '.JPG') > 0 or strpos(strtoupper($file), '.GIF') >0 or strpos(strtoupper($file), '.GIF') > 0 )
	{
		$imglist .= "$file ";
	}
//if (eregi("gif", $file) || eregi("jpg", $file) || eregi("png", $file))
} 
closedir($imgs->handle);

//put all images into an array
$imglist = explode(" ", $imglist);
$no = sizeof($imglist)-2;

//generate a random number between 0 and the number of images
$random = mt_rand(0, $no);
$image = $imglist[$random];

$mainsiteurl =	get_option('siteurl') . "/wp-content/plugins/random-image-gallery-with-pretty-photo-zoom/";

$rigwppz_width =	get_option('rigwppz_width');
if(!is_numeric($rigwppz_width))
{
	$rigwppz_width = 180;
} 

//display image
echo '<div>';
echo '<a href="'.$rigwppz_siteurl . $image .'" rel="prettyPhoto" title="">';
echo '<img src="'.$mainsiteurl.'crop-random-image.php?AC=YES&DIR='.$rigwppz_dir.'&IMGNAME='.$image.'&MAXWIDTH='.$rigwppz_width.'"> ';
echo '</a>';
echo '</div>';
 ?>