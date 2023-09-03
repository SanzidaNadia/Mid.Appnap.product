<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountPagesController extends Controller
{
   public function account(){
    return view("pages.account");
   }

   public function list(){
      $registers = register::all();
      return view('pages.register.list',  compact('registers'));
  }

   public function store(Request $request)
   {
       $this->validate($request, [
         // 'user_id' =>'required|string',

         'name' =>'required|string',

         'email'=>'required|email|string',

         'phone_number' =>'required|string',

         'password' =>'required||string',

         'repeat_password' =>'required|string',
       ]);

       $register= new Register;
      //  $register->user_id = $request->user_id;
       $register->name = $request->name ;
       $register->email= $request->email;
       $register->phone_number= $request->phone_number;
       $register->password= Hash::make ($request->password);
       $register->repeat_password= Hash::make ($request->repeat_password);
      
      //  dd($register);
       $register->save();
       

       return redirect()->route('admin.register.list')->with('success','New Meeting_room Created Successfully');

   }

   public function processRegistration(Request $request)
   {
      $validator = validator::make($request->all(),[
         'user_id' =>'required|string',

         'name' =>'required|string',

         'email'=>'required|email|string',

         'phone_number' =>'required|string',

         'password' =>'required|min:5|confirmed',

         'repeat_password' =>'required|string',


      ]);
      if($validator->passes()){


         $register= new Register;
         $register->user_id = $request->user_id;
         $register->name = $request->name ;
         $register->email= $request->email;
         $register->phone_number= $request->phone_number;
         $register->password= Hash::make ($request->password);
         $register->repeat_password= Hash::make ($request->repeat_password);
        
         $register->save();
         
         session()->flash('success','you have been registered sucessfully');

         return response()->json([
            'status' => true,
         ]);

      }else{
         return response()->json([
            'status' => false,
            'errors' => $validator->errors()
         ]);
      }
   }
}
