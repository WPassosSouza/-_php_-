<!DOCTYPE html>
<html>
<head>
    <title> INSERT | CLIENTE </title>
</head>
<body>
    <?php
        
        require_once '../conexao/conexao.php'; 
    
        if(isset($_POST['Inserir'])){
            
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            
            try {
                
                $insercao = "INSERT INTO cliente (nome,cpf,telefone,email,cidade,bairro,rua,numero)
                VALUES (:nome,:cpf,:telefone,:email,:cidade,:bairro,:rua,:numero)";
                $insere_dados = $conexao->prepare($insercao);
                $insere_dados->bindValue(':nome',$nome);
                $insere_dados->bindValue(':cpf',$cpf);
                $insere_dados->bindValue(':telefone',$telefone);
                $insere_dados->bindValue(':email',$email);
                $insere_dados->bindValue(':cidade',$cidade);
                $insere_dados->bindValue(':bairro',$bairro);
                $insere_dados->bindValue(':rua',$rua);
                $insere_dados->bindValue(':numero',$numero);
                $insere_dados->execute();

                header('Location: ../crud/form_insert_cliente.php');

            } catch (PDOException $falha_insercao) {
                echo "A inserção não foi feita".$falha_insercao->getMessage();
                die;
            } catch (Exception $falha) {
                echo "Erro não característico do PDO".$falha->getMessage();
                die;
            }
        }       
    ?>
</body>
</html>