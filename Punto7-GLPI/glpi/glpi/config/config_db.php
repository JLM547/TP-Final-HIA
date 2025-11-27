<?php
class DB extends DBmysql {
   public $dbhost = 'glpi-db';
   public $dbuser = 'glpi';
   public $dbpassword = 'glpipass';
   public $dbdefault = 'glpidb';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
