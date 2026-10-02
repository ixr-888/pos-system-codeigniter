<!DOCTYPE html>
<html>
<head>
    <title>All Tasks - Tasks for Today</title>
</head>
<body>

    <h1>All Tasks</h1>

    <nav>
        <a href="/">Today</a> |
        <a href="/tasks">All Tasks</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a> |
        <a href="/tasks/new">New Task</a> |
        <a href="/logout">Logout</a>
    </nav>

    <br>

    <table border="1" cellpadding="8">

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Status</th>
            <th>Task Date</th>
            <th>Actions</th>
        </tr>

        <?php if (!empty($tasks)): ?>

            <?php foreach ($tasks as $task): ?>

                <tr>
                    <td><?= esc($task['id']) ?></td>

                    <td><?= esc($task['title']) ?></td>

                    <td><?= esc($task['status']) ?></td>

                    <td><?= esc($task['task_date']) ?></td>

                    <td>
                        <a href="/tasks/edit/<?= $task['id'] ?>">
                            Edit
                        </a>

                        |

                        <a href="/tasks/archive/<?= $task['id'] ?>"
                           onclick="return confirm('Archive this task?')">
                            Delete
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>
                <td colspan="5">No tasks found.</td>
            </tr>

        <?php endif; ?>

    </table>

</body>
</html>