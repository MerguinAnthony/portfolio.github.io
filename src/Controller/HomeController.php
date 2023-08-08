<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $pageTitle = "Anthony Merguin - Développeur Web";
        $nom = "Anthony Merguin";
        $hero= "Je suis un développeur Web Full-Stack en formation, déterminé à explorer le vaste monde du développement web et à apprendre constamment pour m'améliorer.
                Passionné par les possibilités offertes par la technologie et sa capacité à transformer la façon dont nous interagissons avec le monde.";

        $services = [
            [
                'title' => 'Développement Front-End',
                'description' => 'Je crée des interfaces utilisateur modernes et réactives en utilisant les dernières technologies HTML, CSS et JavaScript.',
            ],
            [
                'title' => 'Développement Back-End',
                'description' => 'Je construis des serveurs robustes et sécurisés en utilisant des langages comme PHP ou Node.js.',
            ],
            [
                'title' => 'Gestion de Base de Données',
                'description' => 'Je conçois et optimise des bases de données pour assurer une gestion efficace des données de votre application.',
            ],
            [
                'title' => 'Intégration de CMS',
                'description' => 'Je peux intégrer et personnaliser des systèmes de gestion de contenu (CMS) tels que WordPress ou Joomla pour faciliter la gestion de votre site.',
            ],
            [
                'title' => 'Développement d\'Applications',
                'description' => 'Je peux créer des applications mobiles natives ou hybrides pour Android et iOS.',
            ],
        ];

        return $this->render('home/index.html.twig', [
            'page_title' => $pageTitle,
            'nom' => $nom,
            'services' => $services,
            'hero' => $hero,
        ]);
    }
}
