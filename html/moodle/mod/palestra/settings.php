<?php

// This file is part of Moodle - http://moodle.org/
//
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
 * Page module admin settings and defaults
 *
 * @package mod_palestra
 * @copyright  2021 Interlegis (https://www.interlegis.leg.br)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    require_once("$CFG->libdir/resourcelib.php");

    $displayoptions = resourcelib_get_displayoptions(array(RESOURCELIB_DISPLAY_OPEN, RESOURCELIB_DISPLAY_POPUP));
    $defaultdisplayoptions = array(RESOURCELIB_DISPLAY_OPEN);

    $settings->add(new admin_setting_configcheckbox('palestra/includechat',
        get_string('includechat', 'palestra'), get_string('includechat_help', 'palestra'), 1));
    $settings->add(new admin_setting_configtext('palestra/checkinterval',
        get_string('checkinterval', 'palestra'), get_string('checkinterval_help', 'palestra'), 10, PARAM_INT));
    $settings->add(new admin_setting_configcheckbox('palestra/gradeafter',
        get_string('gradeafter', 'palestra'), get_string('gradeafter_help', 'palestra'), 0));
}
