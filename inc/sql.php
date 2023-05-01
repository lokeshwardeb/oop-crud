<?php
// require "conn.php";
class sql extends Database{
    // $this-> connection();

    function write_sql($sql_query){
$connect = $this->connection();
$result = $connect->query($sql_query);

return $result;

// $result->
    }

    function show_data($sql_query){
        // write sql will return result so the write sql is the result value
        $result = $this->write_sql($sql_query);
        // while()

        $num_rows = $result->num_rows;
        if($num_rows > 0){
echo '
<table class="table  custom-default-box-bg-color mb-4 ">
      <thead>
        <tr>
          <th scope="col">SL.No</th>
         
          <th scope="col">id</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Datetime</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>';
   
$no = 1;
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
echo '
<tr class="hover-table">
        <th scope="row">'.$no++ . '</th>
       
        <td>'.$row['id'].'</td>
        <td>'.$row['title'].'</td>
        <td>'.$row['description'].'</td>
        <td>'.$row['datetime'].'</td>



  
        
        <td><a href="edit_data.php?id='.$id.'"> <button type="submit" class="btn btn-dark btn-sm">Edit Data</button></a></td>
        
        <td><a href="delete_data.php?id='.$id.'"> <button type="submit" class="btn btn-danger btn-sm">Delete Data</button></a></td>
      </tr>

';
            }



            echo '
            </tbody>
    </table>

            ';
        }else{
            echo '<div class= "text-center mt-4">No data available</div>';
        }
    }

    function get_data($sql_query){{

    }

    }

    // function insert_data($sql_query){
    //   $connect = $this->connection();
    //   $result = $connect->query($sql_query);

    // }


}

// class display_data  extends sql
// {
//     function show_data($sql_query){
// $result = $this->write_sql($sql_query);
//     }
// }




?>