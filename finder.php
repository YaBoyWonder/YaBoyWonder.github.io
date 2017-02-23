<?php
  $ext_array = array(".php", ".html", ".css", ".git", ".md", "LICENSE");
  $dir1 = ".";
  $filecount1 = 0;
  $d1 = dir($dir1);
  $thelist = "";
  while ($f1 = $d1->read()) {
    $fext = substr($f1,strrpos($f1,"."));
    if (in_array($fext, $ext_array)) {
      continue;
    } else {
      if(($f1!= '.') && ($f1!= '..')) {
      if(!is_dir($f1)) $filecount1++;
      $key = filemtime($f1);
      $files[$key] = $f1 ;
      }
    }
  }
  krsort($files);
  foreach ($files as $f1) {
    $thelist .= '<a class="button" href="'.$f1.'">/'.$f1.'</a>';
  }
?>
