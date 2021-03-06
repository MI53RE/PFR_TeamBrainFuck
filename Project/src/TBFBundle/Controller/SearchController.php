<?php

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function resultAction(Request $req)
    {
        $field = htmlentities($req->get('search'));
        
        $response = $this->getRepo($field, "TBFBundle:Users", "getUsersByName");
        
        //return new Response(var_dump($response));
        return $this->render("TBFBundle:Search:result.html.twig", array(
            "projects" => $this->getRepo($field, "TBFBundle:Projects", "getProjectByName"),
            "users" => $this->getRepo($field, "TBFBundle:Users", "getUsersByName"),
            "skills" => $this->getRepo($field, "TBFBundle:Skills", "getSkillsByName")
        )); 
    }
    
    public function getRepo($field, $repo, $method){
        
        $result = $this->getDoctrine()->getManager();
        
        $reposit = $result->getRepository($repo);
        $class = $reposit->$method($field);
        
        return $class;
    }


    public function formAction(){
        
    }
}
