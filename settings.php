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
 * Settings used by the congrea module
 *
 * @package mod_congrea
 * @copyright  2014 Pinky Sharma
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 * */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_heading('mod_congrea/heading', get_string('congreaconfiguration', 'congrea'), get_string('congreaconfigurationd', 'congrea'),''));
    //$defaultrun = array();
    //$defaultrun[0] = get_string("liverun", "congrea");    
    $settings->add(new admin_setting_configtext('mod_congrea/cgapi', get_string('cgapi', 'congrea'), get_string('cgapid', 'congrea'), ''));
    //$settings->add(new admin_setting_configtext('mod_congrea/cgsecret', new lang_string('cgsecret', 'congrea'), new lang_string('cgsecretd', 'congrea'), ''));
    $settings->add(new admin_setting_configpasswordunmask('mod_congrea/cgsecretpassword', get_string('cgsecret', 'congrea'), get_string('cgsecretd', 'congrea'), ''));
}
