#!/bin/bash

WWWDIR=/www/Abt-Optimization/Personal/miltenberger

echo "pushing repository..."
git push || exit

echo "exporting..."
git archive master | tar -x -C $WWWDIR

echo "setting permissions..."
cd $WWWDIR
rm *.sh
rm *.py
rm .gitignore
chmod -f -R a+rX,ug+w *
