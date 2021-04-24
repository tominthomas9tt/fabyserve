<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-24 05:48:37 --> Query error: Duplicate entry '13' for key 'service_id' - Invalid query: INSERT INTO `mservices` (`service_id`, `name`, `parent_id`) VALUES (13, 'Plumping', '1')
ERROR - 2021-04-24 05:56:23 --> Query error: Unknown column 'SERVICES.id' in 'field list' - Invalid query: SELECT SERVICES.id as id, SERVICE.name as name FROM mservices SERVICE LEFT JOIN mservices PARENTSERVICE ON PARENTSERVICE.id = SERVICE.parent_id WHERE SERVICE.status=1 AND PARENTSERVICE.name='newcatergory 1'
