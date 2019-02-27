<?php
/**
 * Created by PhpStorm.
 * User: lincolen
 * Date: 2/25/2019
 * Time: 11:03 PM
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController{
    /**
     * @Route("/lucky/number")
     */

    public function number(){
        $number = random_int(0,100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            ]);

        /* basic response return
        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
        */
    }
}