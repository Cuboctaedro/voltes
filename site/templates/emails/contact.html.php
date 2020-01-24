<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Contact form message</title>
    </head>
  <body class="">

<h1>Νέο Μήνυμα:</h1>

<p>Ονομα: <?= $data['name']; ?></p>

----
<p>Επίθετο: <?= $data['lastname']; ?></p>

----
<p>Email: <?= $data['email']; ?></p>

----
<p>Μήνυμα: <?=  $data['message']; ?></p>

</body>
</html>
