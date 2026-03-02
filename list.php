<?php

$lines = file("data.txt");

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Country</th>
        <th>Gender</th>
        <th>Skills</th>
        <th>Username</th>
        <th>Department</th>
        <th>Actions</th>
      </tr>";

foreach($lines as $index => $line){

    $user = explode("|", trim($line));

    echo "<tr>";
    echo "<td>$index</td>";
    echo "<td>$user[0]</td>"; 
    echo "<td>$user[1]</td>";
    echo "<td>$user[2]</td>"; 
    echo "<td>$user[3]</td>";
    echo "<td>$user[4]</td>"; 
    echo "<td>$user[5]</td>"; 
    echo "<td>$user[6]</td>";
    echo "<td>$user[8]</td>"; 

    echo "<td>
            <a href='view.php?id=$index'>View</a> |
            <a href='delete.php?id=$index'>Delete</a>
          </td>";

    echo "</tr>";
}

echo "</table>";