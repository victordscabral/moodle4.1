<?php
defined('MOODLE_INTERNAL') || die();

class block_escola_modelo extends block_base
{
    public function init() {
        $this->title = get_string('escola_modelo', 'block_escola_modelo');
    }
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        $this->content->text   = '';

        return $this->content;
    }

    function has_config() {
        return true;
    }
}
