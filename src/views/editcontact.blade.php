<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Contact</title>
    
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Contact</h1>
        <form action="{{ route('contact.update', ['id' => $contact->id]) }}" method="post">
            @csrf
           

            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name Please" value="{{ $contact->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Your Valid Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Valid Email" value="{{ $contact->email }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
