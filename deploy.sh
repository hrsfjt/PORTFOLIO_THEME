#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)
THEME_DIR_NAME=portfolio

# Version記録ファイルを確認
DEFAULT="1.0.0"
if [ ! -s "$SCRIPT_DIR/.version" ]; then 
  touch $SCRIPT_DIR/.version
  echo $DEFAULT > $SCRIPT_DIR/.version
fi 

# Version更新の判定
CURRENT_VERSION=`cat .version | awk '//' | xargs echo -n`
NEXT_VERSION=`cat themes/sass/style.scss | awk '/Version/{print $3}'`
if [ $CURRENT_VERSION = $NEXT_VERSION ]; then 
  echo "CURRENT: $CURRENT_VERSION, NEXT: $NEXT_VERSION"
  echo "different version deploy required."
  exit
fi

# ビルド用ディレクトリ移動
cd $SCRIPT_DIR/themes

# package.jsonのバージョン更新
PACKAGE_VERSION=`cat package.json | jq -r .version`
sed -i -e "s/\"version\": \"$PACKAGE_VERSION\"/\"version\": \"$NEXT_VERSION\"/g" package.json
rm -rf package.json-e

# CSSファイルの更新
npm run build

# ZIP圧縮
zip -r $THEME_DIR_NAME.zip $THEME_DIR_NAME

# 圧縮ファイルの移動
mv $SCRIPT_DIR/themes/$THEME_DIR_NAME.zip $SCRIPT_DIR/

cd $SCRIPT_DIR
DEPLOY=`date '+%Y/%m/%d %H:%M:%S'`

# デプロイ記録
echo $DEPLOY" "$NEXT_VERSION >> deploy.log

# Version記録
echo -n $NEXT_VERSION > .version

echo "$DEPLOY deploy success."
