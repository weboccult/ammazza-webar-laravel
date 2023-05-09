<?php
 namespace Tryon; 
 use Illuminate\Support\Facades\Http;

 class Tryon { 

    
    public function hello() {
         return 'Hello, world! Ammazza'; 
    } 

    public static function getTryOn($product_id="")
    {
            $tryon_button = static::webar_check_tryon_producs($product_id);
         
            if( $tryon_button != '' ){
       
                $button= '<a href="javascript:void(0)" class="popup-tryon" data-hid="'.$tryon_button.'">Try Now</a>';
                return $button;
            }
       
       
    }
    public static function webar_check_tryon_producs($product_id=''){
     
        /** Ammazza client id added in env file of project */   
        $ton_clientid = env('AMMAZZA_CLINET_ID');

        if(!empty($ton_clientid)) {
            if( $product_id != '' ){
                
                $clientid = $ton_clientid;
                
                $url = "https://jewellers.ammazza.me/api/v1/tryon/checkTryon?client_id=".$clientid."&product_id=".$product_id;
        
                $response = Http::get($url);
                
                if (  $response  ) {
                   
                    $request_bodydata = $response->getBody()->getContents();
                    $request_data = json_decode($request_bodydata);
        
        
                    if( $request_data->status == 200 && $request_data->status != 404 ){
                        $tryon_btn = "https://tryon.ammazza.me/?product_id=".$product_id."&client_id=".$clientid;			
                        return $tryon_btn;
                    }
                }
                else {
                    return '';
                }
            }else{
                $clientid = $ton_clientid;
                $tryon_btn = "https://tryon.ammazza.me/?client_id=".$clientid;		
                return $tryon_btn;		
            }
        }
        
    }

} 