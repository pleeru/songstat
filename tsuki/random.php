<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<html>
<body class="searchpage">
<form action="random.php" method="post">
<button class="randombutton" type="submit">Random</button>
</form>
<?php echo rand(1, 1000)?>
</body>
</html>
