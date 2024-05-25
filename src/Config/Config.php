<?php

namespace Medboubazine\ReportTool\Config;

final class Config
{
    /**
     * URI for get servers uri
     *
     * @return string
     */
    public static function getBootstrapUri(): string
    {
        return "https://raw.githubusercontent.com/Medboubazine/Medboubazine/main/servers.json";
    }
}
