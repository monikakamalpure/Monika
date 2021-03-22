 <h1 > Record Saved.... </h1>" 
 <script>
        alert("Record Inserted")
</script>
<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';



function getMonth($dates)
{
    foreach ($dates as $key => $val) {
        $date = $val;

        $date = explode('/', $date);

        $month = $date[0];
        return $month;
    }
}

function getYear($dates)
{
    foreach ($dates as $key => $val) {
        $date = $val;

        $date = explode('/', $date);

        $year  = $date[2];
        return $year;
    }
}



if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $selectedDates = $_POST['selectedDates'];

    $dates = explode(',', $selectedDates);
    $datesArray = array();
    //$monthsArray = array(1,2,3,4,5,6,7,8,9,10,11,12);

    foreach ($dates as $key => $val) {
        $date = $val;

        $date = explode('/', $date);

        $month = $date[0];
        $day   = $date[1];
        $year  = $date[2];

        $datesArray[] = $day;
    }

    $date_str = json_encode($datesArray);

    $month = getMonth($dates);
    $year = getYear($dates);

    print("User ID:" . $id . "<br>");
    print("Selected Daets:" . $date_str . "<br>");
    print("Year:" . $year . "<br>");
    print("Month:" . $month . "<br>");


    try {
        $SQLInsert = "INSERT INTO attendance (id, year, month, days) VALUES ('$id', '$year', '$month','$date_str')";
        $result = $conn->query($SQLInsert);
        if ($result)
            echo "JSON OK";
    } catch (Exception $ex) {
        exit($ex->getMessage());
    }
    



    // if (mysqli_query($conn, $SQLInsert)) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }

    // print("Success");

}

