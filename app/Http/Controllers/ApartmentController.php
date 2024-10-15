<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\ApartmentImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        dump(Apartment::all());
        return view("apartments.index");
    }

    public function admin_index()
    {
//        dump(Apartment::all());
        return view("admin.apartments.index", ["apartments" => Apartment::where("user_id", auth()->user()->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.apartments.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dump(request()->all());
        $request->validate([
            "title" => "required|min:25|max:200",
            "type" => "required|in:Daily,Weekly,Monthly,Yearly",
            "city" => "required|min:3|max:50",
            "address" => "required|min:10|max:200",
            "description" => "required|min:10|max:20000",
            "price" => "required|min:0.01",
            "images" => "required",
            'images.*' => 'image|mimes:jpg,jpeg,png,webp,svg|max:20048'

        ], [
            "images.required" => "Please upload Images",
            "images.*.image" => "The files must be images",
            "images.*.mimes" => "Images must be jpg,jpeg,png,webp",
            "images.*.max" => "Images too large",
        ]);

        DB::transaction(function () use ($request) {
            $apartment = Apartment::create([
                "title" => $request->title,
                "type" => $request->type,
                "city" => $request->city,
                "address" => $request->address,
                "description" => $request->description,
                "price" => $request->price,
                "user_id" => auth()->user()->id,
            ]);
            $images = request()->file('images');
            foreach ($images as $file) {
                $path = $file->store('apartment_images', 'public');
                $apartment_image = ApartmentImages::create([
                    "path" => $path,
                    "apartment_id" => $apartment->id,
                ]);
            }
        });
        return redirect(route("apartments.admin_index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Apartment $apartment)
    {
        return view("apartments.show", ["apartment" => $apartment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apartment $apartment)
    {
        return view("admin.apartments.edit", ["apartment" => $apartment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apartment $apartment)
    {
        dd($request->all(),
            $apartment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apartment $apartment)
    {

        $apartment_images = $apartment->apartment_images;

        DB::transaction(function () use ($apartment, $apartment_images) {
            foreach ($apartment_images as $apartment_image) {
                Storage::disk('public')->delete($apartment_image->path);
                $apartment_image->delete();
            }
            $apartment->delete();
            dump("success");
        });

        return redirect(route("apartments.admin_index"));
    }
}
