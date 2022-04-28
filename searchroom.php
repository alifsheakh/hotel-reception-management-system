<?php

 include 'conn.php';
 if(isset($_POST['input'])){
     $input = $_POST['input'];
     $query = "SELECT room.RoomNo, customer.ID, customer.Name, room.RoomType FROM room
     INNER JOIN customer ON room.RoomNo = customer.RoomNo AND room.RoomNo = $input";

     $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res)>0){?>

        <table class = 'table table-bordered table-striped mt-4'>
            <thead>
                <tr class="bg-info text-white text-center">
                    <th> Room No </th>
                    <th> Customer ID </th>
                    <th> Customer Name </th>
                    <th> Room Type </th>

                </tr>
            </thead>

            <tbody>
                <?php
                
                while ($row = mysqli_fetch_assoc($res)){
                    $roomno = $row['RoomNo'];
                    $id = $row['ID'];
                    $name = $row['Name'];
                    $roomtype = $row['RoomType'];
                    ?>

                    <tr>
                        <td><?php echo $roomno;?></td>
                        <td><?php echo $id;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $roomtype;?></td>
                    </tr>

                    <?php
                }

                ?>

        </table>

        <?php
    }
    else{
        echo "<h5 class = 'text-danger text-center mt-3'>No data Found</h5>";
    }
 }


 ?>