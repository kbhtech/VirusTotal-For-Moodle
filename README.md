# VirusTotal-For-Moodle
Scan files utilizing the VirusTotal service that is provided and utilized by google in to ensure that the data is valuable (therefore not malicious). This project is currently defunctional with a 50% completion.

## Scan Method Options 
See:( 
	~/settings.php, 
	~/classes/scanner.php, 
	~/lang/en/antivirus_virustotal.php
	~/libs/client/scan_method_setting.php
);

Ref:(

);


The scan method is more of an evaluation option as to whether or not the web application should attempt to prove the data malicious (therefore, by default the data is considered valuable.) or valuable (and therefore, by default the data is considered malicious.). The primary use for this is for failover purposes. Its implication is incase a need expanding an inclussive and exclussive setting is mandated by the general public. If the inclussive list is implimented then the current mechanic installed for failover can double-over as a reasoning machanic.

## Verbose Reporting Options
## API Key Configuration
## User Agent Configuration
## Server Resource Configurations
