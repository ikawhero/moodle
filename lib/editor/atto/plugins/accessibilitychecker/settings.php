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
 * Settings for the accessibility checker
 *
 * @package    atto_accessibilitychecker
 * @copyright  2014 Shane Elliott <shane@pukunui.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_accessibilitychecker', new lang_string('pluginname', 'atto_accessibilitychecker')));

$settings = new admin_settingpage('atto_accessibilitychecker_settings', new lang_string('settings', 'atto_accessibilitychecker'));
if ($ADMIN->fulltree) {

    $name = new lang_string('level', 'atto_accessibilitychecker');
    $desc = new lang_string('leveldesc', 'atto_accessibilitychecker');
    $default = '2';
    $options = array( 2 => 'AA',
                      3 => 'AAA',
                    );

    $setting = new admin_setting_configselect('atto_accessibilitychecker/level',
                                                $name,
                                                $desc,
                                                $default,
                                                $options);
    $settings->add($setting);

}
