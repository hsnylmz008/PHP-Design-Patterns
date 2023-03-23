<?php

namespace Creational\FactoryMethod;

class FileItem {

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $filePath;

    const TYPE_IMG = 'image';
    const TYPE_VIDEO = 'video';
    const TYPE_AUDIO = 'audio';

    /**
     * @param string $type
     * @param string $filePath
     */
    public function __construct (string $type, string $filePath) {
        $this->type = $type;
        $this->filePath = $filePath;
    }

    /**
     * @return string
     */
    public function getType (): string {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getFilePath (): string {
        return $this->filePath;
    }
}