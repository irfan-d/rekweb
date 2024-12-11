<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function showAll()
    {
        return response()->json(Hotel::all());
    }

    public function showOne($id)
    {
        return response()->json(Hotel::find($id));
    }

    public function create(Request $request)
    {
        $Hotel = Hotel::create($request->all());
        return response()->json($Hotel, 201);
    }

    public function update($id, Request $request)
    {
        $Hotel = Hotel::findOrFail($id);
        $Hotel->update($request->all());
        return response()->json($Hotel, 200);
    }

    public function delete($id)
    {
        Hotel::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
