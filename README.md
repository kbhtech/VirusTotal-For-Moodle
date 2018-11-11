# VirusTotal-For-Moodle
Scan uploads utilizing the VirusTotal service that is provided and utilized by google in to ensure that the data is either valuable or malicious. This project is currently disfunctional and within 50~75% complete.

## Contributors Are Invited ##
### We can use: ###
- Support with the development of this package as a patron.
- Support with the development of this package as a developer. 
- Support with the development of this package by demand (join community). 

## GUI for configuring the method of which the antivirus judges data. ##

*this will be in the administrative panel of moodle.*

*this will be comming to wordpress*

Scan method - The package allows for the administration/security team to set what they are trying to prove out of the virus scan. This is beneficial in the event of faults, exclussion of signatures, and the inclussion  of signatures. The end user selects "Trying to prove malicous." or "Trying to prove valuable." which in-turn sets prejudices for or against data. "Trying to prove" implies the opposite. (for example, if we are trying to prove malicius then by default we must see the data to be valuable.).
	
This intuitive mannor calls for the expansion in future releases. One of which: methodology based inclussions and exclussions. for example: if the antivirus is reaching its conclussion through inductive means then a signature list can be assumed to be a inclussions list. In turn if the antivirus is reaching its end conclussion through deductive means then a signature list can be assumed to be an exclussions list. 
	
As of release, that feature (inclussions and exclussions based on methodology) is not supported. In the meantime, methodology adds support to failover.

### Assembly: ###
	~/options.php, 
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
		
	~/settings.php
		$settings->add(... $antivirus_virustotal_client_scan_method_options));
		
	~/classes/scanner.php: 
		public function scan($resource){
			$this->init(); // the initiator contains the absolute minimum to head all functions.
			
			if( // scan method is not valid
				($this->get_config('client_scan_method') != 'antivirus_virustotal_client_scan_method_option_valauable' )) and 
				($this->get_config('client_scan_method') != 'antivirus_virustotal_client_scan_method_option_malicious'){
			// then default it.
			
			$this->set_config('client_scan_method', 'antivirus_virustotal_client_scan_method_option_valauable');
			}
			...
		}
		
	~/lang/en/antivirus_virustotal.php:
		$string["antivirus_virustotal_client_scan_method_option_malicious"] = "Data is Malicious."
		$string["antivirus_virustotal_client_scan_method_option_valuable"] = "Data is Valuable."
		
	~/adminlib.php: class antivirus_virustotal_client_scan_method extends admin_setting_configselect { // validation & I/O code...
	
## GUI for configuring the depth of the feedback that the provider returns to the client. 

-*This will be in the administrative panel in the settings in moodle.*

-*This will be comming to wordpress*

### Assembly: ###
	/options.php, 
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
	
	~/settings.php
		$settings->add(... $antivirus_virustotal_client_verbose_options));
	
	~/classes/scanner.php: 
		public function init(){
			// gathers the absolute minimum and most commonly used configurations to perform operations. 
		
			if( // clients verbose mode config is not valid...
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_true' )) and 
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_false'){

				// then default it.
				$this->set_config('client_verbose_method', 'antivirus_virustotal_client_verbose_option_false');
			}
			...
		}
	
	~/lang/en/antivirus_virustotal.php:
		$string["antivirus_virustotal_client_verbose_setting_name"] = "Verbose Feedback?"
		$string["antivirus_virustotal_client_verbose_setting_desc"] = "Get verbose results from VirusTotal."
		$string["antivirus_virustotal_client_verbose_option_true"] = "True"
		$string["antivirus_virustotal_client_verbose_option_false"] = "False"
	
	~/adminlib.php: class antivirus_virustotal_client_verbose_setting extends admin_setting_configselect { // validation & I/O code...

## GUI for configuring the provider-assigned API Key.

-*This will be in the administrative panel in the settings of moodle.*

-*This will be comming to wordpress.*

### Assembly: ###
	/options.php, 
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
	
	~/settings.php
		$settings->add(... $antivirus_virustotal_client_verbose_options));
	
	~/classes/scanner.php: 
		public function init(){
			// gathers the absolute minimum and most commonly used configurations to perform operations. 
		
			if( // clients verbose mode config is not valid...
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_true' )) and 
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_false'){

				// then default it.
				$this->set_config('client_verbose_method', 'antivirus_virustotal_client_verbose_option_false');
			}
			...
		}
	
	~/lang/en/antivirus_virustotal.php:
		$string["antivirus_virustotal_client_verbose_setting_name"] = "Verbose Feedback?"
		$string["antivirus_virustotal_client_verbose_setting_desc"] = "Get verbose results from VirusTotal."
		$string["antivirus_virustotal_client_verbose_option_true"] = "True"
		$string["antivirus_virustotal_client_verbose_option_false"] = "False"
	
	~/adminlib.php: class antivirus_virustotal_client_verbose_setting extends admin_setting_configselect { // validation & I/O code..

## User Agent Configuration

-*This will be the administrative panel in the settings of moodle.*

-*This will be comming to wordpress.*

### Assembly: ###
	/options.php, 
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
	
	~/settings.php
		$settings->add(... $antivirus_virustotal_client_verbose_options));
	
	~/classes/scanner.php: 
		public function init(){
			// gathers the absolute minimum and most commonly used configurations to perform operations. 
		
			if( // clients verbose mode config is not valid...
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_true' )) and 
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_false'){

				// then default it.
				$this->set_config('client_verbose_method', 'antivirus_virustotal_client_verbose_option_false');
			}
			...
		}
	
	~/lang/en/antivirus_virustotal.php:
		$string["antivirus_virustotal_client_verbose_setting_name"] = "Verbose Feedback?"
		$string["antivirus_virustotal_client_verbose_setting_desc"] = "Get verbose results from VirusTotal."
		$string["antivirus_virustotal_client_verbose_option_true"] = "True"
		$string["antivirus_virustotal_client_verbose_option_false"] = "False"
	
	~/adminlib.php: class antivirus_virustotal_client_verbose_setting extends admin_setting_configselect { // validation & I/O code..

## Server Resource Configurations

-*This will be in the administrative panel in the settings of moodle.*

-*This will be comming to wordpress.*

### Assembly: ###
	/options.php, 
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
	
	~/settings.php
		$settings->add(... $antivirus_virustotal_client_verbose_options));
	
	~/classes/scanner.php: 
		public function init(){
			// gathers the absolute minimum and most commonly used configurations to perform operations. 
		
			if( // clients verbose mode config is not valid...
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_true' )) and 
				($this->get_config('client_verbose_method') != 'antivirus_virustotal_client_verbose_option_false'){

				// then default it.
				$this->set_config('client_verbose_method', 'antivirus_virustotal_client_verbose_option_false');
			}
			...
		}
	
	~/lang/en/antivirus_virustotal.php:
		$string["antivirus_virustotal_client_verbose_setting_name"] = "Verbose Feedback?"
		$string["antivirus_virustotal_client_verbose_setting_desc"] = "Get verbose results from VirusTotal."
		$string["antivirus_virustotal_client_verbose_option_true"] = "True"
		$string["antivirus_virustotal_client_verbose_option_false"] = "False"
	
	~/adminlib.php: class antivirus_virustotal_client_verbose_setting extends admin_setting_configselect { // validation & I/O code..

## Error Handling
