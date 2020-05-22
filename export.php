<?php
 if(isset($_POST["export"]))
 {
      $connect = mysqli_connect("localhost", "root", "", "softeng-iparker-db");
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename='.date("Y/m/d").'-parking-data.csv');
      $output = fopen("php://output", "w");
      fputcsv($output, array('ID', 'LICENSE PLATE', 'TIME-IN', 'TIME-OUT', 'DATE'));
      $query = "SELECT * from vehicles ORDER BY parking_id DESC";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_assoc($result))
      {
           fputcsv($output, $row);
      }
      fclose($output);
 }
 ?>
