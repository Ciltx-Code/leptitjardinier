<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class DevisController extends AbstractController
{
    /**
     * @Route("/devis", name="devis")
     */
    public function index(): Response
    {
        $session = new Session();
        $choix= $session->get('choix');
        $request = Request::createFromGlobals();
        $type=$request->get('type');
        $longeur = $request->get('Longeur');
        $hauteur = $request->get('Hauteur');
        $prixUnitaire = 0;
        $prixFinal = 0;
        $remise =0;
        $montantRemise =0;
        switch ($type){
            case "Abélia":
                $prixUnitaire = 25;
                break;
            case "Laurier":
                $prixUnitaire = 30;
                break;
            case "Thuya":
                $prixUnitaire = 35;
                break;
            case "Troène":
                $prixUnitaire = 28;
                break;
        }
        $prixFinal = $prixUnitaire*$longeur;
        if($hauteur>1.5){
            $prixFinal = $prixFinal*1.5;
        }
        if($choix == "Entreprise"){
            $remise = 10;
            $montantRemise = $prixFinal/10;
            $prixFinal = $prixFinal-$montantRemise;
        }

        return $this->render('devis/index.html.twig', [
            'controller_name' => 'DevisController',
            'choix' => $choix,
            'longeur'=>$longeur,
            'hauteur'=>$hauteur,
            'type' => $type,
            'remise' => $remise,
            'montantremise'=>$montantRemise,
            'montant' => $prixFinal
        ]);
    }
}
