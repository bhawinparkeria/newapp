<?php

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->layout=FALSE;
        $this->render("index");
    }
}