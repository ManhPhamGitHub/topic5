<?php 
 include("config.php");
 $id = $_GET['id'];
 $sql = "SELECT * FROM nguoitinhnguyen WHERE bd_id = $id";
 $res = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($res);
    if($count > 0){
        while($row = mysqli_fetch_assoc($res)){
            $id = $row['bd_id'];
            $name = $row['bd_name'];
            $sex = $row['bd_sex'];
            $age = $row['bd_age'];
            $bgroup = $row['bd_bgroup'];
            $reg_date = $row['bd_reg_date'];
            $phone = $row['bd_phone'];
        }
    }else{
        echo "<h1>ID sai roi</h1>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
  <div class="form-group">
    <label for="name">name</label>
    <input value="<?php echo $name ?>" type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
  </div>
  
  <div class="custom-control custom-radio">
    <input checked="<?php if($sex == "nam") echo "checked"
    ?>" type="radio" id="Nam" name="sex"  class="custom-control-input" required>
    <label class="custom-control-label" for="Nam">Nam</label>
  </div>
  <div class="custom-control custom-radio">
    <input checked="<?php if($sex == "nu") echo "checked" ?>" type="radio" id="Nu" name="sex" class="custom-control-input" >
    <label class="custom-control-label" for="Nu">Nu</label>
  </div>

  <div class="form-group">
    <label for="age">age</label>
    <input value="<?php echo $age ?>" type="text" class="form-control" id="age" name="age" placeholder="Enter age" required>
  </div>
  <div class="form-group">
    <label for="bloodGroup">blood group	</label>
    <input value="<?php echo $bgroup ?>" type="text" class="form-control" id="bloodGroup" name="bloodGroup" placeholder="Enter blood group" required>
  </div>
  <div class="form-group">
    <label for="regDate">reg date	</label>
    <input value="<?php echo $reg_date ?>" type="date" class="form-control" id="regDate" name="regDate" placeholder="Enter reg date" required>
  </div>
  <div class="form-group">
    <label for="phone">phone number    </label>
    <input value="<?php echo $phone ?>" type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $bloodGroup = $_POST['bloodGroup'];
    $regDate = $_POST['regDate'];
    $phone = $_POST['phone'];
if($count > 0){
    $sql3="UPDATE nguoitinhnguyen SET 
    bd_id= '$id',
    bd_name='$name',
    bd_sex='$sex',
    bd_age='$age',
    bd_bgroup='$bloodGroup',
    bd_reg_date='$regDate',
    bd_phone='$phone' WHERE bd_id = $id";
    $check = mysqli_query($conn,$sql3);
    echo $sql3;
    if($check == TRUE){
        header("location:".SITE_URL."/details.php");
    }else{
        echo "<h1>ban nhap sai form roi </h1>";
        echo " <a href=".SITE_URL.">quay lai trang chu </a>";
    }
}else{
    echo "<h1>khong tim thay id</h1>";
    echo "<a href=".SITE_URL.">quay lai trang chu </a>";
}
}

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
