<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetType;
use App\Models\OwnerType;
use Illuminate\Http\Request;
use Session;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $assets = Asset::orderBy('created_at', 'DESC')->get();
            Session::flash('success', 'Assets fetched successfully' );
            return view('welcome', compact('assets'));

        }
        catch (\Throwable $th)
        {
            Session::flash('status', 'Unable to fetch assets' );
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asset_types = AssetType::all();
        $owner_types = OwnerType::all();
        return view('org_asset.create', compact('asset_types', 'owner_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            
            $input = $request->only('name', 'asset_type', 'owner_type');
            
            $asset = new Asset();
    
            $asset->name = $input['name'];
            $asset->asset_type_id = $input['asset_type'];
            $asset->owner_type_id = $input['owner_type'];
    
            $asset->save();
    
            Session::flash('success', 'Assets created successfully' );
            return redirect()->route('assets');
        } catch (\Throwable $th) {
            \Log::error($th);
            Session::flash('error', 'Unable to create Asset');
            return back()->withInput();
        }

    }

    
}
