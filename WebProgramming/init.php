 <?php 
 $servername = "localhost";
 $username = "root";
 $password = "mysql";

    $conn = new mySQLi($servername, $username, $password);

    if($conn ->connect_error)  {
        die("Connection failed" . $conn ->connect_error);

    }

    $sql = "CREATE DATABASE IF NOT EXISTS assignment8";
    
  

    if($conn ->query($sql) === false ){
        die("Error creating dataase:" . $conn ->error);
    }


    $conn ->select_db("assignment8");

    $sql = "CREATE TABLE IF NOT EXISTS `Items` (
        `id` INT(6) UNSIGNED AUTO_INCREMENT  PRIMARY KEY, 
        `name` VARCHAR(40),
        `type` VARCHAR(40),
        `make` VARCHAR(40),
        `model` VARCHAR(40),
        `brand` VARCHAR(40),
        `description` VARCHAR(60)
        ) AUTO_INCREMENT =100";


    if($conn ->query($sql) === false ) {
    die("Error creating table:" . $conn ->error);
    }

    $conn ->select_db("assignment8");
    $sqlrow = "SELECT * FROM Items";
    $rows = $conn ->query($sqlrow);   
     
    if($rows ->num_rows == 0) { 

      class Item{
        public $name = "";
        public $type = "";
        public $make = "";
        public $model = "";
        public $brand = "";
        public $desc = "";
      }
      $myfile = fopen("input.csv", "r");
      $counter = 0;
      $searchArray = array();

      while(!feof($myfile)) {
        $content = fgetcsv($myfile);        
       if(empty($content)||count($content)<=1) {           
      continue;
        }
        $searchArray[$counter] = array();
        $searchArray[$counter] = new Item();       
        $searchArray[$counter] -> Name = $content[1];
        $searchArray[$counter] -> Type = $content[2];
        $searchArray[$counter] -> Make = $content[3];
        $searchArray[$counter] -> Model = $content[4];
        $searchArray[$counter] -> Brand = $content[5];
        $searchArray[$counter] -> Desc = $content[6];        
        $counter++;
      }
      fclose($myfile);

      $add_user = $conn ->prepare("INSERT INTO Items (`name`, `type`, `make`, `model`, `brand`, `description`) VALUES (?,?,?,?,?,?)");
    
      $add_user ->bind_param("ssssss", $name, $type, $make, $model, $brand, $description);

        for ($y=1; $y<count($searchArray); $y++) {
            $name = $searchArray[$y] ->Name;
            $type = $searchArray[$y] ->Type;
            $make = $searchArray[$y] ->Make;
            $model = $searchArray[$y] ->Model;
            $brand = $searchArray[$y] ->Brand;
            $description = $searchArray[$y] ->Desc;
            $add_user ->execute();
            }
            $add_user ->close();
        }
?>

     
    
    