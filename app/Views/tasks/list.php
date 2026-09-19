<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

    <h1>All Tasks</h1>

    <a href="/">Home</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>

    <hr>

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Task Date</th>
        </tr>

        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td><?= esc($task['task_date']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>