#!make

user := $(shell id -u)
group := $(shell id -g)
dc := USER_ID=$(user) GROUP_ID=$(group) docker-compose
de := docker-compose exec
sy := $(de) php-fpm bin/console
# define standard colors
BLACK        := $(shell tput -Txterm setaf 0)
RED          := $(shell tput -Txterm setaf 1)
GREEN        := $(shell tput -Txterm setaf 2)
YELLOW       := $(shell tput -Txterm setaf 3)
LIGHTPURPLE  := $(shell tput -Txterm setaf 4)
PURPLE       := $(shell tput -Txterm setaf 5)
BLUE         := $(shell tput -Txterm setaf 6)
WHITE        := $(shell tput -Txterm setaf 7)

RESET := $(shell tput -Txterm sgr0)

TARGET_COLOR := $(BLUE)
POUND = \#
.PHONY: no_targets__ info help build deploy doc
	no_targets__:
.DEFAULT_GOAL := help
colors:
	@echo "${BLACK}BLACK${RESET}"
	@echo "${RED}RED${RESET}"
	@echo "${GREEN}GREEN${RESET}"
	@echo "${YELLOW}YELLOW${RESET}"
	@echo "${LIGHTPURPLE}LIGHTPURPLE${RESET}"
	@echo "${PURPLE}PURPLE${RESET}"
	@echo "${BLUE}BLUE${RESET}"
	@echo "${WHITE}WHITE${RESET}"
	## haikel


##
###----------------------#
###    Composer 🧙‍
###----------------------#
##
composer-install:  ## Install dependencies
	sudo $(dc)  exec -u root php-fpm composer install
composer-update:  ## Update dependencies
	sudo $(dc)  exec -u root php-fpm  composer update
composer-autoload: ## Autoload Composer
	sudo $(dc)  exec -u root php-fpm composer dump-autoload
login: ## login to container php
	sudo $(dc)  exec -u root php-fpm bash

##
###----------------------#
###    Symfony 🎵
###----------------------#
##
cc: up      ##  cache clear
	$(sy) cac:c
assets:up	##  Install the assets with symlinks in the public folder
	$(sy) assets:install
migration: up ##  Migration
	$(sy) make:migration
migrate: up   ##  Migrate
	$(sy) doctrine:migrations:migrate
database: ##  Setup database
	$(sy) doctrine:database:drop --if-exists --force --env=$(env)
	$(sy) doctrine:database:create --env=$(env)
	$(sy) doctrine:schema:update --force --env=$(env)
init: database fixtures
fix-perms: ##error
	$(de) php-fpm chmod 777 -R var/
##
###----------------------#
###    Docker 🐳
###----------------------#
##
up: ## Start the docker hub
	$(dc) up -d
down: ## Stop the docker hub
	$(dc) down
build: ## build the docker hub
	$(dc) build
.PHONY: logs
logs: 	##  look for 's' service logs, make s=php logs
	$(dc) logs -f $(s)
##
###----------------------#
###    Project 🐝
###----------------------#
##
db: up  ##  Create Database 
	$(sy) doctrine:database:drop --if-exists --force --env=$(env)
	$(sy) doctrine:database:create --env=$(env)
fixtures: up  ##  Build the DB, control the schema validity, load fixtures and check the migration status
	$(sy) doctrine:fixtures:load -n --env=$(env)
prepare: db fixtures

##
###----------------------#
###  Coding standards ✨
###----------------------#
##
phpcs: up  ## Running phpcs...
	$(de) php-fpm ./vendor/bin/php-cs-fixer fix --using-cache=no
phpstan: ## eRunning phpstan...
	$(de) php-fpm ./vendor/bin/phpstan analyse --configuration=phpstan.neon


##
###---------------------------#
###   🐝 The Next Symfony Makefile 🐝
###---------------------------#
##

.PHONY: help
help: ## Outputs this help screen
	@echo ""
	@echo "    ${BLACK}:: ${RED}Self-documenting Makefile${RESET} ${BLACK}::${RESET}"
	@echo ""
	@echo " ✔ Document targets by adding '$(POUND)$(POUND) comment' after the target  ✔ "
	@echo ""
	@echo "${BLACK}-----------------------------------------------------------------${RESET}"
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-20s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
