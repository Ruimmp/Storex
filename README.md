# Storex
## Introduction
- Storex est un site web d'annonces dans lequel ou peut créer un compte, se connecter, voir des annonces publiés par d'utilisateurs, mettre des annonces en vente et quelques autres paramètres.
- Les annonces ont des images génériques pour chaque activité et le site sera enregistré dans une base de données MYSQL.
- Le projet est refait depuis le zéro avec un template de page d'accueil.

## Objectifs
- L'objectif du projet est de pouvoir naviguer sur un site web d'annonces avec un compte, contacter d'autres utilisateurs pour l'annonce choisie donc, pour un compte sera nécessaire et pourra être créé en remplissant un formulaire.
- Les informations du formulaire seront inscrites dans la base de données
- Avec le compte, ou pourra créer des annonces pour vendre un article.

## Planification de projet
- [X] Sprint 1
  - [X] Modifier le template de page d'accueil
  - [X] Création d'un footer
  - [X] Création de la page d'inscription
  - [X] Création de la page de connexion
- [ ] Sprint 2
  - [X] Création de la base de données (MCD, MLD, Script)
  - [X] Organisation du projet sur IceScrum
  - [ ] Wireframe et Zoning
- [X] Sprint 3
  - [X] Création des pages:
    - [X] Enregistrement
    - [X] Connexion
  - [X] Création des fonctions pour l'inscription
  - [X] Création des fonctions pour la connexion
- [ ] Sprint 4
  - [x] Création des pages:
    - [x] Annonces
    - [ ] Modification d'annonces
  - [x] Création des fonctions pour la publication d'annonces
- [ ] Sprint 5
  - [ ] Création des pages:
    - [x] Détails d'annonces
    - [ ] Profil
    - [ ] Modification de profil
  - [ ] Création des fonctions pour la modifications d'annonces
- [ ] Sprint 6
  - [x] Création des fonctions pour supprimer des annonces
  - [ ] Création des fonctions pour la modification de profil
- [ ] Sprint 7
- [ ] Sprint 8

## Testes
| Membre  | Date | Teste | Application | Évaluation |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| Exemple: Monteiro Rui  | Exemple: 11/05/2022  | Exemple: Register | Exemple: Google Chrome/FireFox/Edge/Opera | ❌ ou ✔️ |
| Monteiro Rui  | 12/06/2022  | Register | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
| Monteiro Rui  | 12/06/2022  | Login | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
| Monteiro Rui  | 12/06/2022  | Affichage des annonces | Google Chrome/FireFox/Opera/Brave | ✔️ |
| Monteiro Rui  | 12/06/2022  | Création d'annonces | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
| Monteiro Rui  | 18/06/2022  | Détails d'une annonce | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
| Monteiro Rui  | 18/06/2022  | Effacement d'une annonce | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
| Monteiro Rui  | 18/06/2022  | Annonces Admin | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
| Monteiro Rui  | 18/06/2022  | Contacter l'annonceur | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
| Monteiro Rui  | 18/06/2022  | Utilisateurs Admin | Google Chrome/FireFox/Edge/Opera/Brave | ✔️ |
|  |  | Modification d'annonces |  |  |
|  |  | Modification d'utilisateur |  |  |



## Matériel necessaire
- Pour l'instalation de ce projet dans votre environement vous allez avoir besoin de:
  - Un PC avec windows
  - PHPStorm + Interpréteur 
  - MYSQL Workbench

## Installation
- Télécharger le fichier [ici](https://github.com/Ruimmp/Storex/archive/refs/heads/main.zip)
- Décompressez le fichier
- Executez le fichier dans PHPStorm
- Créez le server local dans PHPStorm
- Créez la base de données local
- Have fun!

### Connexion à la data base en localhost

#### Création de la data base
- Dans un premier temps il faut executer le script se trouvant [ici](https://github.com/Ruimmp/Storex/blob/main/src/SQL/CreateDataBase.sql)

#### Configuration du fichier pour la connexion
- Pour ce connecter à la data base en local, il vous faut modifier le fichier de connexion, celui-[ci](https://github.com/Ruimmp/Storex/blob/main/src/Model/dbConnector.php) dans le projet que vous avez téléchargé

- Dans la fonction `openDBConnexion.php`, modifiez ces parties du code par raport a ce que vou avez chez vous:
```
    $dbName = 'storex';
    $userName = 'NOM DE L'UTILISATEUR AVEC TOUTES LES PERMISSIONS DANS LA BASE DE DONNÉS';
    $userPwd = 'MOT DE PASSE DE VOTRE UTILISATEUR';
```

> Storex 2022 © Tous les droits réservés
