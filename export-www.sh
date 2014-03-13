#!/bin/bash

WWWDIR=/www/Abt-Optimization/Personal/miltenberger

# rsync copies user file permission, better than cp
COPY=rsync
COPYFLAGS="--checksum --compress --verbose --owner --recursive --chmod=g+w,+X,a+r"

if ! git diff --quiet HEAD
then
   echo "You have uncommited changes!"
   echo "Commit and push everything before going online!"
   exit 1
fi

echo "pushing repository..."
git push || exit

echo "syncing $PAGE..."
$COPY $COPYFLAGS --exclude-from=.gitignore . $WWWDIR

exit
