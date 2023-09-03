<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use Artisan;
use Session;
use File;
use Image;

class ProductController extends Controller
{
      public function index(){
        $products = Product::orderBy('id', 'asc')->paginate(10);
        //dd($products);

        return view('adminpanel.pages.product.manage', compact('products'));
    }

    public function create(){

        return view('adminpanel.pages.product.create');

    }

    public function store(Request $request){

        $product= new Product();
        $product->name = Str::ucfirst($request->name);
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;



        //dd($product);
        $product->save();

        Session::flash('success', 'Data Inserted Successfully');

        Artisan::call('view:clear');
        Artisan::call('cache:clear');

        return redirect()->route('product.manage');

}

    public function edit($id){
        $product = Product::find($id);

        if (!is_null($product) ){
            Artisan::call('view:clear');
            Artisan::call('cache:clear');

            return view('adminpanel.pages.product.edit', compact('product'));
        }
        else {

        }

    }

    public function update(Request $request, $id){
        $product = Product::find($id);

        if (!is_null($product) ){
            $product->name = Str::ucfirst($request->name);
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;




            $product->save();

            Session::flash('success', 'Data Updated Successfully');

            Artisan::call('view:clear');
            Artisan::call('cache:clear');

            return redirect()->route('product.manage');

        }
        else {

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product ->delete();

        // Session::flash('success', 'Data Inserted Successfully');
        // Session::flash('danger', 'Data has been deleted successfully');
        return redirect()->route('product.manage')->with('danger', 'Data has been deleted successfully');
        //flash(translate('Customer has been deleted successfully'))->success();

        // return redirect()->route('service.manage');

    }
}
