<!DOCTYPE html>
<html>
<head>
	<title>Script JSO Creator</title>
	<script>
		function runCharCodeAt() {
			input = document.charCodeAt.input.value;
			output = "";
			for(i=0; i<input.length; ++i) {
				if (output != "") output += ", ";
				output += input.charCodeAt(i);
			}
			document.charCodeAt.output.value = output;
		}
	</script>
</head>
<body>
<center>
	<font face="Courier New" size="7">Script JSO Creator</font>
	<form name="charCodeAt" method="post">
		<textarea name="input" style="width: 200px;height: 100px;" placeholder="Script Deface"></textarea><br><br>
		<input type="button" onclick="runCharCodeAt()" value="Convert"><br><br>
		<textarea name="output" style="width: 200px;height: 100px;"></textarea><br><br>
		<input type="submit" name="submit" value="Create!!">
	</form>
 </center>
</body>
</html>