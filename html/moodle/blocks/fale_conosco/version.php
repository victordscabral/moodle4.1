<?php
$plugin->component = 'block_fale_conosco';  // Recommended since 2.0.2 (MDL-26035). Required since 3.0 (MDL-48494)
$plugin->version = 2018092400;  // YYYYMMDDHH (year, month, day, 24-hr time)
$plugin->requires = 2010112400; // YYYYMMDDHH (This is the release version for Moodle 2.0)
$plugin->dependencies = array(
    'block_escola_modelo' => ANY_VERSION
);


