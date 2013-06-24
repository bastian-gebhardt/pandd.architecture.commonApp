#!/bin/bash

find src -name '*.php' -print0 | xargs -0 -n1 php -l > /dev/null
if [ $? -eq 0 ]; then
	echo "No syntax errors detected in src"
fi
