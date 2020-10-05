<?php 

  ob_start();

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

    public function getSum($arr){
      if(isset($arr)){
        $sum = 0;

        foreach($arr as $item){
          $sum += floatval($item[0]);
        }
      }

      return sprintf("%.2f", $sum);
    }

    public function deleteCart($item_id = null, $table = 'cart'){
      if($item_id != null){
        $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id} LIMIT 1");
        if($result){
          header("Location: " . $_SERVER['PHP_SELF']);
        }
      }
    }

    public function getCartId($cartArray = null, $key = "item_id"){
      if($cartArray != null){
        $cart_id = array_map(function($value) use ($key){
          return $value[$key];
        }, $cartArray);
      }

      return $cart_id ?? [];
    }

    public function saveForLater($item_id = null, $saveTable = 'wishlist', $fromTable = 'cart'){
      if($item_id != null){
        $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id = {$item_id};";
        $query .= "DELETE FROM {$fromTable} WHERE item_id = {$item_id};";

        $result = $this->db->con->multi_query($query);

        if($result){
          header("Location: " . $_SERVER['PHP_SELF']);
        }
      }
    }

  }