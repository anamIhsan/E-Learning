<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Auth::user();

        return view('pages.admin.dashboard-account', [
            'users' => $users
        ]);
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
        $data = User::find($id);

        $request->validate([
            'password' => 'required',
            'retype_password' => 'required_with:password|same:password'
        ]);

        if($request->file('profile_file') == null){
            $request->merge([
                'photo' => $data->photo
            ]);
        }else {
            $this->removeImage($data->photo);
            $image_file = $this->uploadImage($request->profile_file);
            $request->merge([
                'photo' => $image_file
            ]);
        }

        $request->merge([
            'password' => Hash::make($request->password)
        ]);

        $data->update($request->all());
        return back()->with('notification-success', 'Profile berhasil di edit');
    }

    //mengupload gambar
    public function uploadImage($image)
    {
        $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
        
    }
    
    //unlink buat menghapus file
    public function removeImage($image)
    {   
        if (file_exists('profile/'. $image)){
        unlink('profile/'. $image);
        }
    }
}
