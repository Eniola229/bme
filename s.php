<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usersearch = $_POST["usersearch"];
    
        try{
            require_once "includes/dbh.inc.php";
    
            $query = "SELECT * FROM userss WHERE username = :usersearch;";
    
            $stmt = $pdo->prepare($query);
    
            $stmt->bindParam(":usersearch", $usersearch);
    
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
            die("Query failed:" .$e->getMessage());
        }
    }
    else {
        header("Location: ../search.php.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bme-Search Result</title>
    <link rel="stylesheet" href="css/s.css"> 
</head>
<body>

    <div class="result">
       <div class="head-s">
       <form action="search.php" method="post">
            <button>Back</button>
        </form>
        <h2>Search Results</h2>
       </div>
   
    <?php

 if (empty($results)) {?>
   <?php
        echo "<div>";
        echo "<p>Opp's sorry search not found.</p>";
        echo "</div>";
        ?>
        <form action="search.php" method="post" class="gb ">
            <button>Go Back</button>
        </form>
        <?php
        }
    else{
       foreach ($results as $row) { ?> 
       <form action="" method="get" class="rrfound">
<?php
        echo "<div class='rfound'>";
            echo  "<h4>". htmlspecialchars($row["username"]). "</h4>";  
            echo  "<h2></h2>"; ?>
            <form action="" method="post">
                <button class="follow">follow</button>
            </form>
            <?php
            echo "<p>" .htmlspecialchars($row["email"]). "</p>";
            echo "<p>" .htmlspecialchars($row["skilss"]). "</p>";
            echo "<p>" .htmlspecialchars($row["hobbies"]). "</p>";
            echo "<p>" .htmlspecialchars($row["locations"]). "</p>";  
         echo "</div>";
       }
    }
    ?> 
    
    </div>
</form>
</body>
</html>