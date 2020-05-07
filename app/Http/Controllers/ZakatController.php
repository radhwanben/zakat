<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SweetAlert;
use Ixudra\Curl\Facades\Curl;
class ZakatController extends Controller
{

    /***
     * this function to conect to api to get the gold and the silver price 
     * it take the X-API-KEY you an get it from goldpricez.com
     * this function can display more things such us [gram_in_usd ,gram_to_ounce_formula,silver_ounce_in_tnd,ounce_in_tnd .....]
     */

    public function conecttoapi()
    {
        $nisab=84;
        $response = Curl::to('http://goldpricez.com/api/rates/currency/tnd/measure/gram/metal/all')
        ->withData( array( 'X-API-KEY' => '38a72cf77c367a58a76d7fdbef6270be38a72cf7' ) )
        ->asJson()
        ->get();

        $res=json_decode($response);

        return $res;
    }

    public function show()
    {
        return view('zakat.index');
    }


    public function goldshow()
    {

        return view('zakat.gold.show');
        
    }


    public function calculategold(Request $request)
    {
        
        $nisab=84;
        

        $goldprice=($this->conecttoapi()->gram_in_tnd);

        $goldvalue= $request->input('goldvalue');

        if($goldvalue < $nisab){
             alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
             return redirect()->back();
        }else{

            $zakatvalue= (($goldvalue * $goldprice) * 2.5 )/ 100 ;
            alert()->success('الزكاة المستحقة',round($zakatvalue,3) .'دينار  ')->persistent("Close");
            return redirect()->back();
        }
     

    }

    public function silvershow()
    {

        return view('zakat.silver.show');
        
    }


    public function calculatesilver(Request $request)
    {
        
        $nisabsilver=585;        
       

        $silverprice=($this->conecttoapi()->silver_gram_in_tnd);
        

        $silvervalue= $request->input('silvervalue');

        if($silvervalue < $nisabsilver){
             alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
             return redirect()->back();
        }else{

            $zakatvalue= (($silvervalue * $silverprice) * 2.5 )/ 100 ;
            alert()->success('الزكاة المستحقة',round($zakatvalue,3) .'دينار  ')->persistent("Close");
            return redirect()->back();
        }

    }


    public function moneyshow()
    {

        return view('zakat.money.show');
        
    }


