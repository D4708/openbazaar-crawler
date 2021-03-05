<?php

exec('/usr/bin/curl -Is http://xx.xx.xx.xx:8090 | head -n 1', $response);

if (!isset($response[0])) {
     exec('/home/yacy/yacy/startYACY.sh');
}
