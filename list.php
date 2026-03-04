<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM users");

echo "<table border='1'>";
echo "<tr>
<th>ID</th>
<th>First</th>
<th>Last</th>
<th>Country</th>
<th>Gender</th>
<th>Username</th>
<th>Actions</th>
</tr>";


while($row = mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['lname']."</td>";
    echo "<td>".$row['country']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['username']."</td>";

    echo "<td>
            <a href='view.php?id=".$row['id']."'>View</a> |
            <a href='delete.php?id=".$row['id']."'>Delete</a>
          </td>";

    echo "</tr>";
}

echo "</table>";