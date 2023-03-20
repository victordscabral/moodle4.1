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
 * External functions and service definitions.
 */

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
$services = array(
        'Escola Modelo Service' => array(
                'functions' => array (
                        'block_escola_modelo_get_usage_statistics'
                ),
                'restrictedusers' => 0,
                'enabled'=>1,
        )
);

// We defined the web service functions to install.
$functions = array(
        'block_escola_modelo_get_usage_statistics' => array(
                'classname'   => 'block_escola_modelo_external',
                'methodname'  => 'get_usage_statistics',
                'classpath'   => 'block/escola_modelo/externallib.php',
                'description' => 'Returns user statistics from this moodle installation',
                'type'        => 'read',
        ),
);


