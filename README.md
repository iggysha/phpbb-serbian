# phpbb-serbian

phpBB in Serbian (unofficial translations).

Setup development environment:

    ./setup.sh

Build translation:

    ./build.py

Translation source is in `/src` and it is Cyrilic only. Latin is built by simply
transcribing Cyrilic to Latin script.

Make sure translations pass the validator:

    ./validate.sh sr-cyr
    ./validate.sh sr-lat

Translations are in `build/` directory. Zip it and ship it!
