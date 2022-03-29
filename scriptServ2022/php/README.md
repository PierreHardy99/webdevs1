# Eléments à ajouter au projet
## Login
Ajoutez un formulaire permettant de se connecter au site. Le formulaire comprendra, dans sa première version :
* Un champ pour l'identifiant (username)
* Un champ pour le mot de passe (password)
* Le bouton de validation
* Un lien vers le [formulaire d'enregistrement (signup)](#signup) pour les utilisateurs n'ayant pas de compte

### Evolutions
Les versions suivantes comprendront :
* Une redirection vers la page de profil lorsque l'utilisateur sera connecté (session)
* Un lien vers le [formulaire de récupération de mot de passe](#mot-de-passe-oublié)
* La validation des paramètres de connexion se fera via les données en base de données (pdo)

### Remarque techniques
* Le fichier contenant le formulaire sera form/f_login.php
* Le fichier cible de l'action du formulaire sera action/login.php
* La vue appelant le formulaire sera view/login.php
* Le formulaire utilisera la méthode POST
* L'identifiant et le mot de passe corrects devront correspondre à des valeurs de constantes présentes dans un fichier de configuration présent à la racine du projet : config.php

*Note : les données sensibles, comme les mots de passe présents dans des fichiers de configuration, ne doivent pas faire partie du git, car elles seront alors visibles par tous. Il est donc impératif d'ajouter le fichier config.php dans le .gitignore du projet*

## Signup
Ajoutez un formulaire permettant de créer un compte sur le site. Le formulaire comprendra, dans sa première version :
* Un champ texte obligatoire pour l'identifiant (username)
* Un champ obligatoire pour le mot de passe (password)
* Un champ obligatoire pour l'adresse e-mail
* Le bouton de validation
* Un lien vers le [formulaire de login](#login) pour les utilisateurs ayant déjà un compte

### Evolutions
Les versions suivantes comprendront :
* Une redirection vers la page de profil si l'utilisateur est déjà connecté (session)
* Ajouter une image de profil (file)
* Les données d'inscription de l'utilisateur seront stockées en base de données (pdo)

### Remarque techniques
* Le fichier contenant le formulaire sera form/f_signup.php
* Le fichier cible de l'action du formulaire sera action/signup.php
* La vue appelant le formulaire sera view/signup.php
* Le formulaire utilisera la méthode POST

## Profil
Ajoutez une page de profil. Elle affichera, dans sa première version :
* L'identifiant de l'utilisateur (récupéré en session)
* Une redirection vers la page d'accueil si l'utilisateur n'est pas connecté (session)

### Evolutions
Les versions suivantes comprendront :
* Afficher les informations de l'utilisateur depuis la base de données (pdo)
* Afficher l'image de profil utilisateur associée au compte (file + pdo)
* La possibilité de changer l'adresse e-mail et le mot de passe de l'utilisateur
* Les données de log de l'utilisateur (pdo)


## Déconnexion
Ajoutez un bouton permettant à un utilisateur de se déconnecter.

* Le bouton apparaîtra sur la page de login, à la place du formulaire de connexion, si l'utilisateur est déjà connecté (session)
* Lorsque la déconnexion sera effective, l'utilisateur sera redirigé vers une page, inclue dans le template, qui lui affichera "vous êtes déconnecté"

## Mot de passe oublié
Ajoutez un formulaire permettant à un utilisateur de récupérer son mot de passe. Le formulaire comprendra :
* Un champ pour l'adresse e-mail
* Le bouton de validation

### Remarque techniques
* Le formulaire utilisera la méthode POST
* Le formulaire enverra un e-mail avec le mot de passe à l'adresse renseignée dans le formulaire uniquement si l'adresse e-mail correspond à une adresse e-mail existante d'un utilisateur

*Note : Envoyer un mot de passe par e-mail n'est pas une bonne pratique. Dans le web actuel, une url à validité temporaire menant vers un formulaire de définition d'un nouveau mot de passe est la bonne pratique.*