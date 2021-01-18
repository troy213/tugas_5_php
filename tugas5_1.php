<?php
  $f = false;
  $t = true;

  function logicAnd($x,$y){
    return ($x && $y) ? 1 : 0;
  }

  function logicOr($x,$y){
    return ($x || $y) ? 1 : 0;
  }

  $ffand = logicAnd($f,$f);
  $ftand = logicAnd($f,$t);
  $tfand = logicAnd($t,$f);
  $ttand = logicAnd($t,$t);

  $ffor = logicOr($f,$f);
  $ftor = logicOr($f,$t);
  $tfor = logicOr($t,$f);
  $ttor = logicOr($t,$t);

  echo "Tabel Logika 1111 <br>
  <table border='1'>
    <tr>
      <td>Input 1</td>
      <td>Input 2</td>
      <td>AND</td>
      <td>OR</td>
    </tr>
    <tr>
      <td>false</td>
      <td>false</td>
      <td>$ffand</td>
      <td>$ffor</td>
    </tr>
    <tr>
      <td>false</td>
      <td>true</td>
      <td>$ftand</td>
      <td>$ftor</td>
    </tr>
    <tr>
      <td>true</td>
      <td>false</td>
      <td>$tfand</td>
      <td>$tfor</td>
    </tr>
    <tr>
      <td>true</td>
      <td>true</td>
      <td>$ttand</td>
      <td>$ttor</td>
    </tr>
  </table>";
?>
