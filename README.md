# Gestion de prêt travaux 🏗️

## Sommaire du tutoriel

1. [Introduction & Utilisation rapide sans installation](#introduction--utilisation-rapide-sans-installation)
2. [Partie 0 - Préparation de l'environnement Docker](#partie-0--préparation-de-lenvironnement-docker)
3. [Partie 1 - Configuration initiale et authentification](#partie-1--configuration-initiale-et-authentification)
4. [Partie 2 - Implémentation du tableau interactif](#partie-2--implémentation-du-tableau-interactif)
5. [Partie 3 - Améliorations et tests](#partie-3--améliorations-et-tests)
6. [Bonus - Aller plus loin avec Symfony](#bonus---aller-plus-loin-avec-symfony)

---

# Gestion de prêt travaux 🏗️

Bienvenue sur l'application **Gestion de prêt travaux** !

Ce projet est un **tutoriel pour débutant** : il suffit de lire le fichier [`tablo.html`](./tablo.html) dans un navigateur pour voir le fonctionnement de base, sans aucune installation requise.  
Vous pouvez ensuite explorer le code Symfony pour aller plus loin (édition, sauvegarde en base, authentification...).

---

## Fonctionnalités principales

- 📝 **Ajout, édition et suppression** de lignes de dépenses (description et prix)
- 💰 **Calcul automatique** du montant restant sur le prêt
- 🔄 **Drag & drop** pour réorganiser les lignes du tableau
- 💾 **Sauvegarde automatique** des modifications (AJAX)
- ✨ **Interface moderne** et responsive (Bootstrap, Stimulus)
- 🔒 **Authentification Symfony** (accès sécurisé)
- 🗃️ **Données persistées** en base de données (Doctrine/SQLite)
- ⚡ **Performances** : tout se fait sans rechargement de page

---

## Pour commencer en 10 secondes

**Ouvrez simplement le fichier [`tablo.html`](./tablo.html) dans votre navigateur**  
Aucune installation, aucun serveur requis pour tester l'interface et comprendre le principe !

---

## Aperçu visuel

![Aperçu de l'application](screenshot.png)

---

## Utilisation

- **Ajouter une dépense** : cliquez sur ➕ ou le bouton "Ajouter"
- **Modifier** : éditez directement la description ou le prix
- **Supprimer** : cliquez sur ❌
- **Réorganiser** : faites glisser les lignes
- **Le total restant** s'affiche en temps réel

---

## Technologies utilisées

- Symfony 7 (PHP)
- Doctrine ORM (SQLite)
- StimulusJS
- Bootstrap 5
- AssetMapper
- Faker (fixtures)
- Flasher (messages flash)

---

## Auteur

- cadot.eu (<https://github.com/cadoteu>)

---

## Licence

Ce projet est open-source, faites-en bon usage !
