<?php
if(isset($_GET['idEvents']))
{
    $conn = mysqli_connect("localhost","id14759530_cafuser","Bk-820201.290399","id14759530_caf");
    $id_event = $_GET['idEvents'];
    $query = mysqli_query($conn,"SELECT * from events where idEvents='$id_event'");
    $data_gambar = $query->fetch_array();

    $query_hapus = mysqli_query($conn,"DELETE from events where idEvents='$id_event'");
    unlink('files/'.$data_gambar['gambar']);
    header('location:uploadFiles.php');
}
else
{
    header('location:contentUpload.php');
}
?>
