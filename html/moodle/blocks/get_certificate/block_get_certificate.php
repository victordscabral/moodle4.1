<?php  //Updated for use with Certificate v3+ Chardelle Busch

class block_get_certificate extends block_base {

    function init() {
        $this->title = get_string('title', 'block_get_certificate');
    }

    function applicable_formats() {
        return array('all' => true);
    }

    function get_content() {

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '<p>'.get_string('getcertificate', 'block_get_certificate').'</p>';
        $url = new moodle_url('/blocks/get_certificate/index.php');
        $this->content->text .= '<center><form class="loginform" name="cert" method="post" action="'. $url . '">';
        $this->content->text .= '<input type="submit" value="'.get_string('getbutton', 'block_get_certificate').'"/></form>';
        $this->content->text .= '</center>';
        $this->content->footer = '';

        return $this->content;
    }

    function instance_allow_config() {
        return false;
    }
}
