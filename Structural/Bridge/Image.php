<?php

namespace Structural\Bridge;

class Image extends Content {

    /**
     * @return string
     */
    public function getCss (): string {
        return <<<IMG
		.content {
			width: 100%;
			border-style: dotted dashed solid double; 
			border-radius: 50px;
		}
IMG;
    }

    /**
     * @return string
     */
    public function getHtml (): string {
        return "<img class='content' src='$this->filePath' />";
    }
}