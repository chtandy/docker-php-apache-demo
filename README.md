# docker-php-apache-demo
### MAIN
- 主要是快速建立一個PHP 學習環境
- 展示php如何使用系統環境變數為優先，沒有該變數則使用預設值

### 使用方式
- build image
```
docker build -t php:apache .
```
- start container
```
# 不帶參數，使用預設值
docker run --rm -it -p 1080:80 php:apache
# 帶參數
docker run --rm -it -p 1080:80 -e DBHOST=127.0.0.1 -e DBPORT=2001 -e DBUSER=root -e DBPASSWD=admin php:apache
```


