<?php
declare(strict_types=1);

namespace App\Test\Integration\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpKernel\Client;

/**
 * Class IndexTest
 * @package App\Test\Integration
 */
class HomeControllerTest extends WebTestCase
{
    /**
     * @var Client
     */
    private $client;

    /**
     *
     */
    protected function setUp(): void
    {
        $this->client = self::createClient();
        $this->client->setServerParameters([
            'HTTP_HOST' => 'localhost',
            'HTTP_USER_AGENT' => 'TESTS USER'
        ]);
    }

    /**
     * @test
     */
    public function homePageOk(): void
    {
        $this->client->request('GET', '/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }
}
