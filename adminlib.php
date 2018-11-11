
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
 * anvivirus_virustotal adminlib
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Admin to toggle the method used to reach conclussions (primarily when results are inconclusive).
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class antivirus_virustotal_client_scan_method_setting extends admin_setting_configselect {
	public function write_setting($data){
    
  	}
  
	public function validate($data){
    
	}
}

/**
 * Admin setting to toggle on/off verbose mode.
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class antivirus_virustotal_client_verbose_setting extends admin_setting_configselect {
	public function write_setting($data){
    
	}
  
	public function validate($data){
    
	}
}

/**
 * Admin setting for the custimization of the useragent.
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class antivirus_virustotal_client_useragent_setting extends admin_setting_configtext {
	public function write_setting($data){
    
	}
  
	public function validate($data){
    
	}
}

/**
 * Admin setting for the clients API key as provided by VirusTotal
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class antivirus_virustotal_client_key_setting extends admin_setting_configtext  {
	public function write_setting($data){
    
	}
  
	public function validate($data){
    
	}
}

/**
 * Admin setting for the encoding the client will use to interact with VirusTotal
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class antivirus_virustotal_client_encoding_setting extends admin_setting_configtext  {
	public function write_setting($data){
    
	}
  
	public function validate($data){
    
	}
}

/**
 * Admin setting for customizing/inserting a provider resource.
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class antivirus_virustotal_provider_resource_setting  extends admin_setting_configtext {
	public function write_setting($data){
    
	}
  
	public function validate($data){
    
	}
}
