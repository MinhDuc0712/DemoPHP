<!-- Kết nối CSDL -->
<!-- 1.Kết nối ->DB 
2.Viết SQL
4.Thực thi SQL
5.Xử lý KQ -->

<?php
//database:bookstore, host:localhost3306 (hoac localhost) 
// user:root, pw: ''
//su dung pdo de truy xuat hien thi ket qua table
// $o = new PDO('mysql:host=?;dbname=?','root','');
$o = new PDO('mysql:host=localhost;dbname=bookstore','root','');
$sql='select * from category';
$o2=$o->query($sql);
$data=$o2->fetchAll(PDO::FETCH_ASSOC);//lay du lieu array
echo '<pre>'; print_r($data);
?>

<table>
    <?php
    foreach($data as $i){
        ?>
        <tr>
            <td><?php echo $i['cat_id']?></td>
            <td><?php echo $i['cat_name']?></td>
        </tr>
        <?php
    }
    ?>
</table>