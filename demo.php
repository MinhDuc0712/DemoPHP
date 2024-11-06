<?php
function BCC($n,$c1='red',$c2='green')
{
    ?>
    <table border="1">
        <?php
        for($i=1;$i<=10;$i++)
        {
            $c=$i%2?$c2:$c1;
            ?>
            <tr bgcolor="<?php echo $c ?>">
                <td><?php echo $n ?></td>
                <td><?php echo $i ?></td>
                <td><?php echo $n*$i ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
bcc(8);