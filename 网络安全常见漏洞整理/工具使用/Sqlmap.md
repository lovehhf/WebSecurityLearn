SQLMap使用
===============================

- [SQLmap用户手册](http://drops.ichenfei.com/tips-143.html)
- [SQLmap用户手册[续]](http://drops.ichenfei.com/tips-401.html)
- [SQLMAP进阶使用](http://drops.ichenfei.com/tips-5254.html)
- [SQLmap源代码](https://github.com/sqlmapproject/sqlmap)

#### 五种注入模式:

-基于布尔的盲注
	- 可以根据返回页面判断条件真假的注入
-基于时间的盲注
	- 不能根据页面返回内容判断任何信息，用条件语句查看时间延迟语句是否执行(即页面返回时间是否增加)来判断
-基于报错注入
	- 页面会返回错误信息，或者把注入的语句的结果直接返回在页面中
-联合查询注入
	- 可以使用union的情况下的注入
-堆查询注入
	- 可以同时执行多条语句的执行时的注入

#### 支持的数据库

MySQL, Oracle, PostgreSQL, Microsoft SQL Server, Microsoft Access, IBM DB2, SQLite, Firebird, Sybase和SAP MaxDB

- 0: 只显示python错误以及严重的信息。
- 1: 同时显示基本信息和警告信息。（默认）
- 2: 同时显示debug信息。
- 3: 同时显示注入的payload。
- 4: 同时显示HTTP请求。
- 5: 同时显示HTTP响应头。
- 6: 同时显示HTTP响应页面。

#### 必备参数:

- `-u` URL或者`--url URL`: 指定url
- `--dbs`: 列出数据库系统的数据库
- `--tables -D 数据库名`: 列举数据库表
- `-D 数据库名 -T 表名 --columns`: 列举数据库表中的字段
- `-D 数据库名 -T 表名 -C 字段名1,字段名2...`: 列出数据库表中指定的字段
- `--schema`: 列举数据库系统的架构
	- 可加`--exclude-sysdbs`参数,将不会获取数据库自带的系统库内容
- `--dump-all`: 脱库
- `--dump`: 下载数据库数据: 
	- `-D 数据库名 --dump`: 下载指定数据库的数据
	- `-D 数据库名 -T 表名 --dump`:  下载指定数据库表的数据
	- `-D 数据库名 -T 表名 -C  -C 字段名1,字段名2...`: 下载制定字段的数据
	- `--start 行数`: 指定开始的行数
	- `--stop 行数`: 指定结束的行数
- `--search` : 查找指定的列名,表名或数据库名,配合`-D -T -C使用`
-  `--common-tables`: 暴力破解表名,适用于:
	- Microssoft Access,系统表默认`MSysObjects`是不可读的
	- MySQL数据库版本小于5.0,没有information_schema表
	- 当前用户没有权限读取系统中保存数据结构的表的权限
- `--common-columns`: 暴力破解列名
- `--file-read 文件路径`: 从数据库服务器中读取文件:
- `cookie=COOKIE`: 指定cookie值 

#### SQLmap思维导图:
<hr>
![](../images/sqlmap思维导图.jpg)
