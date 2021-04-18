#!/bin/bash

WWWDIR=$USER@login1.zib.de:/www/Abt-Optimization/Personal/miltenberger

if [ "$1" == "test" ]
then
    WWWDIR=$USER@login1.zib.de:/www/Abt-Optimization/Personal/miltenberger/test/miltenberger
fi

# rsync copies user file permission, better than cp
COPY=rsync
COPYFLAGS="--checksum --compress --verbose --owner --recursive --chmod=g+w,+X,a+r --blocking-io"

# only push and check for consistency if the real website is to be updated
if ! [ "$1" == "test" ]
then
   if ! git diff --quiet HEAD
   then
      echo "You have uncommited changes!"
      echo "Commit and push everything before going online!"
      exit 1
   fi

   echo "pushing repository..."
   git push || exit
fi

echo "syncing..."
$COPY $COPYFLAGS --exclude=.git  --exclude=.gitignore --exclude=export-www.sh --exclude-from=.gitignore . $WWWDIR

if [ "$1" == "test" ]
then
   echo "check test page here: www.zib.de/miltenberger/test/miltenberger"
fi

exit
