<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <title>Add eBook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
 
</head>
<body>
    <h1>Add eBook</h1>
    <form action="process_ebook.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required><br><br>

        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre" required><br><br>

        <label for="published_year">Published Year:</label>
        <input type="number" name="published_year" id="published_year" required><br><br>

        <label for="description">Content:</label><br>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea><br><br>

        <label for="file">Upload eBook (PDF):</label>
        <input type="file" name="file" id="file" accept=".pdf" required><br><br>

        <input type="submit" value="Add eBook">
    </form>
    <script>
ClassicEditor
    .create(document.querySelector("#description"))
    .catch(error => {
        console.error( error );
    } );
</script>
</body>
</html>
