<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    public function index()
    {
        return response()->json(Photo::all(), 200);
    }

    public function show($id)
    {
        $photo = Photo::find($id);

        if (!$photo) {
            return response()->json(['message' => 'Photo not found'], 404);
        }

        return response()->json($photo, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'listing_id' => 'required|exists:listings,id',
            'path' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $photo = Photo::create($request->all());

        return response()->json($photo, 201);
    }

    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);

        if (!$photo) {
            return response()->json(['message' => 'Photo not found'], 404);
        }

        $photo->update($request->all());
        return response()->json($photo, 200);
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);

        if (!$photo) {
            return response()->json(['message' => 'Photo not found'], 404);
        }

        $photo->delete();
        return response()->json(['message' => 'Photo deleted successfully'], 204);
    }
}
