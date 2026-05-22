<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodcut;
use App\Models\order;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$products= Prodcut::all(); 
        $products = Prodcut::select(
            'id',
            'title_' . LaravelLocalization::getCurrentLocale() . '  as title',
            'details_' . LaravelLocalization::getCurrentLocale() . '  as details',
            'image_cover'
        )->get();

        return view("admin.products.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            $this->getRules(),
            $this->getMessages()
        );

        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput($request->all());
        }

       
        $new_name = $this->SaveImage($request->file("image_cover"), "uploads/product/imagecover/");
        $form_data = array(
            'title_en'       =>   $request->title_en,
            'title_ar'        =>   $request->title_ar,
            'details_en'        =>   $request->details_en,
            'details_ar'        =>   $request->details_ar,
            'image_cover'            =>   $new_name
        );

        $obj =  Prodcut::create($form_data);
      
        if( $obj )
        {
            //MULTI IMAGE 
            if ($request->hasFile('product_images')) {
                $path = "uploads/product/" . $obj->id;
                if (!File::isDirectory($path)) {              
                  File::makeDirectory($path, 0775, true);
                }
                foreach ($request->file("product_images") as $image)
                {


                  $this->SaveImage($image, $path."/");

                    // $image_name = uniqid() .'.'. $image->getClientOriginalExtension();
                    // $path1 = base_path($path);
                    // $imgx = Image::make($image->getRealPath());
                    // $imgx->resize(null, 500, function ($constraint) {
                    //     $constraint->aspectRatio();
                    // })->save($path1.'/'.$image_name);
    
                   
                }

                
            }
        }
        


        return redirect('myadmin/Products')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Prodcut::select(
            'id',
            'title_' . LaravelLocalization::getCurrentLocale() . '  as title',
            'details_' . LaravelLocalization::getCurrentLocale() . '  as details',
            'image_cover',
            'VideoUrl'
        )->where("id", $id)->first();
        if ($product)
            return view("admin.products.show", compact("product"));
        else
            return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Prodcut = Prodcut::find($id);
        if ($Prodcut){
         
           $image_path = "/uploads/product/imagecover/".$Prodcut->image_cover;  // Value is not URL but directory file path
           if(File::exists(base_path($image_path))){
            File::delete(base_path($image_path));  
          }
          //all files 
          $image_paths="/uploads/product/" .$id; 
         
          if(File::exists(base_path($image_paths))){
            File::deleteDirectory(base_path($image_paths));  
          }

             $res=Prodcut::where('id',$id)->delete();
           
            return redirect('myadmin/Products')->with('success', 'Data Delete successfully.');
        }
       
    }

    public  function deleteProductImage($id, $imagepath)
    {
     
         $this->deleteImage("/uploads/product/".$id."/".$imagepath );
         return back(); 
         

    }
    public  function uploadProductImage(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
           [
            'image'         =>  'required|image|max:11048'
           ]
          
        );
        if ($validator->fails()) {

            return Redirect::back()->withErrors($validator)->withInput($request->all());
        }

        $path = "uploads/product/" . $request->id;
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0775, true);

          }
     $this->SaveImage($request->file("image"), $path ."/");
     return Redirect::back(); 

    }
    ####### Upload Video ######################
    public  function uploadProductVideo(Request $request)
    {
        
        Prodcut::where('id',$request->id)->update(['VideoUrl'=>$request->VideoUrl]);

        return Redirect::back(); 

    }
    #####  End Upload Video ################
    


    protected function SaveImage($requestImage, $folder)
    {
        $image = Image::make($requestImage);
        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        $image->resize(null, 700, function ($constraint) {
            $constraint->aspectRatio();
        });
        $new_name = time() . '.' . $requestImage->getClientOriginalExtension();
        $image->save($folder  . $new_name);
        return  $new_name;
    }

    protected function SaveMultiImage($requestImages, $folder)
    {
        foreach ($requestImages  as $file) {

            //get filename with extension
            $filenamewithextension = $file->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $file->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . uniqid() . '.' . $extension;

            //Resize image here
            $thumbnailpath = base_path($folder . "/" . $filenametostore);


           

            // $img =Image::make($file)->resize(null, 600, function ($constraint) {
            //     $constraint->aspectRatio();
            // });

             $img =Image::make($file->getRealPath());

            $img->resize(null, 600, function ($constraint) {
                $constraint->aspectRatio();
            });


            $img->save($thumbnailpath);
        }
        
    }

    protected function deleteImage($image_path){
        
        if(File::exists(base_path($image_path))){
         File::delete(base_path($image_path));  
        }
    }
    protected function getRules()
    {

        return  [
            'title_en'    =>  'required',
            'title_ar'     =>  'required',
            'image_cover'         =>  'required|image|max:11048'
        ];
    }

    protected  function  getMessages()
    {
        return [
            'title_en.required' => __("product.title_en_required"),
            'title_ar.required' => __("product.title_ar_required"),
            'image_cover.required' => __("product.image_cover_required"),
            

        ];
    }
     public function showOrders(){
        $rows = order::orderBy("id", "desc")->get();

        return view("admin.products.orders", compact('rows'));
    }
    
    public function editOrder($id){
        $order = order::where('id',$id)->first();
$statuses =Status::all();
        return view("admin.products.editOrder", compact('order','statuses'));

    }

    public function updateOrder(Request $request){
        
     $order = order::where('id',$request->order_id)->first();
        $form_data = array(
            'status_id'       =>   $request->status_id,
            'notes'        =>   $request->notes,
            'seller_name'=>$request->seller_name,
           
        );
          $order->update($form_data);
          return redirect()->route('show-orders')->with('success', 'Data Added successfully.');
    }
    public function deleteOrder($id)
    {
        // Find the order by ID
        $order = Order::find($id);
        
        // Check if order exists
        if ($order) {
            // Delete the order
            $order->delete();
            
            // Redirect with success message
            return redirect()->route('show-orders')->with('success', 'Order deleted successfully.');
        }
        
        // Redirect with error message if order not found
         return redirect()->route('show-orders')->with('error', 'Order not found.');
    }
}
