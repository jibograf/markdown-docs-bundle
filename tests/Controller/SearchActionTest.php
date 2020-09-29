<?php

/*
 * This file is part of markdown-docs-bundle.
 *
 * (c) Mobizel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final class SearchActionTest extends WebTestCase
{
    public function testSearchAction()
    {
        $client = static::createClient();

        $client->request('GET', 'search?query=dummy');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertSelectorTextContains('html h1', 'Search results');
    }
}