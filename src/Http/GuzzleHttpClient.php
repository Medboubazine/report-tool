<?php

namespace Medboubazine\ReportTool\Http;

use GuzzleHttp\Client;
use Medboubazine\ReportTool\Helpers\Server;

final class GuzzleHttpClient
{
    /**
     * Boot guzzle
     *
     * @return void
     */
    public static function client()
    {
        return new Client([
            'base_uri' => Server::getBaseUri(),
            'timeout'  => 5,
            "allow_redirects" => false,
            "http_errors" => false,
            "verify" => true,
            "headers" => [
                "Accept" => "application/json",
                "User-Agent" => "ReportTool/1"
            ],
        ]);
    }
}
