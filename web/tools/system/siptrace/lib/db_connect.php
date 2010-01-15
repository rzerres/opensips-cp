<?php
require_once("../../../../config/tools/system/siptrace/db.inc.php");
require_once("../../../../config/db.inc.php");
require_once("MDB2.php");

        global $config;
        if (isset($config->db_host_siptrace) && isset($config->db_user_siptrace) && isset($config->db_name_siptrace) ) {
                $config->db_host = $config->db_host_siptrace;
                $config->db_port = $config->db_port_siptrace;
                $config->db_user = $config->db_user_siptrace;
                $config->db_pass = $config->db_pass_siptrace;
                $config->db_name = $config->db_name_siptrace;
        }
        $dsn = $config->db_driver.'://' . $config->db_user.':'.$config->db_pass . '@' . $config->db_host . '/'. $config->db_name.'';
        $link = & MDB2::connect($dsn);
        $link->setFetchMode(MDB2_FETCHMODE_ASSOC);
        if(PEAR::isError($link)) {
            die("Error while connecting : " . $link->getMessage());
        }
?>
