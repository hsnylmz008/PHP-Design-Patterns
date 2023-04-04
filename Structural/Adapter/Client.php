<?php

namespace Structural\Adapter;

use Exception;

class Client {

    /**
     * @var AWSFileStorage|AzureFileStorage|LocalFileStorage
     */
    private $storageProvider;

    /**
     * @param string $storage
     * @throws \Exception
     */
    public function __construct (string $storage) {
        switch ($storage) {
            case 'local':
                $this->storageProvider = new LocalFileStorage();
                break;
            case 'azure':
                $this->storageProvider = new AzureFileStorage();
                break;
            case 'aws':
                $this->storageProvider = new AWSFileStorage();
                break;
            default:
                throw new Exception("Unsupported storage requested $storage");
        }
    }

    /**
     * @param string $filePath
     * @param string $name
     * @return void
     */
    public function save (string $filePath, string $name) {
        $this->storageProvider->save($filePath, $name);
    }

    /**
     * @param string $name
     * @return File
     * @throws Exception
     */
    public function get (string $name): File
    {
        return $this->storageProvider->get($name);
    }

    /**
     * @param string $name
     * @return null
     */
    public function delete (string $name) {
        return $this->storageProvider->delete($name);
    }
}