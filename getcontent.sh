#!/bin/bash

url=$1
site=$2

lynx -dump -nolist $url > $site