<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    // index - show all listings
    // show - show single listing
    // create - show form to create a new listing
    // store - store new listing
    // edit - show form to edit a listing
    // update - update a listing
    // destroy - destroy a listing


    public function index() {
        return view('listing.index', [
            'heading' => 'Foreach Example',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show($id) {
        return view('listing.show', [
            'listing' => Listing::find($id)
        ]);

    }
}
