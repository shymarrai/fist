<script type="text/javascript">
    window.location.href = "../index.php";
</script>
<?php
    if(isset($_SESSION['cliente'])){
  
    session_destroy();

    exit(); 
}
?>