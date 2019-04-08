    @extends('template')
     
    @section('contenu')
        <form action="{{ url('users') }}" method="POST">
            {{ csrf_field() }}
            <label for="nom">Entrez votre nom : </label>
            <input type="text" name="nom" id="nom">
            <label for="nom">Entrez votre e-mail : </label>
            <input type="text" name="mail" id="mail">
            <label for="nom">Entrez votre mot de passe : </label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Envoyer !">
        </form>
    @endsection