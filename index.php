<?php
// header section
require "inc/_header.php";

// connection 
require "inc/conn.php";

require "inc/sql.php";

include "inc/functions.php";

// new sql;

?>
<!-- main section starts here -->



    <main>
<div class="container">


<?php
$sql = new sql;

if(isset($_POST['submit'])){
$title = $_POST['title'];
$desc = $_POST['desc'];

$result = $sql->write_sql("INSERT INTO `data` (`title`, `description`) VALUES ('$title', '$desc');");

if($result){
echo alert_success("Data added successfully");
}else{
   echo alert_error("cannot added the data");
}

}



?>



<div class="container mt-4 mb-4">
    <div class="container text-center">
       <h2>Oop-crud</h2> 
    </div>
<form action="" method="post">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control mt-2 mb-2">
    <label for="desc" class="form-label">Description</label>
    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control mt-2 mb-4"></textarea>
    <button type="submit" class="btn btn-primary" name="submit">Insert Data</button>
</form>
</div>


<?php

// show data from the db
$sql = new sql;
$sql->show_data("SELECT * FROM `data`");

?>


</div>
    </main>

<!-- main section ends here -->

<?php
// footer section
require "inc/_footer.php";
?>