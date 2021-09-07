<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Auxiliar;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/lucky")
     */
    
    public function number(): Response
    {
        $number = random_int(0, 100);
        $test = new Auxiliar();
        

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}