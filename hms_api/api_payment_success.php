<?php
session_start();


$_SESSION['payment_response'] = json_encode($_GET);;
?>
<script>
    var doc = window.opener.document,
        theForm = doc.getElementById("finalConfirmation");

    theForm.submit();

    window.close();
</script>