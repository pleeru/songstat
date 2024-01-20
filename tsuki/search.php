<html>
<title>
[非公式]月城ノエラ歌枠データベース
</title>
<head>
<meta name="viewport" content="width=device-width">
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body class='searchpage'>
<form action="search.php" method="post">
        <input name="name" id="name" type="text" size="22" maxlength="150" placeholder="song, singer, or related work">
	<br>
        <button type="submit">Search</button>
</form>
Search word: <?php echo htmlspecialchars($_POST['name']); ?> 

</body>
</html>
