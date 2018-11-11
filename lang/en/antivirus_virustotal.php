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
 * Strings for component 'antivirus_virustotal', language 'en'.
 *
 * @package    antivirus_virustotal
 * @copyright  2018 Kevin B. Harris.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string["antivirus_virustotal"] = "VirusTotal";
$string['privacy:metadata'] = 'The VirusTotal client records all scan results on a server.';

// Option values.
$string["antivirus_virustotal_client_scan_method_option_malicious"] = "Data is Malicious."
$string["antivirus_virustotal_client_scan_method_option_valuable"] = "Data is Valuable."
$string["antivirus_virustotal_client_verbose_option_true"] = "Yes"
$string["antivirus_virustotal_client_verbose_option_false"] = "No"

// Setting Values
$string["antivirus_virustotal_client_verbose_setting_name"] = "Verbose Feedback"
$string["antivirus_virustotal_client_verbose_setting_desc"] = "Should the VirusTotal service provider report back to the client in full detail?"
$string["antivirus_virustotal_client_scan_method_setting_name"] = "Assess to prove"
$string["antivirus_virustotal_client_scan_method_setting_desc"] = "What are we trying to prove with the virus scan?"
$string["antivirus_virustotal_client_useragent_setting_name"] = "UserAgent"
$string["antivirus_virustotal_client_useragent_setting_desc"] = "How should the web connection identify itself to the server?"
$string["antivirus_virustotal_client_key_setting_name"] = "Api Key"
$string["antivirus_virustotal_client_key_setting_desc"] = "Api Keys are available from VirusTotal and required for client->server software."
$string["antivirus_virustotal_local_file_encoding_setting_name"] = "Upload Encoding"
$string["antivirus_virustotal_local_file_encoding_setting_desc"] = "The encoding of the data as it is uploaded to VirusTotal; it is not recommended to change this. (Default: gzip, deflate)"
$string["antivirus_virustotal_server_resources_scan_file_setting_name"] = "Scan File Webhook"
$string["antivirus_virustotal_server_resources_scan_file_setting_desc"] = "The address the client will connect to for file scans."
$string["antivirus_virustotal_server_resources_scan_address_setting_name"] = "Scan Address Webhook"
$string["antivirus_virustotal_server_resources_scan_address_setting_desc"] = "The address the client will communicate on for web address scans."
$string["antivirus_virustotal_server_resources_rescan_file_setting_name"] = "Re-Scan Address Webhook"
$string["antivirus_virustotal_server_resources_rescan_file_setting_desc"] = "The address the client will communicate on to rescan already uploaded data."
$string["antivirus_virustotal_server_resources_reports_file_setting_name"] = "File Reports Webhook"
$string["antivirus_virustotal_server_resources_reports_file_setting_desc"] = "The address the client will communicate on to collect reports about a file."
$string["antivirus_virustotal_server_resources_reports_url_setting_name"] = "URL Reports Webhook"
$string["antivirus_virustotal_server_resources_reports_url_setting_desc"] = "The address the client will communicate on to collect reports about a web address."
$string["antivirus_virustotal_server_resources_reports_ip_setting_name"] = "IP Reports Webhook"
$string["antivirus_virustotal_server_resources_reports_ip_setting_desc"] = "The address the client will communicate on to collect reports about an ip address."
$string["antivirus_virustotal_server_resources_reports_domain_setting_name"] = "Domain reports Webhook"
$string["antivirus_virustotal_server_resources_reports_domain_setting_desc"] = "The address the client will communicate on to collect reports about a domain."
$string["antivirus_virustotal_server_resources_comments_setting_name"] = "Comments Webhook"
$string["antivirus_virustotal_server_resources_comments_setting_desc"] = "The address the client will communicate on to collect and send comments about a scan."

// Generic Error
$string["antivirus_virustotal_client_scan_failed_invalid_key"] = "The VirusTotal server reported that the API key used is invalid.";
$string["antivirus_virustotal_client_scan_failed_error_other"] = "The VirusTotal client encountered the \"unknown exception.\", try updating your plugin.";

