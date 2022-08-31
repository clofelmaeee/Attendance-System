<?php
require "../connection/dbConnect.php";
?>
<html>

<head>
    <title>Search</title>
    <?php
    // includes the header nga naa sa includes nga folder
    include "../includes/header.php";
    include "../includes/sidebar.php";

    ?>
</head>

<body>
    <div class="container-index">
        <div class="row">
            <div class="col-md-13">
                <!-- card creates container  -->
                <div class="card">
                    <?php
                    include "../includes/search_box.php";
                    ?>
                </div>
                <div class="card-body">

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
                            if (isset($_GET['search'])) {

                                $searchdata = $_GET['search'];
                                $query = "SELECT * FROM attributes WHERE CONCAT(date,contnum,firstname, lastname,address, cluster, lomas, chapel, position) 
                                        LIKE '%$searchdata%'";
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

                                                <form action="../actions/crud.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_person" value="<?= $attributes['id']; ?>" class="btn btn-outline-danger btn-sm"><img src="../img/trash3.svg"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>No Record Found</td>
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
    </div>
</body>
<script src="../assets/js/sidebar.js"></script>

</html>