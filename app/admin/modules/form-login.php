<?php
/**
 * Created by PhpStorm.
 * User: mg
 * Date: 22.09.2014
 * Time: 02:00
 */
?>

<form>
    <fieldset>
        <legend>Benutzeranmeldung</legend>
        <label for="username">Benutzername</label>
        <input type="text" name="username" id="username">

        <label for="password">Passwort</label>
        <input type="password" name="password" id="password">

        <label for="remember-login">
            <input type="checkbox" name="remember-login" id="remember-login">
            Benutzerdaten speichern
        </label>
        <label for="stay-logged">
            <input type="checkbox" name="stay-logged" id="stay-logged">
            Angemeldet bleiben
        </label>

        <label for="login">Benutzerdaten absenden und einloggen</label>
        <input type="button" name="login" id="login" value="Anmelden">

    </fieldset>
</form>