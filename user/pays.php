<!-- Show these admin pages only when the admin is logged in -->
<?php   require '../assets/partials/_admin-check.php';     ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
        <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <?php
        require '../assets/styles/admin.php';
        require '../assets/styles/dashboard.php';
        $page="dashboard";
    ?>
</head>
<body>
    <!-- Requiring the admin header files -->
    <?php require '../assets/partials/_admin-header.php';
        require '../assets/partials/_getJSON.php';
    //  Will have access to variables 
    //     1. routeJson
    //     2. customerJson
    //     3. seatJson
    //     4. busJson
    //     5. adminJson
    //     6. bookingJSON
    $routeData = json_decode($routeJson);
    $customerData = json_decode($customerJson);
    $seatData = json_decode($seatJson);
    $busData = json_decode($busJson);
    $adminData = json_decode($adminJson);
    $bookingData = json_decode($bookingJson);
    // $earningData = json_decode($earningJson);

    // echo "<pre>";
    // var_export(get_object_vars($adminData[0])["user_fullname"]);
    // var_export($adminData);
    // var_export($_SESSION);
    // echo "</pre>";

    ?>

            <section id="dashboard">
                
                <div id="status">
                    <div id="Booking" class="info-box status-item">
                       <h1>MAKE PAYMENT</h1>
                       <img src="l.jpg">


                    

                </div>
                
            </section>
                <footer>
                    <p>
                        <i class="far fa-copyright"></i> <?php echo date('Y');?> - CUEA transport
                        </p>
                </footer>
        </div>
    </main>
    <script src="../assets/scripts/admin_dashboard.js"></script>
</body>
</html>