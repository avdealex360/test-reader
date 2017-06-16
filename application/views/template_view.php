<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>test task</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="/js/jquery.cookie.js" type="text/javascript"></script>
		<script src="/js/script.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="lang-switcher">
					<span id="switchRus"><?=$lang['mSwitchRus']?></span>
					<span id="switchEng"><?=$lang['mSwitchEng']?></span>
				</div>
			</div>
			<div id="page">
				<?php include 'application/views/'.$content_view; ?>
			</div>
		</div>

		<div id="footer">
			<span><a href="/"><?=$lang['mToMain']?></a></span>
		</div>
	</body>
</html>