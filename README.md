# VirusTotal-For-Moodle-AND-Wordpress
\	Scan uploads utilizing the VirusTotal service that is provided and utilized by google in to ensure that the data is valuable (therefore not malicious). This project is currently disfunctional and within 50~75% complete.

## Contributors Are Invited ##
### We can use: ###
	- Support with the development of this package as a patron.
	- Support with the development of this package as a developer. 
	- Support with the development of this package by demand (join community). 

## GUI for configuring the reasoning of the package. ##

	Scan method - intuitive logic. The package allows for the administration/security team to set what they are trying to prove out of a virus scan. This is beneficial in the event of faults, exclussion of signatures, and the inclussion  of signatures. Whenever the end user selects "Trying to prove malicous." or "Trying to prove valuable." they set the clients prejudices for data where "Trying to prove" implies the opposite. (Fe: Trying to prove mallice; meaning that by default the data is valuable.).
	
	Setting the default(s) for unclassified data (neither deemed virus or malicious) in this intuitive mannor calls for the expansion if "include these signatures, for the conclussion of the scan is inductive in nature." vs. "exclude these signatures, for the conclussion of the scan is deductive in nature."
	
	As of release that feature (inclussions and exclussions based on methodology) is not supported. In the meantime, methodology adds support to failover.

### Developer(s): ###
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
		
	~/libs/client/scan_method_setting.php: input/setting validation class.
	
## Verbose Reporting Options
## API Key Configuration
## User Agent Configuration
## Server Resource Configurations
## Error Handling
