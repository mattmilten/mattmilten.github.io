#!/bin/bash

# exit if an error occurs
set -e

WWWDIR=/www/Abt-Optimization/Personal/miltenberger

echo "pushing repository..."
git push

echo "exporting..."
git archive master | tar -x -C $WWWDIR

echo "setting permissions..."
cd $WWWDIR
rm *.sh
rm .gitignore
chmod -R a+rX,ug+w *
