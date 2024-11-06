<?php
function BCC($n,$color){
    ?>
    <table border=1, bgcolor='<?php echo $color ?>'>
        <?php
        for ($i=1; $i <=10; $i++) { 
            ?>
           
            <tr>
                <td><?php echo $n ?></td>
                <td><?php echo $i?></td>
                <td><?php echo $n*$i?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}