
<?php
define("ROOT", "./");

include_once ROOT . '/controllers/frontControllers/frontController.php';


class index
{
    private $frontController = null;
    public function __construct()
    {
        $this->frontController = new frontController();
    }

    public function start()
    {
        try
        {
            if(isset($_POST["action"]))
            {
                if($_POST["action"] == "test")
                {
                    echo "Hey";
                }
            }
            else
            {
                $this->frontController->home();
            }
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}


$ind = new index();
$ind->start();

