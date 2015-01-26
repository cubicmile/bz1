<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/app/bz", name="homepage")
     */
    public function indexAction()
    {
        //return $this->redirectToRoute("hello", array('name' => 'ria'));
        
       //$this->addFlash('notice', 'da msg');
       return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/hola/entername/{name}.{_format}", defaults={"_format"="html"}, name="entername")
     */
    public function enterNameAction($name, $_format, Request $req){
        
        $session = $req->getSession();
        $session->set('myname', $name);
        
        return $this->render('default/hello.' . $_format . '.twig', array(
            'name' => $name
        ));
    }

    /**
     * @Route("/hola/displayname/", name="displayname")
     */    
    public function displayNameAction(Request $req){
            $session = $req->getSession();
            return $this->render('default/display.html.twig', array(
            'uname' => $session->get('myname')
                    
            ));
    }
            
}
