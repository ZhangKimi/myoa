<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>跳转中 ...</title>
		<link type="text/css" href="/myoa/Public/css/sweetalert.css" rel="stylesheet" />
		<script type="text/javascript" src="/myoa/Public/js/sweetalert.min.js"></script>
		<script type="text/javascript" src="/myoa/Public/js/jquery-1.8.2.min.js"></script>
		<style>
			#reminds {
				color: #0068A6;
				font-family: "Microsoft YaHei";
			}

			#reminds:visted {
				color: #0068A6;
				font-family: "Microsoft YaHei";
			}
		</style>
	</head>
	<body>
		<script type="text/javascript">
			swal({
				title: "您还没有登录 , 请先登录",
				text: "<a href='/myoa/index.php/Home/Login' id='reminds'>[如页面没有跳转请点击此连接]</a>",
				timer: 3000,
				showConfirmButton: false,
				html: true,
				type: "info"

			},function(){
				location.href = "/myoa/index.php/Home/Login";
			});
		</script>
	</body>
</html>