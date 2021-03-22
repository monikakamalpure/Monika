<?php

include_once 'source/session.php';

?>
 <?php echo "<h1 > Welcome !".$_SESSION['username']." To Dashboard </h1>" ?>
      
      

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

    <link href="css/styles.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <script src="js/multidatespicker.js" type="text/javascript"></script>


    <title>Genie</title>
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
            <img src="images/logo.png" alt="Genie">
        </a>
    </nav>
    <div class="container-fluid main">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar left-sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column mt-3 p-3">
                        <li class="nav-item mt-3">
                            <a class="nav-link active" href="#">
                                <img src="images/key.png" alt="Password" class="dash-icon">
                                Password
                            </a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link" href="index.html">
                                <img src="images/logout.png" alt="Logout" class="dash-icon">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <img src="images/dashboard.png" alt="Dashboard" class="dash-icon mx-3">
                    <h1 class="h1">Dashboard</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 align-content-center w-50">
                            <img src="images/calendar.png" alt="Calender" class="w-75 h-75">
                        </div>
                        <div class="col-lg-8">
                            <div class="mr-auto mx-auto">
                            <form action="success.php" method="post">
                                    <input type="text" id="selectedValues" class="date-values w-100 mb-3"
                                        name="selectedDates" placeholder="Click Here to View Calender..." readonly />
                                    <div id="parent" class="container" style="display:none;">
                                        <div class="row header-row">
                                            <div class="col-xs previous">
                                                <a href="#" id="previous" onclick="previous()">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="card-header month-selected col-sm" id="monthAndYear"></div>
                                            <div class="col-sm">
                                                <select class="form-control col-xs-6" name="month" id="month"
                                                    onchange="change()"></select>
                                            </div>
                                            <div class="col-sm">
                                                <select class="form-control col-xs-6" name="year" id="year"
                                                    onchange="change()"></select>
                                            </div>
                                            <div class="col-xs next">
                                                <a href="#" id="next" onclick="next()">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <table id="calendar">
                                            <thead>
                                                <tr>
                                                    <th>S</th>
                                                    <th>M</th>
                                                    <th>T</th>
                                                    <th>W</th>
                                                    <th>T</th>
                                                    <th>F</th>
                                                    <th>S</th>
                                                </tr>
                                            </thead>
                                            <tbody id="calendarBody"></tbody>
                                        </table>
                                    </div>
                                    <div class="align-items-center text-center">
                                        <input type="submit" name="success" class="btn btn-primary w-100" 
                                            value="Done !">
                                            
                                            
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
   

    <script src="js/main.js"></script>



    
    <?php if(!isset($_SESSION['username'])): header("location: update.php");?>

    <?php else: ?>

    <?php endif ?>
   
</body>
</html>