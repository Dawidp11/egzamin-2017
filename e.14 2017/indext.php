<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Komis Somochodowy</title>  
    </head>
    <link rel="stylesheet" type="text/css" href="auto.css">
  <body>
    <div id = "baner">
      <h1>SAMOCHODY</h1>
    </div>

    <div id = "lewy">
      <h2>Wykaz samochodów </h2>
      <ul>
        <?php
        $polaczenie = mysqli_connect("localhost","root","","komis");
        $sgl="SELECT `id`,`marka`,`model`FROM `samochody`";
        $wynik=mysqli_query($polaczenie,$sql);
        while ($wiersz = mysqli_fetch_row($wynik))
        {
            echo'<li>' . $wiersz[0]. ' ' .$wiersz[1]. '</li>';
        }
 
        mysqli_close($polaczenie)
        ?>
      </ul>

      <h2>zamuwienia</h2>
      <ul>
        <?php
        $polaczenie = mysqli_connect("localhost","root","","komis");
        $sgl = "SELECT `id`,`Klient` FROM `zamowienia`";
        $wynik = mysqli_query($polaczenie, $sql);
        while ($wiersz = mysqli_fetch_row($wynik))
        {
            echo $wiersz[0]. ' / '.$wiersz[1]. ' / '.$wiersz[2]. ' / '.$wiersz[3]. ' / '.$wiersz[4]. ' / '.$wiersz[5].'<br />';
        }
 
        mysqli_close($polaczenie)
        ?>

      </ul>
    </div>
    <div id = "prawy">
      <h2>pełne dane Fiat</h2>
    </div>
    <div id = "stopka">
      <table>
        <tr>
          <td><a href="kwarendy.txt">kwarendy</a> </td>
          <td>autor:112112112</td>
          <tg><img src="auto.png" alt="komis samochodowy" float: right></tg> 
        </tr>
      </table>
    </div>
  </body>
</html>