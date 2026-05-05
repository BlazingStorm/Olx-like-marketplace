<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use App\Models\ListingImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = Listing::query()->with('listing_images')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListingRequest $request)
    {
        

        $listing = $request->safe()->except('image_path');
        
        $listing['user_id'] = Auth::id();
        $listing = Listing::query()->create($listing);

        if($request->hasFile('images')){
            foreach($request->file('images') as $image){
                $path = $image->store('listings' , 'public');

                $listing->images()->create([
                    'image_path' => $path
                ]);
            }
        }

        return redirect()->route('listing.index')
            ->with('success' , 'listing created successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
