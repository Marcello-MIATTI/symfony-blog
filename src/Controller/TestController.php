<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/exo', name: 'app_test')]
    public function index(): Response
    {
    
    $prenom = "Marcello";
    $nom = "MIATTI";
    $age = 32;
    $profession = "Développeur";
    
    $qualite = ['personne' => ['qualite1' => 'gentil' ,'qualite2' => 'perséverant' ,'qualite3' => 'patient' ],
                'professionnelle' => ['talent1' =>'organisé' , 'talent2' => 'pragmatique', 'talent3' => 'arrangant']];

    // foreach ($qualite as $key => $value) {
    //     foreach ($value as $key => $value) {
    //             echo "$value";
    //         }
    // }

    return $this->render("exo.html.twig", [
        'prenom' => $prenom,
        'nom' => $nom,
        'age' => $age,
        'profession' => $profession,
        'qualite' => $qualite

    ]);
    }
}
