<?php

declare(strict_types=1);

namespace Light\Book\Handler;

use Laminas\Diactoros\Response\HtmlResponse;
use Light\Book\Repository\BookRepository;
use Mezzio\Template\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class GetBooksHandler implements RequestHandlerInterface
{
    public function __construct(
        protected TemplateRendererInterface $template,
        protected BookRepository $bookRepository,
    ) {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $titles  = $this->bookRepository->getTitles();
        $authors = $this->bookRepository->getAuthors();

        return new HtmlResponse(
            $this->template->render('page::books', [
                'titles'  => $titles,
                'authors' => $authors,
            ])
        );
    }
}
