<!-- this is THE header - Should included in all forms or pages -->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- style.css    -->
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>

    <header>
        <?php
        include "../includes/sidebar.php";
        ?>

        <div class="header-top">

            <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img id="openNav" src="../img/home.png"></span>

            <a href="../pages/index.php">
                <h1> ATTENDANCE</h1>
            </a>
        </div>
    </header>
    <script src="../assets/js/script.js"></script>

</body>


</html>