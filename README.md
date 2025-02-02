## Riassunto 
    Viene implementato un sistema di autenticazione basato su sessioni, senza l’uso di token, e include un middleware per registrare le richieste HTTP in ingresso. 
    Il sistema gestisce login, logout e accesso a una dashboard protetta.

    - Registrazione e Login con sessioni 
    - Protezione della dashboard con il middleware auth
    - Logout e gestione delle sessioni
    - Middleware LogRequestsMiddleware per registrare le richieste HTTP
    - Pagina di login e dashboard con Blade e Bootstrap

## Routes (routes/web.php)
    Definisce le rotte per login, logout e dashboard, oltre alla protezione con middleware

## Middleware per il Logging (LogRequestsMiddleware)
    Il middleware intercetta tutte le richieste in ingresso e le registra nei log di Laravel: app/Http/Middleware/LogRequestsMiddleware.php

## Controller di Autenticazione (AuthController)
    Gestisce il login, il logout e la registrazione degli utenti: app/Http/Controllers/AuthController.php

## Modello Utente (User.php)
    Il modello User rappresenta la tabella users nel database: app/Models/User.php       

## Viste Blade per il Frontend
     Pagina di Login (resources/views/auth/login.blade.php)
     Pagina della Dashboard (resources/views/dashboard.blade.php)

## Test con Laravel Tinker
     log delle richieste catturate dal middleware LogRequestsMiddleware vengono salvati nel file di log di Laravel, che si trova in: storage/logs/laravel.log





