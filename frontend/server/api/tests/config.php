<?php


# ####################################
# DATABASE CONFIG
# ####################################	
define('OMEGAUP_DB_USER',         'omegaup_beta');
define('OMEGAUP_DB_PASS',         'ky)yiIkm_+zMf,>qkRP@j{pflG');
define('OMEGAUP_DB_HOST',         'localhost');
define('OMEGAUP_DB_NAME',         'omegaup_beta');	
define('OMEGAUP_DB_DRIVER',       'mysqlt');
define('OMEGAUP_DB_DEBUG',        false);	
define('OMEGAUP_ROOT',            '/opt/omegaup/frontend');
define("OMEGAUP_MD5_SALT", 	"om3gaup");	

define('OMEGAUP_LOG_TO_FILE',     true);
define('OMEGAUP_LOG_ACCESS_FILE', '/opt/omegaup/frontend/log/omegaup.log');
define('OMEGAUP_LOG_ERROR_FILE',  '/opt/omegaup/frontend/log/omegaup.log');
define('OMEGAUP_LOG_TRACKBACK',   false);
define('OMEGAUP_LOG_DB_QUERYS',   true);

define("OMEGAUP_SSLCERT_URL", "/opt/omegaup/frontend/omegaup.pem");
define("OMEGAUP_CACERT_URL", "/opt/omegaup/ssl/omegaup-ca.crt");
define("OMEGAUP_GRADER_URL", "https://localhost:21680/grade/");

define('RUNS_PATH',               '/opt/omegaup/omegaup/submissions');
define('PROBLEMS_PATH',           '/opt/omegaup/omegaup/problems');
