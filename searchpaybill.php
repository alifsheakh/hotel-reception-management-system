<?php

 include 'conn.php';
 if(isset($_POST['input'])){
     $input = $_POST['input'];
     $query = "SELECT customer.ID, customer.Name, room.RoomNo, pay_bill.TotalAmount FROM customer,room,pay_bill 
     WHERE customer.ID = pay_bill.CustomerID AND room.RoomNo = customer.RoomNo AND pay_bill.CustomerID = $input";

     $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res)>0){?>

        <table class = 'table table-bordered table-striped mt-4'>
            <thead>
                <tr class="bg-info text-white text-center">
                    <th> ID </th>
                    <th> Name </th>
                    <th> Room No </th>
                    <th> Total Amount </th>

                </tr>
            </thead>

            <tbody>
                <?php
                
                while ($row = mysqli_fetch_assoc($res)){
                    $id = $row['ID'];
                    $name = $row['Name'];
                    $roomno = $row['RoomNo'];
                    $totalamount = $row['TotalAmount'];
                    ?>

                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $roomno;?></td>
                        <td><?php echo $totalamount;?></td>
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