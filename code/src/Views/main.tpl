<!DOCTYPE html>
<html>
    <head>
        <title>{{ title }}</title>
        {% block stylesheets %} <link rel="stylesheet" type="text/css" href="css/main.css" /> 
        {% endblock %}
    </head>
    <body>
        {% include content_template_name %}
        <date>{{ date }}</date>
    </body>
</html>