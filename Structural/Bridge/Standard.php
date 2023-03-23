<?php

namespace Structural\Bridge;

class Standard extends Display {

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
			</style>
CONTENT;
    }

}