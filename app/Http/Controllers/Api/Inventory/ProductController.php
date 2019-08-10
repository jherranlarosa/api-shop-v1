<?php
namespace App\Http\Controllers\Api\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Model\Inventory\Product;
use Illuminate\Support\Facades\Auth;
use Validator;


class ProductController extends BaseController
{
    /**
     * Product  api
     *
     * @return \Illuminate\Http\Response
     */
  

    public function createProduct(Request $request)
    {
        $product = new Product();
        $product->name=$request->name;        
        $product->description=$request->description;
        $product->unitId=$request->unitId;     
        $product->categoryId=$request->categoryId;        
        $product->save();        
        return $this->sendResponse($product, 'Product create !! :)');
    }

    public function listProduct()
    {
        $product=Product::select('*')->where('status',1)->get();
        return $this->sendResponse($product, 'Loaded List Successfully :)');
    }

    public function updateProduct(Request $request)
    {
        $product =Product::find($request->id);
        $product->name=$request->name;        
        $product->description=$request->description;     
        $product->unitId=$request->unitId;     
        $product->categoryId=$request->categoryId;     
        $product->save();      
        return $this->sendResponse($product, 'Product Updated Successfully !! :)');
    }

    public function deleteProduct(Request $request)
    {
        $product =Product::find($request->id);
        $product->status=0;        
        $product->save();        
        return $this->sendResponse($product, 'Product Removed Successfully !! :)');
    }

    public function createProductImage(Request $request)
    {
        $path = $request->file->store('public/imageProduct');
        // $pathash = $request->file->hashName();
        if($request->file){
            return $this->sendResponse($path, 'Product create !! :)');
        }else{
            return $this->sendResponse($path, 'ERRO AL SUBIR IMAGEN X(');
        }
    }
}