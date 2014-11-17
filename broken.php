<!DOCTYPE html>
<html>
<head>
<title>brokenp?</title>
</head>
<body>
<h1>brokenp?</h1>
<hr/>
<?php
$my_url = $_GET["url"];
if ($my_url) { 

$ch = curl_init($my_url);
curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);

if (!$result) {
echo "Go get a grown-up.";
} else {
echo "All is well.";	
}

?><hr/><?php } ?>
<form type="get">
URL:
<input type="text" name="url" value="<?= $my_url ?>" style="width:100%;"/>
<input type="submit"/>
</form>
</body>
</html>
