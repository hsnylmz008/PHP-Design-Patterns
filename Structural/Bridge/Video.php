<?php

namespace Structural\Bridge;

class Video extends Content {

    /**
     * @return string
     */
    public function getCss (): string {
        return <<<VID
		.content {
			width: 100%; 
		}
		video::-webkit-media-controls-start-playback-button {
            display: none;
		}
VID;
    }

    /**
     * @return string
     */
    public function getHtml (): string {
        return "<video class='content' src='$this->filePath' autoplay muted loop></video>";
    }
}