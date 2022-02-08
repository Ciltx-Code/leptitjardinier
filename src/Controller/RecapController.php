<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Devis;
use App\Entity\Haie;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class RecapController extends AbstractController
{
    /**
     * @Route("/recap", name="recap")
     */
    public function index(): Response
    {
        $session = new Session();
        $choix= $session->get('choix');
        $nom = $session->get('clientNom');
        $prenom =$session->get('clientPrenom');
        $adresse =$session->get('clientAdresse');
        $ville =$session->get('clientVille');
        $cp =$session->get('clientCp');

        $request = Request::createFromGlobals();
        $type=$request->get('type');
        $numType = $this->getDoctrine()
            ->getRepository(Haie::class)
            ->findOneBy([
                'nom'=>$type,
            ]);

        $longeur = $request->get('Longeur');
        $hauteur = $request->get('Hauteur');
        $client = new Client();
        $client->nom=$nom;
        $client->prenom=$prenom;
        $client->adresse=$adresse;
        $client->ville=$ville;
        $client->cp=$cp;
        $client->typeClient = $numType;

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($client);
        $entityManager->flush();

        $devis = new Devis();
        $devis->client = $client;
        $devis->date=new DateTime();
        $devis->Hauteur = $hauteur;
        $devis->Longeur = $longeur;
        $devis->typeHaie=$numType;
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($devis);
        $entityManager->flush();

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

        return $this->render('recap/index.html.twig', [
            'controller_name' => 'RecapController',
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
