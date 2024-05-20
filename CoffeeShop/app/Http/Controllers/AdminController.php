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
        DB::table('forms')->where('id', $id)->delete();
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

    public function Cupdate($id)
    {
        $data = DB::table('cmenus')->find($id);
        return view('auth.Cupdate', compact("data"));
    }

    public function CupdateNow(Request $request)
    {
        $id = $request->input('idU');
        $name = $request->input('nameU');
        $price = $request->input('priceU');
        $description = $request->input('descriptionU');

        DB::table('cmenus')->where('id', $id)->update([
            'name' => $name,
            'price' => $price,
            'description' => $description,
        ]);
        return redirect()->route('menus');
    }

    public function Cdelete($id)
{
    // Find the record using the Query Builder
    $data = DB::table('cmenus')->where('id', $id);

    // Check if the record exists
    if ($data->exists()) {
        // Delete the record
        $data->delete();
    }

    // Redirect to the menus route
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


public function changePhoto(Request $request, $id)
{
    // Validate the uploaded file
    $request->validate([
        'new_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
    ]);

    // Get the chef record by ID
    $chef = DB::table('chefs')->find($id);

    // Check if the chef exists
    if (!$chef) {
        return back()->with('error', 'Chef not found');
    }

    // Handle file upload
    if ($request->hasFile('new_photo')) {
        $image = $request->file('new_photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/team'), $imageName);

        // Update the chef's photo in the database
        DB::table('chefs')
            ->where('id', $id)
            ->update(['image' => $imageName]);

        return back()->with('success', 'Chef photo updated successfully');
    } else {
        return back()->with('error', 'Failed to upload photo');
    }
}

public function addNewChef(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'new_chef_name' => 'required',
        'new_chef_position' => 'required',
        'new_chef_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle file upload
    if ($request->hasFile('new_chef_photo')) {
        $image = $request->file('new_chef_photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/team'), $imageName);
    } else {
        return back()->with('error', 'Failed to upload photo');
    }

    // Insert a new chef record using DB facade
    DB::table('chefs')->insert([
        'name' => $request->input('new_chef_name'),
        'position' => $request->input('new_chef_position'),
        'image' => $imageName,
    ]);

    return back()->with('success', 'New chef added successfully');
}

}