<?php 
//   $mydir = './'; 
//   
//   $myfiles = array_diff(scandir($mydir), array('.', '..')); 
//   
//   print_r($myfiles); 

// 
// $fileList = glob('./*');
// foreach($fileList as $filename){
//     if(is_file($filename)){
//         echo $filename, '<br>'; 
//     }   
// }

// 
// $fileList = glob('./*');
// foreach($fileList as $filename){
//     if(is_file($filename)){
//         echo '<br>', $filename, '<br>'; 
//     }   
// }


// if ($handle = opendir('./')) {
// 
//     while (false !== ($entry = readdir($handle))) {
// 
//         if ($entry != "." && $entry != "..") {
// 
//             echo '<br>', "$entry\n", '<br>';
//         }
//     }
// 
//     closedir($handle);
// }


if ($handle = opendir('./')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

          if (strpos($entry, '#') !== false) {
            $entryurl = urlencode($entry);
            $entryurl = str_replace('#', '%23', $entryurl);
            $entryurl = str_replace('+', ' ', $entryurl);
            echo '<br>', "<a href=\"./$entryurl\">$entry</a>", '<br>';
            } else {
              echo '<br>', "<a href=\"./$entry\">$entry</a>", '<br>';
            }
          // if (str_contains($entry, '#')){
          //   $entryurl = urlencode($entry);
          //   $entryurl = str_replace('#', '%23', $entryurl);
          //   echo '<br>', "<a href=\"./$entryurl\">$entry</a>", '<br>';
          //   } else {
          //     echo '<br>', "<a href=\"./$entry\">$entry</a>", '<br>';
          //   }
        }
    }

    closedir($handle);
}
?>


































<!-- 
contain link 
listing files in folder showing index.php
https://stackoverflow.com/questions/15555771/listing-files-in-folder-showing-index-php/15555904 
-->

<!-- 
// <?php
//     if ($handle = opendir('.')) {
//     while (false !== ($file = readdir($handle)))
//     {
//         if ($file != "." && $file != "..")
//         {
//             $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
//         }
//     }
//     closedir($handle);
//     }
// ?>

// <P>Dir:</p>
// <UL>
// <P><?=$thelist?></p>
// </UL> 
-->
