<?php

function getConfig()
{
    $config = array(
        'admin_user' => 'agility',
        'admin_pass' => '$2y$10$S6MBSFhRi.Tr/4E6OjHfh.iAWw46BfLDt7FPDTc0VstQevAckW39m'
    );

    if (file_exists(RASPI_CONFIG . '/raspap.auth')) {
        if ($auth_details = fopen(RASPI_CONFIG . '/raspap.auth', 'r')) {
            $config['admin_user'] = trim(fgets($auth_details));
            $config['admin_pass'] = trim(fgets($auth_details));
            fclose($auth_details);
        }
    }
    return $config;
}

