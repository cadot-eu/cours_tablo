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

## Exemple de rendu final

```html
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Gestion de prêt travaux</title>
  <style>
    body { background-color: darkgray; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 1rem; }
    th, td { border: 1px solid #ccc; padding: 0.5rem; text-align: left; }
    th:nth-child(2), td:nth-child(2) { width: 0; }
    td { padding: 0;}
    tr:last-child td, tr td:last-child { padding: 0.5rem; }
    th:last-child, td:last-child { width: 0; }
    tr td:nth-child(2) { min-width: 90px; }
    tbody tr.dragging { opacity: 0.5; }
    .total { font-weight: bold; font-size: 1rem; text-align: right; }
    .row { cursor: grab; }
    input[type="text"] { width: 100%; box-sizing: border-box; height: 51px; background-color: darkgray; border: none; padding: 0 0.5rem; font-weight: bold; }
    input[type="number"] { width: 100px; height: 45px; background-color: darkgray; border: none; text-align: end; font-size: 16px; font-weight: bold; }
    .btn { padding: 0.5rem 1rem; color: white; border: none; border-radius: 5px; cursor: pointer; color: black; }
    .total-left { text-align: left; }
  </style>
</head>
<body>
  <h1>Suivi du prêt travaux (35 000€)</h1>
  <table id="table">
    <thead>
      <tr>
        <th>Description</th>
        <th>Prix (€)</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
  <!-- ...JS inclus dans le projet... -->
</body>
</html>
```

---

## Installation Symfony (optionnel, pour aller plus loin)

1. **Cloner le projet**  
   ```bash
   git clone <repo-url>
   cd cours
   ```

2. **Configurer l'environnement**  
   - Copier `.env` en `.env.local` et adapter si besoin.
   - Vérifier que `project-tablo/` et `.env.local` sont bien dans `.gitignore`.

3. **Lancer Docker et Symfony**  
   ```bash
   dc up -d
   dbash tablo
   composer install
   ```

4. **Créer la base et charger les fixtures**  
   ```bash
   sc d:s:c -f
   sc d:f:l -n
   ```

5. **Accéder à l'application**  
   - Ouvrir [http://localhost:8080/home](http://localhost:8080/home)

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

## Astuces

- Pour recompiler les assets automatiquement :  
  ```bash
  ./refresh.sh
  ```
- Pour voir les logs :  
  ```bash
  dlogs tablo
  ```
- Pour vider le cache Symfony :  
  ```bash
  sc cache:clear
  ```

---

## Auteur

- [Votre nom ou pseudo]
- Basé sur le guide de [buzut.net](https://buzut.net/cours/versioning-avec-git/bien-nommer-ses-commits)

---

## Licence

Ce projet est open-source, faites-en bon usage !

