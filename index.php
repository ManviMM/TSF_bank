<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TSF Bank</title>
  <meta name="description" content=" A Banking System">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <?php include_once 'navbar.php' ?>

    <section class="section-introductions">
        <div class="container flex">
            <div class="intro">
                <h1>Introduction</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries including versions of Lorem Ipsum.</p>
            </div>
        </div>
    
    </section>


    <section class="section-options">
        <div class="container flex">
            <div class="card" onclick="location.href='customers.php';" style="cursor: pointer;">
                <img src="images/colorUser.png" alt="User"><br>
                <a href="customers.php">View Customers</a>
            </div>
            <div class="card"  onclick="location.href='transfer.php';" style="cursor: pointer;">
                <img src="images/colorTransfer.png" alt="User"><br>
                <a href="transfer.php">Transfer Money</a>
            </div>
            <div class="card" onclick="location.href='transcation.php';" style="cursor: pointer;">
                <img src="images/colorHistory.png" alt="User"><br>
                <a href="transcation.php">Transcation History</a>
            </div>
        </div>

    </section>

    <section class="section-aboutus" id="ABOUTUS">
        <div class="container grid">
            <div class="aboutus">
                <h2>About us</h2>
                <p>A simple application for money transfer.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <img src="images/bank.png" alt="bank">
        </div>
    
    </section>

    <section class="section-feedback" id="CONTACT">
        <div class="container flex">
            <div class="form form-card">
                <h2>Feedback</h2>
                <form>
                    <div class="form-control">
                        <input type="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-control">
                        <input type="feedback" name="feedback" placeholder="Type here">
                    </div>
                    <button class="btnsubmit" type="submit" name="submit" onclick="location.href='#';" style="cursor: pointer;">Send</button>
                </form>
            </div>
        </div>
    </section>

    <?php include_once 'footer.php' ?>

    <!-- <footer class="footer">
        <div class="copy container flex">
            <div>
                <h1>TSF Bank</h1>
                <p>Copyright &copy; 2021</p>
            </div>
            <nav>
                <ul>
                    <li><a  href="index.php">Home</a></li>
                    <li><a  href="index.php">About us</a></li>
                    <li><a  href="index.php">Contact</a></li>
                </ul>
            </nav>
            <div class="socials">
                <a href="#"><i class=""></a>
                <a href="#"><i class=""></a>
                <a href="#"><i class=""></a>
                <a href="#"><i class=""></a>
            </div>
        </div>
    </footer> -->



</body>
</html>