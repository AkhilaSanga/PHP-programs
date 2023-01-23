<?php
 $str=" This is a string count program ";
  $wordcount = 0;

  for($i=0;$i < strlen($str);$i++){

      if($str[$i]!=' '){
          $wordcount++;
          while($str[$i]!=' '){
              $i++;
          }
      }

  }

echo "Total word count is".' '. $wordcount;
?>