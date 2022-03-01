<html>

<head>
	<title>Results for the Search</title>
</head>

<body>

	<?php
	/**
	 * I have simply included a connection file that handles all this 
	 */

	$searchQuery = htmlspecialchars($_GET['search_query']);
	$searchType = htmlspecialchars($_GET['search_type']);

	include_once('./conn.php');

	$columns = array('Title', 'Code', 'Category');
	$searchColumn = $columns[$searchType];

	/**
	 * The best way to query a search from a database is by using SQL's like operator
	 * read more about like here https://www.w3schools.com/sql/sql_like.asp
	 * the sytanx looks like this: 
	 * SELECT column1, column2, ... FROM table_name WHERE columnN LIKE pattern;
	 */
	$query = "SELECT * FROM books WHERE $searchColumn LIKE '%$searchQuery%'";

	$data = $conn->query($query)->fetchAll();

	foreach ($data as $row) {
		echo $row['Code'] . "\t";
		echo $row['Title'] . "\t";
		echo $row['Category'] . "\t </br>";
	}
	?>
	<a href="search.php">back</a>
</body>

</html>