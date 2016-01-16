<?php
/** This class consists of methods/fields that are used to operate on any Table.
 *
 *
 * @package 
 */

 
class Location {

     /**   Database Table Name
	 *
	 * @var string
	 */
   public $locid;

   /**   Database Table Name
	 *
	 * @var string
	 */
   public $locname;
   
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
   	 public function locationName($locid){
	
         $dbh = $this->dbh;
         $result=$dbh->query("SELECT LOCNAME FROM fb_location WHERE LOCID='".$locid."'");
   		 $name = $result->fetchColumn();
		 return $name;
     }
     
	 /** Check if the Value in the passed checkclause already exists in the Table 
	 *
	 *  @param string[] checkclause
	 *  @return string
	 */
   	 public function locationAvailable($mailid, $location){
	
         $dbh = $this->dbh;
		 
         $result=$dbh->query("SELECT count(locname) FROM fb_location WHERE email='".$mailid."' and locid='".$location."'");
   		 $cnt = $result->fetchColumn();
		 
		 if($cnt==1)
			echo "true";
		else
			echo "false";
     }
}
  
?>
