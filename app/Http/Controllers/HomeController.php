<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\Prodcut;
use App\Models\message;
use App\Models\order;
use App\Models\City;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Prodcut::select(
            'id',
             'title_'. LaravelLocalization::getCurrentLocale().'  as title',
             'details_'. LaravelLocalization::getCurrentLocale().'  as details',
             'image_cover')->get();

            $random=$products->random(count($products)/2); 
        return view('pages.index', compact('products',"random"));
    }
 
    public function about()
    {
        return view("pages.about");

    }
    public function contact()
    {
        return view("pages.contact"); 
    }
    public function success()
    {
        return view("pages.success"); 
    }
    public function contactSave(Request $request)
    {
        
       
        
        
        
        $validator = Validator::make(
            $request->all(),
            [
                "name"=>"required",
                "subject"=>"required",
                "phone"=>"required",
            ]);

            if ($validator->fails()) {
            
                return Redirect::back()->withErrors($validator)->withInput($request->all() );
            }  
            $form_data = array(
                'subject'       =>   $request->subject,
                'email'        =>   $request->email,
                'phone'        =>   $request->phone,
                'message'        =>   $request->message,
                'name'            =>    $request->name,
            );
              message::create($form_data);
            return redirect('/contact')->with('success', 'Data Added successfully.');
        
    }

    public function orderSave(Request $request)
    {
         $this->validate($request, [
 "user_name"=>"required",
                "phone"=>"required",
                "qty"=>"required",
                "city_id"=>"required",

        ], [
            'user_name.required' => 'حقل الاسم مطلوب',
            'phone.required' => 'حقل الهاتف مطلوب',

'qty.required'=>'حقل الكمية مطلوب',
'city_id.required'=>'حقل المحافظة مطلوب',
        ]);
        
        
        
        
        // $validator = Validator::make(
        //   $request->all(),
        //     [
        //         "user_name"=>"required",
        //         "phone"=>"required",
        //         "qty"=>"required",
        //         "city_id"=>"required",
        //     ]);

        //     if ($validator->fails()) {
            
        //         return Redirect::back()->withErrors($validator)->withInput($request->all() );
        //     }  
            $form_data = array(
                'product_name'       =>   $request->product_name,
                'user_name'        =>   $request->user_name,
                'phone'        =>   $request->phone,
                'qty'        =>   $request->qty,
                'city_id'=>$request->city_id,
                'status_id'=>1,
            );
              order::create($form_data);
            return redirect('/success')->with('success', 'Data Added successfully.');
        
        
    }
    public function getQrProducts(){
        $products=Prodcut::select(
            'id',
             'title_'. LaravelLocalization::getCurrentLocale().'  as title',
             'details_'. LaravelLocalization::getCurrentLocale().'  as details',
             'image_cover')->get();
        return view('pages.qrProducts', compact('products'));
    }
    public function getAllProducts()
    {
        $products=Prodcut::select(
            'id',
             'title_'. LaravelLocalization::getCurrentLocale().'  as title',
             'details_'. LaravelLocalization::getCurrentLocale().'  as details',
             'image_cover')->get();
        return view('pages.products', compact('products'));
    }

    public function details($id)
    {
        $product=Prodcut::select(
            'id',
             'title_'. LaravelLocalization::getCurrentLocale().'  as title',
             'details_'. LaravelLocalization::getCurrentLocale().'  as details',
             'image_cover')->where("id",$id)->first();       
            return view('pages.product_details', compact('product'));
    }
    
    public function singleQr(Request $request)
    {
//         $currenturl = URL::full();

// dd($currenturl);
      $data=$request->signature;
      $whatIWant = substr($data, strpos($data, "V") + 1);  
       $cities=City::orderBy("title_ar", "asc")->get();
    //   dd($whatIWant);
               return view('pages.qrForm', compact('whatIWant','cities'));
    }


}
