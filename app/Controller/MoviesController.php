<?php

App::uses('Controller', 'Controller');

class MoviesController extends AppController
{
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'front_end';
    }

    public function view($id = null)
    {
        
    }
}