<?php

App::uses('Controller', 'Controller');

class HomesController extends AppController
{
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'front_end';
    }

    public function index()
    {
        
    }
}