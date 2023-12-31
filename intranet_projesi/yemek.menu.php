<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
require_once 'db.php';
?>

<div class='row text-center'>
  <h1 class='alert alert-primary'>Yemek Menüsü</h1>
</div>

<?php
if (isset($_POST['gun1_form'])) {

  $sql = "UPDATE yemekmenusu SET 
          gun1 = :gun1_form,
          gun2 = :gun2_form,
          gun3 = :gun3_form,
          gun4 = :gun4_form,
          gun5 = :gun5_form,
          gun6 = :gun6_form,
          gun7 = :gun7_form
          WHERE id = 1";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':gun1_form',  $_POST['gun1_form']);
  $SORGU->bindParam(':gun2_form',  $_POST['gun2_form']);
  $SORGU->bindParam(':gun3_form',  $_POST['gun3_form']);
  $SORGU->bindParam(':gun4_form',  $_POST['gun4_form']);
  $SORGU->bindParam(':gun5_form',  $_POST['gun5_form']);
  $SORGU->bindParam(':gun6_form',  $_POST['gun6_form']);
  $SORGU->bindParam(':gun7_form',  $_POST['gun7_form']);

  $SORGU->execute();
  echo '
      <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
        Menü güncellendi...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
}
require_once 'db.php';
$SORGU = $DB->prepare("SELECT * FROM yemekmenusu WHERE id = 1");
$SORGU->execute();
$MENU = $SORGU->fetchAll(PDO::FETCH_ASSOC);
// var_dump($MENU);

?>

<form method="POST">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Pazartesi</th>
        <th>Salı</th>
        <th>Çarşamba</th>
        <th>Perşembe</th>
        <th>Cuma</th>
        <th>Cumartesi</th>
        <th>Pazar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><textarea name='gun1_form' style="width:100px; height:150px;"><?php echo $MENU[0]['gun1'] ?></textarea></td>
        <td><textarea name='gun2_form' style="width:100px; height:150px;"><?php echo $MENU[0]['gun2'] ?></textarea></td>
        <td><textarea name='gun3_form' style="width:100px; height:150px;"><?php echo $MENU[0]['gun3'] ?></textarea></td>
        <td><textarea name='gun4_form' style="width:100px; height:150px;"><?php echo $MENU[0]['gun4'] ?></textarea></td>
        <td><textarea name='gun5_form' style="width:100px; height:150px;"><?php echo $MENU[0]['gun5'] ?></textarea></td>
        <td><textarea name='gun6_form' style="width:100px; height:150px;"><?php echo $MENU[0]['gun6'] ?></textarea></td>
        <td><textarea name='gun7_form' style="width:100px; height:150px;"><?php echo $MENU[0]['gun7'] ?></textarea></td>
        </td>
      </tr>
    </tbody>
  </table>
  <input type="submit" class="btn btn-primary" value="Kaydet">
</form>

<div class='text-center'>
  <a href='index.php' class='btn btn-warning'>ANASAYFAYA</a>
</div>

<?php
require 'sayfa.alt.php';
?>