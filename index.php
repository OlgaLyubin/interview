<style>
	<?php include 'main.css'; ?>
</style>

<?php
echo "<body>
		<img id='logo' src='images/image.png'>
		<div id='container'>
			<div class='wrapper'>
				<div class='articles'>
					<h1 id='articleTitle'>Articles</h1>
					<div class='articleContent'>";

/* Getting content from JSON: */
$articlesData = file_get_contents('data/articles.json'); 
$articlesArray = json_decode($articlesData, true);
$articlesLength = count($articlesArray); /* Number of articles */

/* Iterating through an array to display every article: */
for($x = 0; $x < $articlesLength; $x++) {
  echo "<div class='articlesItem'><h3>" . $articlesArray[$x]['title'] . "</h3><img src='" . $articlesArray[$x]['image'] . "'></br><p class='description'>" . $articlesArray[$x]['content'] . "</p></div>";
}

echo "</div></div><div class='events'><h1>Events</h1></br>";

/* Getting content from JSON: */
$eventsData = file_get_contents('data/events.json');
$eventsArray = json_decode($eventsData, true);
$eventsLength = count($eventsArray); /* Number of events */

/* Iterating through an array to display every event: */
for($y = 0; $y < $eventsLength; $y++) {
  echo "<div class='eventsItem'><b class='eventsTitle'>" . $eventsArray[$y]['title'] . "</b><p><b>Location: </b>" . $eventsArray[$y]['location'] . "</p><p><b>Date: </b>" . $eventsArray[$y]['date'] . "</p></div>";
}
echo "</div></div></div></body>";
?>