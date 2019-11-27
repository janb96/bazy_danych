#!/usr/bin/env bash
echo -e $"Start"
docker build -t my_php -f website/Dockerfile website
docker-compose up
echo -e $"Finish"