**Pour lancer le projet correctement :**
*Faire les commandes suivantes*
```bash
composer install
cp .env.exemple .env
```

*Modifier ensuite le .env pour utiliser la base de donné sur laquelle travailler.*
*Dernière étape :*
```bash
php artisan migrate --seed
```

*Le projet peut maintenant être lancer correctement.*