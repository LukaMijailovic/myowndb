<?php
include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gastenboek</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="assets/master.css">
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Gastenboek</h2>
                    </div>
                    <p>Vul dit formulier in om uwzelf in te schrijven in het gastenboek.</p>
                    <form action="insert.php" method="post">
 
                        <div class="form-group">
                            <label>Voornaam</label>
                            <input type="voornaam" name="voornaam" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Tussenvoegsel</label>
                            <input type="tussenvoegsel" name="tussenvoegsel" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Achternaam</label>
                            <input type="achternaam" name="achternaam" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Telefoonnummer</label>
                            <input type="telefoonnummer" name="telefoonnummer" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Emailadres</label>
                            <input type="emailadres" name="emailadres" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Verstuur">
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <div class="boek">
    <h3>Ingeschreven gasten:</h3>
    <?php
            $sql = "SELECT id, voornaam, tussenvoegsel, achternaam, telefoonnummer, emailadres FROM gasten";
            $result = $conn->query($sql);
            if (!empty($result) && $result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

            echo "<div class='gastenboek'>";
            echo    "<div class='voornaam'>".$row["id"]."."." " .$row["voornaam"]." " .$row["tussenvoegsel"]." ".$row["achternaam"]."</div>";
            echo "</div>";
            }
        }
    ?>
    </div>
</body>
</html>