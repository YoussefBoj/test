
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ADDuser</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    html{
    scroll-behavior: smooth;
    }
    body{
    /* background-image: url(); */
    background-attachment: fixed;
    }
    </style>
</head>
<body>
    <div class="mx-auto m-5 p-2" style="width: 350px;">
        <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
            <h1>Create User</h1>
            <form action="{{ route('employe.store') }}" method="POST">
            @csrf
            <div>
                <label for="nom">nom:</label>
                <input type="text" id="nom" name="nom" placeholder="Entrer le nom" required>
            </div>
            <div>
                <label for="prénom">prénom:</label>
                <input type="text" id="prénom" name="prénom" placeholder="Entrer le prénom" required>
            </div>
            <div>
                <label for="age">age</label>
                <input type="int" id="age" name="age" placeholder="Entrer l'age" required>
            </div>
            <label for="username">username:</label>
            <input type="text" id="username" name="username" placeholder="Entrer le username" required>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Create</button>
        </form>
        <a href="{{ route('employe.index') }}">Back to User List</a>

        </div>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
