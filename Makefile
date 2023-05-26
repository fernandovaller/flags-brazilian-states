
PHP = php

.DEFAULT_GOAL = help

## 👷 Makefile
help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

test: ## Run tests, pass the parameter "args=" to run the command with arguments or options
	@$(PHP) vendor/bin/phpunit $(args)

test-cov: ## Run tests and generate coverage report
	@$(DOCKER_COMP) XDEBUG_MODE=coverage php vendor/bin/phpunit --coverage-clover coverage/clover/clover.xml --coverage-html coverage/html
