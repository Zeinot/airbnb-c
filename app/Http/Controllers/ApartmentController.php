<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use App\Models\Apartment;
use App\Models\ApartmentImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{

    public function create_reservation(Apartment $apartment)
    {
        return view('apartments.reservation.create', ["apartment" => $apartment]);
    }

    public function send(Apartment $apartment, Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "phone" => "required",
        ]);

        Mail::to($request->email)->send(new ReservationMail([
            'email' => $request->email,
            'apartment_title' => $apartment->title,
//            'apartment_title' => $apartment->title,
            'apartment_type' => $apartment->type,
            'apartment_city' => $apartment->city,
            'apartment_address' => $apartment->address,
            'apartment_price' => $apartment->price,
            'phone' => $request->phone,
            'info' => $request->info,
        ]));
        return redirect(route("home"));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        [
            "search" => $search,
            "type" => $type,
            "city" => $city,
            "address" => $address,
            "min_price" => $min_price,
            "max_price" => $max_price,
            "ASC" => $ASC,
            "DESC" => $DESC
        ] = $request;

        $query = Apartment::query();
        if (isset($search)) {
            $query = $query->whereAny(['title', 'type',
                'city',
                'address',
                'description',
                'price',], "like", "%$search%");
        }
        if (isset($type)) {
            $query = $query->whereLike('type', "%$type%");
        }
        if (isset($city)) {
            $query = $query->whereLike('city', "%$city%");
        }
        if (isset($address)) {
            $query = $query->whereLike('city', "%$address%");
        }
        if (isset($min_price)) {
            $query = $query->where('price', '>=', $min_price);
        }
        if (isset($max_price)) {
            $query = $query->where('price', '<=', $max_price);
        }
        if ($ASC) {
            $query = $query->orderBy('price', 'ASC');
        } else if ($DESC) {
            $query = $query->orderBy('price', 'DESC');
        }
        $apartments = $query->paginate(15);
        return view("apartments.index", [
            "apartments" => $apartments,
            "search" => $search,
            "type" => $type,
            "city" => $city,
            "address" => $address,
            "min_price" => $min_price,
            "max_price" => $max_price,
            "ASC" => $ASC,
            "DESC" => $DESC,
        ]);
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
        // dump(request()->all());
        $request->validate([
            "title" => "required|min:25|max:80",
            "type" => "required|in:Daily,Weekly,Monthly,Yearly",
            "city" => "required|min:3|max:50",
            "address" => "required|min:10|max:200",
            "description" => "required|min:10|max:5000",
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
            [
                "title" => $title,
                "type" => $type,
                "city" => $city,
                "address" => $address,
                "description" => $description,
                "price" => $price,
            ] = $request;

            $apartment = Apartment::create([
                "title" => $title,
                "type" => $type,
                "city" => $city,
                "address" => $address,
                "description" => $description,
                "price" => $price,
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
        // dump( $old_images = $apartment->apartment_images);
        $request->validate([
            "title" => "required|min:25|max:80",
            "type" => "required|in:Daily,Weekly,Monthly,Yearly",
            "city" => "required|min:3|max:50",
            "address" => "required|min:10|max:200",
            "description" => "required|min:10|max:5000",
            "price" => "required|min:0.01",
            "images" => "required",
            'images.*' => 'image|mimes:jpg,jpeg,png,webp,svg|max:20048'

        ], [
            "images.required" => "Please upload Images",
            "images.*.image" => "The files must be images",
            "images.*.mimes" => "Images must be jpg,jpeg,png,webp",
            "images.*.max" => "Images too large",
        ]);

        DB::transaction(function () use ($request, $apartment) {
            $apartment->title = $request->title;
            $apartment->type = $request->type;
            $apartment->city = $request->city;
            $apartment->address = $request->address;
            $apartment->description = $request->description;
            $apartment->price = $request->price;
            $apartment->save();
            $images = request()->file('images');
            $old_images = $apartment->apartment_images;

            foreach ($old_images as $apartment_image) {
                Storage::disk('public')->delete($apartment_image->path);
                $apartment_image->delete();
            }

            foreach ($images as $file) {

                $path = $file->store('apartment_images', 'public');
                $apartment_image = ApartmentImages::create([
                    "path" => $path,
                    "apartment_id" => $apartment->id,
                ]);
            }
        });
//            dump($request->all(),  $apartment);
        return redirect(route("apartments.admin_index"));
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
//            dump("success");
        });

        return redirect(route("apartments.admin_index"));
    }


    public function send_reservation_email($recipient_email = null)
    {

    }


}
