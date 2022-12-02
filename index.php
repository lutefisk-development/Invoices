<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/dist/style.css">
    <title>Invoices</title>
</head>
<body>
    <?php
    require_once __DIR__ . "/vendor/autoload.php";

    use Dotenv\Dotenv;
    use Invoices\Repositories\Database;


    (Dotenv::createImmutable(__DIR__))->load();
    $db = new Database();

    $sql = "SELECT * FROM users";
    $stmt = $db->connection()->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($users) {
        echo '<pre>';
        foreach ($users as $user) {
            var_dump($user);
        }
        echo '</pre>';
    }
    ?>
    <script src="public/dist/app.js"></script>
</body>
</html>



