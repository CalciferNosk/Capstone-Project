<?php                                                                                                   
defined('BASEPATH') OR exit('No direct script access allowed');                                                                                                 

/*                                                                                                  
|--------------------------------------------------------------------------                                                                                                 
| Display Debug backtrace                                                                                                   
|--------------------------------------------------------------------------                                                                                                 
|                                                                                                   
| If set to TRUE, a backtrace will be displayed along with php errors. If                                                                                                   
| error_reporting is disabled, the backtrace will not display, regardless                                                                                                   
| of this setting                                                                                                   
|                                                                                                   
*/                                                                                                  
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);
/*                                                                                                  
|--------------------------------------------------------------------------                                                                                                 
| File and Directory Modes                                                                                                  
|--------------------------------------------------------------------------                                                                                                 
|                                                                                                   
| These prefs are used when checking and setting modes when working                                                                                                 
| with the file system.  The defaults are fine on servers with proper                                                                                                   
| security, but you may wish (or even need) to change the values in                                                                                                 
| certain environments (Apache running a separate process for each                                                                                                  
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should                                                                                                   
| always be used to set the mode correctly.                                                                                                 
|                                                                                                   
*/                                                                                                  
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);                                   
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);                                  
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);                                   
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);
/*                                                                                                  
|--------------------------------------------------------------------------                                                                                                 
| File Stream Modes                                                                                                 
|--------------------------------------------------------------------------                                                                                                 
|                                                                                                   
| These modes are used when working with fopen()/popen()                                                                                                    
|                                                                                                   
*/                                                                                                  
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');                   
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');               
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care                                                                                                   
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care                                                                                                 
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');           
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');        
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');        
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*                                                                                                  
|--------------------------------------------------------------------------                                                                                                 
| Exit Status Codes                                                                                                 
|--------------------------------------------------------------------------                                                                                                 
|                                                                                                   
| Used to indicate the conditions under which the script is exit()ing.                                                                                                  
| While there is no universal standard for error codes, there are some                                                                                                  
| broad conventions.  Three such conventions are mentioned below, for                                                                                                   
| those who wish to make use of them.  The CodeIgniter defaults were                                                                                                    
| chosen for the least overlap with these conventions, while still                                                                                                  
| leaving room for others to be defined in future versions and user                                                                                                 
| applications.                                                                                                 
|                                                                                                   
| The three main conventions used for determining exit status codes                                                                                                 
| are as follows:                                                                                                   
|                                                                                                   
|    Standard C/C++ Library (stdlibc):                                                                                                  
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html                                                                                                  
|       (This link also contains other GNU-specific conventions)                                                                                                    
|    BSD sysexits.h:                                                                                                    
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits                                                                                                 
|    Bash scripting:                                                                                                    
|       http://tldp.org/LDP/abs/html/exitcodes.html                                                                                                 
|                                                                                                   
*/                                                                                                  
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors                                                                                                   
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error                                                                                                 
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error                                                                                                  
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found                                                                                                 
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class                                                                                                 
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member                                                                                                 
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input                                                                                                   
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error                                                                                                 
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code                                                                                                  
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code                                                                                                   

# PLESE DO NOTTTTTTT PUSH  CONSTANTS.PHP
# PLESE DO NOTTTTTTT PUSH  CONSTANTS.PHP
# PLESE DO NOTTTTTTT PUSH  CONSTANTS.PHP
# PLESE DO NOTTTTTTT PUSH  CONSTANTS.PHP
# PLESE DO NOTTTTTTT PUSH  CONSTANTS.PHP
# PLESE DO NOTTTTTTT PUSH  CONSTANTS.PHP
# PLESE DO NOTTTTTTT PUSH  CONSTANTS.PHP

