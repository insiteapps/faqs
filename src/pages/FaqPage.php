<?php

/**
 * Class FaqPage
 */
class FaqPage extends Page {

    public static $has_many = array(

    );

}
class FaqPageController extends PageController
{
    public function init()
    {
        parent::init();
        Requirements::css(BOOTSTRAP_FAQ_DIR . "/css/FAQs.css");
    }
}