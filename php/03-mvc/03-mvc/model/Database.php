<?php

namespace Model;

use PDO;

class Database {
  // protected $db = null;

  // Construtor da classe
  protected function __construct() {
  }

  // Singleton - instance - static
  public static function getInstance() {

    static $instance = null;

    if ($instance === null) {
      $instance = new static();
    }

    return $instance;

  }

  public function getDB() {

    if ($db === null) {
      $db = new PDO('mysql:host=localhost;dbname=academico', 'root', '8301');
    }

    return $db;

  }





}
