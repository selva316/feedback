<?php
/** This class consists of methods/fields that are used to operate on any Table.
 *
 *
 * @package 
 */

 
class UserDetails {

     /**   Database Table Name
	 *
	 * @var string
	 */
   public $userid;

   /**   Database Table Name
	 *
	 * @var string
	 */
   public $username;
	
	public $location;
	
	public $disable;
	
	public $role;
     /**  Database object
	 *
	 * @var object
	 */
   public $dbh;

    /** Constructor that populates all the Field variables.
	 *
	 *  @param Databaseobject dbh
	 *  @param string table_name
	 *
     */
	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	
	}
     
     /** Check if the Value in the passed checkclause already exists in the Table 
	 *
	 *  @param string[] checkclause
	 *  @return string
	 */
   	 public function userAvailable($username){
	
         $dbh = $this->dbh;
		 
         $result=$dbh->query("SELECT count(username) FROM fb_userdetails WHERE username='".$username."'");
   		 $cnt = $result->fetchColumn();
		 
		 if($cnt==0)
			echo "true";
		else
			echo "false";
     }
     
	public function passwordAvailable($oldpassword, $username, $locid)
	{
		$dbh = $this->dbh;
		 
         $result=$dbh->query("SELECT count(username) FROM fb_userdetails WHERE username='".$username."' and location='".$locid."' and password='".md5($oldpassword)."'");
   		 $cnt = $result->fetchColumn();
		 
		 if($cnt==1)
			echo "true";
		else
			echo "false";
	}
	
}
  
?>
