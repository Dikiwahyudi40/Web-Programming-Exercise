<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["lives"] = 5;

if (isset($_SESSION["email"])) {
    ?>
    <h5>Hallo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!</h5>
    <a href="pertanyaan.php">Start Game</a>
    <h5>Bukan Anda? <a href="masuk.php"> klik disini</h5></a>
<?php
} else {
?>
    <form action="pertanyaan.php" method="POST">
        <label>Nama</label>
        <input type="text" name="nama" id="name">
		<br></br>
        <label>Email</label>
        <input type="text" name="email" id="email">
		<br></br>
        <input type="submit" name="submit" value="submit">
    </form>
<?php
}
?>