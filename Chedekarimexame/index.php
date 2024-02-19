<!DOCTYPE html>
<html>
<head>
    <title>Links dos Posts</title>
</head>
<body>

    <?php
  
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'ujc_forum';

    try {
        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
        $sql = 'SELECT * FROM post';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $postId = $row['id'];
                $titulo = $row['titulo'];
                $link = 'post.php?id=' . $postId;

                echo '<h2><a href="' . $link . '">' . $titulo . '</a></h2>';
                echo '<p><strong>Categoria:</strong> ' . $row['categoria'] . '</p>';
                echo '<p><strong>Autor:</strong> ' . $row['utilizador'] . '</p>';
                echo '<hr>';
            }
        } else {
            echo '<p>Nenhum post encontrado.</p>';
        }
    } catch (PDOException $e) {
        echo 'Falha na conexão: ' . $e->getMessage();
    }

    
    $conn = null;
    ?>

</body>
</html>
