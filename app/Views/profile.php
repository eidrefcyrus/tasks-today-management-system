<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

    <h1>Demo User Profile</h1>

    <a href="/">Home</a> |
    <a href="/tasks">Task List</a> |
    <a href="/about">About</a>

    <hr>

    <?php if ($user): ?>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
    <?php else: ?>
        <p>No user record found.</p>
    <?php endif; ?>

</body>
</html>