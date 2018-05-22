<?php
  $size=explode("_",$_GET['size']);
  $array_list=array();
  for($j=1;$j<=$size[0];$j++){
    $name_list[]=$_GET['name'.$j];
    $kamoku_list[]=$_GET['kamoku'.$j];
  for($i=1;$i<=$size[1];$i++){
  $array[]=$_GET['data'.$j.'_'.$i];
  }
  $array_list[]=$array;
  $array=array();
  }?>
<!DOCTYPE html>
<html lang="jp" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>php</title>
  <link href="style.css" rel="stylesheet" type="text/css">
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
    <pre><?php
  print_r($array_list);
  print_r($name_list);
  print_r($kamoku_list);
  print_r($size);
  ?></pre>
</body>
</html>
