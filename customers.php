<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TSF Bank</title>
  <meta name="description" content=" A Banking System">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">

</head>

<body>
    <?php 
        include_once 'navbar.php';
        include 'config.php';
        $sql="Select * FROM data;";
        $result=mysqli_query($conn,$sql); 
    ?>
    <div class="tableBox">
        <div class="container">
            <table class="customers">
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Email Id</th>
                        <th>Account No.</th>
                        <th>Balance</th>
                        <th>Profile</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                       
                        while($rows= mysqli_fetch_assoc($result)){?>
                                <tr>
                                <td> <?php echo $rows['id'] ?> </td>
                                <td> <?php echo $rows['name'] ?> </td>
                                <td> <?php echo $rows['email'] ?> </td>
                                <td> <?php echo $rows['accno'] ?> </td>
                                <td> <?php echo $rows['balance'] ?> </td>
                                <td>
                                    <a href="userprofile.php?id= <?php echo $rows ['id'] ;?>">
                                    <button type="button" name="viewbtn" class="btnview" style="cursor: pointer;" >VIEW</button>
                                    </a>
                                </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table> 
            
        <button class="backbtn" onclick="location.href='index.php';" style="cursor: pointer;" >BACK</button>
        </div>
    </div>
</body>