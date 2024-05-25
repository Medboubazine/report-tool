<?php

namespace Medboubazine\ReportTool\Api;

use GuzzleHttp\Client;
use Medboubazine\ReportTool\Http\GuzzleHttpClient;

final class Report
{

    protected string $uri = "post";
    /**
     * HTTP Client
     *
     * @var Client
     */
    protected Client $http_client;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->http_client = GuzzleHttpClient::client();
    }
    /**
     * Send reeport to server
     *
     * @param array $data
     * @return boolean
     */
    public function send(array $data = []): bool
    {
        $response = $this->http_client->post($this->uri, [
            "json" => $data,
        ]);

        if ($response->getStatusCode() == 200 or $response->getStatusCode() == 204) {
            return true;
        }

        return false;
    }
}
