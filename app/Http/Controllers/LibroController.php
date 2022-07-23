<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class LibroController extends Controller
{
    //
    public function index($category_id)
    {
        try {
            $client = new Client(['base_uri' => 'http://www.etnassoft.com/api/v1', 'timeout' => 2]);
            $resp = $client->request('GET', '/get/?category_id='.$category_id);
            return response()->json(['data' => json_decode($resp->getBody()->getContents(), true)]);
        } catch (\Exception $e) {
            return  response()->json(['data' => [], 'err' => $e->getMessage(), 'msg' => 'Error obteniendo datos'], 500);
        }
    }

}
