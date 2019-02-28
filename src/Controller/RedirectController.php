<?php
/**
 * Created by PhpStorm.
 * User: lincolen
 * Date: 2/28/2019
 * Time: 4:07 PM
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RedirectController extends AbstractController{

    /**
     * redirects to lucky number with parameters
     *
     * @Route("redirect/lucky", name="app_redirect_lucky")
     */
    public function redirectToLucky(){
        return $this->redirectToRoute('app_lucky_number', ["max" => 15]);
    }

    /**
     * permanent external redirect to homepage
     *
     * @Route("redirect/home", name="redirect_home")
     */
    public function redirectHome(){
        return $this->redirect("http://localhost:8000/",  301);
    }

    /**
     * redirect to show route and maintains the original query string parameters
     * WIP request is an unrecognized variable
     * @Route("redirect/routes", name="redirect_routes")
     */
    //public function redirectToShowRoutes(){
    //    return $this->redirecttoRoute('routes_show', $request->query->all());
    //}

}