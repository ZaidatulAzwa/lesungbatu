<?php

require_once 'vendor/autoload.php';
require_once 'vendor/init.php';

?>

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "a112f057-a98c-4a99-95ef-b6e14bef1d78",
    });
  });
</script>
