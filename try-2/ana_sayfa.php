<?php
// Verileri bir veritabanından veya geçici depolama alanından alabilirsiniz
$team_name = "Örnek Takım";
$team_number = "123";
$autonomous = "Otonom performans açıklaması...";
$teleop = "Teleop performans açıklaması...";
$red_card = "Evet";

// Verileri görüntüleme
echo "<h2>Verileri Gör</h2>";
echo "<table>
  <tr><th>Takım Adı</th><td>$team_name</td></tr>
  <tr><th>Takım Numarası</th><td>$team_number</td></tr>
  <tr><th>Otonom Performansı</th><td>$autonomous</td></tr>
  <tr><th>Teleop Performansı</th><td>$teleop</td></tr>
  <tr><th>Kırmızı Kart</th><td>$red_card</td></tr>
</table>";
?>
