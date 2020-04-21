<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $jyugyou = $_GET['jyugyou'];
    $youbi = $_GET['youbi'];
    $jikann = $_GET['jikann'];
?>

    <table>

      <tr>
        <th></th>
        <th>(月)</th>
        <th>(火)</th>
        <th>(水)</th>
        <th>(木)</th>
        <th>(金)</th>
        <th>(土)</th>
        <th>(日)</th>
      </tr>


      <tr>
        <td>1</td>

        <td><?php
        if(($youbi == "mon")&&($jikann == "1")){
          echo $jyugyou;
        }?>
        </td>
        <td><?php
        if(($youbi == "tue")&&($jikann == "1")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "wen")&&($jikann == "1")){
          echo $jyugyou;
        }else {
          echo "";
        }?></td>
        <td><?php
        if(($youbi == "thu")&&($jikann == "1")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "fri")&&($jikann == "1")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi== "sat")&&($jikann == "1")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sun")&&($jikan == "1")){
          echo $jyugyou;
        }?></td>
      </tr>
      <tr>

        <td>2</td>


        <td><?php
        if(($youbi == "mon")&&($jikann == "2")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "tue")&&($jikann == "2")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "wen")&&($jikann == "2")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "thu")&&($jikann == "2")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "fri")&&($jikann == "2")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sat")&&($jikann== "2")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sun")&&($jikann == "2")){
          echo $jyugyou;
        }?></td>
      </tr>
      <tr>

        <td>3</td>


        <td><?php
        if(($youbi == "mon")&&($jikann == "3")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "thu")&&($jikan == "3")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "wed")&&($jikann == "3")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "thu")&&($jikann == "3")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "fri")&&($jikann == "3")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sat")&&($jikann == "3")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sun")&&($jikann == "3")){
          echo $jyugyou;
        }?></td>
      </tr>
      <tr>

        <td>4</td>

        <td><?php
        if(($youbi == "mon")&&($jikann == "4")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "tue")&&($jikann == "4")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "wen")&&($jikann == "4")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "thu")&&($jikann == "4")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi== "fri")&&($jikann == "4")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sat")&&($jikann == "4")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sun")&&($jikann == "4")){
          echo $jyugyou;
        }?></td>
      </tr>
      <tr>

        <td>5</td>

        <td><?php
        if(($youbi == "mon")&&($jikann == "5")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "tue")&&($jikann == "5")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "wen")&&($jikann == "5")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "thu")&&($jikann == "5")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "fri")&&($jikann == "5")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sat")&&($jikann == "5")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sun")&&($jikann == "5")){
          echo $jyugyou;
        }?></td>
      </tr>
      <tr>

        <td>6</td>

        <td><?php
        if(($youbi == "mon")&&($jikann == "6")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "tue")&&($jikann == "6")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "wen")&&($jikann == "6")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "thu")&&($jikann == "6")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "fri")&&($jikann == "6")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sat")&&($jikann == "6")){
          echo $jyugyou;
        }?></td>
        <td><?php
        if(($youbi == "sun")&&($jikann == "6")){
          echo $jyugyou;
        }?></td>
      </tr>


    </table>

  </body>
</html>
