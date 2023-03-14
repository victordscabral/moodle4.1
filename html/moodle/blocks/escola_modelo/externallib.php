<?php

// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External Web Service Template
 *
 * @package    localws_evl
 * @copyright  2011 Moodle Pty Ltd (http://moodle.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once($CFG->libdir . "/externallib.php");

class block_escola_modelo_external extends external_api {

    public static function get_usage_statistics() {
        global $USER;

        return '{"cursos": "10", "alunos":"20", "certificados":"12"}';
    }

    public static function get_usage_statistics_parameters() {
        return new external_function_parameters(
                array()
        );
    }

    public static function get_usage_statistics_returns() {
        return new external_value(PARAM_TEXT, 'JSON with statistics of this installation');
    }

    

}
