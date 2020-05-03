<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SweetAlert;
class ZakatController extends Controller
{
    public function show(){
        return view('zakat.index');
    }


    public function goldshow(){

        return view('zakat.gold.show');
        
    }


    public function calculategold(Request $request){
        
        $nisab=84;
        $goldprice=158.52;
        
  

        $goldvalue= $request->input('goldvalue');

        if($goldvalue < $nisab){
             alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
             return redirect()->back();
        }else{

            $zakatvalue= (($goldvalue * $goldprice) * 2.5 )/ 100 ;
            alert()->success('الزكاة المستحقة',$zakatvalue .'دينار  ')->persistent("Close");
            return redirect()->back();
        }

    }

    public function silvershow(){

        return view('zakat.silver.show');
        
    }


    public function calculatesilver(Request $request){
        
        $nisabsilver=585;
        $silverprice=1.39;
        
  

        $silvervalue= $request->input('silvervalue');

        if($silvervalue < $nisabsilver){
             alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
             return redirect()->back();
        }else{

            $zakatvalue= (($silvervalue * $silverprice) * 2.5 )/ 100 ;
            alert()->success('الزكاة المستحقة',$zakatvalue .'دينار  ')->persistent("Close");
            return redirect()->back();
        }

    }


    public function moneyshow(){

        return view('zakat.money.show');
        
    }


    public function calculatemoney(Request $request){
        
        $nisabmoney=11880;  

        $moneyvalue= $request->input('moneyvalue');

        if($moneyvalue < $nisabmoney){
             alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
             return redirect()->back();
        }else{

            $zakatvalue= ($moneyvalue  * 2.5 )/ 100 ;
            alert()->success('الزكاة المستحقة',$zakatvalue .'دينار  ')->persistent("Close");
            return redirect()->back();
        }

    }


}
