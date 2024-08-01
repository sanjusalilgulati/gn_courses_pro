<?php

namespace App\Http\Controllers;

use App\Rules\NoScriptTag;
use Illuminate\Support\Facades\Validator;
use App\Models\certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Certificate::query();

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

        $certificates = $query->paginate(10);

        return view('certificates.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificates.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the form data
        $request->validate([
            'name' => 'required | string | max:255',
            'issuer' => 'required | String | max:255',
            'certificate_number' => 'required | String | max:255',
            'file' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('certificates', 'public');
        }

           // Save the data to the database
           $certificate = new certificate();
           $certificate->name = $request->name;
           $certificate->number = $request->certificate_number;
           $certificate->file = $path ?? '';
           $certificate->description = "null";
           $certificate->issuer = $request->issuer;
           $certificate->save();

           return redirect('/certificates')->with('success', 'Certificate uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(certificate $certificate)
    {
        //
    }

    public function getCertificate(Request $request)
    {
        $validator = Validator::make($request->all(), [
              'cert' => ['required', 'string', new NoScriptTag]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }
        $certificate = "";
        $data = certificate::select('file')->where('number', $request->cert)->first();
        if($data)
        {
            $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
            $certificate = $actual_link."/storage/".$data['file'];
        }
       return response()->json([
        'message' => 'Certification data',
        'file' => $certificate
    ]);
    }
}
