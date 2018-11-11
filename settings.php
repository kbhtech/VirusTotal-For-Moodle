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
 * Settings for component 'antivirus_virustotal'
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
	require_once(__DIR__ . '/adminlib.php');
	require_once(__DIR__ . '/classes/scanner.php');
	require_once(__DIR__ . '/options.php);

	// The setting for the clients scanning method.
	$settings->add(
		new antivirus_virustotal_client_scan_method_setting('antivirus_virustotal/client_scan_method',
			get_string('client_scan_method_setting_name', 'antivirus_virustotal'),
			get_string('client_scan_method_setting_desc', 'antivirus_virustotal'),
			get_string('client_scan_method_option_valuable', 'antivirus_virustotal'), // default value is valuable.
			$antivirus_virustotal_client_scan_method_options
		)
	);
	
	// The setting for the servers verbose reporting.
	$settings->add(
		new antivirus_virustotal_client_verbose_setting('antivirus_virustotal/client_verbose',
			get_string('client_verbose_setting_name', 'antivirus_virustotal'),
			get_string('client_verbose_setting_desc', 'antivirus_virustotal'),
			get_string('client_verbose_option_true', 'antivirus_virustotal'),
			$antivirus_virustotal_client_verbose_options
		)
	);
	
	// The setting for the useragent that the client should use in its web connection.
	$settings->add(
		new antivirus_virustotal_client_useragent_setting('antivirus_virustotal/client_useragent_setting',
			new lang_string('client_useragent_setting_name', 'antivirus_virustotal'), 
			new lang_string('client_useragent_setting_desc', 'antivirus_virustotal'), 
			'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134' // default
		)
	);
	
	// The setting for the key that the client should use for the service provider.
	$settings->add(
		new antivirus_virustotal_client_key_setting('antivirus_virustotal/client_key_setting',
			new lang_string('client_key_setting_name', 'antivirus_virustotal'), 
			new lang_string('client_key_setting_desc', 'antivirus_virustotal'), 
			'' // default none
		)
	);
	
	// The setting for the encoding the client should send files to the server with.
	$settings->add(
		new antivirus_virustotal_local_file_encoding_setting(
			'antivirus_virustotal/local_file_encoding_setting',
			new lang_string('local_file_encoding_setting_name', 'antivirus_virustotal'), 
			new lang_string('local_file_encoding_setting_desc', 'antivirus_virustotal'), 
			'' // default none
		)
	);
	
	// The setting for the api hook that the client should connect to in order to scan files.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_scan_file_setting',
			new lang_string('server_resources_scan_file_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_scan_file_setting_desc', 'antivirus_virustotal'), 
			'https://www.virustotal.com/vtapi/v2/file/scan' // default none
		)
	);

	// The setting for the api hook that the client should connect to in order to scan web address.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_scan_address_setting',
			new lang_string('server_resources_scan_address_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_scan_address_setting_desc', 'antivirus_virustotal'), 
			'https://www.virustotal.com/vtapi/v2/url/scan' // default none
		)
	);
	
	// The setting for the api hook that the client should rescan an already uploaded file.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_rescan_file_setting',
			new lang_string('server_resources_rescan_file_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_rescan_file_setting_desc', 'antivirus_virustotal'), 
			'https://www.virustotal.com/vtapi/v2/file/rescan' // default none
		)
	);
	
	// The setting for the api hook that the client should retrieve results of a file scan.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_reports_file_setting',
			new lang_string('server_resources_reports_file_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_reports_file_setting_desc', 'antivirus_virustotal'), 
			'https://www.virustotal.com/vtapi/v2/file/report' // default none
		)
	);

	// The setting for the api hook that the client should retrieve results of an address scan.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_reports_url_setting',
			new lang_string('server_resources_reports_url_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_reports_url_setting_desc', 'antivirus_virustotal'), 
			'https://www.virustotal.com/vtapi/v2/url/scan' // default none
		)
	);
	
	// The setting for the api hook that the client should retrieve results of an address scan.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_reports_ip_setting',
			new lang_string('server_resources_reports_ip_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_reports_ip_setting_desc', 'antivirus_virustotal'), 
			'http://www.virustotal.com/vtapi/v2/ip-address/report' // default none
		)
	);
	
	// The setting for the api hook that the client should retrieve results of an address scan.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_reports_domain_setting',
			new lang_string('server_resources_reports_domain_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_reports_domain_setting_desc', 'antivirus_virustotal'), 
			'http://www.virustotal.com/vtapi/v2/domain/report' // default none
		)
	);
	
	// The setting for the api hook that the client should send comments about a scan with.
	$settings->add(
		new antivirus_virustotal_server_resource_setting(
			'antivirus_virustotal/server_resources_comments_setting',
			new lang_string('server_resources_comments_setting_name', 'antivirus_virustotal'), 
			new lang_string('server_resources_comments_setting_desc', 'antivirus_virustotal'), 
			'https://www.virustotal.com/vtapi/v2/comments/put' // default none
		)
	);
}
