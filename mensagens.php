<?php
require_once 'config.php';

$senhaSecreta = "123";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $senhadigitada = $_POST['senha'];

    if($senhadigitada === $senhaSecreta){
        $sql =  "SELECT * FROM mensagens";
        $result = $conn->query($sql);
    }else{
        echo "Senha Incorreta!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ver mensagens</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <a href="#home" class="logo"
        >Bruno
        <span>Lisboa</span>
      </a>

<form method="post">
        
        <div class="input-group-2">
          <input type="password" name="senha" placeholder="Digite sua senha" required>
          <input type="submit" value="confirmar" class="btn" />
        </div>
      </form> 

      <div class="mensagens">

<?php if(isset($result) && $result->num_rows >0) : ?>
    <h2>Mensagens</h2>

    <ul>
        <?php while($row = $result->fetch_assoc()) :?>
            <li>
                <strong>Nome: </strong> <?php echo $row["nome"]; ?><br>
                <strong>Email: </strong> <?php echo $row["email"]; ?><br>
                <strong>Telefone: </strong> <?php echo $row["telefone"]; ?><br>
                <strong>Assunto: </strong> <?php echo $row["assunto"]; ?><br>
                <strong>Mensagem: </strong> <?php echo $row["mensagem"]; ?><br>
                <strong>Data e Hora: </strong> <?php echo $row["data"]. " às ".$row["hora"]; ?><br> <br>
            </li>
            <?php endwhile; ?>
    </ul>
    <?php else : ?>
        <p>Nenhuma mensagem encontrada. </p>
        <?php endif; ?>
        </div>

</body> 

</html>