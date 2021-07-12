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
        $sql="Select * FROM history;";
        $result=mysqli_query($conn,$sql); 
    ?>
    <div class="tableBox">
        <div class="container">
            <h1>TRANSCATION HISTORY</h1>
            <table class="customers">
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Date & Time</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                       while($rows= mysqli_fetch_assoc($result)){?>
                                <tr>
                                <td> <?php echo $rows['id'] ?> </td>
                                <td> <?php echo $rows['transcat'] ?> </td>
                                <td> <?php echo $rows['sender'] ?> </td>
                                <td> <?php echo $rows['receiver'] ?> </td>
                                <td> <?php echo $rows['balance'] ?> </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>    
        </div>
    </div>
</body>