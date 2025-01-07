<?php
    require("config.php");
    if(!empty($_GET))
    {
        $hashid = $_GET['key'];
        $sql = mysqli_query($con,"DELETE FROM data WHERE hashid = '$hashid'");
        if($sql)
        {
            ?>
                <script>
                    alert("Deleted!!");
                    window.location = 'index.php';
                </script>
            <?php
        }
    }
        ?>