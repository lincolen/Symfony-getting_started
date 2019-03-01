<?php
/**
 * Created by PhpStorm.
 * User: lincolen
 * Date: 2/25/2019
 * Time: 11:03 PM
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number",
     *      requirements={"max": "\d+"}
     * )
     */
     public function number($max = 100){
        $number = random_int(0,$max);
        $url = $this->generateUrl("app_lucky_number", ["max" => 10]);
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            ]);

        /* basic response return
        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
        */
    }

    /**
     * taking a request as a controller argument
     *
     * @Route("lucky/request", name="app_lucky_request")
     */
    public function luckyRequest(Request $request){
        $page = $request->get('page', 1);
    }
}