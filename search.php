<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Search</title>
</head>
<body>
    <form action="search.php" method="POST">
        <input type="text" name="q" placeholder="Search Items..." id="">
        <select name="column" id="">
            <option value="">Search All</option>
            <option value="classifieds">Classifieds</option>
            <option value="directories">Directories</option>
            <option value="events">Events</option>
        </select>
        <input type="submit" name="submit" value="Search">
    </form>
    <?php require_once('php_search.php') ?>
</body>
</html>