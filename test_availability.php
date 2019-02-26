<?php
require_once './pulllist/key.php';
require_once './availability/availability.php';

$avail = new Availability($config['wskey'],$config['secret']);

?>

<html>
  <head>

  </head>
  <body>
    <p>Keys etc. Circulation:
      <pre>
<?php echo json_encode($config,JSON_PRETTY_PRINT );?>
      </pre>
    </p>

<?php    
$avail->get_avail('1024083487');
?>  

    <p>Result of get copyNumber:
      <pre>
<?php echo json_encode($avail->get_element_value('1024083487','copyNumber'),JSON_PRETTY_PRINT);?>
      </pre>
    </p>
    <p>Result of availability request:
      <pre>
<?php echo $avail;?>
      </pre>
    </p>
    
    
  </body>

</html>