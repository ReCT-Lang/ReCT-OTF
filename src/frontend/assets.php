
<?php
function asset($url){
    $file_path = "/assets/".$url;
    return $file_path;
}
?>


<script defer href="<?= asset("js/index.js") ?>"></script>
<link rel="stylesheet" href="<?= asset("css/styles.css") ?>">
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">