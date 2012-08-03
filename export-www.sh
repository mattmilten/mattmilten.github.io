#!/bin/bash

WWWDIR=/www/Abt-Optimization/Personal/miltenberger

echo "pushing repository..."
if ! git push
  exit

echo "exporting..."
if ! git archive master | tar -x -C $WWWDIR
  exit

echo "setting permissions..."
cd $WWWDIR
rm *.sh
rm *.py
rm .gitignore
chmod -f -R a+rX,ug+w *
