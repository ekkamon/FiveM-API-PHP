# FiveM-API-PHP
#### Find and Create By [CONTROL](https://www.facebook.com/life.control.me)
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
  
  $server = $api->ServerInfo("127.0.0.1", "30120"); //Change 127.0.0.1 to your IP Server //Change 30120 to your Port Server
  echo json_encode($server);
? >
```

#### PlayerInfo
```
<?php
  require("class.fivemapi.php");
  $api = new FivemAPI();
  
  $server = $api->PlayerInfo("127.0.0.1", "30120"); //Change 127.0.0.1 to your IP Server //Change 30120 to your Port Server
  echo json_encode($server);
?>
```
