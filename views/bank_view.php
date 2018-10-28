<html>
<head>
    <title>Tilin perustiedot</title>
</head>
<body>
    <h2>Tilin perustiedot</h2>
    <?php
    function show_user($a){
      echo '<h2>Tilien omistajat</h2>';
        foreach ($a as $b) {
          echo 'Nimi: '.$b[Etunimi].' '.$b[Sukunimi].'<br>'.'Osoite: '.$b[Paikkakunta].' '.$b[Postinumero].' '.$b[Katuosoite].' '.'<br><br>';
        }
        print_r('<br>');
        print_r('<br>');
    }
    function show_bank($a){
        echo '<h2>Tilit</h2>';
          foreach ($a as $b) {
            echo 'IBAN: '.$b[IBAN].'<br>'.'BIC: '.$b[BIC].'<br><br>';
          }
        print_r('<br>');
        print_r('<br>');
    }
 ?>
</body>
</html>
