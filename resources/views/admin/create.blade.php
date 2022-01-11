<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Créer un article</h1>
    <form action="">
        <label for="name">Nom de l'article</label>
        <input type="text" name="name" id="name">
        <label for="slug">URL de l'article</label>
        <input type="text" name="slug" id=""slug></input>
        <label>Contenu de l'article</label>
        <textarea></textarea>
        <label>Nom du bureau</label>
        <select>
            @foreach($offices as $office)
                <option>{{$office->name}}</option>
            @endforeach
        </select>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
