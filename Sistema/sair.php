<?php
setcookie("usuario", " ", time()-3000);
setcookie("senha", " ", time() - 3000);
unset($_COOKIE["nome"]);
unset($_COOKIE["senha"]);
header("Location: index.php");