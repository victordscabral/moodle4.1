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
 * This file keeps track of upgrades to the self ilb ead enrolment plugin
 *
 * @package    enrol_ilbeadtutorado
 * @copyright  2012 Petr Skoda {@link http://skodak.org
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_enrol_ilbeadtutorado_upgrade($oldversion) {
    global $CFG, $DB, $OUTPUT;

    $dbman = $DB->get_manager();

    // Moodle v2.3.0 release upgrade line
    // Put any upgrade step following this

    if ($oldversion < 2012101400) {
        // Set default expiry threshold to 1 day.
        $DB->execute("UPDATE {enrol} SET expirythreshold = 86400 WHERE enrol = 'ilbeadtutorado' AND expirythreshold = 0");
        upgrade_plugin_savepoint(true, 2012101400, 'enrol', 'ilbeadtutorado');
    }

    if ($oldversion < 2012120600) {
        // Enable new self ilb ead enrolments everywhere.
        $DB->execute("UPDATE {enrol} SET customint6 = 1 WHERE enrol = 'ilbeadtutorado'");
        upgrade_plugin_savepoint(true, 2012120600, 'enrol', 'ilbeadtutorado');
    }


    // Moodle v2.4.0 release upgrade line
    // Put any upgrade step following this


    // Moodle v2.5.0 release upgrade line.
    // Put any upgrade step following this.
    if ($oldversion < 2013050101) {
        // Set customint1 (group enrolment key) to 0 if it was not set (null).
        $DB->execute("UPDATE {enrol} SET customint1 = 0 WHERE enrol = 'ilbeadtutorado' AND customint1 IS NULL");
        upgrade_plugin_savepoint(true, 2013050101, 'enrol', 'ilbeadtutorado');
    }


    return true;
}


