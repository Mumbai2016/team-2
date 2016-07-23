<html>
<body>

<table>
    <tr>
        <td>Rank</td>
        <td>User</td>
        <td>Score</td>
    </tr>
	<?php
$conn = new mysqli('localhost','root','');
mysqli_select_db($conn,"volunteers");

        $result = mysql_query("SELECT user, score FROM leaderboard ORDER BY score DESC");
        $rank = 1;

        if (mysql_num_rows($result)) {
            while ($row = mysql_fetch_assoc($result)) {
                echo "<td>{$rank}</td>
                      <td>{$row['user']}</td>
                      <td>{$row['score']}</td>";

                $rank++;
            }
        }
    ?>
</table>

</body>
</html>