<!doctype html>
<?php session_start()?>



    <?php include 'includes/cabecera.php'; ?>
    <body>
        <fieldset>
        <form action='paso2.php' method="POST">
            Nombre de usuario:<br>
            <?php if(!empty($_SESSION['usuario'])){
                echo "<input type='text' name='usuario' value=".$_SESSION['usuario']." required><br>";
            }else echo "<input type='text' name='usuario' required><br>";
            ?>
            Contraseña de usuario:<br>
            <?php if(!empty($_SESSION['contrasena'])){
                echo "<input type='password' name='contrasena' value=".$_SESSION['contrasena']." required><br>";
            }else echo "<input type='password' name='contrasena' required><br>";
            ?>
            Apellido:<br>
            <?php if(!empty($_SESSION['apellido'])){
                echo "<input type='text' name='apellido' value=".$_SESSION['apellido']." required><br>";
            }else echo "<input type='text' name='apellido' required><br>";
            ?>
            Nombre:<br>
            <?php if(!empty($_SESSION['nombre'])){
                echo "<input type='text' name='nombre' value=".$_SESSION['nombre']." required><br>";
            }else echo "<input type='text' name='nombre' required><br>";
            ?>
            Tipo de documento:<br>
            <?php if(!empty($_SESSION['doc']) && $_SESSION['doc']=='dni'){
                echo "<select name='doc'>";
                echo "<option value=".$_SESSION['doc'].">".strtoupper($_SESSION['doc'])."</option>";
                echo "<option value='lc'>LC</option>";
                echo "<option value='le'>LE</option>";
                echo "</select><br>";
            }elseif(!empty($_SESSION['doc']) && $_SESSION['doc']=='lc'){
                echo "<select name='doc'>";
                echo "<option value=".$_SESSION['doc'].">".strtoupper($_SESSION['doc'])."</option>";
                echo "<option value='lc'>DNI</option>";
                echo "<option value='le'>LE</option>";
                echo "</select><br>";
            }else{ ?>
            <select name='doc'>
                <option value='le'>LE</option>
                <option value='dni'>DNI</option>
                <option value='lc'>LC</option>
            </select><br>
            <?php } ?>
            Número de documento:<br>
            <?php if(!empty($_SESSION['numdoc'])){
                echo "<input type='text' name='numdoc' value=".$_SESSION['numdoc']." required><br>";
            }else echo "<input type='text' name='numdoc' required><br>";
            ?>
            Sexo:<br>
            <?php if(!empty($_SESSION['sexo']) && $_SESSION['sexo']=='femenino'){
            echo "Masculino<input type='radio' name='sexo' value='masculino'><br>";
            echo "Femenino<input type='radio' name='sexo' value='femenino' checked><br>";
            }else {
                echo "Masculino<input type='radio' name='sexo' value='masculino'checked><br>";
                echo "Femenino<input type='radio' name='sexo' value='femenino'><br>";
            }
            ?>
            Nacionalidad:<br>
            <?php if(!empty($_SESSION['nacionalidad'])){
                echo "<input type='text' name='nacionalidad' value=".$_SESSION['nacionalidad']." required><br>";
            }else echo "<input type='text' name='nacionalidad' required><br>";
            ?>
            <input type='submit' name='br_enviar' value='siguiente'>
        </form>
        </fieldset>
    <?php include 'includes/pie.php'; ?>



