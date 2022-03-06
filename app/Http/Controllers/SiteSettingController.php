<?php

namespace App\Http\Controllers;

use App\site_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function site()
    {
        $settings = site_setting::find(1);
        return view('site_setting', compact('settings'));

    }

    public function updateSetting(Request $request)
    {
//        dd($request->all());
        $logo_url = '';
        $validated = $request->validate([
            'system_name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'slogan' => 'required',
            'logo' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'copyright' => 'required',
        ]);

        if($request->hasFile('logo')){

            $file = $request->file('logo');
            $new_name = str_random(5). time(). $file->getClientOriginalName();
            $path = public_path('/logo');
            $file->move($path, $new_name);
            $logo_url = asset("logo/".$new_name);
        }

        $data = [
            'system_name' => $request->get('system_name'),
            'phone' => $request->get('phone'),
            'mobile' => $request->get('mobile'),
            'address' => $request->get('address'),
            'slogan' => $request->get('slogan'),
            'facebook' => $request->get('facebook'),
            'instagram' => $request->get('instagram'),
            'youtube' => $request->get('youtube'),
            'copyright' => $request->get('copyright'),
            'logo' => $logo_url,
        ];

        DB::table('site_settings')->truncate();
        site_setting::insert($data);
        return redirect()->back();
    }
}
