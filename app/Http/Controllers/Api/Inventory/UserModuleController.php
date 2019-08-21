<?php
namespace App\Http\Controllers\Api\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Model\Sale\UserModule;
use Illuminate\Support\Facades\Auth;
use Validator;


class UserModuleController extends BaseController
{
    /**
     * User Module api
     *
     * @return \Illuminate\Http\Response
     */
  

    public function createUserModule(Request $request)
    {
        $userModule = new UserModule();
        $userModule->name=$request->name;        
        $userModule->description=$request->description;        
        $userModule->save();        
        return $this->sendResponse($userModule, 'User Module create !! :)');
    }

    public function listUserModule()
    {
        $userModule=UserModule::select('*')->where('status',1)->get();
        return $this->sendResponse($userModule, 'Loaded List User Successfully :)');
    }

    public function updateUserModule(Request $request)
    {
        $userModule =UserModule::find($request->id);
        $userModule->name=$request->name;        
        $userModule->description=$request->description;     
        $userModule->save();      
        return $this->sendResponse($userModule, 'User Module Updated Successfully !! :)');
    }

    public function deleteUserModule(Request $request)
    {
        $userModule =UserModule::find($request->id);
        $userModule->status=0;        
        $userModule->save();        
        return $this->sendResponse($userModule, 'User Module Removed Successfully !! :)');
    }
}