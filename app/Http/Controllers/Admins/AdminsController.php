<?php

namespace App\Http\Controllers\Admins;

use App\Models\Offer;
use App\Models\Category;
use App\Http\Requests\Edit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\CreateOffer;
use App\Http\Controllers\Controller;



class AdminsController extends Controller
{
    public function getNewOffer()
    {
        //
        $categories = Category::all();

        return view("admin.new-offer", compact("categories"));
    }

    public function store(CreateOffer $request)
    {
        //
        $file_extension = request("file") -> getClientOriginalExtension();
        $file_name = time() . "." . $file_extension;
        $file_path = "image/offers";

        request("file") -> move($file_path, $file_name);

        // CREATE THE REQUEST OF FORM IN DATABASE
        Offer::create([
            "file" => $file_name,
            "name" => request("name"),
            "excerpt" => request("excerpt"),
            "details" => request("details"),
            "price" => request("price"),
            "category_id" => request("category_id"),
            "user_id" => auth()->id(),
        ]);

        // REDIRECT TO HOME PAFE WITH A MESSAGE
        return back()->with(["errorMessage" => "Offer added successfully"]);
    }

    public function getDashboard()
    {
        //
        return view("admin.dashboard");
    }

    public function getEdit($id)
    {

        $offer = Offer::select("id", "name", "excerpt", "details", "price", "file", "category_id")->find($id);

        return view("admin.edit", compact("offer"));
    }

    public function destroy($id)
    {
        $destroy = Offer::find($id);

        if($destroy === false){
            return redirect()->back()->with(["success" => "Offer not exist"]);
        }
        $destroy->delete();
        return redirect()->route("dashboard")->with(["success" => "Offer deleted successfully"]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            "name" => ["required", "string"],
            "excerpt" => ["required", Rule::unique("offers", "excerpt")->ignore($id)],
            "details" => ["required", "string"],
            "price" => ["required", "numeric"],
            "category_id" => ["required", Rule::exists("categories", "id")],
        ]);

        $update = Offer::select()->find($id);

        $update->update($request->all());
        return redirect()->route("dashboard")->with(["success" => "Offer updated.!"]);
    }
}
