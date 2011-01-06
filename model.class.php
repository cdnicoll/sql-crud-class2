<?php

include_once('sql.class.php');

class Model
{
    private $db;    // Hold a database object
    
    public function Model()
    {
        $this->db = new Database('localhost','root','root','world');
    }
    
    /*
    function showing a select where all conent is obtained and the
    city name is vancouver
    */
    public function selectEg1()
    {
        // call first method. connect
    	$this->db->connect();
    	
    	//($table, $rows, $where, $order, $limit)
	    if($this->db->select('City','*', 'name="Vancouver"', null, 10) == true) {  //SELECT a *(all) LIMIT 10 
    	    $result = $this->db->getResult();
	    }
	    $this->db->disconnect();    // disconnect from DB
	    
	    return $result;    // return the results
    }
    
    /*
    function showing off how to get all cities with the name vancouver 
    and limit the result set to 10
    */
    public function selectEg2()
	{
	    // call first method. connect
    	$this->db->connect();
    	
    	//($table, $rows, $where, $order, $limit)
	    if($this->db->select('City','*', 'name="Vancouver"', null, 10) == true) {  //SELECT a *(all) LIMIT 10 
    	    $result = $this->db->getResult();
	    }
	    $this->db->disconnect();    // disconnect from DB
	    
	    return $result;    // return the results
	}
	
	/*
    function showing a result set returned on the whole table, displaying
    only 10 results
    */
    public function selectEg3()
    {
        // call first method. connect
    	$this->db->connect();
    	
    	//($table, $rows, $where, $order, $limit)
	   if($this->db->select('City','*', null, null, 10) == true)  {  //SELECT a *(all) LIMIT 10 
    	    $result = $this->db->getResult();
	    }
	    $this->db->disconnect();    // disconnect from DB
	    
	    return $result;    // return the results
    }
    
    public function insertDB()
    {
        //$db->insert('City', array("Vancouver","VAN", "BC2", 514008),'Name, CountryCode, District, Population'); 
    }
    
    public function updateDB()
    {
        //$db->update('City',array('District'=>'BC', 'Name'=>'VanCity'),array('ID',4085)); 
    }
}
?>