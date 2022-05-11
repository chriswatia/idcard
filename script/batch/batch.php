<?php

/**
*
*/

class batch
{
	
	 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     
 }

 public function select($query){
   return $this->result=$this->db->select($query);
  }



public function num_array($st){
  $num=explode(',', $st);
  return $num;
 } 

 public function convert_arr($arr){
 //convert arr to string ex:a[2]={1,2} output: st="1,2";
   $st="";
   $st=implode(',', $arr);
   return $st;
 } 

  public function batch_info(){
      $info=array();
      $sub=array();
     $sql="select * from batch ORDER BY id DESC";
     $res=$this->select($sql);
     while ($row=mysqli_fetch_array($res)) {
     	$id=$row['id'];
     	$sub["id"]=$row['id'];
     	$sub["name"]=$row['name'];
      $info[$id]=$sub;
     }
	 return $info;
  }

  public function get_batch_name($batch_id){
  $info=$this->batch_info();
  if($batch_id==0)$res="";
  else $res="'".$info[$batch_id]['name']."'";
  return $res;
}

}

?>