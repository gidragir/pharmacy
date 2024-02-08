<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Location" content="/">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/general.css">
    <link rel="stylesheet" type="text/css" href="assets/css/catalog_header.css">
    <title>Гипокрена</title>
</head>

<body>
    <?php
    @ob_start();
    session_start();
    
    include "router.php";
    include "configs/databaseconnect.php";
    include "assets/php/components/general/header.php";
    include "assets/php/components/catalog_header.php";

    route('/product', function ($id) {
        include "assets/php/pages/product.php";
    });

    route('/', function () {
        include "assets/php/pages/main.php";
    });

    route('/catalog', function ($page = 1, $product = null) {
        include "assets/php/pages/catalog.php";
    });

    route('/backet', function () {
        include "assets/php/pages/backet.php";
    });

    route('/login', function () {
        include "assets/php/pages/login.php";
    });

    route('/registration', function () {
        include "assets/php/pages/registration.php";
    });

    route('/account', function () {
        include "assets/php/pages/account.php";
    });


    route('/about', function () {
        include "assets/php/pages/about.php";
    });

    route('/delivery', function () {
        include "assets/php/pages/delivery.php";
    });

    route('/contacts', function () {
        include "assets/php/pages/contacts.php";
    });

    route('/branches', function () {
        include "assets/php/pages/branches.php";
    });

    $action = $_SERVER['REQUEST_URI'];
    dispatch($action);


    include "assets/php/components/general/footer.php";
    ?>
</body>

</html>