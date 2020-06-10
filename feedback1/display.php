<?php 
    require 'dbconnect.php';
    $res=mysqli_query($scon,"select * from cts");
      while($row=mysqli_fetch_assoc($res))
    {
        $name=$row['name'];
        $comments=$row['comments'];
        ?><input type="label" value="<?php echo $name?>"/><br>
        <input type="label" value="<?php echo $comments?>"/><br><br>
        <?php
      }
?>
        