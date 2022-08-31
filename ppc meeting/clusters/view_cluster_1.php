<?php
include "./button_top_c.php";

?>
<html>
<div class="container-index">
    <table class="table table-bordered table-striped">
        <?php
        include "../includes/message_alert.php";
        ?>
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
            $query = "SELECT * FROM `attributes` WHERE `cluster`= 'Cluster 1'";
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
            ?>
        </tbody>
    </table>
</div>

</html>