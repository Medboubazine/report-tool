<?php

namespace Medboubazine\ReportTool\Helpers;

final class CatchDefaultData
{
    /**
     * Catch
     *
     * @return array
     */
    public static function catch(): array
    {
        $data = [];

        $data["server"] = $_SERVER['SERVER_ADDR']  ?? null;
        $data["root_path"] = $_SERVER['DOCUMENT_ROOT']  ?? null;
        $data["host"] = $_SERVER['HTTP_HOST']  ?? null;

        $data["app_name"] = self::getEnvironment("APP_NAME");
        $data["app_installation"] = self::getEnvironment("APP_INSTALLATION_ID");
        $data["app_purchase_key"] = self::getEnvironment("APP_PURCHASE_KEY");

        return $data;
    }
    /**
     * Get ENV var
     *
     * @param string $key
     * @return string|null
     */
    protected static function getEnvironment(string $key): ?string
    {
        return $_ENV[$key] ?? null;
    }
}
