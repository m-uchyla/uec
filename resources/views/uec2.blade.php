<!DOCTYPE html>

<head>
<title>Dla Qnka <3</title>
</head>

<body>
@forelse ($list as $record)
<li>$record</li>
@empty
<p>Brak użytkowników :(</p>
@endforelse
</body