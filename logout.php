<?php 
    session_start();
     
    // menghapus semua session
    session_destroy();
 
    // mengalihkan halaman dan mengirim pesan logout
    header("location:index.php?pesan=logout");
?>
