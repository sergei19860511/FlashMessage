<?php
session_start();

class FlashMessage
{
    /**
     * @param $kei 'Ключ сообщения типа danger | warning | success'
     * @param $message 'Тема сообщения'
     * @return void
     */
    public static function setFlashMessage($kei, $message)
    {
        $_SESSION[$kei] = $message;
    }

    /**
     * @param $kei 'Ключ сообщения типа danger | warning | success'
     * @return void
     */
    public static function displayFlashMessage($kei)
    {
        if (isset($_SESSION[$kei])) {
            echo "<div class=\"alert alert-{$kei} text-dark\" role=\"alert\">{$_SESSION[$kei]}</div>";
            unset($_SESSION[$kei]);
        }
    }
}
