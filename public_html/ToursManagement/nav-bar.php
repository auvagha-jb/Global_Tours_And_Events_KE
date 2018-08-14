<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <link href="css/admin-header.css" rel="stylesheet" type="text/css">
</head>

<body>
    
</body>
    <div id="btn">
        <div id='top'></div>
        <div id='middle'></div>
        <div id='bottom'></div>
    </div>

    <div id="box">
        <div id="items">
            <a href="admin-home.php" class="item"><img src="img/home.png">Dashboard</a>
            <br>
            <a href="admin-packages.php" class="item"><img src="img/view.png">All Packages</a>
            <br>
            <a href="view-users.php" class="item"><img src="img/view.png">View Users</a>
            <br>
            <a href="admin-booked.php" class="item"><img src="img/booked.png">Booked Packages</a>
            <br>
            <a href="admin-addpackage.php" class="item"><img src="img/add.png">Add Packages</a>
            <br>
            <a href="php/admin-logout.php" class="item"><img src="img/logout.png">Log Out</a>
            <br>
        </div>
    </div>

<script type="text/javascript">
    var sidebarBox = document.querySelector('#box'),
        sidebarBtn = document.querySelector('#btn'),
        pageWrapper = document.querySelector('#page-wrapper');

    sidebarBtn.addEventListener('click', function (event) {
        sidebarBtn.classList.toggle('active');
        sidebarBox.classList.toggle('active');
    });

    pageWrapper.addEventListener('click', function (event) {

        if (sidebarBox.classList.contains('active')) {
            sidebarBtn.classList.remove('active');
            sidebarBox.classList.remove('active');
        }
    });

    window.addEventListener('keydown', function (event) {

        if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
            sidebarBtn.classList.remove('active');
            sidebarBox.classList.remove('active');
        }
    });
</script>
</html>
