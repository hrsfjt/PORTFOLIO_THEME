#!/bin/bash
if [ ! -e .env ]; then
  echo "required .env file."
  exit
fi

. .env
