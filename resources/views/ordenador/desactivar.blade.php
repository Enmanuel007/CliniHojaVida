<?php 
    if(isset($_POST ['btnDesactivar']))
    
    $mensaje = $_POST ['desactivo'];
    
?>
<form action="desactivar.blade.php" method ="post" >
    <input type="text" name="desactivo" value ="<?php echo $mensaje ?>">
</form>