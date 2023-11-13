<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">
    <link rel="stylesheet" type="text/css" href="css/catalog_header.css">
    <title>Аптека</title>
</head>

<body>

    <?php include "components/general/header.php"; ?>
    <?php include "components/catalog_header.php"; ?>
    <?php
    include "router.php";

    route('/', function () {
        include "pages/main.php";
    });
    
    route('/catalog', function () {
        include "pages/catalog.php";
    });

    route('/backet', function () {
        include "pages/backet.php";
    });

    route('/favorites', function () {
        include "pages/favorites.php";
    });

    route('/login', function () {
        include "pages/login.php";
    });

    route('/registration', function () {
        include "pages/registration.php";
    });

    route('/account', function () {
        include "pages/account.php";
    });
    

    route('/about', function () {
        include "pages/about.php";
    });

    route('/delivery', function () {
        include "pages/delivery.php";
    });

    route('/contacts', function () {
        include "pages/contacts.php";
    });

    route('/branches', function () {
        include "pages/branches.php";
    });

    $action = $_SERVER['REQUEST_URI'];
    dispatch($action);
    ?>

    <?php include "components/general/footer.php"; ?>

</body>

</html>