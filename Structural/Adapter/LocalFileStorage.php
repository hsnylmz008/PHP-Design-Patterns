<?php

namespace Structural\Adapter;

use Exception;

class LocalFileStorage implements FileAdapter {

    const STORAGE_PATH = "storage" . DIRECTORY_SEPARATOR;

    /**
     * @param string $path
     * @return File
     * @throws \Exception
     */
    public function get (string $path): File {
        $fullPath = self::STORAGE_PATH . $path;

        if (file_exists($fullPath)) {
            return new File($path, file_get_contents($fullPath));
        } else {
            throw new Exception("File {$fullPath} does not exist in local storage");
        }
    }

    /**
     * @param string $path
     * @param string $name
     * @return void
     */
    public function save (string $path, string $name): void {
        move_uploaded_file($path, self::STORAGE_PATH . $name);
    }

    /**
     * @param string $path
     * @return void
     */
    public function delete (string $path): void {
        unlink(self::STORAGE_PATH . $path);
    }
}