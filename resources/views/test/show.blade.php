<!DOCTYPE html>
<html>
<head>
<tittle>My view</title>
	<link href="https://https://www.youtube.com/" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/public/style.css">
</head> 

<div class="yb">
<li class="nav-item">
<a class="nav-link" href="{{ $href }}">{{ $text }}</a>	
<div class=".btn">

<p>{{$location ['country'] ?? 'Russia'}}</p>
<p>{{$location ['city'] ?? 'Omsk'}}</p>
<input value="{{ $vasa ?? 'zxc'}}">

 <p> {{ $year or date('Y') }} </p>
 <p> {{ $year or date('M') }} </p>
 <p> {{ $year or date('D') }} </p>
<br>
@if ($week >= vosk)
	сегодня воскресенье 
@endif

</div>
</div>
</body>
</html>
