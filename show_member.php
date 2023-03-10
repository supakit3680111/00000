<?php 
include 'condb.php';
$id=$GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div class="h4 text-center alert alert-success mb-4 mt-4 " role="alert">แสดงข้อมูลสมาชิก</div>
    <a href="fr_member.php" class="btn btn-success mb-4 ">add</a>
    
    <table class="table table-striped">
        <tr>
            <th>รหัส</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    <?php
    $sql = "SELECT * FROM member";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["surname"]?></td>
            <td><?=$row["telephone"]?></td>
            <td><a href="edit_member.php?id=<?=$row["id"]?>"  class="btn btn-warning">Edit</a></td>
            <td><a href="delete_member.php?id=<?=$row["id"]?>"  class="btn btn-danger" onclick="Del(this.href);return false;">Delete</a></td>

        </tr>
    <?php
    }
    mysqli_close($conn); //ปิดการเชื่อมต่อข้อมูล
    ?>
    </table>
</div>
</body>
</html>

<script language="Javascript">
    function Del(mypage){
        var agree=confirm("คุณต้องการจะลบข้อมูลหรือไม่");
        if(agree){
            window.location=mypage;
        }
    }
</script>