    public function calculatemoney(Request $request)
    {
        
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


    public function animalsshow()
    {
        return view('zakat.animals.index');
    }


    public function sheepshow()
    {
        return view('zakat.animals.sheep');
    }

    public function calculatesheep(Request $request)
    {

        $sheepnisab=40;

        $sheepnumber= $request->input('sheep');

        if($sheepnumber >= $sheepnisab){
            switch ($sheepnumber) {
                case ($sheepnumber>= 40 && $sheepnumber<= 120):
                    alert()->success('شاه واحدة (أنثى الغنم لا تقل عن سنة)')->persistent("Close");
                    return redirect()->back();
                break;
                
                case ($sheepnumber>= 121 && $sheepnumber<= 200):
                    alert()->success('شاتان')->persistent("Close");
                    return redirect()->back();
                break;
    
                case ($sheepnumber>= 201 && $sheepnumber<= 399):
                    alert()->success('ثلاث شياه')->persistent("Close");
                    return redirect()->back();
                break;
    
                case ($sheepnumber == 400 ) :
                    alert()->success('أربع شياه')->persistent("Close");
                    return redirect()->back();
                break;
    
                case($sheepnumber > 400):
                    $sheepzakatvalue= intdiv($sheepnumber ,100);
                    alert()->success('الزكاة المستحقة',$sheepzakatvalue .'شاه  ')->persistent("Close");
                    return redirect()->back();
                break;
            break;
            }
        }
        else{
        alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
        return redirect()->back();
       }
        
    }


    public function cowshow()
    {
        return view('zakat.animals.cow');
    }


    public function calculatecow(Request $request)
    {
        $cownisab=30;

        $cownumber=$request->input('cow');

        if($cownumber>=$cownisab){

            switch ($cownumber) {
                case ($cownumber>= 30 && $cownumber<= 39):
                    alert()->success('تبيع (ما أتم من البقر سنة ودخل في الثانية، ذكراً كان أو أنثى)')->persistent("Close");
                    return redirect()->back();
                break;
                
                case ($cownumber>= 40 && $cownumber<= 59):
                    alert()->success('مسنة (أنثى البقر التي أتمت سنتين ودخلت في الثالثة)')->persistent("Close");
                    return redirect()->back();
                break;
    
                case ($cownumber>= 60 && $cownumber<= 69):
                    alert()->success('تبيعان أو تبيعتان')->persistent("Close");
                    return redirect()->back();
                break;
    
                case ($cownumber>= 70 && $cownumber<= 79):
                    alert()->success('مسنة + تبيع أو تبيعة')->persistent("Close");
                    return redirect()->back();
                break;

                case ($cownumber>= 80 && $cownumber<= 89):
                    alert()->success('مسنتان')->persistent("Close");
                    return redirect()->back();
                break;

                case ($cownumber>= 90 && $cownumber<= 99):
                    alert()->success('ثلاث أتبعة')->persistent("Close");
                    return redirect()->back();
                break;

                case ($cownumber>= 100 && $cownumber<= 109):
                    alert()->success('مُسنة + تبيعان أو تبيعتان')->persistent("Close");
                    return redirect()->back();
                break;
    
                case ($cownumber>= 110 && $cownumber<= 119):
                    alert()->success('مسنتان + تبيعان أو تبيعتان')->persistent("Close");
                    return redirect()->back();
                break;

                case ($cownumber>= 120 && $cownumber<= 129):
                    alert()->success('ثلاث مسنات أو أربعة أتبعة')->persistent("Close");
                    return redirect()->back();
                break;

                case($cownumber > 129):
                    alert()->success('وهكذا ما زاد عن ذلك في كل ثلاثين تبيع أو تبيعة، وفي كل أربعين مسنة.')->persistent("Close");
                    return redirect()->back();
                break;
            break;
            }
        } 
        else{
            alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
            return redirect()->back();
        }
    }


    public function camelshow()
    {
        return view('zakat.animals.camel');
    }

    public function calculatecamel(Request $request)
    {
        $camelnisab=5;

        $camelnumber=$request->input('camel');

        if($camelnumber>= $camelnisab){
            switch ($camelnumber) {
                case ($camelnumber>= 5 && $camelnumber<= 9):
                    alert()->success('1 ( شاه ) ')->persistent("Close");
                    return redirect()->back();
                break;
                
                case ($camelnumber>= 10 && $camelnumber<= 14):
                    alert()->success('شاتان')->persistent("Close");
                    return redirect()->back();
                break;
    
                case ($camelnumber>= 15 && $camelnumber<= 19):
                    alert()->success('ثلاث شياه')->persistent("Close");
                    return redirect()->back();
                break;
    
                case ($camelnumber>= 20 && $camelnumber<= 24):
                    alert()->success('أربع شياه')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 25 && $camelnumber<= 35):
                    alert()->success('بنت مخاض (هي أنثى الإبل أتمت سنة واحدة ودخلت في الثانية، سميت بذلك لأن أمها لحقت بالمخاض وهي الحوامل الثانية)')->persistent("Close");
                    return redirect()->back();
                break;


                case ($camelnumber>= 36 && $camelnumber<= 45):
                    alert()->success('بنت لبون (أنثى الإبل التي أتمت سنتين ودخلت في الثالثة، سميت بذلك لأن أمها تكون وضعت غيرها في الغالب وصارت ذات لبن)')->persistent("Close");
                    return redirect()->back();
                break;


                case ($camelnumber>= 46 && $camelnumber<= 60):
                    alert()->success('حِقه (أنثى الإبل التي أتمت ثلاث سنين ودخلت الرابعة، سميت حِقة لأنها استحقت أن يطرقها الفحل)')->persistent("Close");
                    return redirect()->back();
                break;


                case ($camelnumber>= 61 && $camelnumber<= 75):
                    alert()->success('جذعة (أنثى الإبل التي أتمت أربع سنين ودخلت في الخامسة)')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 76 && $camelnumber<= 90):
                    alert()->success('بنتا لبون')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 91 && $camelnumber<= 120):
                    alert()->success('حقتان')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 121 && $camelnumber<= 129):
                    alert()->success('ثلاث بنات لبون')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 130 && $camelnumber<= 139):
                    alert()->success('حقة + بنتا لبون')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 140 && $camelnumber<= 149):
                    alert()->success('حقتان + بنتا لبون')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 150 && $camelnumber<= 159):
                    alert()->success('ثلاث حقاق')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 160 && $camelnumber<= 169):
                    alert()->success('أربع بنات لبون')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 170 && $camelnumber<= 179):
                    alert()->success('أربع بنات لبون')->persistent("Close");
                    return redirect()->back();
                break;


                case ($camelnumber>= 180 && $camelnumber<= 189):
                    alert()->success('بنتا لبون + حقتان')->persistent("Close");
                    return redirect()->back();
                break;

                case ($camelnumber>= 190 && $camelnumber<= 199):
                    alert()->success('ثلاث حقاق + بنت لبون')->persistent("Close");
                    return redirect()->back();
                break;

                case($camelnumber > 199):
                 
                    alert()->success('ثم في كل أربعين بنت لبون، وفي كل خمسين حقة.')->persistent("Close");
                    return redirect()->back();
                break;
            break;
            }
        }
        else{
            alert()->error('عذراً ', 'لم تبلغ النصاب  بعد لا زكاة عليك ')->autoclose(3500);
            return redirect()->back();
        }
    }
    

}
