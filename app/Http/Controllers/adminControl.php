<?php

namespace App\Http\Controllers;

use App\models\adminMode;
use App\models\categoryMode;
use App\models\productMode;
use App\models\subCategoryMode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\DB;


class adminControl extends Controller
{
    function login(){
        return view ('admin.login');
    }



    function loginPostfun(request $request){
  
     $email =$request->email;
     $password =$request->password;
     $login = DB::table("admin_modes")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     $loginPass = DB::table("admin_modes")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return view('admin.profile');

     }
     else{
        return redirect()->back()->with("message","Invalid Credentials");
     }

    }

    function register(request $request){
     return view ('admin.register');
     
   
       }


    function userRegister(request $request){
       
     //   $request->validate([
       //     'email' => 'required|email|unique:admin_modes',
         //   'password'=>'required|min:8',
          
        // ]);

        $request->validate([
       
          'email' => 'required|email|unique:admin_modes',
  
          'password' => 'required|min:8',
      ]);

     

        $u = new adminMode();
        $u->email = $request->email;
        $u->password = $request->password;
        $u->save();
     

        return redirect()->back()->with("message","User Added");
     
   
       }


       function addProduct(){
         return view ("admin.addProduct");
       }
       
 
       function logout()
       {
           session()->forget('email','password');
           
           return view("admin.login");
       }








       function category(){
        return view("admin.addCategory");
    }


    function categoryPost(Request $request)
    {
        $category = new CategoryMode();
        $category->categoryName = $request->categoryName;
        $category->save();

        return redirect()->back()->with("message","category added successfully!");  
    }

    function subcategory()
    {
        $category = CategoryMode::all();
        return view("admin.addSubCategory",compact('category'));
    }

    function subcategoryPost(Request $request)
    {
        $subCategory = new subCategoryMode();
        $subCategory->productSubCategory = $request->productSubCategory;
        $subCategory->categoryId = $request->categoryId;
        $subCategory->save();
        return redirect()->back()->with("message","sub category added successfully!");

    }

    function product(){
        $category = CategoryMode::all();
        return view("admin.addProduct",compact('category'));
    }

    function subCategoryAjax(Request $request)
    {
        $category = $request->post("categoryId");
        $subcat = subCategoryMode::where('categoryId'->$category)->get();

        foreach($subcat as $c)
        {
            echo "<option>".$c->productSubCategory."</option>";
        }
    }



}
