#!/usr/bin/python3
# -*- coding: utf-8 -*-

import os
import shutil

SRC_DIR = "./src"
DST_DIR = "./build"

""" Serbian Cyrillic script.
    DO NOT change the order of characters.
"""
SR_CYR = (
    'а','б','в','г','д','ђ','е','ж','з','и','ј','к','л','љ','м',
    'н','њ','о','п','р','с','т','ћ','у','ф','х','ц','ч','џ','ш',
    'А','Б','В','Г','Д','Ђ','Е','Ж','З','И','Ј','К','Л','Љ','М',
    'Н','Њ','О','П','Р','С','Т','Ћ','У','Ф','Х','Ц','Ч','Џ','Ш'
)

""" Serbian latin script.
    DO NOT change the order of characters.
"""
SR_LAT = (
    'a','b','v','g','d','đ','e','ž','z','i','j','k','l','lj','m',
    'n','nj','o','p','r','s','t','ć','u','f','h','c','č','dž','š',
    'A','B','V','G','D','Đ','E','Ž','Z','I','J','K','L','LJ','M',
    'N','NJ','O','P','R','S','T','Ć','U','F','H','C','Č','DŽ','Š'
)

def cyr_to_lat(text):
    """ Transliterate Serbian Cyrillic srcipt to latin, character for character.
    """
    return ''.join([c if c not in SR_CYR else SR_LAT[SR_CYR.index(c)] for c in text])

class Builder(object):
    """ Serbian translation builder for phpBB.
        1. build sr-lat from sr-cyr by transliterating Cyrillic to Latin script
    """

    def __init__(self):
        self.src = os.path.abspath(SRC_DIR)
        if not os.path.isdir(self.src):
            raise ValueError(f'Source directory "{self.src}" not found.')
        self.dst = os.path.abspath(DST_DIR)
        if os.path.isdir(self.dst):
            shutil.rmtree(self.dst)
        os.mkdir(self.dst)

    def _build_iso_txt(self):

        cyr_iso_txt = os.path.join(self.dst, 'language/sr-cyr/iso.txt')
        with open(cyr_iso_txt, mode='w') as f:
            f.write('Serbian\nСрпски\nforum.astrolog.rs')

        lat_iso_txt = os.path.join(self.dst, 'language/sr-lat/iso.txt')
        with open(lat_iso_txt, mode='w') as f:
            f.write('Serbian\nSrpski\nforum.astrolog.rs')

    def _update_user_lang(self):

        lat_common_php = os.path.join(self.dst, 'language/sr-lat/common.php')
        with open(lat_common_php, mode='rb') as f:
            content = f.read()
        content = content.replace('sr-cyr'.encode('utf-8'), 'sr-lat'.encode('utf-8'))
        with open(lat_common_php, mode='wb') as f:
            f.write(content)

    def build(self):
        """ Iterate over source directory recursively and process all files
            and directories.
        """
        for directory, _, files in os.walk(self.src):

            relpath = os.path.relpath(directory, self.src)
            dst_cyr_dir = os.path.join(self.dst, relpath)
            dst_lat_dir = dst_cyr_dir
            if 'sr-cyr' in relpath:
                tmp = relpath.replace('sr-cyr', 'sr-lat')
                dst_lat_dir = os.path.join(self.dst, tmp)

            if directory != self.src:
                os.mkdir(dst_cyr_dir)
                if dst_lat_dir != dst_cyr_dir:
                    os.mkdir(dst_lat_dir)

            for filename in files:
                srcfilepath = os.path.join(directory, filename)
                dst_cyr_file_path = os.path.join(dst_cyr_dir, filename)
                dst_lat_file_path = os.path.join(dst_lat_dir, filename)
                with open(srcfilepath, mode='rb') as srcfile:
                    src = srcfile.read()
                    with open(dst_cyr_file_path, mode='wb') as dstfile:
                        dstfile.write(src)
                    if dst_lat_file_path.endswith('.php') or dst_lat_file_path.endswith('.txt'):
                        src = cyr_to_lat(src.decode('utf-8')).encode('utf-8')
                    with open(dst_lat_file_path, mode='wb') as dstfile:
                        dstfile.write(src)

        self._build_iso_txt()
        self._update_user_lang()

def main():
    t = Builder()
    t.build()

if __name__ == '__main__':
    main()
