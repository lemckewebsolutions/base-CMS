<?php
namespace LWS\CMS;

use LWS\Framework\Context;
use LWS\Framework\IGet;

class LoginPageController implements IGet
{
    public function get()
    {
        $view = new PageView(PageView::getTemplateRoot() . "login.tpl");

        Context::getResponse()->setBody($view->parse());
    }
}