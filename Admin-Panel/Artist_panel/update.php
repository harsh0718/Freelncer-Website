<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="update.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    
    <?php
    if (isset($_POST['showbtn'])) {

        $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
        $art_id = $_POST['id'];
        $query = "select * from registration where id={$art_id}";
        $result = mysqli_query($conn, $query) or die("Query Not Run");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
    
                <form class="post-form" action="updatedata.php" method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                        <input type="email" name="email" value="<?php echo $row['email'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $row['username'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="number" value="<?php echo $row['number'] ?>" />
                    </div>
                    
                    <input class="submit" type="submit" value="Update" 
                    name = "update"/>
                </form>
    <?php
            }
        }
    }
    ?>
    
</div>
</div>
</body>

</html>