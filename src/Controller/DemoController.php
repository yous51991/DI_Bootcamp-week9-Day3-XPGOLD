<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(TranslatorInterface $translator): Response
    {

        $translated = $translator->trans('Symfony is great');

        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
}
