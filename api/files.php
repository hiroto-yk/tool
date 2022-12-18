<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Origin, X-Requested-With');
header('Access-Control-Allow-Methods: POST, GET');
header('Content-Type: text/plain; charset=UTF-8');

putenv('LANG=C.UTF-8');

if ($_POST['path'] == null) {
  $dirs = array(
    array(
      'name' => 'contents',
      'display' => 'Deduki',
      'dir' => '/var/www/html/webcui/dedukti-examples'
    ),
    array(
      'name' => 'contents',
      'display' => 'Lambapi',
      'dir' => '/var/www/html/webcui/lambdapi-examples'
    ),
    array(
      'name' => 'contents',
      'display' => 'NaTT',
      'dir' => '/var/www/html/webcui/natt-examples'
    )
  );

  function getFiles($arr) {
    $arr['files'] = glob($arr['dir'] . '/*.dk') + glob($arr['dir'] . '/*.lp') + glob($arr['dir'] . '/*.trs');
    return $arr;
  }

  $files = array_map('getFiles', $dirs);
  $json = json_encode($files);
  echo $json;
  
} else {
  readfile($_POST['path']);
}

?>
