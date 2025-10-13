<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join The Cause!</title>
</head>

<body>


    <main>
        <section id="registerSection">
            <h1>Join The Cause!</h1>
            <form action="/register" method="POST">

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit">Register</button>
            </form>
        </section>
</body>

</html>