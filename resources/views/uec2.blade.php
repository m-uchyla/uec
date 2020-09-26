<!DOCTYPE html>

<head>
<title>Dla Qnka <3</title>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
</head>

<body>
@foreach ($list as $l)
<li>{{ $l->steamID }}</li>
@endforeach
</body