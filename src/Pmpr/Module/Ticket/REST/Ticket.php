<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687085b8bd11             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Ticket\REST; use Pmpr\Module\Ticket\Traits\SubmissionTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Ticket extends Common { use SubmissionTrait; public function __construct() { $this->rest_base = "\164\x69\x63\x6b\x65\x74"; parent::__construct(); } }
