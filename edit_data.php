<?php
$get_data = $_GET['id'];

require "inc/conn.php";
require "inc/sql.php";
require "inc/_header.php";
require "inc/functions.php";

$sql = new sql;

$result = $sql ->write_sql("SELECT * FROM `data` WHERE `id` = '$get_data'");


if($result){
    $get_num_rows = $result->num_rows;
    $desc_show = '';
    $title_show = '';
    if($get_num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            $title_show = $row['title'];
            $desc_show = $row['description'];
        }
   

      




    }
?>
<div class="container mt-4">
   <h2 class="text-center">Are you want to update the data?</h2> 
<?php

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $desc = $_POST['desc'];

        $result_upd = $sql ->write_sql("UPDATE `data` SET `title` = '$title', `description` = '$desc' WHERE `data`.`id` = '$get_data';");

        if($result_upd){
            echo alert_success("Data updated successfully");
        }else{
            echo alert_error("Data cannot updated successfully");
        }
    }




}





?>


<?php
// $sql_new = new sql;

// $res = $sql_new->write_sql("SELECT * FROM `data` WHERE `id` = 11");
// $title_show_new = '';
// $desc_show_new = '';
// if($res){
//     while ($row = $result->fetch_assoc()) {
//         $title_show_new = $row['title'];
//         $desc_show_new = $row['description'];
//     }
// }

?>



<div class="container mt-4 mb-4">
    <a href="./"><button class="btn btn-outline-primary mb-4 mt-2 btn-sm">Back</button></a>
<form action="" method="post">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control mt-2 mb-2" value="<?php echo $title_show ?>">
    <label for="desc" class="form-label">Description</label>
    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control mt-2 mb-4"><?php echo $desc_show ?></textarea>
    <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
</form>
</div>

</div>
<?php
require "inc/_footer.php";
?>