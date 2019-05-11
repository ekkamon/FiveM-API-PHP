# FiveM-API-PHP
# Example class.fivemapi.php

# ServerInfo
<?php
  require("class.fivemapi.php");
  $api = new FivemAPI();
  
  $server = $api->ServerInfo("103.91.189.169", "4441");
  echo json_encode($server);
?>

# PlayerInfo

<?php
  require("class.fivemapi.php");
  $api = new FivemAPI();
  
  $server = $api->PlayerInfo("103.91.189.169", "4441");
  echo json_encode($server);
?>
