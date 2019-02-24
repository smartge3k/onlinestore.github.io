<?php

    //Calling the function 
    addfavourite();

    function addfavourite() 
    {
    $sql = 'INSERT INTO products (`CustReview`) VALUES ("'.$row['CustReview'].'");';
    $result = mysql_query($sql, $db_connection);
    $row = mysql_fetch_assoc($result);
    }

    ?>