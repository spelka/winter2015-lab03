<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * Contains method shucks(), which displays the second quote
 * 
 * Default controller for this website
 * 
 * controllers/Welcome.php
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
     * Displays the homepage
     */
    function index()
    {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    /**
     * Returns the 2nd quote in Quotes.php and and displays it in a 'justone'
     * view template
     */
    function shucks()
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
/* Location: application/controllers/Welcome.php */