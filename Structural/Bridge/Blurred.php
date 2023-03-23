<?php

namespace Structural\Bridge;

class Blurred extends Display {

    /**
     * @var string
     */
    private string $blurredRules = <<<CSS
		.content {
			filter: blur(5px);
		  	-webkit-filter: blur(5px);
		}
CSS;

    /**
     * @return string
     */
    public function render (): string {

        $html = $this->content->getHtml();
        $css = $this->content->getCss();

        return <<<CONTENT
			$html;
			
			<style>
				$css	
				$this->blurredRules
			</style>
CONTENT;
    }
}