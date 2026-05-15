<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        $tauxCredits =[
            ['duree' => '10ans', 'taux' => '1.5'],
            ['duree' => '15ans', 'taux' => '1.8'],
            ['duree' => '20ans', 'taux' => '2.0'],
            ['duree' => '25ans', 'taux' => '2.3'],
        ];
        $newsImmo = [
            ['title' => 'Marché immobilier en hausse', 'content' => 'Le marché connais un croissance significative ...' , 'url' => 'https://example.com/news1'],
            ['title' => 'Nouvelles réglementations', 'content' => 'Le gouvernement annonce de nouvelles mesures ...' , 'url' => 'https://example.com/news2'],
            ['title' => 'Conseils pour les acheteurs', 'content' => 'Découvrez nos conseils pour réussir votre achat immobilier ...' , 'url' => 'https://example.com/news3'],
        ];
        $chiffresCles = [
            ['label' => 'Annonces analysées', 'valeur' => '50 000+'],
            ['label' => 'Villes couvertes', 'valeur' => '250+'],
            ['label' => 'Départements couverts', 'valeur' => '8'],
            ['label' => 'Précision des estimations', 'valeur' => '95%'],
        ];

        $dateMaj = new \DateTime();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'tauxCredits' => $tauxCredits,
            'newsImmo' => $newsImmo,
            'dateMaj' => $dateMaj,
            'chiffresCles' => $chiffresCles,
        ]);
    }
}
