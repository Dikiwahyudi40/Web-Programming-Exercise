<?php    
    session_start();
?>
<?php

echo "Hallo " .$_SESSION['name']. ", Selamat jawaban anda benar!!!</br>";
echo "Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"];
echo "<br><a href='Pertanyaan.php'>Soal Selanjutnya</a></br>";

?>