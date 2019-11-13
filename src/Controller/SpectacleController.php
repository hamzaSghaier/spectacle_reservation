<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Spectacle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Place;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; 
use FOS\RestBundle\Controller\Annotations as Rest;

class SpectacleController extends AbstractController
{
    /**
         * @Rest\View()
         * @Rest\Get("/spectacles")
     */
    public function getSpectacles(Request $request)
        {
           $spectacles = $this->getDoctrine()->getRepository(Spectacle::class)->findAll();
           return $spectacles;
        }
 /**
     * @Rest\View()
     * @Rest\Get("/spectacles/{id}")
     */
    public function getSpectacle(Request $request)
    {
      
        $spectacle = $this->getDoctrine()
        ->getRepository(Spectacle::class)
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $place Place */

        if (empty($spectacle)) {
            return $this->spectacleNotFound();
        }
        
        return $spectacle;
    
    }
    private function spectacleNotFound()
    {
        return \FOS\RestBundle\View\View::create(['message' => 'Spectacle not found'], Response::HTTP_NOT_FOUND);
    }


}
