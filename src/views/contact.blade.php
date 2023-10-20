<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Contacts</h1>
        <form action="{{ route('contact') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Add Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name Please" required>
            </div>
            <div class="form-group">
                <label for="email">Add Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Valid Email">
            </div>
            <!-- You can uncomment and use textarea if you have a message field -->
            <!-- <div class="form-group">
                <label for="message">Your Query</label>
                <textarea class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if (!empty($contacts))
        <table class="table table-bordered mt-4">
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <a href="{{ route('contact.edit', ['id' => $contact->id]) }}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('contact.destroy', ['id' => $contact->id]) }}" class="d-inline">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No contacts available.</p>
        @endif
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
