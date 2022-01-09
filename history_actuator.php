<h2>List History Actuator</h2>
<table border="1">
    <tr><th>NO</th><th>WAKTU</th><th>TYPE</th><th>STATE</th></tr>
    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from history_actuator");
    $no=1;
    foreach ($data as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['waktu']."</td>
            <td>".$row['type']."</td>
            <td>".$row['state']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>