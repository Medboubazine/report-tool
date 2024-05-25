<?php

namespace Medboubazine\ReportTool\Helpers;

use Medboubazine\ReportTool\Config\Config;
use Throwable;

final class Server
{
    /**
     * Base uri
     *
     * @var string
     */
    public static ?string $base_uri = null;
    /**
     * Get server
     *
     * @return string
     */
    public static function getBaseUri()
    {
        if (self::$base_uri) {
            return self::$base_uri;
        }

        try {
            $data = trim(file_get_contents(Config::getBootstrapUri()) ?? "{}");
            $server = json_decode($data, true);

            if (isset($server) and is_array($server) and isset($server['reports'])) {
                self::$base_uri = $server['reports'];
                return self::$base_uri;
            }
        } catch (Throwable) {
        }

        return null;
    }
}
