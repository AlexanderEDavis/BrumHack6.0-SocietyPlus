<?php
exec(
"curl -X POST  https://rest.nexmo.com/sms/json \
-d api_key=a5213d56 \
-d api_secret=47ca301dc27b53a8 \
-d to=447871778000 \
-d from='societyPlus' \
-d text='Welcome To society+'")
 ?>
