<?php

echo ("hello world!");

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "sqladmin", "pwd" => "P@ssword1!", "Database" => "db1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ogmssqlserver.database.windows.net,1433";

$conn = sqlsrv_connect($serverName, $connectionInfo);
for($k=1; $k<=50; $k++){
sqlsrv_connect($serverName, $connectionInfo);



$sql = "select * from [SalesLT].[vGetAllCategories]";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo ($row['ProductCategoryName']);
      echo("<br/>")
}

sqlsrv_free_stmt( $stmt);
}
