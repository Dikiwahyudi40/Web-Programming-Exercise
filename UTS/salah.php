<?php    
    session_start();
?>

<?php
echo "Hallo " .$_SESSION['name']. ", Sayang jawaban Anda salah… tetap semangat ya !!!</br>";
echo "Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"];
echo "<br><a href='pertanyaan.php'>Soal Selanjutnya</a></br>";
?>