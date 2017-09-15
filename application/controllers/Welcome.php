<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();

		// pass on the data to present, as the "authors" view parameter
		$this->data['authors'] = $source;

		$this->render();
	}
        
        /**
        * Show just one actor
        */
        public function show($key)
        {
            // this is the view we want shown
            $this->data['pagebody'] = 'actor';
            // build the list of authors, to pass on to our view
            $source = $this->quotes->get($key);
            // pass on the data to present, adding the author record's fields
            $this->data = array_merge($this->data, (array) $source);
            $this->render();
        }

}
