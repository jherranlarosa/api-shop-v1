<?php
namespace App\Http\Controllers\Api\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Model\ProductUnit;
use Illuminate\Support\Facades\Auth;
use Validator;


class ProductUnitController extends BaseController
{
    /**
     * Product Unit api
     *
     * @return \Illuminate\Http\Response
     */
  

    public function createProductUnit(Request $request)
    {
        $productUnit = new ProductUnit();
        $productUnit->name=$request->name;        
        $productUnit->description=$request->description;        
        $productUnit->save();        
        return $this->sendResponse($productUnit, 'Unit Product create !! :)');
    }

    public function listProductUnit()
    {
        $productUnit=ProductUnit::all()->where('status',1);
        return $this->sendResponse($productUnit, 'Unit Product Ready! :)');
    }

    public function updateProductUnit(Request $request)
    {
        $productUnit =ProductUnit::find($request->id);
        $productUnit->name=$request->name;        
        $productUnit->description=$request->description;     
        $productUnit->save();      
        return $this->sendResponse($productUnit, 'Unit Product create !! :)');
    }

    public function deleteProductUnit(Request $request)
    {
        $productUnit =ProductUnit::find($request->id);
        $productUnit->status=0;        
        $productUnit->save();        
        return $this->sendResponse($productUnit, 'Unit Product delete !! :)');
    }
}