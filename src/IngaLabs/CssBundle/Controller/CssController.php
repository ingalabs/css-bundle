<?php

/*
 * (c) Antal Áron <antalaron@antalaron.hu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace IngaLabs\CssBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * CssController.
 *
 * @author Antal Áron <antalaron@antalaron.hu>
 */
class CssController
{
    private $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function fileAction($path)
    {
        $cssFile = $this->repository->findOneByPath($path);

        if (null === $cssFile) {
            throw new NotFoundHttpException('File not found.');
        }

        return new Response($cssFile->getContent, 200, ['Content-Type' => 'text/css']);
    }
}
