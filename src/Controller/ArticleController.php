<?php
/**
 * Created by PhpStorm.
 * User: Valentin Beaury
 * Date: 09/01/2019
 * Time: 16:16
 */

namespace App\Controller;




use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('First page !');
    }

    /**
     * @Route("/news/{var}")
     */
    public  function show($var)
    {
        $comments = [
            "Wesh c'est nul !",
            "Rendez l'argent aux abonnés",
            "It rocks !"
        ];
        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ',$var)),
            'comments' => $comments,
        ]);
    }
}