<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     * @return Response
     * @throws Exception
     */
    public function number(): Response
    {
        $number = random_int(0, 100);


        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'question' => 'Your lucky number is'
        ]);
//        return new Response(
//            "<html lang='en'>
//            <body>Lucky Number: $number</body>
//            </html>"
//        );
    }
}
