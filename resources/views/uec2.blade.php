<!DOCTYPE html>

<head>
<title>Dla Qnka <3</title>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
</head>

<body>
@for ($i = 0; $i < count($list); $i++)
<li>{{ json_encode($list[$i], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}</li>
@endfor
</body