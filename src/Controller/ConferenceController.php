<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/conference', name: 'app_conference')]
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
/*        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]);
*/
        $greet = '';
        if ($name = $request->query->get('hello')) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
    return new Response(<<<EOF
    <html>
        <body>
            <h1>$greet</h1>
        </body>
    </html>
    EOF
            );
    }
}
