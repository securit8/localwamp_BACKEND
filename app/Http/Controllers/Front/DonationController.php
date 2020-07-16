<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use DB;
use App\products as products;
class DonationController extends Controller{


    public function index(){

        $data['menu']= 3;
        return view('front/donation/index',$data);
    }

    public function fullstory(){
      $data['menu']= 3;
      return view('front/donation/fullStory',$data);
    }

    public function baxmaro(){

      //dd($product[0]);
         $data['menu']= 3;

      return view('front/donation/baxmaro',$data);
    }
    public function racha(){
      $data['menu']= 3;
      return view('front/donation/racha',$data);
    }
    public function svaneti(){
      $data['menu']= 3;
      return view('front/donation/svaneti',$data);
    }

    public function lopota(){
      $data['menu']= 4;
      $data['lopota']=products::where('order_desc', 'lopota')->value('price');
      return view('front/donation/lopota',$data);
    }

    public function vianotour(){
      $data['menu']= 3;
      $product=DB::table('products')->pluck('price');
      $data['kaxeti_price']=$product[0];
      $data['yazbegi_price']=$product[1];
      $data['ajara_price']=$product[2];
      return view('front/donation/vianotour',$data);
    }

    public function vianotbilisi(){
      $data['menu']= 2;
      $data['Viano_Per_Day']=products::where('order_desc', 'Viano_Per_Day')->value('price');
      $data['Viano_airport']=products::where('order_desc', 'Viano_airport')->value('price');
      return view('front/donation/vianotbilisi',$data);
    }

    public function sclass(){
      $data['menu']= 2;
      $data['Mercedes_S_Airport']=products::where('order_desc', 'Mercedes_S_Airport')->value('price');
      $data['Mercedes_S_Per_Day']=products::where('order_desc', 'Mercedes_S_Per_Day')->value('price');

      return view('front/donation/sclass',$data);
    }

    public function camry(){
      $data['menu']= 2;
      $data['Camry_Airport']=products::where('order_desc', 'Camry_Airport')->value('price');
      $data['Camry_Per_Day']=products::where('order_desc', 'Camry_Per_Day')->value('price');
      return view('front/donation/camry',$data);
    }

    public function eclass(){
      $data['menu']= 2;
      $data['Mercedes_E_Airport']=products::where('order_desc', 'Mercedes_E_Airport')->value('price');
      $data['Mercedes_E_Per_Day']=products::where('order_desc', 'Mercedes_E_Per_Day')->value('price');
      return view('front/donation/eclass',$data);
    }
    public function landCruiser(){
      $data['menu']= 2;
      $data['Cruiser_Airport']=products::where('order_desc', 'Cruiser_Airport')->value('price');
      $data['Cruiser_Per_Day']=products::where('order_desc', 'Cruiser_Per_Day')->value('price');
      return view('front/donation/landcruiser',$data);
    }
    public function lx450(){
      $data['menu']= 2;
      $data['LX_Airport']=products::where('order_desc', 'LX_Airport')->value('price');
      $data['LX_Per_Day']=products::where('order_desc', 'LX_Per_Day')->value('price');
      return view('front/donation/lx450',$data);
    }
    public function sprinter11(){
      $data['menu']= 2;
      $data['Sprinter_Airport']=products::where('order_desc', 'Sprinter_Airport')->value('price');
      $data['Sprinter_Per_Day']=products::where('order_desc', 'Sprinter_Per_Day')->value('price');
      return view('front/donation/sprinter11',$data);
    }
    public function sprinter16(){
      $data['menu']= 2;
      $data['Sprinter_L_Airport']=products::where('order_desc', 'Sprinter_L_Airport')->value('price');
      $data['Sprinter_L_Per_Day']=products::where('order_desc', 'Sprinter_L_Per_Day')->value('price');
      return view('front/donation/sprinter16',$data);
    }
    public function maybach(){
      $data['menu']= 2;
      $data['Maybach']=products::where('order_desc', 'Maybach')->value('price');
      return view('front/donation/maybach',$data);
    }

}
