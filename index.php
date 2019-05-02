<html>
<head>
    <title>Webslesson Tutorial</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>

        .box
        {
            width:750px;
            padding:20px;
            background-color:#fff;
            border:1px solid #ccc;
            border-radius:5px;
            margin-top:100px;
        }
    </style>
</head>
<body>
<div class="container box">
    <h3 align="center">LULZ</h3><br />
    <?php
    $query = '';
    $table_data = '';
    $filename = "programacao-sesc-sao-paulo.json";
    $data = file_get_contents($filename); //Read the JSON file in PHP
    $array = json_decode($data, true); //Convert JSON String into PHP Array
    foreach($array as $row) //Extract the Array Values by using Foreach Loop
    {
        $query .= "INSERT INTO tabela(text) VALUES ('".$row["text"]."'); ";  // Make Multiple Insert Query
    }

    echo $query;
    // (mysqli_multi_query($connect, $query)) // Rodar varios sql ao mesmo tempo

    ?>
    <br />
</div>
</body>
</html>
