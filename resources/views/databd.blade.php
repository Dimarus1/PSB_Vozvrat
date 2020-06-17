<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Здравкурорт оплата картой</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<H1>Все Записи</H1>

@foreach($data as $el)

@if ($el->RCTEXT == 'Approved')
  <div class="alert alert-success">
  <h3>{{ $el->ORDER }}</h3>
  <p>{{ $el->AMOUNT }}</p>
  <p>{{ $el->DESC }}</p>
  <p><big>{{ $el->RCTEXT }} ->  {{ $el->TRTYPE }} <- Успешная операция (1 - Оплата, 14 - Возврат денег)</big></p>
  <p><small>{{ $el->created_at }}</small></p>
  <a href="{{ route('OneDatal', $el->id) }}"><button class="btn btn-warning">Детальнее</button></a> 
  </div>
@else
<div class="alert alert-danger">
  <h3>{{ $el->ORDER }}</h3>
  <p>{{ $el->AMOUNT }}</p>
  <p>{{ $el->DESC }}</p>
  <p>{{ $el->RCTEXT }} ->  {{ $el->TRTYPE }} <- Не успешная операция (1 - Оплата, 14 - Возврат денег)</p>
  <p><small>{{ $el->created_at }}</small></p>
  <a href="{{ route('OneDatal', $el->id) }}"><button class="btn btn-warning">Детальнее</button></a> 
  </div>
@endif  
@endforeach


</div>
</body>
</html>