<? include_once("../../../includes/header.php");

//$photoset = '0';



//$photoset = $_GET['photoset'];
if (!isset($_GET['photoset']) ||  intval($_GET['photoset']) > 3 || intval($_GET['photoset']) < 1 ) {
	$photoset = '1';
} else {
	$photoset = $_GET['photoset'];
}

//echo $photoset;


?>

<h1 style="text-align:center"> Taxi Driver (1976) </h1>
<h2 style="text-align:center"> Directed by Martin Scorsese </h2>
<br />

<h3 style="text-align:center">Select a film strip to view:</h3>


<?
	echo '<h2 style="text-align:center">';
	if ($photoset == '1')
	{
		echo '1/512';
	}
	else
	{
		echo '<a href="http://classes.dma.ucla.edu/Summer13/160-1/projects/earl/p2/?photoset=1">1/512</a>';
	}

	echo '&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;';

	if ($photoset == '2')
	{
		echo '1/256';
	}
	else
	{
		echo '<a href="http://classes.dma.ucla.edu/Summer13/160-1/projects/earl/p2/?photoset=2">1/256</a>';
	}

	echo '&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;';

	if ($photoset == '3')
	{
		echo '1/128';
	}
	else
	{
		echo '<a href="http://classes.dma.ucla.edu/Summer13/160-1/projects/earl/p2/?photoset=3">1/128</a>';
	}

	echo '</h2>';
?>

<br />
<h3 style="text-align:center">Select a view:</h3>

<div style="margin:auto;width:19%">
<button id="filmStrip" style="width:80px;height:40px;font-size:15px;margin:auto">Filmstrip</button>
<button id="rgb" style="width:80px;height:40px;font-size:15px;margin:auto">RGB</button>
<button id="duotone" style="width:80px;height:40px;font-size:15px;margin:auto">Duotone</button>
</div>
<br />


<?

echo '<script type="text/javascript" src="screens-'.$photoset.'/data.js"></script>';
echo '<script src="image.js"></script>';




$cur_folder = $_SERVER['REQUEST_URI'];


/* echo "<pre>";
print_r($_SERVER);
echo "</pre>"; */

/*
echo $_SERVER['REMOTE_ADDR']. "<br>";
echo $_SERVER['REQUEST_URI']; */

$files = scandir("./screens-".$photoset);

/* echo "<pre>";
print_r($files);
echo "</pre>";  */

foreach($files as $val)
{
	// gives last 4 charcters
	if (substr($val, -4) != '.png')
	{
		continue;
	}

	$mouse = "this.src='screens-".$photoset."/thumbs/" .  $val . "'"; 


	echo '<a href="screens-'.$photoset.'/'.$val.'">';
	echo '<div class="rgbframe" style="width:180px;height:98px;display:inline-block">';
	echo '<img class="frames" style="width:180px;height:98px;"	 src="screens-'.$photoset.'/thumbs/'.$val.'">';
	//echo '<img src="screens-3/thumbs/'.$val.'" onmouseover="'.$mouse.'" onmouseout="'.$mouse.'">';
	echo '</div>';
	echo '</a>';
}

?>


<br><br />

<div id="red_chart">
	<!-- <h2>Red Level</h2> -->
</div>


<div id="green_chart">
	<!-- <h2>Green Level</h2> -->
</div>


<div id="blue_chart">
	<!-- <h2>Blue Level</h2> -->
</div>

<div id="contrast_chart">
</div>

<div id="line_chart">
</div>

<div id="space_chart">
</div>

<div id="tone_chart">
</div>




