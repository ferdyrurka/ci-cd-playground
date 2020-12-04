<?php

declare(strict_types=1);

namespace App\Test\Integration\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeControllerTest extends WebTestCase
{
    /**
     * @var HttpClientInterface
     */
    private HttpClientInterface $client;

    /**
     *
     */
    protected function setUp(): void
    {
        $this->client = HttpClient::create(['base_uri' => 'http://127.0.0.1']);
    }

    /**
     * @test
     */
    public function homePageOk(): void
    {
        self::assertEquals(
            200,
            $this->client->request('GET', '/')->getStatusCode()
        );
    }
}
