# PORTFOLIO_THEME

PORTFOLIO_THEME Repository.

## File/Directory Architecture

``` text
.
├── LICENSE
├── README.md
├── server
│   ├── cms
│   ├── db
│   └── docker-compose.yml
└── themes
    ├── gulpfile.babel.js
    ├── package-lock.json
    ├── package.json
    ├── portfolio
    └── sass
```

## fix package

```shell
$ rm -rf themes/node_modules/node-gyp/node_modules/tar
$ npm dedupe
success.
```
