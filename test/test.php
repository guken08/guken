<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>
	<!-- Auto Link Test -->
	<div id="autoLink">http://naver.com</div>
	<!-------------------------------------------->

	<br>


	<!-- Find Word Highlight Test -->
	<div id="highLight">world</div>



	<script>
		function autoLink(id) {
			var container = document.getElementById(id);
			var mystring = container.innerHTML;
			var regURL = new RegExp("(http|https|ftp|telnet|news|irc)://([-/.a-zA-Z0-9_~#%$?&=:200-377()]+)","gi");
			var regEmail = new RegExp("([xA1-xFEa-z0-9_-]+@[xA1-xFEa-z0-9-]+\.[a-z0-9-]+)","gi");
			container.innerHTML = mystring.replace(regURL,"<a href='$1://$2' target='_blank'>$1://$2</a>").replace(regEmail,"<a href='mailto:$1'>$1</a>");
		}

		autoLink("autoLink");

		function highLight(id) {
			var container = document.getElementById(id);
			var mystring = container.innerHTML;
			//console.log(mystring);
			var find = "world";
			var regex = new RegExp(find, "g");
			mystring.replace(regex, "<span class='highLight'>" + find + "</span>");
		}

		highLight("highLight");
		
		
		

	</script>

	<style>
		.highlight { font-weight : bold; color:red; }

	</style>

</body>
</html>