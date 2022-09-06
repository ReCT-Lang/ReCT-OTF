
<?php
function asset($url){
    $file_path = "/assets/".$url;
    return $file_path;
}
?>

<link rel="stylesheet" href="<?= asset("styles.css") ?>">
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">