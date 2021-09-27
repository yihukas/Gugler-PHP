<!doctype html>
<?php
session_start();
if(isset($_POST['br_enviar'])){
    $_SESSION['correo']=trim($_POST['correo']);
    $_SESSION['telefono']=trim($_POST['telefono']);
    $_SESSION['celular']=trim($_POST['celular']);
    $_SESSION['domicilio']=trim($_POST['domicilio']);
    $_SESSION['prov']=trim($_POST['prov']);
    $_SESSION['localidad']=trim($_POST['localidad']);
}
?>
    <?php include 'includes/cabecera.php'; ?>
    <body>
        <fieldset>
        <h2>Información Personal:</h2><br>
        <b>Nombre de usuario: </b><?php echo $_SESSION['usuario']; ?><br>
        <b>Contraseña: </b><?php echo $_SESSION['contrasena']; ?><br>
        <b>Apellido: </b><?php echo $_SESSION['apellido']; ?><br>
        <b>Nombre: </b><?php echo $_SESSION['nombre']; ?><br>
        <b>Tipo de Documento: </b><?php echo $_SESSION['doc']; ?><br>
        <b>Número de Documento: </b><?php echo $_SESSION['numdoc']; ?><br>
        <b>Sexo: </b><?php echo $_SESSION['sexo']; ?>
        <b>Nacionalidad: </b><?php echo $_SESSION['nacionalidad']; ?><br>
        </fieldset>
        <fieldset>
        <h2>Información de Contacto:</h2><br>
        <b>Correo Electronico: </b><?php echo $_SESSION['correo']; ?><br>
        <b>Telefono: </b><?php echo $_SESSION['telefono']; ?><br>
        <b>Celular: </b><?php echo $_SESSION['celular']; ?><br>
        <b>Domicilio: </b><?php echo $_SESSION['domicilio']; ?><br>
        <b>Provincia: </b><?php echo $_SESSION['prov']; ?><br>
        <b>Localidad: </b><?php echo $_SESSION['localidad']; ?><br>
        </fieldset>
        <br>
        <a href='paso2.php'>anterior</a>
        <a href='finalizar.php'>guardar</a>
    <?php include 'includes/pie.php'; ?>

