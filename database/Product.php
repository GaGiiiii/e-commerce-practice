<?php 


  class Product{

    public $db = null;

    public function __construct(DBController $db){
      if(!isset($db->con)){
        return null;
      }

      $this->db = $db;
    }

    public function getData($table = 'product'){
      $result = $this->db->con->query("SELECT * FROM {$table}");

      $resultArray = array();

      while($item = mysqli_fetch_array($result, true)){
        $resultArray[] = $item;
      }

      return $resultArray;
    }

    public function getProduct($itemID = null, $table = 'product'){
      if(isset($itemID)){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$itemID}");
        
        $resultArray = array();

        while($item = mysqli_fetch_array($result, true)){
          $resultArray[] = $item;
        }
  
        return $resultArray;
      }
    }
  }