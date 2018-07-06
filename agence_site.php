
<!DOCTYPE html>
<html>
	<head>
		<title>Send Mail</title>
		<link rel="stylesheet" type="text/css" href="">
		<link type="text/css" rel="stylesheet" href="css/materialize/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<nav class="blue">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Send Mail</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

<?php
$if_m       = fopen('up/fd.txt', 'r');
$mai_efsent = array();

do {
    $res = fgets($if_m);
    if ($res != '') {
        $ss = explode('@', $res)[1];
        if ($ss != "gmail.com") {
            array_push($mai_efsent, trim(explode('@', $res)[1]));
        }
    }
} while (!feof($if_m));
fclose($if_m);

echo "<div class='container'>";
showSit(array_unique($mai_efsent));
echo "</div>";

function showSit($va = '')
{
    echo "<ul class='collection row'>";
    foreach ($va as $key => $value) {
        $er = explode('.', $value)[0];
        $f  = "<li style='text-transform:uppercase; padding:0px' class='col s4 collection-item'><a class='collection-item' target='_blank' href='http://www." . $value . "'> " . $er . "</a></li>";
        echo $f;
    }
    echo "</ul>";
}

?>

		<script type="text/javascript" src="js/jq.js"></script>
		<script type="text/javascript" src="js/materialize/materialize.min.js"></script>
	</body>
</html>