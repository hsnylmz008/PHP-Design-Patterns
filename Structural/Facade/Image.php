<?php

namespace Structural\Facade;

use Imagick;
use ImagickException;
use SplFileInfo;
class Image {

    /**
     * @var Imagick
     */
    private Imagick $imagick;

    /**
     *
     */
    public function __construct () {
        $this->imagick = new Imagick();
    }

    /**
     * @param string $filePath
     * @param int $width
     * @param int $height
     * @return bool
     * @throws ImagickException
     */
    public  function thumbnail (string $filePath, int $width, int $height): bool
    {
        $this->imagick->readImage($filePath);
        $this->imagick->setbackgroundcolor('rgb(0, 0, 0)');
        $this->imagick->thumbnailImage($width, $height, true, true);

        $fileInfo = new SplFileInfo($filePath);
        $thumbPath = $fileInfo->getBasename('.' . $fileInfo->getExtension()) . '_thumb' . "." . $fileInfo->getExtension();

        if (file_put_contents($thumbPath, $this->imagick)) {
            return true;
        } else {
            throw new \Exception("Could not create thumbnail.");
        }
    }
}
