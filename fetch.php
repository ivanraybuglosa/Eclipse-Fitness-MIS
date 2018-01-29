<?php
    if($_GET['keyword'] && !empty($_GET['keyword']))
    {
        $conn = mysqli_connect('localhost','root','','eclipse_db'); //Connection to my database
        $keyword = $_GET['keyword'];
        $keyword="%$keyword%";
        $query = "SELECT CLIENT_FirstName from client where CLIENT_FirstName like ?";
        $statement = $conn->prepare($query);
        $statement->bind_param('s',$keyword);
        $statement->execute();
        $statement->store_result();
        if($statement->num_rows() == 0) // so if we have 0 records acc. to keyword display no records found
        {
            echo '<div id="item">Ah snap...! No results found :/</div>';
            $statement->close();
            $conn->close();
 
        }
        else {
            $statement->bind_result($name);
            while ($statement->fetch()) //outputs the records
            {
                echo "<div id='item'>$name</div>";
            };
            $statement->close();
            $conn->close();
        };
    };
?> 