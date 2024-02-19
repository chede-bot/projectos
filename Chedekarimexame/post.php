<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Post</title>
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

        
        if (isset($_GET['id'])) {
            $postId = $_GET['id'];

            
            $sql = 'SELECT * FROM post WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $postId);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

               
                echo '<h1>' . $row['titulo'] . '</h1>';
                echo '<p><strong>Categoria:</strong> ' . $row['categoria'] . '</p>';
                echo '<p><strong>Autor:</strong> ' . $row['utilizador'] . '</p>';
                echo '<p>' . $row['texto'] . '</p>';
                echo '<hr>';

                // os comentários do post
                $sqlComentarios = 'SELECT * FROM comentarios WHERE post = :post AND aprovado = "sim"';
                $stmtComentarios = $conn->prepare($sqlComentarios);
                $stmtComentarios->bindParam(':post', $postId);
                $stmtComentarios->execute();

                if ($stmtComentarios->rowCount() > 0) {
                    echo '<h2>Comentários</h2>';
                    while ($rowComentario = $stmtComentarios->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div>';
                        echo '<strong>Autor:</strong> ' . $rowComentario['utilizador'] . '<br>';
                        echo '<strong>Comentário:</strong> ' . $rowComentario['comentario'];

                        // as respostas aos comentários
                        $sqlRespostas = 'SELECT * FROM comentarios WHERE resposta = :comentarioId AND aprovado = "sim"';
                        $stmtRespostas = $conn->prepare($sqlRespostas);
                        $stmtRespostas->bindParam(':comentarioId', $rowComentario['id']);
                        $stmtRespostas->execute();

                 
                        if ($stmtRespostas->rowCount() > 0) {
                            while ($rowResposta = $stmtRespostas->fetch(PDO::FETCH_ASSOC)) {
                                echo '<div style="margin-left: 20px;">';
                                echo '<strong>Autor da Resposta:</strong> ' . $rowResposta['utilizador'] . '<br>';
                                echo '<strong>Resposta:</strong> ' . $rowResposta['comentario'];
                                echo '</div>';
                            }
                        }

                        echo '</div>';
                        echo '<hr>';
                    }
                } else {
                    echo '<p>Nenhum comentário.</p>';
                }
            } else {
                echo '<h1>Post não encontrado.</h1>';
            }
        } else {
            echo '<h1>Post não encontrado.</h1>';
        }
    } catch (PDOException $e) {
        echo 'Falha na conexão: ' . $e->getMessage();
    }

    // Fechar a conexão com a base de dados
    $conn = null;
    ?>
</body>
</html>
