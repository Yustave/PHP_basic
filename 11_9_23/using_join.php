<?php

define('DB_HOST','localhost');
define('DB_NAME','beta');
define('DB_USER','root');
define('DB_PASS','');

function dbconnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()>0)
        die("Connection Fail");
    else
        return $db; 
}
dbconnect();

function errordebugger($data){
    echo "<pre>". print_r($data,true) . "</pre>";
}




$qry = "SELECT
           ur.name AS User_Name,
           ur.id As User_id,
           COUNT(tuto.id) AS Total_Tutorial,
           (
        CASE WHEN
           COUNT(tuto.id) <= 200
        THEN
            'fair grade'
        ELSE
            'try hard'
        END  
      ) AS Teacher_type,

        SUM(tv.static_views) AS Total_Static_View,
        SUM(tv.unique_viewss) AS Total_Unique_View,
        sub.name AS Subject  

        FROM
            users AS ur

        LEFT JOIN
        -- RIGHT JOIN
            tutorials AS tuto    

        ON
            ur.id=tuto.created_by

        JOIN
            tutorials_views As tv

        ON
            tuto.id=tv.id

        JOIN 
            subjects AS sub

        ON
            tuto.subject_id = sub.id

        WHERE
        ur.creator=0

        GROUP BY
        sub.id   
";

$result = mysqli_query(dbconnect(),$qry);
foreach($result as $values){
    errordebugger($values);
}
  
?>