#!/bin/bash

function split
{
  git subtree push --prefix src/$1/ git@github.com:abaldeweg/$1.git main
}

split dir

echo -e "\e[32mSplitted repos successfully!\e[0m"

exit 0
