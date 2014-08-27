<?php
class db1{
			var $host='localhost';
			var $user='root';
			var $database='bus';
			var $password='';
			public $dbconnect;
			

			public function __construct()
			{
				$this->dbconnect=mysqli_connect($this->host,$this->user,$this->password,$this->database);
			}
                         public function getstation($id)
                         {
                             $query="SELECT * from station_info where uid=$id";
                             $res=mysqli_query($this->dbconnect,$query);
                              $data=$res->fetch_array(MYSQLI_ASSOC);
                              $stop=$data['id'];
                              return $stop;
                         }
                         public function getfare($a,$b,$c)
                         {
                             if($a==1)
                             {
                                 if($c>$b)
                                 {
                                      $val=$c-$b;
                                 return ($val*2+10);
                                 }
                                else {
                                    $val=6+$c-$b;
                                    return ($val*2+10);
                                }
                                }
                                
                                 elseif($a==0)
                             {
                                 if($c>$b)
                                 {
                                      $val=$c-$b;
                                 return ($val*3+14);
                                 }
                                else {
                                    $val=6+$c-$b;
                                    return ($val*3+14);
                                }
                                }
                         }
                         public function check($a,$b)
                         {
                            $sql="Select * from station_info where mgr_userid='$a' and mgr_pass='$b'";  
                            $res=mysqli_query($this->dbconnect,$sql);
                            $data=array();
                            $row=mysqli_num_rows($res);
                            
                            $sql1="Select * from admin_info where name='$a' and password='$b'";  
                            $res1=mysqli_query($this->dbconnect,$sql1);
                            $data1=array();
                            $row1=mysqli_num_rows($res1);
                            
                            //echo $data['id'];
                            if($row==1)
                            {
                                 $data = $res->fetch_array(MYSQLI_ASSOC);
                                // print_r($data);
                                session_start();
                                $_SESSION['id']=$data['id'];
                                $_SESSION['name']=$data['mgr_userid'];
                                header('location:station.php');
                            }
                            else if($row1==1)
                            {
                                 $data1 = $res1->fetch_array(MYSQLI_ASSOC);
                                // print_r($data);
                                session_start();
                               // $_SESSION['aid']=$data['aid'];
                                $_SESSION['name']=$data['name'];
                                header('location:superadmin_interface.php');
                            }
                            else
                            {
                                header("location:index.php");
                            }
                         }
                         public function logout()
                         {
                             session_start();
                             
                             session_destroy();
                             header('location:index.php');
                         }
                         
}

?>
