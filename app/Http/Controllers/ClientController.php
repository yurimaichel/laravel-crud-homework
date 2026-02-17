<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $clients = DB::table('clients')->get();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        DB::table('clients')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('clients.index');
    }

    public function show($id)
    {
        $client = DB::table('clients')->where('id', $id)->first();
        return view('clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = DB::table('clients')->where('id', $id)->first();
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        DB::table('clients')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('clients.index');
    }

    public function destroy($id)
    {
        DB::table('clients')->where('id', $id)->delete();
        return redirect()->route('clients.index');
    }
}