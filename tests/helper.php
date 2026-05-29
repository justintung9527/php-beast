<?php

namespace app\common;

class Helper
{
    public static function formatTime($timestamp)
    {
        return date('Y-m-d H:i:s', $timestamp);
    }

    public static function encryptData($data)
    {
        $key = 'secret_key';
        $result = '';
        for ($i = 0; $i < strlen($data); $i++) {
            $char = $data[$i];
            $keyChar = $key[$i % strlen($key)];
            $result .= chr(ord($char) ^ ord($keyChar));
        }
        return base64_encode($result);
    }

    public static function decryptData($data)
    {
        $key = 'secret_key';
        $data = base64_decode($data);
        $result = '';
        for ($i = 0; $i < strlen($data); $i++) {
            $char = $data[$i];
            $keyChar = $key[$i % strlen($key)];
            $result .= chr(ord($char) ^ ord($keyChar));
        }
        return $result;
    }

    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function generateToken($length = 32)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $token = '';
        for ($i = 0; $i < $length; $i++) {
            $token .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $token;
    }
}
