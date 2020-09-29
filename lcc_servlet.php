<?php

#retrieve data
$fertilizer = (int)$_REQUEST["f"];
$seed = (int)$_REQUEST["s"];
$lab = (int)$_REQUEST["l"];
$irr = (int)$_REQUEST["r"];
$plc = (int)$_REQUEST["p"];
$prod = (int)$_REQUEST["pr"];
$market = 0;

#connect to db
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

#connect via ooa
$conn = new mysqli($servername, $username, $password, $dbname);

#error handling
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
#sql stat
$sql = ('SELECT modal_price FROM price WHERE id = '.$prod);

#check for success
if ($conn->query($sql) === TRUE) 
{
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $market = (int)$row["modal_price"];
        }
    }
    else
    {
        echo "Item not found";
    }   
} 
else 
{
    echo "Error in Query. Not Found";
}
#conn closed
$conn->close();

#start main lcc
if($market>0)
{
    $lcc_cost = (($fertilizer + $seed + $lab + $irr + $plc)/$prod);
    if($lcc_cost>$market)
    {
        echo "Your Expected Selling Price is ".$lcc_cost;
    }
    else if($market <= (0.5*$lcc_cost))
    {
        echo "Maximum Possible Selling Price ".(0.75*$market);
    }
    else
    {
        echo "Maximum Market Price ".$market;
    }
}

?>