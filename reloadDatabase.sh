#!/bin/bash

bin/console doctrine:database:drop --if-exists --force
bin/console doctrine:database:create --if-not-exists --no-interaction
bin/console doctrine:migrations:migrate --no-interaction
bin/console doctrine:fixtures:load --append --no-interaction
