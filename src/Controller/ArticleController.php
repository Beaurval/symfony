<?php
/**
 * Created by PhpStorm.
 * User: Valentin Beaury
 * Date: 09/01/2019
 * Time: 16:16
 */

namespace App\Controller;




use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf(
            "Future page to show an article: %s",
        $var
        ));
    }
}