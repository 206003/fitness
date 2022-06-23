<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<title>HAPPINESS FITNESS CLUB</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div id="header">
	<h1><img src="images/logo.png" width="203" height="70" alt="ハピネスフィットネスクラブ"></h1>
	<div id="nav">
		<ul>
			<li><a href="info.html"><img src="images/nav1.png" width="173" height="50" alt="施設のご案内"></a></li>
			<li><a href="fee.html"><img src="images/nav2.png" width="173" height="50" alt="料金プラン"></a></li>
			<li><a href="opinion.html"><img src="images/nav3.png" width="173" height="50" alt="ご意見・ご要望"></a></li>
		</ul>
	</div>
</div>
<div id="contents">
	<div id="main">
		<p id="graphic"><img src="images/graphic.jpg" width="570" height="300" alt="ハピネスフィットネスクラブでは さまざまなプログラムをご用意しております。"></p>
		<div id="section">
			<h2>今月のお知らせ</h2>

			<?php
				$con = pg_connect("host = localhost dbname = postgres user = postgres password = system");

				if($con == false){
   					echo '<div style="text-aline: center;">／／／ サービスのメンテナンス中です ／／／</div>';
   					exit();
				}
			?>

		</div>
	</div>
	<div id="sub">
		<div id="aside">
			<ul>
				<li><a href="info.html"><img src="images/bnr_info.png" width="200" height="80" alt="施設のご案内"></a></li>
				<li><a href="opinion.html"><img src="images/bnr_opinion.png" width="200" height="50" alt="ご意見・ご要望"></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="footer">

	<?php
	$date = date('y');
	echo '<p>Copyright '.$date.' HAPPINESS FITNESS CLUB All rights reserved.</p>';
	?>

</div>
</body>
</html>
