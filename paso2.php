<!doctype html>
<?php
session_start();
if(isset($_POST['br_enviar'])){
    $_SESSION['usuario']=trim($_POST['usuario']);
    $_SESSION['contrasena']=trim($_POST['contrasena']);
    $_SESSION['apellido']=trim($_POST['apellido']);
    $_SESSION['nombre']=trim($_POST['nombre']);
    $_SESSION['doc']=trim($_POST['doc']);
    $_SESSION['numdoc']=trim($_POST['numdoc']);
    $_SESSION['sexo']=trim($_POST['sexo']);
    $_SESSION['nacionalidad']=trim($_POST['nacionalidad']);
}
?>
    <?php include 'includes/cabecera.php'; ?>
    <body>
        <fieldset>
        <form action='paso3.php' method='POST'>
            Correo electrónico:<br>
            <?php if(!empty($_SESSION['correo'])){
                echo "<input type='email' name='correo' value=".$_SESSION['correo']." required><br>";
            }else echo "<input type='email' name='correo' required><br>";
            ?>
            Teléfono:<br>
            <?php if(!empty($_SESSION['telefono'])){
                echo "<input type='text' name='telefono' value=".$_SESSION['telefono']." required><br>";
            }else echo "<input type='text' name='telefono' required><br>";
            ?>
            Celular:<br>
            <?php if(!empty($_SESSION['celular'])){
                echo "<input type='text' name='celular' value=".$_SESSION['celular']." required><br>";
            }else echo "<input type='text' name='celular' required><br>";
            ?>
            Domicilio:<br>
            <?php if(!empty($_SESSION['domicilio'])){
                echo "<input type='text' name='domicilio' value=".$_SESSION['domicilio']." required><br>";
            }else echo "<input type='text' name='domicilio' required><br>";
            ?>
            Provincia:<br>
            <?php if(!empty($_SESSION['prov']) && $_SESSION['prov']=='entre rios'){
                echo "<select name='prov'>";
                echo "<option value=".$_SESSION['prov'].">".ucfirst($_SESSION['prov'])."</option>";
                echo "<option value='santa fe'>Santa fe</option>";
                echo "<option value='cordoba'>Cordoba</option>";
                echo "<option value='mendoza'>Mendoza</option>";
                echo "</select><br>";
            }else if(!empty($_SESSION['prov']) && $_SESSION['prov']=='santa fe'){
                echo "<select name='prov'>";
                echo "<option value=".$_SESSION['prov'].">".ucfirst($_SESSION['prov'])."</option>";
                echo "<option value='entre rios'>Entre rios</option>";
                echo "<option value='cordoba'>Cordoba</option>";
                echo "<option value='mendoza'>Mendoza</option>";
                echo "</select><br>";
            }else if(!empty($_SESSION['prov']) && $_SESSION['prov']=='cordoba'){
                echo "<select name='prov'>";
                echo "<option value=".$_SESSION['prov'].">".ucfirst($_SESSION['prov'])."</option>";
                echo "<option value='santa fe'>Santa fe</option>";
                echo "<option value='entre rios'>Entre rios</option>";
                echo "<option value='mendoza'>Mendoza</option>";
                echo "</select><br>";
            } else {
                echo "<select name='prov'>";
                echo "<option value='entre rios'>Entre rios</option>";
                echo "<option value='santa fe'>Santa fe</option>";
                echo "<option value='cordoba'>Cordoba</option>";
                echo "<option value='entre rios'>Entre rios</option>";
                echo "</select><br>";
            }
            ?>
            Localidad:<br>
            <?php if(!empty($_SESSION['localidad'])){
                echo "<input type='text' name='localidad' value=".$_SESSION['localidad']." required><br>";
            }else echo "<input type='text' name='localidad' required><br>";
            ?>
            <input type='submit' name='br_enviar' value='siguiente'>
        </form>
        </fieldset>
        <a href="paso1.php">anterior</a>
    <?php include 'includes/pie.php'; ?>
