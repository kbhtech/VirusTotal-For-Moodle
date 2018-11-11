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
 * Options for component 'antivirus_virustotal'.
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @roles
 *   A) Display as options, 
 *   B) Grouping of valid options.
 *   C) Resonate with the language of the end user.
*/

$antivirus_virustotal_client_scan_method_options = array(
	'malicious' => get_string(
		'antivirus_virustotal_client_scan_method_option_malicious', 
		'antivirus_virustotal'
	),
	'valuable' => get_string(
		'antivirus_virustotal_client_scan_method_option_valuable', 
		'antivirus_virustotal'
	),
);
	
$antivirus_virustotal_client_verbose_options = array(
	'true' => get_string(
		'antivirus_virustotal_client_verbose_option_true', 
		'antivirus_virustotal'
	),
	'false' => get_string(
		'antivirus_virustotal_client_verbose_option_false', 
		'antivirus_virustotal'
	),
);
