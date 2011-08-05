<?
/** User Class: This class will contain all data about the user while they are on the site. It will also allow for changes to that data. **/
include('Database.php');
class User
{
    private $user_name = "";
    private $first_name = "";
    private $last_name = "";
    private $email_address = "";
    private $profile_pic = ""
    private $passwd = "";
    
    public function __construct($user_name = "", $passwd = "")
    {
        
    }
    
    public function __destruct()
    {
        
    }
    
    /* Set Functions: Put the data into the class object
       These are set to private becase the helper functions below are going to validate the data first. 
       Once the data is valid then the class will populate the data within it's self */
    
    private function setUserName($user_name)
    {
        $this->user_name = $user_name; // Assign the passed in "User Name" to the user_name attribute
    }
    
    private function setFirstName($first_name)
    {
        $this->first_name = $first_name; // Assign the passed in "First Name" to the first_name attribute
    }
    
    private function setLastName($last_name)
    {
        $this->last_name = $last_name; // Assign the passed in "Last Name" to the last_name attribute
    }
    
    private function setEmailAddress($email_address)
    {
        $this->email_address = $email_address; // Assign the passed in "Email Address" to the email_address attribute
    }
    
    // Get functions: These functions retrive the data in the class object.
    
    public function getUserName()
    {
        return $this->user_name;
    }
    
    
    
    
    // Helper Functions: These functions validate the data before putting it in the class.
    
    public function validateUserName($user_name)
    {
        //STUB: Needs to be flushed out with DB/Regex checks
        if($user_name == "VALID")
        {
            $this->setUserName($user_name);
            return "Success";
        }
        else
            return "FAIL";
    }
}
?>