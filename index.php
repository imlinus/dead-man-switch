<?php
$password = 'abc123';

if (isset($_POST['password'])) {
	if ($_POST['password'] == $password) {
		echo '<p>Make sure to check-in again before ' . date('Y-m-d', strtotime('next month')) . '</p>';

		$datefile = fopen('timestamp.txt', 'w') or die('Unable to open file!');
		fwrite($datefile, date('Y-m-d'));
		fclose($datefile);
	} else {
		echo '<p>Wrong password</p>';
	}
}
?>

<html>
<head>
	<meta name="robots" content="noindex" />
	<meta name="googlebot" content="noindex" />
</head>
<body>
	<form method="POST">
		<input type="password" name="password" />
		<input type="submit" value="Check in" />
	</form>
</body>
</html>
