# ------------Get Token for iFrame, called from ost_sub.php ------------

$tenant = $args[0]  # passed from ost_sub.php

$uri = 'http://127.0.0.1:8077/kernel/saaslink/session?tenantname='+$tenant
$response = Invoke-WebRequest -Uri $uri -ContentType 'application/json' -Method Get -UseBasicParsing 
 $response -match "id>(?<content>.*)</id"  | out-null
 $token=$matches['content']
# $token = $response.response.Token.id # Powershell 5

# # Alternative Method
# $b=$token | convertTo-json 
# $t=$t=$b.Trim('"',' ')
# $token=$t

$token
