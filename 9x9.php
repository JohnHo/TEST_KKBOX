<?php
  /*
  * Code by JohnHo 2011-11-22
  */
  for($i=1;$i<=9;$i++)
  {
    for($j=1;$j<=9;$j++)
    {
      printf("%dx%d=%2d",$i,$j,$i*$j);
      if($j!=9)
      {
        echo ',';
      }
    }
    printf("\n");
  }
?>
