<?php
require "../connection/dbConnect.php";
session_start();
?>

<html>

<head>
    <title>Home</title>
    <?php
    // includes the header nga naa sa includes nga folder
    include "../includes/header.php";
    ?>

</head>

<body>


    <div class="container-index">

        <div class="col-md-13">
            <!-- card creates container  -->
            <div class="card">
                <div class="card-header">
                    <!-- para wala na anng back button -->
                    <div class="input-group mb-3 mt-3">
                        <form action="../pages/view_search.php" method="GET" class="input-group">

                            <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                    } ?>" class="form-control form-control-sm" placeholder="Search" required>
                            <button type="submit" class="btn btn-secondary">Search</button>
                        </form>
                    </div>
                    <?php
                    include "view_date.php";
                    ?>

                </div>
                <div class="card-body">

                    <?php
                    include "../includes/message_alert.php";
                    ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Contact No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Cluster</th>
                                <th>Lomas</th>
                                <th>Chapel</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            // displaying data into table
                            $query = "SELECT * FROM attributes";
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $attributes) {
                                    // "with ? >  <?php, you can use html insde the <?php ? > tag"

                            ?>
                                    <tr>
                                        <td><?= $attributes['date']; ?></td>
                                        <td><?= $attributes['contnum']; ?></td>
                                        <td><?= $attributes['firstname']; ?></td>
                                        <td><?= $attributes['lastname']; ?></td>
                                        <td><?= $attributes['address']; ?></td>
                                        <td><?= $attributes['cluster']; ?></td>
                                        <td><?= $attributes['lomas']; ?></td>
                                        <td><?= $attributes['chapel']; ?></td>
                                        <td><?= $attributes['position']; ?></td>
                                        <td>
                                            <a href="edit_person.php?id=<?php echo $attributes['id']; ?>" class="btn btn-outline-primary btn-sm"><img src="../img/pencil.svg"></a>

                                            <form action="../actions/crud.php" method="post" class="d-inline">
                                                <button type="submit" class="btn btn-outline-danger btn-sm" name="delete_person" value="<?= $attributes['id']; ?>"><img src="../img/trash3.svg"></button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <div class="add-new">
        <a href="add_person.php"><img src="../img/pluss.png"></a>
    </div>
    <script src="../assets/js/script.js"></script>
</body>


</html>