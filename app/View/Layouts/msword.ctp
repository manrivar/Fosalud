
<?php

/*
  header("Content-Type: application/vnd.ms-word");
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past - so must always re-read
  header("content-disposition: attachment;filename=Documento.doc"); //this will be the name of the file the user downloads
 */


header("Expires: Mon, 26 Jul 2020 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header("Content-Type: application/msword; charset=ISO-8859-1");
header("Content-Disposition: attachment; filename=\Documento.doc");
echo $content_for_layout;
?>