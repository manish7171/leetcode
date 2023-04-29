INPUTS=sample.txt

.PHONY: test
test: index.php $(INPUTS)
	php index.php $(INPUTS)

run:
	docker run -it --rm -v ./:/var/www -w /var/www/ --network=bridge php:8.1-cli-alpine php index.php

