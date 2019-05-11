# FiveM-API-PHP
- [x] Php
- [x] Json
- [x] UnofficialAPI
- [x] Free API

### Example **class.fivemapi.php**
#### ServerInfo
```
<?php
  require("class.fivemapi.php");
  $api = new FivemAPI();
  
  $server = $api->ServerInfo("**127.0.0.1**", "**4441**"); //
  echo json_encode($server);
? >
```

#### PlayerInfo
```
<?php
  require("class.fivemapi.php");
  $api = new FivemAPI();
  
  $server = $api->PlayerInfo("103.91.189.169", "4441");
  echo json_encode($server);
?>
```
