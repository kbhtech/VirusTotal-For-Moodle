# VirusTotal-For-Moodle-AND-Wordpress
Scan files utilizing the VirusTotal service that is provided and utilized by google in to ensure that the data is valuable (therefore not malicious). This project is currently disfunctional and within 50~75% complete.

## Contributors Are Invited ##
### We can use:
- Support with the development of this package as a patron.
- Support with the development of this package as a developer. 
- Support with the development of this package by demand (join community). 

## Scan Method Options 
### See:
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
		
	~/libs/client/scan_method_setting.php
###

Ref:(

);


The scan method is more of an evaluation option as to whether or not the web application should attempt to prove the data malicious (therefore, by default the data is considered valuable.) or valuable (and therefore, by default the data is considered malicious.). The primary use for this is for failover purposes. Its implication is incase a need expanding an inclussive and exclussive setting is mandated by the general public. If the inclussive list is implimented then the current mechanic installed for failover can double-over as a reasoning machanic.

## Verbose Reporting Options
## API Key Configuration
## User Agent Configuration
## Server Resource Configurations
## Error Handling
