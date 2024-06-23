<!DOCTYPE html>
<html>
<head>
    <title>List Users</title>
</head>
<body>
    <h2>List Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>
        <!-- <?php foreach ($users as $user): ?> -->
            <tr>
                <td>id</td>
                <td>username</td>
                <td>
                    <!-- Add edit and delete links -->
                    <a href="#">Add</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
