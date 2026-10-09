#!/bin/bash
cd /opt/lampp/htdocs/Projects/localbuddy

if ! curl -s http://localhost:8000 > /dev/null; then
  php -S localhost:8000 > /dev/null 2>&1 &
  sleep 1
fi

brave-browser --app=http://localhost:8000 --window-size=600,400
