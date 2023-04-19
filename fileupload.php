<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="uploadmanager.php" method="POST" enctype="multipart/form-data">
            <h2>Upload File</h2>
            <label for="fileselect">File</label>
            <input type="file" name="photo" id="fileselect">

            <input type="submit" name="submit" value="Upload">
            <p><strong>Note: <br> Only .jpg,.jpeg and .png formates allowed to a max size of 5 MB.</strong></p>
        </form>
    </body>
</html>