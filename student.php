class Student {

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private [] $grades
    
   
    private function __construct(string $firstName, $lastName)
    {
        $this->id = -1
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->grades = $[""];
    }
    
     public function getd() : int
    {
     return $this->id;
    }

    public function setid(int $id) : void
    {
    $this->id = $id;
    }

    public function getfirstName() : string
    {
        return $this->firstName;
    }

    public function setfirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    public function getlastName() : string
    {
       return $this->lastName;
    }
 
    public function setlastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    public function getemail() : string
    {
       return $this->email;
    }
 
    public function setemail(string $email) : void
    {
        $this->email = $email;
    }

    public function getfullName() : string
    {
        return $this->firstName;
        return $this->lastName;
    }


    $getfullName = new fullName;
    $getfullName->speak();
 
 }