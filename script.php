<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Body Temp (in C)</th>
            <th scope="col">Room Temp (in C)</th>
            <th scope="col">Humidity (in %)</th>
            <th scope="col">Pulse Rate (in BPM)</th>
            <th scope="col">Oxygen Level (in %)</th>
            <th scope="col">Time</th>
            <th scope="col">Date</th>
        </tr>
    </thead>

    <tbody id="data-table-body">
        <?php
        require("config.php");
        $sr = 1;
        $sql = mysqli_query($con, "SELECT * FROM data ORDER BY id DESC");
        while ($pr = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <th scope="row"><?php echo $sr++; ?></th>
                <td><?php echo $pr['body_temp']; ?></td>
                <td><?php echo $pr['room_temp']; ?></td>
                <td><?php echo $pr['humidity']; ?></td>
                <td><?php echo $pr['pulse_rate']; ?></td>
                <td><?php echo $pr['oxy_lvl']; ?></td>
                <td><?php echo $pr['time']; ?></td>
                <td><?php echo $pr['date']; ?></td>
                <td><a href="delete1.php?key=<?php echo $pr['hashid']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>