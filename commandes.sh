cd ~ && git clone https://github.com/cadot-eu/debs.git && ./installdebs
dc up -d && dlogs tablo
docker ps
dbash tablo
sc list
exit
cd project-tablo && code .
composer require symfony/maker-bundle --dev
composer require symfony/orm-pack
composer require --dev doctrine/doctrine-fixtures-bundle
sc make:controller HomeController
composer require twig
composer require symfony/security-bundle
sc make:user
sc make:auth
sc make:migration
sc doctrine:migrations:migrate
sc make:fixtures UserFixtures
sc d:f:l -n
sc d:f:l -n
sc d:f:l -n
sc d:f:l -n
sc cache:clear
composer require symfony/asset-mapper
composer require symfony/stimulus-bundle
sc make:controller DashboardController
sc make:entity LoanItem
sc make:migration
sc doctrine:migrations:migrate
npm install sortablejs
composer require --dev phpunit/phpunit
composer require --dev doctrine/doctrine-fixtures-bundle
sc make:test
sc phpunit
sc cache:clear
sc debug:container --env=prod
sc debug:firewall
sc debug:router
sc debug:container security
sc security:check
