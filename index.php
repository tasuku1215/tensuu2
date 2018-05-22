<!DOCTYPE html>
<html lang="jp" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>php</title>
 </head>
 <body>
    
  <form method="get" action="next.php">
  <table>
  <tr>
  <th></th>
  <th><input type="text" name="kamoku1"></th>
  <th><input type="text" name="kamoku2"></th>
  <th><input type="text" name="kamoku3"></th>
  </tr>
  <th></th>
  <th>科目名1</th>
  <th>科目名2</th>
  <th>科目名3</th>
  </tr>
  <tr>
  <th>
  <p><input type="text" name="name1">名前1</p>
  </th>
  <td>
   <input type="text" name="data1_1">
   </td>  
   <td>
   <input type="text" name="data1_2">
   </td>  
   <td>
   <input type="text" name="data1_3">
   </td>
   </tr>
   <tr>
  <th>
   <p><input type="text" name="name2">名前2</p>
   </th>
   <td>
  <input type="text" name="data2_1">
   </td>  
   <td>
  <input type="text" name="data2_2">
   </td>  
   <td>
  <input type="text" name="data2_3">
   </td>
   </tr>
   <tr>
  <th>
   <p><input type="text" name="name3">名前3</p>   
   </th>
   <td>
   <input type="text" name="data3_1">
   </td>
   <td>
   <input type="text" name="data3_2">
   </td>
   <td>
   <input type="text" name="data3_3">
   </td>
   </tr>
   </table>
   <input type="submit" value="次へ">
    <input type="hidden" name="size" value="3_3">
  </form>
 </body>
</html>
