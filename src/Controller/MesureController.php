<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Haie;
use App\Form\ClientType;
use App\Form\HaieType;
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
        $nom=$request->get('nom');
        $prenom=$request->get('prenom');
        $adresse=$request->get('adresse');
        $ville=$request->get('ville');
        $cp=$request->get('cp');
        $session = new Session();


        $session->set('clientNom', $nom);
        $session->set('clientPrenom', $prenom);
        $session->set('clientAdresse', $adresse);
        $session->set('clientVille', $ville);
        $session->set('clientCp', $cp);
        $session->set('choix', $choix);

        $haies = $haieRepository->findAll();
        return $this->render('mesure/index.html.twig', [
            'controller_name' => 'MesureController',
            'choix'=>$choix,
            'haies'=>$haies
        ]);
    }
}
