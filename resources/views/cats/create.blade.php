<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="{{route('cats.store')}}" method="post">
      @csrf
      @method('POST')
      
      <label for="title">Nome</label>
      <input type="text" name="name" placeholder="Nome">
      <label for="content">Etá</label>
      <input type="number" name="age" placeholder="Etá">
      <label for="content">Razza</label>
      <input type="text" name="race" placeholder="Razza">
      <label for="content">Colore</label>
      <input type="text" name="color" placeholder="Colore">
      <label for="content">Peso</label>
      <input type="text" name="weight" placeholder="Peso">
      <input type="submit" value="Invia">
    </form>
  </body>
</html>
