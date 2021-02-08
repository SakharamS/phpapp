<?php

echo ("hello world Test 1");

$serverName = "ogmssqlserver.database.windows.net";
$connectionInfo = array( "Database"=>"db1", "UID"=>"sqladmin", "PWD"=>"P@ssword1!");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "select * from [SalesLT].[vGetAllCategories]";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['ProductCategoryName'].", <br />";
}

sqlsrv_free_stmt( $stmt);
?>

