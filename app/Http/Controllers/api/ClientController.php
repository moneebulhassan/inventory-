<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $arr['clients'] = Client::all();
        return view('pages.clients.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClientRequest $request)
    {
        Client::create($request->toArray());

//        $client->name = $request->name;
//        $client->email = $request->email;
//        $client->phone_number = $request->phone_number;
//        $client->country = $request->country;
//        $client->company_name = $request->company_name;
//        $client->shipment_address = $request->shipment_address;
//        $client->save();

        return redirect()->route('clients.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $arr['client'] = $client;
        return view ('pages.clients.show')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $arr['client'] = $client;
        return view('pages.clients.edit')->with($arr);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ClientRequest $request, Client $client)
    {
        $client->update($request->toArray());
//        $client->name = $request->name;
//        $client->email = $request->email;
//        $client->phone_number = $request->phone_number;
//        $client->country = $request->country;
//        $client->company_name = $request->company_name;
//        $client->shipment_address = $request->shipment_address;
//        $client->save();
        return redirect()->route('clients.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return redirect()
            ->route('clients.index');
    }


}
