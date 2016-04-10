<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VoteController extends Controller
{
    /**
     * @Route ("/", name="homepage")
     * @Route ("/vote", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() //request not used but will be for other items
    {
        //should pass in current vote heat to display list, this should be stored using a cookie
        return $this->render('vote/index.html.twig');
    }

    /**
     * @param int $id
     * @Route ("/vote/cast/{id}", name="CastVote")
     */
    public function castAction($id){
        //this is an ajax endpoint
        //I don think I need a twig file for this and the return is of type json
    }

    /**
     * @param Request $request
     * @Route ("vote/getCount", name="getCount")
     */
    public function getCountAction(Request $request){
        //this should return json and be called every second or something, will update current vote count on a heat
    }
}
