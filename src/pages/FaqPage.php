<?php

/**
 * Class FaqPage
 */
class FaqPage extends Page {

    public static $has_many = array(

    );

}
class FaqPage_Controller extends Page_Controller
{
    public function init()
    {
        parent::init();
        Requirements::css(BOOTSTRAP_FAQ_DIR . "/css/FAQs.css");
    }
}