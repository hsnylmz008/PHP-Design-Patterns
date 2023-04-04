<?php

namespace Structural\Adapter;


use Aws\S3\S3Client;
use Aws\Credentials\Credentials;
use Exception;
use Symfony\Component\Dotenv\Dotenv;

class AWSFileStorage implements FileAdapter {

    /**
     * @var S3Client
     */
    private S3Client $client;
    private $bucket;

    public function __construct () {
        $dotenv = new Dotenv();
        $dotenv->load('.env');

        $this->bucket = getenv('AWS_BUCKET_NAME');

        $this->client = new S3Client([
            'version' => 'latest',
            'region' => getenv('AWS_REGION'),
            'credentials' => new Credentials(getenv("AWS_ACCESS_KEY_ID"), getenv("AWS_SECRET_ACCESS_KEY"))
        ]);
    }

    /**
     * @param string $path
     * @return File
     * @throws Exception
     */
    public function get (string $path): File {
        try {
            $file = $this->client->getObject([
                'Bucket' => $this->bucket,
                'Key' => $path
            ]);

            return new File($path, $file['Body']->getContents());
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @param string $path
     * @param string $name
     * @return void
     */
    public function save (string $path, string $name): void {
        $this->client->putObject([
            'Bucket' => $this->bucket,
            'Key' => $name,
            'Body' => file_get_contents($path, "r")
        ]);
    }

    /**
     * @param string $name
     * @return void
     */
    public function delete (string $name): void {
        $this->client->deleteObject([
            'Bucket' => $this->bucket,
            'Key' => $name
        ]);
    }
}