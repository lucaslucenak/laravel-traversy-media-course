<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(3)
        ]);
    }

    public function show($id) {
        return view('listing.show', [
            'listing' => Listing::find($id)
        ]);
    }

    public function create() {
        return view('listing.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company_name' => ['required', Rule::unique('listings', 'company_name')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo_path')) {
            $formFields['logo_path'] = $request->file('logo_path')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/listing')->with('message', 'Listing Created Successfully');
    }
}
