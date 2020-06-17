<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PSBLaravel;

class PSBController extends Controller {
    
 public function DMcommit (Request $req){// Функция записи в бд ответа Банка после платежа

     if ($req->input('ORDER') != NULL) {
         
         $DBPush = new PSBLaravel();
         
         $DBPush->AMOUNT = $req->input('AMOUNT');
         $DBPush->CURRENCY = $req->input('CURRENCY');
         $DBPush->ORDER = $req->input('ORDER');
         $DBPush->DESC = $req->input('DESC');
         $DBPush->MERCH_NAME = $req->input('MERCH_NAME');
         $DBPush->MERCHANT = $req->input('MERCHANT');
         $DBPush->TERMINAL = $req->input('TERMINAL');
         $DBPush->EMAIL = $req->input('EMAIL');
         $DBPush->TRTYPE = $req->input('TRTYPE');
         $DBPush->TIMESTAMP = $req->input('TIMESTAMP');
         $DBPush->NONCE = $req->input('NONCE');
         $DBPush->BACKREF = $req->input('BACKREF');
         $DBPush->RESULT = $req->input('RESULT');
         $DBPush->RC = $req->input('RC');
         $DBPush->RCTEXT = $req->input('RCTEXT');
         $DBPush->AUTHCODE = $req->input('AUTHCODE');
         $DBPush->RRN = $req->input('RRN');
         $DBPush->INT_REF = $req->input('INT_REF');
         $DBPush->P_SIGN = $req->input('P_SIGN');
         $DBPush->NAME = $req->input('NAME');
         $DBPush->CARD = $req->input('CARD');
         $DBPush->CHANNEL = $req->input('CHANNEL');
         $DBPush->ADDINFO = $req->input('ADDINFO');

         $DBPush->save();
         return redirect()->route('/');
      }  
      return ("Error Save DB -> Else");

   }

   public function AllData (){// Страница со всеми платежами
      $dt = new PSBLaravel;
      return view('databd', ['data' => $dt->orderBy('id', 'desc')->get()]);
   }

   public function OneData ($id){//Подробная информация об конкретной оплате
      $dt = new PSBLaravel;
      return view('one', ['data' => $dt->find($id)]);
   }

   public function ChekBank ($id){//Проверка оплаты через сервис банка
      $dt = new PSBLaravel;
      return view('chekbank', ['el' => $dt->find($id)]);
   }

   public function RefundMoney ($id){//Возврат денег Клиенту
      $dt = new PSBLaravel;
      return view('refund', ['el' => $dt->find($id)]);
   }

}
