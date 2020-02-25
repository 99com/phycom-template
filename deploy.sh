#!/bin/bash
if [[ -z $1 ]]; then

    echo ""
    echo "USAGE:"
    echo ""
    echo "For deployments to a specific server use:"
    echo "sh deploy.sh <host> <tag>"
    echo ""
    echo "For deployments to a all servers use:"
    echo "sh deploy.sh <tag>"
    echo ""
    echo ""

elif [[ -z $2 ]]; then
    cd ansible && ansible-playbook deploy.yml -e hosts=all -e branch=$1
else
    cd ansible && ansible-playbook deploy.yml -e hosts=$1 -e branch=$2
fi