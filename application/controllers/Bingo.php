<?php

/**
 * Shows the first, 5th, and 6th quotes
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application
{

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * Returns the 5th quote in Quotes.php and and displays it in a 'justone'
     * view template
     */
    function index()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        //get the first quote from the Quotes.php API
        $source = $this->quotes->get(5);
        
        //assign the individual data from the source to $this
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }
    
    /**
     * Returns the 1st quote in Quotes.php and and displays it in a 'justone'
     * view template
     */
    function zzz()
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
    
    /**
     * Returns the 6th quote in Quotes.php and and displays it in a 'justone'
     * view template
     */
    function wisdom()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown

        //get the first quote from the Quotes.php API
        $source = $this->quotes->get(6);
        
        //assign the individual data from the source to $this
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */