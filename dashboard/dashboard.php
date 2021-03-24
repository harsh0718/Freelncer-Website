<?php  ob_start(); ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<?php include "links.php"?>

<body>
  <!--* Navigation Bar -->

  <?php include 'nav.php'; ?>

  <!-- Navigation Bar -->

  <!-- Carasol -->

  <?php include 'carousel.php'; ?>

  <!-- Carasol -->

  <!-- Categories section -->

  <?php include 'category.php'; ?>

  <!-- Categories section -->

  <!-- Footer Section -->

  <?php include "footer.php"  ?>

  <!-- Footer Section -->

  <!-- Button trigger modal -->
  <?php
        if(isset($_SESSION['username']))
        {
      ?>
  <button type="button" class="sticky-btn btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create New Gig
  </button>
  <?php } ?>

  <!-- Modal -->
  <?php 
    if(isset($_FILES['img']))
    {
         $file_name = $_FILES['img']['name']; 
         $file_size = $_FILES['img']['size']; 
         $file_tmp = $_FILES['img']['tmp_name']; 
         $file_type = $_FILES['img']['type'];
        
        move_uploaded_file($file_tmp,"../Admin-Panel/Gig_panel/Gig_image/".$file_name);
       
        $harsh_localhost = "Location:http://localhost/";
        $nitin_localhost = "Location:http://localhost:8080/";
       

        $gig_art_name = $_POST['art_name'];
        $gig_about = $_POST['about'];
        $gig_category = $_POST['category'];
        $gig_image = $_FILES['img']['name'];
        $gig_price = $_POST['price'];
        $gig_email = $_POST['email'];
        $gig_mobile_number = $_POST['mobile_number'];

        

        $conn = mysqli_connect("localhost","root","","inspireart") or die("Databse is not connect");
        $query = "insert into gig(art_name,about,category,img,price,email,mobile_number)
        values('{$gig_art_name}','{$gig_about}','{$gig_category}','{$gig_image}','{$gig_price}','{$gig_email}','{$gig_mobile_number}')";
        $result = mysqli_query($conn,$query) or die("Query Not Run");
        header("location:http://localhost/inspire-art/dashboard/gig.php");
        mysqli_close($conn);	

    }
    
    
  ?>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create New Gig</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="main-content">
            
            <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Artist Name</label>
                <input type="text" name="art_name" readonly value = "<?php echo $_SESSION['username'];?>"/>
              </div>
              <div class="form-group">
                <label style="vertical-align:top;">About</label>
                <textarea style="resize:none;" name="about" id="" class="textarea" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label>Category</label>
                <?php 
                    $conn = mysqli_connect("localhost","root","","inspireart");
                    $sql = "select * from category";

                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) > 0)
                    {
                      
                    
                  ?>
                <select name="category" id="">
                  <option value="0" selected disabled>Select</option>
                  <?php 
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                    }
                  ?>
                  
                </select>
                <?php }?>
              </div>
              <div class="form-group">
                <label>Media</label>
                <input type="file" name="img" />
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" />
              </div>  
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" />
              </div>
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="mobile_number" />
              </div>
          </div>
          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-success">Upload</button>
          </div>
      </div>
    </div>

    <script>
      const menuBtn = document.querySelector(".menu-icon span");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const items = document.querySelector(".nav-items");
      const form = document.querySelector("form");
      const sbtn = document.querySelector(".search-data");
      menuBtn.onclick = () => {
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        form.classList.remove("active");

      }
      cancelBtn.onclick = () => {
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#fd79a8";
      }
      searchBtn.onclick = () => {
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
      }
    </script>

</body>



</html>
<?php  ob_end_flush(); ?>
