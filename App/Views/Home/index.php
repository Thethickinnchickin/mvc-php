<!DOCTYPE html>
<html>
    <head>
        <meta charset="UF-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Welcome</h1>
        <p>Hello {{ name }}</p>


        <ul>
            {% for colour in colours %}
                <li>{{ colour }}</li>
            {% endfor %}
        </ul>


    </body>    
</html>