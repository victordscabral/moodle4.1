<?php

class block_fale_conosco extends block_base {
    public function init() {
        $this->title = get_string('fale_conosco', 'block_fale_conosco');
    }

    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }

        $this->content = new stdClass;

        return $this->content;
    }
}
