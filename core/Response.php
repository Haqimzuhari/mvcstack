<?php

class Response
{
    public static function set_statusCode(int $code)
    {
        http_response_code($code);
    }
}