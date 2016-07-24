<html>
<body>

<table>
    <tr>
        <td>Rank</td>
        <td>User</td>
        <td>Score</td>
    </tr>
	<?php
$conn = mysqli_connect("localhost","root","root","volunteers");
#mysqli_select_db($conn,"volunteers");

        $result=mysqli_query($conn, "SELECT * FROM leaderboard");
		while ($row = mysqli_fetch_assoc($result) ){
			echo $row['User'];
		}
        
    ?>
</table>

</body>
</html>