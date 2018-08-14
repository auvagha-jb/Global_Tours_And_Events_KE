<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global Tours and Events KE</title>
<!--    <link href="css/admin-header.css" rel="stylesheet" type="text/css">-->
    <link href="css/admin-addpackage.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
</header>
<br>
<br>
<?php require './nav-bar.php'; ?>
<section id="side-bar">
    <div id="package-form">
        <form method="post" action="php/admin-addpackage.php">
            <label>Name of the Package</label>
            <br>
            <input type="text" name="package_name" placeholder="Enter the package name">
            <br>
            <label>Price of the package</label>
            <br>
            <input type="text" name="package_price" placeholder="Enter the package price">
            <br>
<!--            <label>Package Details</label>
            <br>
            <input type="text" name="package_locations" placeholder="Enter the package locations">
            <br>
            <br>-->
            <!--<button type="submit">ADD PACKAGE</button>-->
            <button type="submit">ADD PACKAGE</button>
        </form>
    </div>
</section>

</body>
</html>
