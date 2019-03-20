# 76310-base-email
API 76310 de validation des noms de domaines email

- Version de l'API : V1

## Version PHP requise

PHP 5.5 et ultérieures

## Installation & Usage
### Composer (recommandé)

Pour une installation via [Composer](http://getcomposer.org/), ajouter les lignes suivantes à `composer.json`:

```
{
  "require": {
    "76310/76310-base-email": "^1.0"
  }
}
```

Puis exécuter `composer install`

### Installation manuelle (déconseillé)

Télécharger les fichiers et inclure les classes via l'auto-loader utilisé.
Attention à bien prendre en compte les extensions et classes supplémentaires (cf composer.json)

## Utilisation

Après installation et chargement des classes nécessaires

```php
<?php

// Initialiser la configuration
$config = \sat\BaseEmail\Configuration::getDefaultConfiguration();
$config->setApiKeyPrefix('Authorization', 'Bearer');
$config->setHost('url preprod ou prod');

// Récupérer un token d'identification et le passer à la configuration
$apiInstance = new \sat\BaseEmail\Api\AuthentificationApi(
    null, //utilisera le client HTTP par défaut (`GuzzleHttp\Client`), peut-être remplacé par une implémentation de `GuzzleHttp\ClientInterface`
    $config); 
$request = new \sat\BaseEmail\Model\TokenRequest(array('username' => 'votre login', 'password' => 'votre password'));
try {
    $result = $apiInstance->token($request);
    $config->setApiKey('Authorization', $result->getAccessToken());
} catch (\Exception $e) {
    echo 'Erreur: ', $e->getMessage(), PHP_EOL;
}

//appeler la méthode désirée, exemple : lister les domaines
$apiInstance = new \sat\BaseEmail\Api\DomainesApi(null, $config);
try
{
    $result = $apiInstance->listerDomaines();
    print_r($result);
} catch (\Exception $e) {
     echo 'Erreur: ', $e->getMessage(), PHP_EOL;
 }
?>
```

## Documentation

[Spécification OpenAPI](https://base-email.76310.fr:5000/Help)

## Auteurs

help@76310.fr


