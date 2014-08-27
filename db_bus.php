<?php
//require_once('ImageManipulator.php');	
class db{
			var $host='localhost';
			var $user='root';
			var $database='bus';
			var $password='';
			public $dbconnect;
			

			public function __construct()
			{
				$this->dbconnect=mysqli_connect($this->host,$this->user,$this->password,$this->database);
			}
                        
                        public function retrieve($r)
                        {
                            $query="SELECT bus,estimated_time,actual_time from schedule_info where station='$r'";
                            $res=mysqli_query($this->dbconnect,$query);
                            $num_rows=mysqli_num_rows($res);
                           
                             
                             while($row=$res->fetch_array(MYSQLI_ASSOC))
                            {
                               $data[]=$row;
                               //print_r($data);
                           }

                            $arr=array();
                           $arr[0][0]="Bus";
                           $arr[0][1]="Estimated time";
                           $arr[0][2]="Actual time";
                           for($i=0;$i<$num_rows;$i++)
                           {
                               $arr[$i+1][0]=$data[$i]['bus'];
                               $arr[$i+1][1]=$data[$i]['estimated_time'];
                               $arr[$i+1][2]=$data[$i]['actual_time'];
                            
                            
                            print_r(" ");
                           }
                           
                          // print_r ($arr);
                           $var=array();
                              $var[0]='[';
                           for($i=0;$i<3;$i++)
                           {
                            if($i!=0)
                            {
                                $var[0].=',';
                            }
                                $var[0].="'";
                               $var[0].=$arr[0][$i];
                               $var[0].="'";
                           }
                          $var[0].="],";
                           
                           for($i=1;$i<$num_rows;$i++)
                           {
                               
                               $var[$i]='[';
                               for($j=0;$j<3;$j++)
                               { 
                                   if($j!=0)
                                   {
                                   $var[$i].=',';
                                   
                                   $var[$i].=$arr[$i][$j];
                                   }
                                else {
                                    $var[$i].="'";
                                    $var[$i].=$arr[$i][$j];
                                     $var[$i].="'";
                                }
                               }
                               $var[$i].=']';
                               if($i!=($num_rows-1))
                               {
                                    $var[$i].=',';
                               }
                               }
                 
                         
                           for($i=0;$i<$num_rows;$i++)
                           {
                               @$final.=$var[$i];
                           }
                             return($final); 
}
                           
                                                  

                       
                       public function getsingle($id)
                       {
                       
                           $query="SELECT * from bus_list Where id='$id'";
                           $res = mysqli_query($this->dbconnect,$query);
                           
                           return $res->fetch_array(MYSQLI_ASSOC);
                           
                           
                       }
                       
                       
                       
                       public function viewfeed()
                       {
                       
                           $query="SELECT * from feedback";
                          $res = mysqli_query($this->dbconnect,$query);
                           $data = array();
                           while($row=$res->fetch_array(MYSQLI_ASSOC)){
                               $data[]=$row;
                           }
                            return $data;
                           
                       } 
                       
                         public function getemp()
                         {
                           $query="SELECT * from emploee_info";
                          $res = mysqli_query($this->dbconnect,$query);
                           $data = array();
                           while($row=$res->fetch_array(MYSQLI_ASSOC)){
                               $data[]=$row;
                           }
                            return $data;
                             
                         }
                            
                       
                       
                       public function save($s,$d,$act,$exp,$id)
                       {
                          $query="INSERT INTO `bus`.`schedule_info` (`station` ,`date` ,`estimated_time` ,`actual_time` ,`bus`)VALUES ( $s,$d,$act,$exp,$id)"; 
                          //$query="INSERT INTO schedule_info (station,date, estimated_time, actual_time, bus) VALUES  " ;
                          mysqli_query($this->dbconnect,$query);
                          header('location:station.php');
                          
                       }
                       
                        public function addfeed($a,$b)
                       {
                          $query="INSERT INTO `bus`.`feedback` (`id` ,`number` ,`feedback`)VALUES (NULL , '$a', '$b')"; 
                          //$query="INSERT INTO schedule_info (station,date, estimated_time, actual_time, bus) VALUES  " ;
                          mysqli_query($this->dbconnect,$query);
                         // header('location:thankyou.php');
                          
                       }
                       public function getflag()
                       {
                           date_default_timezone_set('Asia/Kathmandu');
                            $from = strtotime('2014-06-1');
                            $today = time();
                            $difference = $today - $from;
                            $days=floor($difference / (60 * 60 * 24));

                            if($days==0)
                         {
                             $query1="UPDATE bus_list SET flag=1 where id=1";
                             mysqli_query($this->dbconnect,$query1);
                             return 1;
                            
                         }
                         else
                         {
                           
                             
                             $flag1=($days%7);
                             
                             $query1="UPDATE bus_list SET flag=0 where flag=1";
                             mysqli_query($this->dbconnect,$query1);
                             
                             $query="UPDATE bus_list SET flag=1 where id=$flag1";
                             mysqli_query($this->dbconnect,$query);
                             
                             
                             return $flag1;

                         }
                       }        
                       
                       public function getdif($val,$i)
                       {
                           $min=(20*($val-1));
                     
                           
                                if($min>=60)
                                 {     
                                      $i=$i+1;
                                        $min=$min-60;
                                }
                       
                                if($min==0)
                                echo $i.":". $min.'0';
                                else
                                 echo $i.":". $min;
                           return($i*60+$min);
                           
                           
                           
                       }
                       public function insert($d)
                       {
                           $name=$_POST['name'];
                           $type=$_POST['type'];
                           $assoc=$_POST['assoc'];
                           if($type=='station_manager')
                           {
                                $query="INSERT INTO `bus`.`emploee_info` (`name` ,`joined_date` ,`type` ,`associated_st`)VALUES ( '$name','$d','$type','$assoc')"; 
                           }
                           else
                               $query="INSERT INTO `bus`.`emploee_info` (`name` ,`joined_date` ,`type` ,`associated_bus`)VALUES ( '$name','$d','$type','$assoc')";
                          mysqli_query($this->dbconnect,$query);
                          header("location:manage_staff.php");
                           }
}
                      


                       
                               
        
                             

