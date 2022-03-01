<html>

<head>
	<title> EGW writings</title>
</head>

<body>
	<h1>Welcome to EGW Writings</h1>
	<form action="results.php" method="get">
		<p>
			Choose to search with what:
		</p>
		<select name="search_type">
			<!-- Use value not values -->
			<option value="0">Title</option>
			<option value="1">Code</option>
			<option value="2">Category</option>
		</select>
		<p>Enter the details for the search type</p>
		<input type="text" name="search_query"></br> <br>
		<!-- remove the name on this its unnecesary -->
		<input type="submit" value="Search">
	</form>
</body>

</html>