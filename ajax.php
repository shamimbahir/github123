<!DOCTYPE html>
<html>
<head>
	<title></title>
<script  src="jq.js"></script>
	<script>
		$(document).ready(function()
		{
			$("#Txt").keyup(function()
			{
				var x = $("#Txt").val();
				$("#showdata").load("fetchdata.php?d="+x);



				});
			});
		

	</script>

</head>
<body>
	<table>
		<tr>
			<td>Search by name</td>
			<td><input type="text" id="Txt"></td>

		</tr>
	</table>
</body>
</html>
<div id="showdata"></div>
