<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    include('dbConn.php');

    if ($conn->connect_error) {
        die("connection failed" . $conn->connect_error);
    }

    $sql = "SELECT * FROM cfnkb ORDER BY id DESC LIMIT 5";
    $result = $conn->query($sql);

    $conn->close();
?>

<head>
    <meta charset="utf-8">
    <title>Cameroon Food Network</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0" style="background-color: rgb(2, 2, 2)">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-white"><link rel="img/fry-knife.svg"></i>Cameroon Food Network</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active text">Home</a>
                <a href="about.php" class="nav-item nav-link text-white-50">About</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle title-yep text-white-50" data-bs-toggle="dropdown"><span>Recipes</span></a>
                    <div class="dropdown-menu m-0 bg-primary">
                        <a href="ndole.php" class="dropdown-item">Ndolé</a>
                        <a href="okok.php" class="dropdown-item">Okok</a>
                        <a href="mbongo.php" class="dropdown-item">Mbongo Tchobi</a>
                        <a href="koki-beans.php" class="dropdown-item">koki Beans</a>
                        <a href="pomme-pile.php" class="dropdown-item">Smashes Potato (pomme-Pilé)</a>
                        <a href="eru.php" class="dropdown-item">Eru</a>
                        <a href="achu.php" class="dropdown-item">Achu Soup</a>
                        <a href="okro.php" class="dropdown-item">Okro Soup and Corn Fufu</a>
                        <a href="north.php" class="dropdown-item">North</a>
                        <a href="south.php" class="dropdown-item">South</a>

                    </div>
                </div>
                <a href="cfn.php" class="nav-item nav-link text-white-50">Cameroon Dishes</a>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="img/k-beans.jpg" alt="">
                    <h1 class="text-uppercase mb-4">Koki Beans Recipe</h1>
                    <p>Koki beans from Cameroon. Koki Beans is a traditional dish in my village in Cameroon. 
                        It is also one of the favorite dishes of many Cameroonians back home, as well as the 
                        diaspora. The Koki Beans meal looks like a cake, yellow in color, soft, and very tasty.</p>
                    <p><strong>Ingredients</strong></p>
                    <p># 4 cups of Koki beans</p>
                    <p># 1 litre palm oil</p>
                    <p># 2-3 peppers</p>
                    <p># 2-3 spoons full of salt</p>
                    <p># 8-10 Plantain leaves</p>
                    <p># 3 hands full of cocoyam leaves</p>
                    <p><strong>Recipe</strong></p>
                    <p>Soak cracked  beans in a deep bowl for 15-20 minutes to take out the peelings.
                      As the beans soaks, warm plantain leaves over flames or dip in fairly hot water.
                      Cut each leave into two halves and reduce the mid-rib if it's too thick.
                      Wash beans taking out the floating peelings with the use of a colander</p>
                 <p>
                    Throw the drained out water, add more water into the dish containing the 
                    beans and repeat the process till the peelings are completely seived out.
                    Grind beans using a hand machine or a blender until you have a grainy paste.
                    Pour the paste into a mortar or a deep bowl and add salt and pepper to taste.
                    Use a pestle to stir clockwise or whisk the paste to incorporate air.
                    Add 3-4 cups of water till a fairly dropping consistency is obtained.
                    Warm palm oil and add to the paste as desired.
                    Place plantain stalks and leaves at the bottom of the pot and bring to boil.Place one half of the leave on another in a bowl creating a deep bowl hole
                 </p>
                 <p>
                   Pour about 2-3 cook spoons full of Koki paste into the hole created with the leaf.
                   Join the upper edges of the leave, hold in the middle and tie using a string.
                   Put the bundle in the boiling pot. Repeat the process and let the paste cook for about two hours.
                   The Koki pudding meal is ready, it is served with ripe plantain, Cocoyam or any other tuber. Koki pudding  is best eaten hot. 
                   <strong>Enjoy your meal</strong>
                 </p>
                 <img src="img/koki0.png" alt="">
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Comments</h3>
                        <?php 
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { ?>
                                    
                                    <div class="d-flex mb-4">
                                        <img src="img/user.jpg" class="img-fluid" style="width: 45px; height: 45px;">
                                        <div class="ps-3">
                                            <h6><a href=""><?php echo $row['Name'];?></a></h6>
                                            <p><?php echo nl2br($row['Comment']);?></p>
                                        </div>
                                    </div>
                        
                                <?php
                                }
                                ;
                                
                            }
                        ?>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-light rounded p-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Leave a comment</h3>
                    <form method="post" action="comkb.php">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;" name="Name" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;" name="Email" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment" name="Comment" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        
                    </div>
                </div>
                <!-- Search Form End -->



                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Other Meals</h3>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/eru2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="eru.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Eru
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/achu12.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="achu.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Achu Soup
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/sp2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="pomme-pile.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Smashes Potato (pomme-Pilé)
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/okok1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="okok.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Okok
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/okra.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="okro.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Okro soup and Corn Fufu
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/oip.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

              

                <!-- Plain Text Start -->
                <div>
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">About C.F.N</h3>
                    <div class="bg-light text-center" style="padding: 30px;">
                        <p>Welcome to the Cameroon Food Network. So glad you made it to my food empire!
                        The goal is to show you delicious recipes from Camerron you can replicate in your kitchen. 
                        Hope you find recipes here that will bring joy to the family.
                        </p>
                        <a href="about.php" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="col-12 text-center text-body">
          <a class="text-body" href="">Terms & Conditions</a>
            <span class="mx-1">|</span>
               <a class="text-body" href="">Privacy Policy</a>
           <span class="mx-1">|</span>
               <a class="text-body" href="">Customer Support</a>
           <span class="mx-1">|</span>
               <a class="text-body" href="">Payments</a>
           <span class="mx-1">|</span>
               <a class="text-body" href="">Help</a>
           <span class="mx-1">|</span>
               <a class="text-body" href="">FAQs</a>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">Cameroon Food Network</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top" style="background-color: orange"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>