<?php

/**
 * Class FaqPage
 */
class FaqHolder extends Page
{
    private static $allowed_children = array("FaqPage");
    private static $has_many = array();

    public function getCMSFields()
    {
        $f = parent::getCMSFields();

        return $f;
    }

}

class FaqHolder_Controller extends Page_Controller
{
    public function init()
    {
        parent::init();
        Requirements::css(BOOTSTRAP_FAQ_DIR . "/css/FAQs.css");
    }
}