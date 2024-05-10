<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Mail\SendProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->request->remove('_token');
        $request->merge(array('sender_ip' => $request->getClientIp()));

        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'education' => ['required'],
            'role' => ['required'],
            'observation' => [],
            'file' => ['required', File::types(['pdf', 'doc', 'docx'])->max(1024)],
            'sender_ip'  => ['required'],
            'sended_at' => ['required']
        ]);

        $file = $data['file'];
        $base64 = "data:" . $file->getMimeType() . ";base64," . base64_encode(file_get_contents($file));
        $data['file'] = $base64;

        $profile = Profile::create($data);
        
        Mail::to($data['email'], $data['name'])->send(new SendProfile([...$data, 'attachment' => $file]));

        return to_route('profile.create')->with('success_msg', 'Candidatura Enviada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
