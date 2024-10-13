

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Input Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            padding-top: 30px;
            margin-bottom: 30px;
            color: #343a40;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            color:black;
        }

        .form-control {
            border-radius: 20px;
            padding: 15px;
        }

        .btn-primary {
            border-radius: 20px;
            padding: 15px 40px;
            font-size: 18px;
            letter-spacing: 1px;
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .table-container {
            margin-top: 50px;
            background-color: #ffffff;
        }

        table {
    width: 100%;
    color: #343a40; /* Warna teks utama */
    border-collapse: collapse;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
    color: #343a40; /* Warna teks di dalam sel */
}

th {
    background-color: #343a40;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 1px;
}

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .delete-link {
        color: #fff;
        background-color: #dc3545;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
        display: inline-block;
    }

    .delete-link:hover {
        background-color: orange;
    }
    </style>
</head>
<body>
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary"
      style="background-color: #333"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="">
          <img src="../source/logo.png" alt="logo" height="45" />
        </a>    
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

<div class="container">
        <h2>Product Input Form</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="product_name">Product Name:</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Picture URL:</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    <br>
</body>
</html>
