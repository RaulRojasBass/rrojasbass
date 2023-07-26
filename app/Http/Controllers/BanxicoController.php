<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BanxicoController extends Controller
{
    private $client;
    private $apiKey;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://www.banxico.org.mx/SieAPIRest/service/v1/']);
        $this->apiKey = '28da3cdf16638038b8e70fd75231b65531f41a33f89e446f8b5bef85b703006b'; // Reemplaza esto con tu API Key de Banxico
    }

    public function getDollarAmount()
    {
        try {
            $response = $this->client->request('GET', 'series/SF43718/datos/oportuno', [
                'query' => [
                    'token' => $this->apiKey,
                ],
            ]);
            $data = json_decode($response->getBody(), true);
            // Obtén el monto en dólares de la respuesta
            $dollarAmount = $data['bmx']['series'][0]['datos'][0]['dato'];
            return $dollarAmount;
        } catch (Exception $e) {
            // Manejar errores de la solicitud, por ejemplo, si la API no está disponible o la clave de acceso es inválida.
            return null;
        }
    }
}
