<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TSF Bank</title>
  <meta name="description" content=" A Banking System">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/transferuser.css">

</head>

<body>
    <?php 
        include_once 'navbar.php';
    ?>

    <div class="section-transfer">
      <div class="container transferCard">
        <h1>TRANSFER MONEY</h1>
        <div class="flex">
          <form>
            <label for="from">FROM :</label>
            <input type="text"  name="nameFrom" placeholder="Enter Name" value="<?php echo $_GET['nameFrom']; ?>">
            <br>
            <br>
            <label for="to">To :</label>
            <input type="text" name="nameTo" placeholder="Enter Name" value="<?php echo $_GET['nameTo']; ?>">
            <br>
            <br>
            <label for="amount">AMOUNT :</label>
            <input type="text" name="amount" placeholder="Enter Amount" value="<?php echo $_GET['amount'];?>">
            <br>
            <br>
            <button name="transferbtn" class="transferbtn" value="transfer" type="transfer">SEND MONEY</button>
          </form>
        </div>
      </div>
    </div>

    <?php 
      include 'config.php';
      if(isset($_GET['transferbtn'])){

        $from = $_GET['nameFrom'];
        $to = $_GET['nameTo'];
        $amount = $_GET['amount'];
        
        $query  = "select * from data where name = '$from'";
        $result1 = mysqli_query($conn,$query);
        $sender = mysqli_fetch_assoc($result1);

        
        $query  = "select * from data where name = '$to'";
        //exit($query);
        $result2 = mysqli_query($conn,$query);
        $receiver = mysqli_fetch_assoc($result2);

        if($amount<0){?>

            <script type="text/javascript">
                alert("Please enter a valid amount!(should be greater than 0)");
            </script>
          <?php
          }
  
          else if($amount>$sender['balance']){ ?>
            <script type="text/javascript">
                alert("Insufficient Balance. Please try again!");
            </script>
          <?php
          } 
  
          else if($amount==0){ ?>
            <script type="text/javascript">
                alert("Please enter amount more than 0!");
            </script>
          <?php
          }
          
          else{
            $decreasedbalance = $sender['balance'] - $amount;
            $sql = "UPDATE data set balance= '$decreasedbalance' where name = '$from'";
            mysqli_query($conn,$sql);
  
            $increasedbalance = $receiver['balance'] + $amount;
            $sql = "UPDATE data set balance= '$increasedbalance' where name = '$to'";
            mysqli_query($conn,$sql);
  
            //add to transcation table
            $nameSender = $sender['name'];
            $nameSenderId = $sender['id'];
            $nameReceiver = $receiver['name'];
            $sql = "INSERT INTO history (`sender`,`receiver`,`balance`)VALUES('$nameSender','$nameReceiver','$amount');";
            //exit($sql);
            $query = mysqli_query($conn,$sql);
  
            if($query){
              echo "<script> alert('Transaction Successful'); 
                        window.location= 'userprofile.php?id=$nameSenderId';
                    </script>";}
  
          }
        }
      ?>
</body>