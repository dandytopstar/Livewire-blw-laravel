<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function registration(Request $request, $code)
    {
        $client = Client::query()->where('code', $code)->first();

        if(!empty($client->email)) {
            return response()->redirectToRoute('personal-plan', $code);
        }

        return view('registration', compact('code'));
    }

    public function createClient(Request $request)
    {
        $code = $request->get('code');
        $email =$request->get('email');

        $client = Client::query()->where('code', $code)->first();

        if($client && $email) {
            $client->email = $email;
            $client->save();
        }

        return response()->redirectToRoute('personal-plan', $code);
    }
}
