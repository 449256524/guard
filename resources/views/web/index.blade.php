<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<meta lang="zh-CN">
		<script src="https://cdn.jsdelivr.net/npm/vue"></script>
		<script src="https://code.jquery.com/jquery-3.4.0.js"   integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
		<style>

		</style>
	</head>
	<body>
		<div id="app">
			<!--头部-->
			<header>

			</header>
			<!--导航连接-->
			<nav>

			</nav>
			<div>
				<button @click="say">say hi</button>
				<button @click="say">say what</button>
			</div>
			<!--页脚-->
			<footer>

			</footer>
		</div>
		<script>
			var app = new Vue({
					el: '#app',
					data: {

					},
					methods: {
					    'say': function (event) {
									alert(event.target.tagName)
              }
					}
      })
		</script>
	</body>
</html>

