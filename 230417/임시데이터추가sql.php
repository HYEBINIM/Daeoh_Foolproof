<?php
$conn = new mysqli("localhost", "server", "00000000", "dataset");

for($count = 21; $count <= 60; $count++){
    echo $sql = "INSERT into result1
    (
        machine_num,
        data1,
        data2,
        data3,
        data4,
        data5,
        data6,
        data7,
        data8,
        data9,
        data10,
        data11,
        data12,
        data13,
        data14,
        data15,
        data16,
        data17,
        data18,
        data19,
        data20,
        index1
    )
    value
    (
    ".$count.",
    '11.21',
    '11.22',
    '11.23',
    '11.24',
    '11.25',
    '11.26',
    '11.27',
    '11.28',
    '11.29',
    '11.30',
    '11.31',
    '11.32',
    '11.33',
    '11.34',
    '11.35',
    '11.36',
    '11.37',
    '11.38',
    '11.39',
    '11.40',
    '1'
    )
    ";
    $res = mysqli_query($conn, $sql);
}
?>