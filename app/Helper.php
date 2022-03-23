<?php

namespace App;

class Helper
{
    public static function updateSiteSetting()
    {
        $settings = \App\site_setting::find(1);
        \Illuminate\Support\Facades\Session::put('site_setting',$settings);

    }

    public  static function getCategories(){
        $categories = Category::where('status',1)->get();
        return $categories;
    }

    public  static function getCategoryName($id){
        if(!$id){
            return false;
        }
        $category = Category::find($id);
        if($category){
            return $category->name;
        }
        return false;
    }

}
