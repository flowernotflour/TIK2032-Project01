<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cheonstar☆!</title>
        <link rel="icon" href="picts/star.png">
        <!-- Link To CSS-->
        <link rel="stylesheet" href="css/style.css">
        <!-- Link To Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <!-- Navbar -->
        <header>
            <a href="#" class="logo">☆Cheonstar☆</a>

            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="index.html">Home☆</a></li>
                <li><a href="YesandNo.php">Yes and No☆</a></li>
                <li><a href="Prices.php">Prices☆</a></li>
                <li><a href="Comm.php">Commission Form☆</a></li>
                <div class="bx bx-moon" id="darkmode"></div>
            </ul>
        </header>

        <!-- Comms -->
        <section class="comm">
            <h2 class="heading">Order a Commission☆</h2>
            <form action="Commform.php" method="post" class="commform">
                <div class="flex">
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="text" placeholder="enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Commission type :</span>
                        <input type="text" placeholder="your commission type" name="commtype">
                    </div>
                    <div class="inputBox">
                        <span>Details :</span>
                        <input type="text" placeholder="details you want" name="details">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">

            </form>
        </section>

        <!-- Footer -->
        <section class="footer">
            <div class="credit"> © <span>Flouresita Udampo portfolio</span> | all rights reserved </div>
        </section>

        <!-- Link To JS-->
        <script src="js/script.js"></script>
    </body>
</html>
