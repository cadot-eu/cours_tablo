# 🧪 Scripts de Test du Tutoriel Symfony

Ce répertoire contient des scripts automatisés pour tester et valider le tutoriel Symfony.

## 📁 Fichiers

| Fichier | Description |
|---------|-------------|
| `tablo.html` | Tutoriel principal Symfony 7.3 |
| `styles.css` | Styles CSS du tutoriel |
| `tuto` | **Script principal** - Interface unifiée |
| `test-tutorial.sh` | Script de test automatique complet |
| `watch-tutorial.sh` | Surveillance des modifications |
| `docker/` | Configuration Docker pour le tutoriel |

## 🚀 Utilisation rapide

```bash
# Tester le tutoriel une fois
./tuto test

# Surveiller les modifications (recommandé pendant le développement)
./tuto watch

# Surveiller et tester automatiquement à chaque modification
./tuto watch-auto
```

## 🔧 Détails des scripts

### `tuto` - Interface principale
Script utilitaire qui simplifie l'utilisation des autres scripts.

```bash
./tuto help          # Affiche l'aide
./tuto test          # Lance un test complet
./tuto watch         # Surveille les modifications
./tuto watch-auto    # Surveille + test automatique
```

### `test-tutorial.sh` - Test automatique
Crée un environnement temporaire et teste toutes les étapes du tutoriel :

- ✅ Création projet Symfony 7.3
- ✅ Configuration Docker
- ✅ Installation des outils de développement
- ✅ Vérification de la structure
- ✅ Test de l'accès web
- ✅ Génération d'un rapport détaillé

### `watch-tutorial.sh` - Surveillance
Surveille `tablo.html` et met à jour automatiquement le script de test quand le tutoriel change.

## 📊 Rapport de test

Chaque test génère un rapport Markdown avec :
- ✅ Statut de chaque étape
- 🔧 Commandes utiles
- 📝 Notes et recommandations
- 🌐 URLs de test

## 🛠️ Configuration requise

- **Symfony CLI** : `symfony` command disponible
- **Docker & Docker Compose** : Pour l'environnement de test
- **curl** : Pour tester l'accès web
- **bash** : Shell par défaut

### Installation des prérequis (Ubuntu/Debian)

```bash
# Symfony CLI
curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
sudo apt install symfony-cli

# Docker
sudo apt install docker.io docker-compose

# Outils système
sudo apt install curl inotify-tools
```

## 💡 Conseils d'utilisation

### Pour le développement du tutoriel
```bash
# Lancer la surveillance en arrière-plan
./tuto watch &

# Continuer à éditer tablo.html
# Les mises à jour du test se font automatiquement
```

### Pour valider le tutoriel
```bash
# Test unique (recommandé avant publication)
./tuto test

# Le script crée un environnement temporaire
# et teste toutes les étapes du tutoriel
```

### Exemple de workflow
```bash
# 1. Éditer le tutoriel
vim tablo.html

# 2. Lancer la surveillance (terminal 1)
./tuto watch-auto

# 3. Voir les résultats en temps réel
# Chaque sauvegarde déclenche un test automatique
```

## 🐛 Dépannage

### Le test échoue
1. Vérifier que Docker fonctionne : `docker ps`
2. Vérifier que Symfony CLI est installé : `symfony version`
3. Consulter les logs : `cat /tmp/symfony-test-*/test-report.md`

### La surveillance ne fonctionne pas
1. Installer inotify-tools : `sudo apt install inotify-tools`
2. Vérifier les permissions : `ls -la watch-tutorial.sh`
3. Lancer en mode debug : `bash -x ./tuto watch`

### Port 8080 occupé
Le script utilise le port 8080. Si occupé :
```bash
# Trouver le processus
sudo lsof -i :8080

# Ou modifier le port dans docker-compose.yml
```

## 🔄 Intégration continue

Ces scripts peuvent être intégrés dans un pipeline CI/CD :

```yaml
# .github/workflows/test-tutorial.yml
name: Test Tutorial
on: [push, pull_request]
jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      - name: Test Tutorial
        run: ./tuto test
```

---

*Scripts créés pour valider automatiquement le tutoriel Symfony 7.3*
# cours_tablo
