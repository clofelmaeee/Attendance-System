<html>
<div class="card-header">

        <div class="input-group mb-3 mt-3">
                <form action="../pages/view_search.php" method="GET" class="input-group">
                        <a href="../pages/index.php" class="btn"><img src="../img/arrow-left.svg"></a>
                        <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                } ?>" class="form-control form-control-sm" placeholder="Search" required>
                        <button type="submit" class="btn btn-secondary">Search</button>
                </form>
        </div>

</html>