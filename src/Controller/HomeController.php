<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @name HomeController
 * @version 1.0.0
 * @extends AbstractController
 * @uses  \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
 * @uses  \Symfony\Component\HttpFoundation\Response
 * @uses  \Symfony\Component\Routing\Annotation\Route
 */
// section Home
class HomeController extends AbstractController {
    /**
     * Description : Return homepage website
     * @version 1.0.0
     * @author Franck Patouillard<patouillardfranck3@gmail.com>
     * @return Response
     * @method index
     */
    #[Route('/', name: 'app_home')]
    public function index(): Response {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
