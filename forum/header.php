<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="A short description." />
	<meta name="keywords" content="put, keywords, here" />
	<title>Forum</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

	<div class="page-border">

		<div class="intro-box">
			<h1 class="intro-text">my forum</h1>
		</div>
		<div class="container">
			<div id="wrapper">
				<div id="menu">
					<div class="menu-left">
						<a id="item" href="index.php">home</a>

						<?php
						if (isset($_SESSION['signed_in']) and $_SESSION['signed_in'] == True) {
							echo '<a id="item" href="create_topic.php">create topic</a>  ';
							echo '<a id="item" href="create_cat.php">create category</a>';
						} else {
						}
						?>
					</div>

					<div class="menu-right">
						<?php
						if (isset($_SESSION['signed_in']) and $_SESSION['signed_in'] == True) {

							echo '<div class="logged-user">welcome, ' . $_SESSION['user_name'] . '</div>'. '</b> <a id="item" href="signout.php">sign out</a>';
						} else {
							echo '<a id="item" href="signin.php">sign in</a> <a id="item" href="signup.php">create account</a>';
						}
						?>
					</div>

				</div>
				<div id="content">
					
				