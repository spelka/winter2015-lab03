<?php

/**
 * Shows the first quote
 * 
 * controllers/sleep/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        //get the first quote from the Quotes.php API
        $source = $this->quotes->get(1);
        
        //assign the individual data from the source to $this
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/sleep/Welcome.php */