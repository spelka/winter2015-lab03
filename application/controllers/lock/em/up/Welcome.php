<?php

/**
 * Shows the second quote
 * 
 * controllers/lock/em/up/Welcome.php
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

    /**
     * Returns the 2nd quote in Quotes.php and and displays it in a 'justone'
     * view template
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        //get the first quote from the Quotes.php API
        $source = $this->quotes->get(2);
        
        //assign the individual data from the source to $this
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/controllers/lock/em/up/Welcome.php */