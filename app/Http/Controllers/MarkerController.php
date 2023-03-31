<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;
use App\Models\MarkerModel;
use Illuminate\Http\Request;

class MarkerController extends Controller
{
    public function index()
    {
        
        return view('tambah' );
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_marker' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        HomeModel::create([
            'nama_marker' => $request->nama_marker,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/home')->with('success', 'Product has been added');
        }
        public function destroy($id)
    {
        $marker = HomeModel::find($id);
        $marker->delete();

        return redirect('/home')->with('success', 'Product has been deleted');
    }

}
