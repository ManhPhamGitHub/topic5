<?php include('config.php') ?>
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
    
    <h1 class="text-center"> Nguoi tinh nguyen</h1>
    <a href="<?php echo SITE_URL ?>">quay lai trang chu </a>
    <table class="table table-hover">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name </th>
            <th scope="col"> sex </th>
            <th scope="col"> age </th>
            <th scope="col"> blood group </th>
            <th scope="col"> reg date </th>
            <th scope="col"> phone number </th>
</tr>

    <?php
        $sql = 'SELECT * FROM nguoitinhnguyen';
        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count = 0){
            die;
        }
        while($row = mysqli_fetch_assoc($res)){
                $id = $row['bd_id'];
                $name = $row['bd_name'];
                $sex = $row['bd_sex'];
                $age = $row['bd_age'];
                $bgroup = $row['bd_bgroup'];
                $reg_date = $row['bd_reg_date'];
                $phone = $row['bd_phone'];
        ?>
        <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $sex ?></td>
        <td><?php echo $age ?></td>
        <td style="text-transform: uppercase"><?php echo $bgroup ?></td>
        <td><?php echo $reg_date ?></td>
        <td><?php echo $phone ?></td>
        <td><a href="<?php echo SITE_URL.'/update.php?id='.$id?>">EDIT</a></td> 
        <td><a href="<?php echo SITE_URL.'/delete.php?id='.$id?>">DELETE</a></td> 
    </tr>
    <?php
        }
    ?>

</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>