// HTTP Client Error(s).
$string["antivirus_virustotal_client_scan_failed_error_204"] = "(Feedback) VirusTotal Server: \"Request rate limit exceeded. You are making more requests than allowed. You have exceeded one of your quotas (minute, daily or monthly). Daily quotas are reset every day at 00:00 UTC.\"";
$string["antivirus_virustotal_client_scan_failed_error_400"] = "(Feedback) VirusTotal Server: \"Bad request. Your request was somehow incorrect. This can be caused by missing arguments or arguments with wrong values.\"";
$string["antivirus_virustotal_client_scan_failed_error_401"] = "VirusTotal Client encountered the \"Unauthorized\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_402"] = "VirusTotal Client encountered the \"Payment Required\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_403"] = "(Feedback) VirusTotal Server: \"Forbidden. You don't have enough privileges to make the request. You may be doing a request without providing an API key or you may be making a request to a Private API without having the appropriate privileges.\"";
$string["antivirus_virustotal_client_scan_failed_error_404"] = "VirusTotal Client encountered the \"Not Found\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_405"] = "VirusTotal Client encountered the \"Method Not Allowed\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_406"] = "VirusTotal Client encountered the \"Not Acceptable\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_407"] = "VirusTotal Client encountered the \"Proxy Authentication Required\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_408"] = "VirusTotal Client encountered the \"Request Timeout\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_409"] = "VirusTotal Client encountered the \"Conflict\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_410"] = "VirusTotal Client encountered the \"Gone\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_411"] = "VirusTotal Client encountered the \"Length Required\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_412"] = "VirusTotal Client encountered the \"Precondition Failed\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_413"] = "VirusTotal Client encountered the \"Payload Too Large\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_414"] = "VirusTotal Client encountered the \"URI Too Long\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_415"] = "VirusTotal Client encountered the \"Unsupported Media Type\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_416"] = "VirusTotal Client encountered the \"Range Not Satisfiable\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_417"] = "VirusTotal Client encountered the \"Expectation Failed\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_418"] = "VirusTotal Client encountered the \"I'm a teapot \" exception.";
$string["antivirus_virustotal_client_scan_failed_error_421"] = "VirusTotal Client encountered the \"Misdirected Request \" exception.";
$string["antivirus_virustotal_client_scan_failed_error_422"] = "VirusTotal Client encountered the \"Unprocessable Entity\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_423"] = "VirusTotal Client encountered the \"Locked \" exception.";
$string["antivirus_virustotal_client_scan_failed_error_424"] = "VirusTotal Client encountered the \"Precondition Failed\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_426"] = "VirusTotal Client encountered the \"Payload Too Large\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_428"] = "VirusTotal Client encountered the \"Precondition Required\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_429"] = "VirusTotal Client encountered the \"Too Many Requests\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_431"] = "VirusTotal Client encountered the \"Request Header Fields Too Large\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_451"] = "VirusTotal Client encountered the \"Unavailable For Legal Reasons\" exception.";

// Http Server Errors
$string["antivirus_virustotal_client_scan_failed_error_500"] = "VirusTotal Server encountered the \"Internal Server Error\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_501"] = "VirusTotal Server encountered the \"Not Implemented\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_502"] = "VirusTotal Server encountered the \"Bad Gateway\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_503"] = "VirusTotal Server encountered the \"Service Unavailable\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_504"] = "VirusTotal Server encountered the \"Gateway Timeout\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_505"] = "VirusTotal Server encountered the \"HTTP Version Not Supported\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_506"] = "VirusTotal Server encountered the \"Variant Also Negotiates\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_507"] = "VirusTotal Server encountered the \"Insufficient Storage\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_508"] = "VirusTotal Server encountered the \"Loop Detected\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_510"] = "VirusTotal Server encountered the \"Not Extended\" exception.";
$string["antivirus_virustotal_client_scan_failed_error_511"] = "VirusTotal Server encountered the \"Network Authentication Required\" exception.";
