<?php

namespace App\Controller;

use App\Repository\HaieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MesureController extends AbstractController
{
    /**
     * @Route("/mesure", name="mesure")
     */
    public function index(HaieRepository $haieRepository): Response
    {
        $request = Request::createFromGlobals();
        $choix=$request->get('choix');
        $session = new Session();
        $session->set('choix', $choix);
        $haies = $haieRepository->findAll();
        return $this->render('mesure/index.html.twig', [
            'controller_name' => 'MesureController',
            'choix'=>$choix,
            'haies'=>$haies
        ]);
    }
}
