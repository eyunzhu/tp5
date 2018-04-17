###ThinkPHP学习

### [隐藏入口文件index.php](https://www.kancloud.cn/thinkphp/thinkphp5_quickstart/478281)
> 需要在入口文件的同级添加.htaccess文件
```
<IfModule mod_rewrite.c> 
Options +FollowSymlinks -Multiviews 
RewriteEngine on 
RewriteCond %{REQUEST_FILENAME} !-d 
RewriteCond %{REQUEST_FILENAME} !-f 
RewriteRule ^(.*)$ index.php [L,E=PATH_INFO:$1] 
</IfModule>
```
### [定义路由](https://www.kancloud.cn/thinkphp/thinkphp5_quickstart/478282)
> 通过定义路由URL可省略模块/控制器

> 如：http://tp5.com/index/index/hello

> 可变为：http://tp5.com/hello

