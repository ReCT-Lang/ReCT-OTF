<!DOCTYPE html>
<html>
<body>

<h1>Rect Playground</h1>

<p>Paste or upload a file</p>

<form action="index.php" method="post">
    <input type="file" id="file" name="file"/>
    <label>
        <textarea id="code" name="code" rows="50" cols="100">
            <?php
                echo $_POST["file"];
            ?>
        </textarea>
    </label>
    <button type="submit">Execute</button>
</form>

</body>
</html>