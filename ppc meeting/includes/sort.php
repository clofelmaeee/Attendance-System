<html>
        <?php
            require "../connection/dbConnect.php";
        ?>
        
    <form action="" method="GET">
        <div class="input-group mb-3 mt-3">
            <select name="sort" id="">
                <option value="">--Select Option--</option>
                <option value="a-z" <?php if(isset($_GET['sort']) && $_GET['sort'] == "a-z"){echo"selected";}?> > A-Z (Ascending Order)</option>
                <option value="z-a" <?php if(isset($_GET['sort']) && $_GET['sort'] == "z-a"){echo"selected";}?>>Z-A (Descending Order)</option>
            </select>
            <button type="submit" class="btn btn-primary btn-sm">Sort</button>
        
    </form>
    
</html>