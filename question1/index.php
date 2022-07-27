<?php
require_once 'src/view/pages.php';
require_once "header.php";
class Display{
    /**
     * @return void
     */
    public static function view()
    {
        (new Pager())->render();
    }
}
Display::view();
