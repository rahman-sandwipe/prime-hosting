<?php

namespace App\Helpers;

class EnvHelper
{
    public static function setEnvValue($key, $value)
    {
        $path = base_path('.env');

        if (!file_exists($path)) return false;

        $env = file_get_contents($path);

        if (strpos($env, "$key=") !== false) {
            // Key exists, replace line
            $env = preg_replace("/^$key=.*/m", "$key=\"$value\"", $env);
        } else {
            // Key doesn't exist, append it
            $env .= "\n$key=\"$value\"";
        }

        file_put_contents($path, $env);

        return true;
    }
}
