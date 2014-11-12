<?php

class SampleController extends ControllerBase
{

    public function indexAction()
    {
        //sample called
        //set some session variables and display on the page
        $this->session->set('foo', 'bar');
        $this->cookies->set('foo', 'bar', time() + 100);
    }
}
