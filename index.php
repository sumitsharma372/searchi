<?php
include_once 'header.php';

?>

<form action="search.php" method="POST">
    <div>
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">search</button>
    </div>
</form>
<h1>Front Page</h1>
<h2>All articles</h2>

<div class="article-container">
    <?php
    $sql = "SELECT * FROM article";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class = 'article'>
                    <h3>" . $row['a_title'] . "</h3>
                    <p> " . $row['a_text'] . "</p>
                    <p> " . $row['a_date'] . "</p>
                    <p> " . $row['a_author'] . "</p>
                </div>";
        }
    }
    ?>
</div>
</body>

</html>