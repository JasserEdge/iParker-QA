<?php 
include("dbConnection.php");

      $result = mysqli_query($con,"SELECT * FROM vehicles ORDER BY parking_id DESC");
      while($row = mysqli_fetch_assoc($result)){
      			
      echo " <tr>
                <td>".$row['parking_id']."</td>
                <td>".$row['license_plate']."</td>
                <td>".$row['time_in']."</td>
                <td>".$row['time_out']."</td>
                <td>".$row['date']."</td>
          </tr>";
      }
      ?>