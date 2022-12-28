<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

final readonly class Article1Action
{
    public function __construct(private readonly Environment $twig)
    {
    }

    #[
        Route('/article1', methods: ['GET']),
    ]
    public function __invoke(): Response
    {
        return new Response(
            $this->twig->render('article1/index.html.twig')
        );
    }
}
