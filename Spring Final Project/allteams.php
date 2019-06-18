<!DOCTYPE HTML>

<head>
    <html>
    <title>NBA</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    </html>
</head>

<body>
    <nav class="navbar navbar-expand-md   navbar-light" style="background-color:rgba(212, 231, 239, 0.68);">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allteams.php">All Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="oldestTeam.php">Oldest Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recentTeams.php">Recent Founded Teams</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>

    <div class="content" style="margin-top: 20px">
        <h1 class="display-6" style="text-align:center; border: 2px solid DodgerBlue"><b>All Teams</b></h1>
        <hr>

    </div>


    <?php
        
        include 'confi/database.php';
        $query= "select * from nba_team order by id asc";
        $stmt= $con->prepare($query);
        $stmt->execute();
        
        $num=$stmt->rowCount();
        
        if ($num >0){
            
            echo "<table class='table table-hover table-bordered'>";
            
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Team Name</th>";
            echo "<th>Founded</th>";
            echo "</tr>";
            
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                echo "<tr>";
                echo "<td>{$id}</td>";
                echo "<td>{$team_name}</td>";
                echo "<td>{$founded}</td>";
                echo "</tr>";
            }
          
            echo "</table>";
        }else {
            echo "<div class= 'alert alert-danger'>No records found.</div>";
        }
       ?>
    <div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>

        <div class="footer">
            <p class="Contact">Created By : Michael Adu Darko<br><a href="mailto:adudarkomichael@gmail.com">adudarkomichael@gmail.com</a></p>

        </div>

        <style type="text/css">
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: rgba(198, 176, 146, 0.56);
                color: #5b8690;
                text-align: center;
                font-size: 95%;
                font-weight: bold;
            }

            body {
                background: none;
            }

            nav {
                font-size: 20px;
                text-shadow: 5px 5px 5px #d8c8Sc8;
                background-color: antiquewhite;
                font-family: Raleway;

            }


            h1 {

                color: #5ecb5a;
                background-color: #ffffff;
                font-family: 'Fredericka the Great', cursive;
                font-size: 40px;
                text-shadow: 5px 5px 5px #d8c8c8;
            }
        </style>
</body>