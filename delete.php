<?php 
include('dbconnection.php');
if(isset($_GET['delid'])){
    $id = $_GET['delid'];
    $sql =mysqli_query($conn, "DELETE FROM crudoperation WHERE ID = '$id'");
    if ( $sql) {
        echo "<script>alert(' data deleted successfully ');</script>";
        echo"<script type='text/javascript'>document.location='View.php';</script>";
    } else {
        echo "<script>alert('there was an error');</script>";
    }
}
?>
