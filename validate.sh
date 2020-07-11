#!/bin/bash

# adjust these variables
PHPBB_TAG="release-3.2.8"       # CHANGE the tag to checkout for validation HERE
PHPBB_VERSION="3.2"             # CHANGE the main version of phpBB HERE - 3.0, 3.1 or 3.2
PHPBB_LANGUAGE="sr-cyr"         # CHANGE the language iso to validate HERE

# prepare environment
rm -rf $PHPBB_VERSION

mkdir -p $PHPBB_VERSION/$PHPBB_LANGUAGE/language
mkdir -p $PHPBB_VERSION/$PHPBB_LANGUAGE/styles/prosilver/theme
mkdir -p $PHPBB_VERSION/en/language
mkdir -p $PHPBB_VERSION/en/styles/prosilver/theme

cp -r src/language/$PHPBB_LANGUAGE $PHPBB_VERSION/$PHPBB_LANGUAGE/language/$PHPBB_LANGUAGE
cp -r src/styles/prosilver/theme/$PHPBB_LANGUAGE $PHPBB_VERSION/$PHPBB_LANGUAGE/styles/prosilver/theme/$PHPBB_LANGUAGE

git --git-dir=phpbb/.git --work-tree=phpbb checkout $PHPBB_TAG

cp -r phpbb/phpBB/language/en $PHPBB_VERSION/en/language
cp -r phpbb/phpBB/styles/prosilver/theme/en $PHPBB_VERSION/en/styles/prosilver/theme

php vendor/bin/translation.php validate $PHPBB_LANGUAGE --phpbb-version=$PHPBB_VERSION --display-notices
