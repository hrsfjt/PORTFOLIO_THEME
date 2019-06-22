#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)
THEME_DIR_NAME=portfolio

cd $SCRIPT_DIR/themes

# CSSファイルの更新
npm run build

# ZIP圧縮
zip -r $THEME_DIR_NAME.zip $THEME_DIR_NAME

# リポジトリに移動
mv $SCRIPT_DIR/themes/$THEME_DIR_NAME.zip $SCRIPT_DIR/
