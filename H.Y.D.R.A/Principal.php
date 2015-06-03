<?php
require_once 'libs/Functions.php';
$connex = new Database('localhost', 'root', 'root', 'HYDRA');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<div class="container">
			
			<div class="PanelGranpas">
			<?php
			// start database connection
// query database
$q = "SELECT * FROM Usuarios";
$r = $connex->query($q);
print($r);
// if we have a result loop over the result
if ($connex->num_rows($r) > 0) {
  while ($a = $connex->fetch_array_assoc($r)) {
    echo "{$a['Usuario']} wrote {$a['Pass']}\n";
  }
}
 
// fetch array of articles with less code
$q = "SELECT * FROM Usuarios";
$a = $connex->fetch_all_array($q);
if (!empty($a)) {
  foreach ($a as $k => $v) {
    echo "{$v['Usuario']} wrote {$v['Pass']}\n";
  }
}
?>
</div>
<div class="PanelKids">
	<a href="" ><img src="img/kids.jpg" alt="" /></a>
</div>
		</div>
</body>
</html>