<?php
  $array_list=array();
  $array[]='田中';
  for($i=1;$i<=3;$i++){
  $array[]=$_GET['tanaka'.$i];
  }
  $array_list[]=$array;
  $array=array();
  $array[]='山田';
  for($i=1;$i<=3;$i++){
  $array[]=$_GET['yamada'.$i];
  }
  $array_list[]=$array;
  $array=array();
  $array[]='永山';
  for($i=1;$i<=3;$i++){
  $array[]=$_GET['nagayama'.$i];
  }
  $array_list[]=$array;
?>
<!DOCTYPE html>
<html lang="jp" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>php</title>
  <link href="style.css" rel="styleseet" type="text/css">
</head>
<body>
  <table>
    <tr>
      <td></td>
      <th>PH</th>
      <th>DB</th>
      <th>CS</th>
      <th>合計</th>
      <th>平均</th>
    </tr>
    <?php
    foreach($array_list as $col){
      echo '<tr>';
      $i=0;
      $val=0;
      foreach($col as $row){
        $i++;
        if($i>1){
          $val+=$row;
        }
        echo '<td>'.$row.'</td>';
      }
      echo '<td>'.$val.'</td>';
      $val/=3;
      echo '<td>'.$val.'</td>';
      echo '</tr>';
    }
    ?>
  </table>
</body>
</html>
