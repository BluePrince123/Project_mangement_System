<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Version_197 extends CI_Migration
{
    function __construct()
    {
        parent::__construct();
    }

    public function up()
    {
        $this->db->query("UPDATE `tbl_config` SET `value` = '1.9.7' WHERE `tbl_config`.`config_key` = 'version';");
        
    }
}
