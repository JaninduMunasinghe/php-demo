<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional: Custom CSS styles -->
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Create a Product</h1>
        <div class="form-container">
            <form method="post" action="{{route('product.store')}}">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter quantity" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter product description" rows="3" required></textarea>
                </div>
                <div class="text-right">
                    <input type="submit" class="btn btn-success" value="Save New Product">
                </div>
            </form>
        </div>
    </div>

    <!-- Optional: Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
