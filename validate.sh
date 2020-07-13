#!/bin/bash

# configuration, adjust as needed
PHPBB_TAG="release-3.3.0"
PHPBB_VERSION="3.3"
# end of configuration

function usage() {
    echo "Validate Serbian translation build for phpBB."
    echo "Usage:"
    echo "    $0 LANG"
    echo "Arguments:"
    echo "    LANG: sr or sr-Latn"
    echo ""
}

if [[ -z $1 ]]; then
    echo "ERROR: Missing required argument LANG."
    usage
    exit 0
fi

PHPBB_LANGUAGE=$1

# prepare environment
rm -rf $PHPBB_VERSION

mkdir -p $PHPBB_VERSION/$PHPBB_LANGUAGE/language
mkdir -p $PHPBB_VERSION/$PHPBB_LANGUAGE/styles/prosilver/theme
mkdir -p $PHPBB_VERSION/en/language
mkdir -p $PHPBB_VERSION/en/styles/prosilver/theme

cp -r build/language/$PHPBB_LANGUAGE $PHPBB_VERSION/$PHPBB_LANGUAGE/language/$PHPBB_LANGUAGE
cp -r build/styles/prosilver/theme/$PHPBB_LANGUAGE $PHPBB_VERSION/$PHPBB_LANGUAGE/styles/prosilver/theme/$PHPBB_LANGUAGE

git --git-dir=phpbb/.git --work-tree=phpbb checkout $PHPBB_TAG

cp -r phpbb/phpBB/language/en $PHPBB_VERSION/en/language
cp -r phpbb/phpBB/styles/prosilver/theme/en $PHPBB_VERSION/en/styles/prosilver/theme

php vendor/bin/translation.php validate $PHPBB_LANGUAGE --phpbb-version=$PHPBB_VERSION --display-notices
