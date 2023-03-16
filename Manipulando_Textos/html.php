<?php

$nome = 'cam" /> <script>alert("teste");</script>';
?>
<input type="text" name="<?php echo htmlspecialchars($nome); ?>" /> //htmlspecialchars — Converter caracteres especiais em entidades HTML