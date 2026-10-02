<!DOCTYPE html>
<html>
<head>
    <title>New Task - Tasks for Today</title>
</head>
<body>

    <h1>New Task</h1>

    <nav>
        <a href="/">Today</a> |
        <a href="/tasks">All Tasks</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a> |
        <a href="/logout">Logout</a>
    </nav>

    <br>

    <?php if (session()->getFlashdata('errors')): ?>

        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>

    <form action="/tasks/create" method="post">

        <p>
            <label>Task Title:</label><br>
            <input
                type="text"
                name="title"
                value="<?= old('title') ?>"
                required
            >
        </p>

        <p>
            <label>Status:</label><br>
            <select name="status">
                <option value="pending">Pending</option>
                <option value="done">Done</option>
            </select>
        </p>

        <p>
            <label>Task Date:</label><br>
            <input
                type="date"
                name="task_date"
                value="<?= old('task_date') ?>"
                required
            >
        </p>

        <button type="submit">Create Task</button>

    </form>

    <br>

    <a href="/tasks">Cancel</a>

</body>
</html>