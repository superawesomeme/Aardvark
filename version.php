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
 * Theme version info
 *
 * @package    theme_Eagle
 * @copyright  Shaun Daubney
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->component = 'theme_Eagle'; // Full name of the plugin (used for diagnostics)
$plugin->dependencies = array('theme_bootstrapbase'  => 2015111600,);
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '3.0';
$plugin->requires  = 2015111600; // Requires this Moodle version
$plugin->version   = 2016052000; // The current module version (Date: YYYYMMDDXX)
