<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<meta lang="zh-cn">
	</head>
	<body>
		<form method="post" action="/goods/1">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit">删除任务</button>
		</form>
	</body>
</html>
