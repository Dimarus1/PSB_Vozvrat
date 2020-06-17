<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Здравкурорт оплата картой</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
   .BTNS { display: none; }
   
  </style>
</head>
<body>
<div class="container">
<H1>Одна запись</H1>

<div class="alert alert-info">
<h3>Номер заказа------- {{ $data->ORDER }} </h3>
<p><big>Описание------- {{ $data->DESC }}    </big></p>
<p><big>Оплаченная сумма------- {{ $data->AMOUNT }}  </big></p>
<p>валюта------- {{ $data->CURRENCY }}  </p>
<p><big>{{ $data->RCTEXT }}  -------Успешно или нет(Только Approved успешно)</big></p>
<p>Карта клиента-------{{ $data->CARD }}  </p>
<p>{{ $data->EMAIL }} -------</p>
<p>id в базе-------{{ $data->id }}  </p>
<p>дата время-------{{ $data->TIMESTAMP }} </p>
<p>INT_REF-------{{ $data->INT_REF }}    </p>
<p>MERCH_NAME------- {{ $data->MERCH_NAME }}</p>
<p>MERCHANT------- {{ $data->MERCHANT }}</p>
<p>TERMINAL------- {{ $data->TERMINAL }}</p>
<p>AUTHCODE------- {{ $data->AUTHCODE }}</p>
<p>Trtype------- {{ $data->TRTYPE }}</p>
<p>NONCE------- {{ $data->NONCE }}</p>
<p>BACKREF------- {{ $data->BACKREF }}</p>
<p>Результат------- {{ $data->RESULT }}</p>
<p>RC------- {{ $data->RC }}</p>
<p>P_SIGN------- {{ $data->P_SIGN }} </p>
<p>RRN------- {{ $data->RRN }}</p>
<p>NAME------- {{ $data->NAME }}</p>
<p>CHANNEL------- {{ $data->CHANNEL }}</p>
<p>ADDINFO------- {{ $data->ADDINFO }}</p>
<p><small>{{ $data->created_at }}</small></p>
<a href="{{ route('Bank', $data->id) }}"><button class="btn btn-success">ПРОВЕРИТЬ в банке
</button></a></br> </br> </br>

<div id="BTNS" class="BTNS">
<a href="{{ route('Ref', $data->id) }}" onClick="return window.confirm('СДЕЛАТЬ ВОЗВРАТ?')"><button class="btn btn-danger">ВОЗВРАТ ДЕНЕГ
</button></a> 
</div> </br> </br> </br>

<a href="javascript:void(0)" onclick="showHide('BTNS')">Открыть элемент</a><br/><br/>
        <div id="BTNS" style="display: none;">
            <br/>
            <br/>
            
        </div>


<script type="text/javascript">
            /**
            * Функция Скрывает/Показывает блок 
            * 
            **/
            function showHide(BTNS) {
                //Если элемент с id-шником element_id существует
                if (document.getElementById(BTNS)) { 
                    //Записываем ссылку на элемент в переменную obj
                    var obj = document.getElementById(BTNS); 
                    //Если css-свойство display не block, то: 
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; //Показываем элемент
                    }
                    else obj.style.display = "none"; //Скрываем элемент
                }
                //Если элемент с id-шником element_id не найден, то выводим сообщение
                else alert("Элемент с id: " + BTNS + " не найден!"); 
            }   
        </script>



</div>
</body>
</html>