<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        try {
            $client = new Client(['base_uri' => 'http://www.etnassoft.com/api/v1', 'timeout' => 5]);
            $resp = $client->request('GET', '/get/?get_categories=all');
            return response()->json(['data' => json_decode($resp->getBody()->getContents(), true)]);
        } catch (\Exception $e) {
            return  response()->json(['data' => [], 'err' => $e->getMessage(), 'msg' => 'Error obteniendo datos'], 500);
        }
    }
}
