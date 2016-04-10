<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VoteController extends Controller
{
    /**
     * @param Request $request
     * @Route ("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request) //request not used but will be for other items
    {
        //should pass in current vote heat to display list
        return $this->render('vote/index.html.twig');
    }

    /**
     * @param Request $request
     * @Route ("/Cast", name="CastVote")
     */
    public function castAction(Request $request){
        //this is an ajax endpoint
        //I don think I need a twig file for this and the return is of type json
    }

    /**
     * @param Request $request
     * @Route ("/getCount", name="getCount")
     */
    public function getCountAction(Request $request){
        //this should return json and be called every second or something, will update current vote count on a heat
    }
}
