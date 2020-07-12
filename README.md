# phpbb-serbian

phpBB in Serbian (unofficial translations).

Setup development environment:

    ./setup.sh

Build translation:

    ./build.py

Translation source is in `/src` and it is Cyrillic only. Latin is built by simply
transcribing Cyrillic to Latin script.

Make sure translations pass the validator:

    ./validate.sh sr-cyr
    ./validate.sh sr-lat

Translations are in `build/` directory. Zip it and ship it!
