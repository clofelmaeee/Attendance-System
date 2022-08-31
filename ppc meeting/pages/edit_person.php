<?php
require "../connection/dbConnect.php";
?>
<html>

<head>
    <title>Update</title>
    <?php
    // includes the header nga naa sa includes nga folder
    include "../includes/header.php";
    include "../includes/sidebar.php";
    ?>
</head>

<body>
    <div class="container-index">
            <div class="card-body">
                <!-- retrieving data from the  database and assigning the data sa kada input -->
                <?php
                if (isset($_GET['id'])) {
                    //gi-retrieve ng data gikas sa database
                    $id = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM attributes WHERE id = '$id' ";
                    $result = mysqli_query($con, $query);


                    // to check rows sa database use SELECT COUNT(*) FROM tablename 
                    if (mysqli_num_rows($result) > 0) {

                        // mysqli_fetch_array() function is used to feth rows from the database and store them
                        // as an array
                        $attributes = mysqli_fetch_array($result);

                ?>
                        <form action="../actions/crud.php" method="POST" class="form ">

                            <div class="head text-center text-white mt-3">
                                Update Attendee
                            </div>
                            <div class="date">
                                <?php date_default_timezone_set("Asia/Manila");
                                echo "Date: " . date("Y/M/d"); ?>
                            </div> <br><br>

                            <input type="hidden" name="id" value="<?= $attributes['id']; ?>">


                            <div class="input-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control form-control-sm" name="date" value="<?= $attributes['date']; ?>">

                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control form-control-sm" name="firstname" value="<?= $attributes['firstname']; ?>" required>

                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control form-control-sm" name="lastname" value="<?= $attributes['lastname']; ?>" required>
                            </div><br>

                            <div class="input-group">
                                <label for="contnum">Contact No</label>
                                <input type="number" class="form-control form-control-sm" name="contnum" value="<?= $attributes['contnum']; ?>">
                            
                                <label for="address">Address</label>
                                <input type="text" class="form-control form-control-sm" name="address" value="<?= $attributes['address']; ?>">

                                <label for="chapel">Chapel</label>
                                <input type="text" class="form-control form-control-sm" name="chapel" value="<?= $attributes['chapel']; ?>">

                            </div><br>

                            <div class="input-group">

                            <label for="cluster">Cluster</label>
                                <select name="cluster" id="cluster" class="form-control form-control-sm">
                                    <option hidden><?php echo $attributes['cluster']; ?></option>
                                    <option value="Cluster 1">Cluster 1</option>
                                    <option value="Cluster 2">Cluster 2</option>
                                    <option value="Cluster 3">Cluster 3</option>
                                    <option value="Cluster 4">Cluster 4</option>
                                    <option value="Cluster 5">Cluster 5</option>
                                </select>
                                
                                <label for="lomas">Lomas</label>
                                <select type="text" name="lomas" id="lomas" class="form-control form-control-sm">
                                    <option hidden><?php echo $attributes['lomas']; ?></option>
                                    <option>Acolytes</option>
                                    <option>Catechists</option>
                                    <option>Choir</option>
                                    <option>Collector</option>
                                    <option>Parish Youth Coordinating Council</option>
                                    <option>Parish Pastoral Council</option>
                                    <option>Singles For Christ</option>
                                </select>

                                <label for="position">Position</label>
                                <input type="text" class="form-control form-control-sm" name="position" value="<?= $attributes['position']; ?>">
                            </div> <br>

                            <div class="input-group">
                               
                            </div>

                            <div class="col-4">
                               
                            </div>

                            <div class="col-4">
                               
                            </div>

                            <div class="col-4">
                                
                            </div>

                            <div class="input-group ">
                               
                            </div>

                            <div class="input-group">
                               
                            </div>

                            <div class="d-grid gap-4 d-md-flex col-2 mx-auto">
                                <a href="index.php" class="btn btn-primary">Back</a>
                                <input type="submit" name="update_person" value="Save Changes" class="btn btn-primary">

                            </div>
                        </form>

                <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
    </div>

</body>

</html>