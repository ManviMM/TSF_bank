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
  <link rel="stylesheet" type="text/css" href="css/userprofile.css">

</head>

<body>
    <?php 
        include_once 'navbar.php'; 
        include'config.php';
                $id=$_GET['id'];
                $query="SELECT * FROM data where id='$id';";
                $result = mysqli_query($conn,$query);
                $rows =  mysqli_fetch_assoc($result);
        
    ?>

    <div class="userProfile">
        <h1>User Profile</h1>
        <div class="container">          
            <div>
                    <table>
                        <tr>
                            <th>Account Number</th><br>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Current Balance</th>
                        </tr>
                        <tr>
                            <td><?php echo $rows['accno'] ?></td>
                            <td><?php echo $rows['name'] ?></td>
                            <td><?php echo $rows['email'] ?></td>
                            <td><?php echo $rows['balance'] ?></td>
                        </tr>
                    </table>
            </div>
            
            <h2 class="userTranscations">User Transcations : -</h2>
            <table class="history">
                <thead>
                    <tr>
                        <th>Sent to</th>
                        <th>Amount</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $sender = $rows['name'];

                    $sql = "SELECT receiver, balance,transcat  FROM history Where sender='$sender';";
                    $result = mysqli_query($conn,$sql);
                    while($rows= mysqli_fetch_assoc($result)){?>
                               <tr>
                               <td class="white"> <?php echo $rows['receiver'] ?> </td>
                               <td class="white"> <?php echo $rows['balance'] ?> </td>
                               <td class="white"> <?php echo $rows['transcat'] ?> </td>
                           </tr>
                   <?php } ?>
               </tbody>
           </table> 
        <div class="container flex">
            <button class="backbtn" onclick="location.href='customers.php';" style="cursor: pointer;">BACK</button>
            <!-- 
            <!-- Open Modal -->
            <button id="myBtn">Transfer</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">
            <!-- Modal content -->
                <div class="modal-content"> 
                <?php
                    include 'config.php';
                    $global_id=$_GET['id'];
                    $query="SELECT * FROM data where id='$id';";
                    $result = mysqli_query($conn,$query);
                    $rows =  mysqli_fetch_assoc($result); ?>

                    <span class="close">&times;</span>
                    <form action="transferuser.php" method="GET">
                        <label for="from">From :</label>
                        <input type="text" name="nameFrom" value="<?php echo $rows['name']?>">
                        <br>
                        <br>
                        <label for="to">Transfer To :</label>
                        <input type="text" name="nameTo" placeholder="Enter Name" required>
                        <br>
                        <br>
                        <label for="amount">Amount :</label>
                        <input type="text" name="amount" placeholder="Enter Amount" required>
                        <br>
                        <br>
                        <button name="confirm" class="confirm" value="confirm" type="confirm"  onclick="location.href='transfer.php';">Confirm</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
        modal.style.display = "block";
        }

        span.onclick = function() {
        modal.style.display = "none";
        }

        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
</body>
</html>