switch(ENVIRONMENT):
	default:	
		date_default_timezone_set('Asia/Manila'); 

		# BASE URL
		defined('BASE_URL')          ? null : define('BASE_URL', 'http://localhost/Capstone/'); # http://172.18.0.22:8080/ers

		# ERS_DB
		defined('ERS_DB_HOST')      ? null : define('ERS_DB_HOST', 'localhost');  //'localhost'                       
		defined('ERS_DB_USER')      ? null : define('ERS_DB_USER', 'root'); //'root'
		defined('ERS_DB_PASSWORD')  ? null : define('ERS_DB_PASSWORD', 'root');
		defined('ERS_DB_NAME')      ? null : define('ERS_DB_NAME', 'jamon');
		
		// # PORTAL GLOBAL_2
		// defined('PORTAL_GLOBAL_2_DB_HOST')      ? null : define('PORTAL_GLOBAL_2_DB_HOST', 'localhost');
		// defined('PORTAL_GLOBAL_2_DB_USER')      ? null : define('PORTAL_GLOBAL_2_DB_USER', 'root');
		// defined('PORTAL_GLOBAL_2_DB_PASSWORD')  ? null : define('PORTAL_GLOBAL_2_DB_PASSWORD', 'root');
		// defined('PORTAL_GLOBAL_2_DB_NAME')      ? null : define('PORTAL_GLOBAL_2_DB_NAME', 'portal_global_2');

		// # EMS PLANTILLA
		// defined('EMS_DB_HOST')      ? null : define('EMS_DB_HOST', 'localhost');
		// defined('EMS_DB_USER')      ? null : define('EMS_DB_USER', 'root');
		// defined('EMS_DB_PASSWORD')  ? null : define('EMS_DB_PASSWORD', 'root');
		// defined('EMS_DB_NAME')      ? null : define('EMS_DB_NAME', 'ems_plantilla');
		
		// # BTL DB
		// defined('BTL_DB_HOST')      ? null : define('BTL_DB_HOST', 'localhost');
		// defined('BTL_DB_USER')      ? null : define('BTL_DB_USER', 'root');
		// defined('BTL_DB_PASSWORD')  ? null : define('BTL_DB_PASSWORD', 'root');
		// defined('BTL_DB_NAME')      ? null : define('BTL_DB_NAME', 'btl_db_prod');

		// # EMS SYSTEM ACCESS DB
		// defined('EMS_SA_DB_HOST')      ? null : define('EMS_SA_DB_HOST', 'localhost');
		// defined('EMS_SA_DB_USER')      ? null : define('EMS_SA_DB_USER', 'root');
		// defined('EMS_SA_DB_PASSWORD')  ? null : define('EMS_SA_DB_PASSWORD', 'root');
		// defined('EMS_SA_DB_NAME')      ? null : define('EMS_SA_DB_NAME', 'ems_system_access');

		// # SMTP CONFIGURATION
		// defined('SMTP_HOST')      		? null : define('SMTP_HOST', 'mail.motortrade.com.ph'); # 10.50.18.2 || mail.motortrade.com.ph
		// defined('SMTP_PORT')      		? null : define('SMTP_PORT', 25); # 468
		// defined('SMTP_USERNAME')  		? null : define('SMTP_USERNAME', 'mico.castro');
		// defined('SMTP_EMAIL_FROM')      ? null : define('SMTP_EMAIL_FROM', 'no-reply@motortrade.com.ph');
		// defined('SMTP_PASSWORD')      	? null : define('SMTP_PASSWORD', 'passcastro');
		// defined('SMTP_DISPLAY_NAME')    ? null : define('SMTP_DISPLAY_NAME', 'Motortrade | Notification');

		// #EXTERNAL JOB APP DB
		// defined('EXTERNAL_JA_DB_HOST')      ? null : define('EXTERNAL_JA_DB_HOST', 'localhost');                         
		// defined('EXTERNAL_JA_DB_USER')      ? null : define('EXTERNAL_JA_DB_USER', 'root');                            
		// defined('EXTERNAL_JA_DB_PASSWORD')  ? null : define('EXTERNAL_JA_DB_PASSWORD', 'root');                           
		// defined('EXTERNAL_JA_DB_NAME')      ? null : define('EXTERNAL_JA_DB_NAME', 'external_jobapp');
		// defined('EMS_API')      						? null : define('EMS_API', 'http://172.0.0.22:89/');
	break;
endswitch;
