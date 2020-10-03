<?php 


  class Cart{

    public $db = null;

    public function __construct(DBController $db){
      if(!isset($db->con)){
        return null;
      }

      $this->db = $db;
    }

    public function insertIntoCart($params = null, $table = "cart"){
      if($this->db->con != null){
        if($params != null){
          $columns = implode(',', array_keys($params));
          // print_r($columns);
          $values = implode(',', array_values($params));
          // print_r($values);

          $query_string = sprintf("INSERT INTO %s (%s) VALUES (%s)", $table, $columns, $values);
          // echo $query_string;

          $result = $this->db->con->query($query_string);

          return $result;
        }
      }
    }

    public function addToCart($userID, $itemID){
      if(isset($userID) && isset($itemID)){
        $params = array(
          "user_id" => $userID,
          "item_id" => $itemID
        );

        $result = $this->insertIntoCart($params);

        if($result){
          header("Location: " . $_SERVER['PHP_SELF']);
        }
      }
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