<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP pt. 2 bonus</title>
</head>
<body>
  <form class="" action="index.html" method="post">
    <select name="months">
      <option selected="selected">Choisissez le mois</option>
      <?php
      $monthsOfYear = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
      foreach ($monthsOfYear as $option) {
        echo '<option value="'.strtolower($option).'">' . $option .'</option>';
      }
      ?>
    </select>
    <input type="submit" value="Valider">
  </form>
</body>
</html>
