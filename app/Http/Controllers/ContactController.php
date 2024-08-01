<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Contacts::query();

        if ($request->has('name')) {
            $search = $request->input('name');
            $query->where('name', 'LIKE', "%$search%");
        }

        if ($request->has('issuer')) {
            $search = $request->input('issuer');
            $query->where('issuer', 'LIKE', "%$search%");
        }

        if ($request->has('number')) {
            $search = $request->input('number');
            $query->where('number', 'LIKE', "%$search%");
        }

        $contacts = $query->paginate(10);

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        //
    }

}
