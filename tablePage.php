<a href="index.php">
    Go back to form
</a>

<table>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Number</th>
    </tr>
    <?php
    include "tableHandler.php";
    $user_list = getUserList();

    foreach ($user_list as $user) {
        echo "<tr>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['surname'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['num'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>