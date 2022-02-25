<!-- Parte da Sessão e tratamento de Erros -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Registrar</title>
</head>
<body>
    <?php 
    include_once '../navBar/navbar.php';
    ?>
    <h1 class="text-center">Register</h1>

    	

    <div class="container"> 
        <!-- Vamos enviar e dps receber com erros ou n -->
    <form action="./ReceiveRegister.php" method="GET">
       
        <div class="mb-3">
            <label class="form-label">Insert Your Name:</label>
            <input type="text" class="form-control" placeholder="Digite seu Nome..." name=""> 
        </div>
      
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="<?php  ?>" >
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="pass">
        </div>
        
        <div class="md-3">
            <label class="form-label">Your Age:</label>
            <input type="number" class="form-control" name="age">
        </div>

        <div class="mb-3 form-check">
            
            <input type="checkbox" class="form-check-input" name="mycheck" value="true">
            <label class="form-check-label" >privacy policy</label>
        </div>
        <input type="hidden" name="onClick" value=""> 
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>  
</body>
</html>