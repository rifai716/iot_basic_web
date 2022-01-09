<h2>List History Sensor</h2>
<table border="1">
    <tr><th>NO</th><th>WAKTU</th><th>HUMIDITY</th><th>TEMPERATURE</th><th>LDR</th></tr>
    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from history_sensor");
    $no=1;
    foreach ($data as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['waktu']."</td>
            <td>".$row['humidity']."</td>
            <td>".$row['temperature']."</td>
            <td>".$row['ldr']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>