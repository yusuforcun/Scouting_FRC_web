<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $team_name = $_POST["team-name"];
  $team_number = $_POST["team-number"];
  $autonomous = $_POST["autonomous"];
  $teleop = $_POST["teleop"];
  $red_card = isset($_POST["red-card"]) ? "Evet" : "Hayır";

  // Verileri kaydetmek veya geçici olarak saklamak için işlemler burada yapılabilir

  // İşlemler tamamlandıktan sonra ana sayfaya yönlendirme yapabilirsiniz
  header("Location: ana_sayfa.php");
  exit();
}
?>
