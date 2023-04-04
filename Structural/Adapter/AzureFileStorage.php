<?php

namespace Structural\Adapter;


use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use Symfony\Component\Dotenv\Dotenv;

class AzureFileStorage implements FileAdapter {

    private $client;
    private $containerName;

    public function __construct () {
        $dotenv = new Dotenv();
        $dotenv->load('.env');

        $connectionString = "DefaultEndpointsProtocol=https;AccountName=" . getenv('AZURE_ACCOUNT_NAME') . ";AccountKey=" . getenv("AZURE_ACCOUNT_KEY") . ";EndpointSuffix=core.windows.net";
        $this->client = BlobRestProxy::createBlobService($connectionString);
        $this->containerName = getenv("AZURE_CONTAINER_NAME");
    }

    /**
     * @param string $path
     * @return File
     */
    public function get (string $path): File {
        $blob = $this->client->getBlob($this->containerName, $path);

        return new File($path, stream_get_contents($blob->getContentStream()));
    }

    /**
     * @param string $path
     * @param string $name
     * @return void
     */
    public function save (string $path, string $name): void {
        $this->client->createBlockBlob($this->containerName, $name, fopen($path, "r"));
    }

    /**
     * @param string $name
     * @return void
     */
    public function delete (string $name): void {
        $this->client->deleteBlob($this->containerName, $name);
    }
}