<?php
/**
 * Created by PhpStorm.
 * User: lincolen
 * Date: 2/27/2019
 * Time: 6:21 PM
 */
// src/Controller/RoutesController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RoutesController extends AbstractController{
    /**
     * matches /routes exactly
     *
     *
     * @Route("/routes/{page}", name="route_list",
     *     defaults={"page": 3},
     *     requirements={"page": "\d+"}
     * )
     */
    public function list($page){
        return new Response(
            '<html><body>routes list:'. $page . '</body></html>'
        );
    }

    /**
     * /matches /routes/*
     *
     * @Route("/routes/{slug}", name="routes_show")
     */
    public function show($slug){

        $url = $this->generateUrl(
            'routes_show',
            ['slug' => 're']
        );

        return new Response(
            '<html><body>Show slug: ' . $slug . '</body></html>'
        );

    }
}