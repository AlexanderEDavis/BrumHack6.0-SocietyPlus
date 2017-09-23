<?php
exec(
"curl -X POST  https://rest.nexmo.com/sms/json \
-d api_key=NOPE \
-d api_secret=NOPE \
-d to=NOPE \
-d from='societyPlus' \
-d text='Welcome To society+'")
 ?>
