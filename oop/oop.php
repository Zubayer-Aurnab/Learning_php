    <?php
    class Students
    {
        #construct
        function __construct()
        {
            echo " hello from constructor STUDENT <br>";
        }
        //properties
        public $name;
        //Methods/Functions
        function set_name($str)
        {
            $this->name = $str;
        }
        function get_name()
        {
            return $this->name;
        }
        function __destruct()
        {
            echo " Student name : $this->name";
        }
    };
    class carList
    {
        private $name;

        function set_name($str)
        {
            $this->name = $str;
        }
        function get_name()
        {
            return $this->name;
        }
        function __destruct()
        {
            echo " Car name : $this->name";
        }
    }

    class ClassX extends carList
    {
        function __construct()
        {
            echo " Constructor ClassX <br>";
        }
    }
    $obj = new ClassX;
    $obj->set_name("Roles Royles");






    ?>
