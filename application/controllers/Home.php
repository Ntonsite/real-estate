<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Home (HomeController)
 * Home Controller loads static pages
 * @author : Ntonsite Mwamlima
 * @version : 1.1
 * @since : 08 August 2020
 */
class Home extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->view('includes/layout/header');
        $this->load->view('includes/layout/bottom');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->load->view('static/index');
    }

}

?>