<?php
require "../connection/dbConnect.php";
?>
<html>

<head>
    <title>Add New</title>
    <?php
    include "../includes/header.php";
    ?>

</head>

<body>
    <div class="container-index">
       
            <div class="card-body">
                <form action="../actions/crud.php" method="POST" class="form">
                    <div class="head text-center text-white mt-3">
                        Add New Attendee
                    </div>

                    <div class="date">
                    <?php date_default_timezone_set("Asia/Manila");
                            echo "Date: " . date("Y/M/d"); ?>
                    </div><br><br>

                    <div class=" input-group">

                        <label for="date" class="input-labels">Date</label>
                        <input type="text" class="form-control form-control-sm" name="date" value="<?= date("Y/m/d"); ?>">

                        <label for="firstname " class="input-labels">First Name</label>
                        <input type="text" class="form-control form-control-sm" name="firstname" placeholder="First Name" required>
                       
                        <label for="lastname" class="input-labels">Last Name</label>
                        <input type="text" class="form-control form-control-sm" name="lastname" placeholder="Last Name">

                    </div><br>

                    <div class=" input-group">

                        <label for="contnum" class="input-labelprimary">Contact No</label>
                        <input type="number" class="form-control form-control-sm" name="contnum" placeholder="Contact Number">
                        
                        <label for="address" class="input-label">Address</label>
                        <input type="text" class="form-control form-control-sm" name="address" placeholder="Address">
                        
                        <label for="chapel" class="input-labels">Chapel</label>
                        <input type="text" class="form-control form-control-sm" name="chapel" placeholder="Chapel">

                    </div><br>

                    <div class="input-group">

                        <label for="cluster" class="input-label">Cluster</label>
                        <select name="cluster" id="cluster" class="form-control form-control-sm">
                            <option value="">---Select Cluster---</option>
                            <option value="Cluster 1">Cluster 1</option>
                            <option value="Cluster 2">Cluster 2</option>
                            <option value="Cluster 3">Cluster 3</option>
                            <option value="Cluster 4">Cluster 4</option>
                            <option value="Cluster 5">Cluster 5</option>
                        </select>
                        
                        <label for="lomas" class="input-label">Lomas</label>
                        <select name="lomas" id="lomas" class="form-control form-control-sm">
                            <option value="">---Select Lomas---</option>
                            <option value="Acolytes">Acolytes</option>
                            <option value="Catechists">Catechists</option>
                            <option value="Choir">Choir</option>
                            <option value="Collector">Collector</option>
                            <option value="Parish Youth Coordinating Council">Parish Youth Coordinating Council</option>
                            <option value="Parish Pastoral Council">Parish Pastoral Council</option>
                            <option value="Singles For Christ">Singles For Christ</option>
                        </select>

                        <label for="position" class="input-labels">Position</label>
                        <input type="text" class="form-control form-control-sm" name="position" placeholder="Position">
                    </div><br>

                    <div class="d-grid gap-4 d-md-flex col-2 mx-auto">
                        <a href="index.php" class="btn btn-primary">Back</a>
                        <input type="submit" name="add_person" value="Add" class="btn btn-primary">
                    </div>
                </form>
            </div>
    
    </div>
</body>

</html>