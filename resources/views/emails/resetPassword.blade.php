<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Mot de passe oublié</h2>
    <p>Vous avez demandé la modification de votre mot de passe du site bde-saintonge.fr:</p>
    <ul>
      <li><strong>Nom</strong> : {{ $data->user->name }}</li>
      <li><strong>Nom de famille</strong> : {{ $data->user->lastname }}</li>
      <li><strong>Email</strong> : {{ $data->user->email }}</li>
      <li><strong>Mot de passe</strong> : {{ $data->newPassword }}</li>
    </ul>
  </body>
</html>