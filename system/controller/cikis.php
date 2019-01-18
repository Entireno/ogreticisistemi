<?php

session_destroy();

?>
    <div>
        <span>Çıkış işlemi Başarılı ,giriş sayfasına yönlendiriliyorsunuz...</span>
    </div>
<?php
header('Refresh:2; url=index');
?>