<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php pdo intro</title>
    
<link rel="stylesheet" href="css/style.css">
    </head>
    <body>
   
    <span class="border"><br>
            <?php 
          echo  '<img class="crow" src="/images/Elegant-Crow-Logo-MockUp-1.jpg" alt="">';
         
            echo '<a href="indexChris.php">Chris Proyect</a>';
            ?>
        </span>
   
        
        <?php   
        

        define('DB_NAME', getenv('DB_NAME'));
        define('DB_USER', getenv('DB_USER'));
        define('DB_PASSWORD', getenv('DB_PASSWORD'));
        define('DB_HOST', getenv('DB_HOST'));

        $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);


       //Trace the name of all available 08 tables.
       //Build the query object (support object, has NO data yet).

        
       $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
        
       
       //Here we go for the goods: Fetch all table names
       $tables     = $query->fetchAll(PDO::FETCH_COLUMN); //Get indexed array of table names.

       

        if (empty($tables)) { //when $tables is empty
            echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
        } else {
            //$tables is available: list the names of the tables of my DB.
            echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
            echo '<ul class="center">';

            foreach ($tables as $table) {
            echo "<li>{$table}</li>"; //use ($blablabla) placeholder.
            
            }

            echo '</ul>';
           

        }
    
      
        print "<h1>Example with FETCH_ASSOC</h1>";


        $query  = $connection->query("SELECT * from Questions");
      

        $questions = $query->fetchAll(PDO::FETCH_ASSOC);
       

        foreach($questions as $question) {
            

            $subQuery  = $connection->prepare("SELECT * from Answers where Answers.questionID = ?");

            //Replace the first ? whit the value of $question['id'].
            $subQuery->bindValue(1, $question['id']);

    // now execute .....

            $subQuery->execute(); 

            // ... and fetch all answer items for $question ['id]
           // and format them as an associative array.

            $answers = $subQuery->fetchAll(PDO::FETCH_ASSOC);
            $question['answers'] = $answers;
            print "<pre/>";            
            print_r($question);
            
            //print_r($question['answers'][0]);
        }    

        print "<h1>Example with FETCH_NUM</h1>";

        $query  = $connection->query("SELECT * from Questions");
        $questions = $query->fetchAll(PDO::FETCH_NUM);
        foreach($questions as $question) {
            print "<pre/>";            
            print_r($question);
        }    

        // print "<h1>Example with FETCH_BOTH</h1>";

        // $query  = $connection->query("SELECT * from Questions");
        // $questions = $query->fetchAll(PDO::FETCH_BOTH);
        // foreach($questions as $question) {
        //     print "<pre/>";            
        //     print_r($question);
        // }            

          ?>
    </body>
</html>
