#!/bin/bash

check_env() {
  if [ ! -e .env ]; then
    echo "required .env file."
    exit
  fi
  . .env
}

check_version() {
  if [ ! -e ".version" ]; then
    touch .version
    /bin/echo -n "1.0.0" >.version
    /bin/echo "check .version file"
    exit
  fi
}

check_deploylog() {
  if [ ! -e "deploy.log" ]; then
    touch deploy.log
  fi
}
