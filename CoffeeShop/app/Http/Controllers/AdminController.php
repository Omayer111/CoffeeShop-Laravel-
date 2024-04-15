<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form; // Import the 'Form' class from the appropriate namespace
use Illuminate\Support\Facades\DB;

class AdminController
{
    public function users()
    {
        $data = DB::table('forms')->get();
        return view('auth.users', compact("data"));
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('users');
    }
    public function Rdelete($id)
    {
            DB::table('reservations')->where('id', $id)->delete();
            
            return redirect()->route('Areservation');
    }
    public function Bdelete($id)
    {
        DB::table('bmenus')->where('id', $id)->delete();

        return redirect()->route('menus');
    }



    public function Bupdate($id)
    {
        $data = DB::table('bmenus')->find($id);
        return view('auth.Bupdate', compact("data"));
    }

    public function BupdateNow(Request $request)
    {
        $id = $request->input('idU');
        $name = $request->input('nameU');
        $price = $request->input('priceU');
        $description = $request->input('descriptionU');

        DB::table('bmenus')->where('id', $id)->update([
            'name' => $name,
            'price' => $price,
            'description' => $description,
        ]);
        return redirect()->route('menus');
    }

    public function Cdelete($id)
    {
        $data = DB::table('cmenus')->find($id);
        $data->delete();
        return redirect()->route('menus');
    }
    public function formInfo(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        DB::table('forms')->insert([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        return view('thanks');
    }

    public function reservationInfo(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $time = $request->input('time');
        $date = $request->input('date');
        $number = $request->input('number');
        $message = $request->input('message');

        DB::table('reservations')->insert([
            'name' => $name,
            'phone' => $phone,
            'time' => $time,
            'date' => $date,
            'number' => $number,
            'message' => $message,
        ]);
        return view('reservation');
    }
    public function getreservation()
    {
        $data = DB::table('reservations')->get();
        return view('auth.Areservation', compact("data"));
    }
    public function menus()
    {
        $bmenus = DB::table('bmenus')->get();
        $cmenus = DB::table('cmenus')->get();
        return view('auth.menus', compact('bmenus', 'cmenus'));
    }


    public function chefs()
    {
        $chefs = DB::table('chefs')->get();
        return view('auth.chefs', compact('chefs'));
    }

    public function Chefdelete($id)
    {
        DB::table('chefs')->where('id', $id)->delete();

        return redirect()->route('chefs');


    }
}