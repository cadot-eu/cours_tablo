while true; do
    # Surveiller tout sauf les dossiers système
    inotifywait -e modify,create,delete -r . --exclude='\.git|var|vendor|node_modules'
    echo "Changement détecté à $(date)"
    sleep 1
    docker exec -it tablo php bin/console cache:clear
    docker exec -it tablo php bin/console asset-map:compile
    echo "Assets recompilés"
    sleep 1
done
    sleep 1
done
