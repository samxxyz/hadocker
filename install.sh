#!/bin/bash

# Required Dependencies
nala update -y
nala install apt-transport-https ca-certificates curl gnupg-agent software-properties-common -y

# Docker Repository
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
apt-key fingerprint 0EBFCD88
add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
nala update -y

# Install Docker
nala install docker-ce docker-ce-cli containerd.io docker-compose -y

# Check Status and Version
systemctl status docker
docker version
