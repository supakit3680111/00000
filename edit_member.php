<?php
include 'condb.php';
$id=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row"> 
            <div class="col-sm-6">      
                <div class="h4 text-center alert alert-success mb-4 mt-4 " role="alert"> แก้ไขข้อมูลสมาชิก </div>
                <form method="POST" action="update_member.php">
                    <label>รหัสสมาชิก</label>
                    <input type="text" name="id_mem" class="form-control" readonly value=<?=$row['id']?> > <br>
                    <label>ชื่อ</label>
                    <input type="text" name="fname" class="form-control" value=<?=$row['name']?> > <br>
                    <label>นามสกุล</label>
                    <input type="text" name="lname" class="form-control" value=<?=$row['surname']?> > <br>
                    <label>เบอร์โทรศัพท์</label>
                    <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?> > <br>
                    <input type="submit" value="Update" class="btn btn-dark mt-3">
                    <a href="show_member.php" class="btn btn-danger mt-3">Cancel</a>
                </form>
                </div>
            </div>
        </div>
</body>
</html>