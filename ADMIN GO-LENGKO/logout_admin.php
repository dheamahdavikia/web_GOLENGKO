<?php
  session_start();
  session_destroy();
  echo "<script>alert('Anda telah keluar dari halaman admin GO-LENGKO '); window.location = 'admin.php'</script>";
?>