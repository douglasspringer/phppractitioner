<!doctype html>
<html>
    <head>
        <title>PHPPractitioner</title>
        <style type="text/css">
            * {
                font-family: verdana;
                font-size: 1.02em;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="views/about.view.php">About Us</a></li>
                <li><a href="views/contact.view.php">Contact Us</a></li>
            </ul>
        </nav>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else: ?>
                    <?= $task->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>