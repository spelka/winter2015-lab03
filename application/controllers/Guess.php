<?php

/**
 * Shows the ?  quote
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * Returns the 4th quote in Quotes.php and and displays it in a 'justone'
     * view template
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        //get the first quote from the Quotes.php API
        $source = $this->quotes->get(4);
        
        //assign the individual data from the source to $this
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }

}

/* End of file Guess.php */
/* Location: controllers */