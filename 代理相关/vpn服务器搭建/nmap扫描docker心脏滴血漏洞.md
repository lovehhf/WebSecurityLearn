
将docker容器的443端口映射到公网上:
```bash
root@huang:~# docker ps
CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                   NAMES
2c7eb85bcfd6        ec30550bb4ff        "/usr/sbin/apache2..."   4 minutes ago       Up 4 minutes        0.0.0.0:4433->443/tcp   focused_liskov
root@huang:~# 
root@huang:~# docker ps
CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                   NAMES
2c7eb85bcfd6        ec30550bb4ff        "/usr/sbin/apache2..."   4 minutes ago       Up 4 minutes        0.0.0.0:4433->443/tcp   focused_liskov
root@huang:~# docker help cp

Usage:	docker cp [OPTIONS] CONTAINER:SRC_PATH DEST_PATH|-
	docker cp [OPTIONS] SRC_PATH|- CONTAINER:DEST_PATH

Copy files/folders between a container and the local filesystem

Options:
  -a, --archive       Archive mode (copy all uid/gid information)
  -L, --follow-link   Always follow symbol link in SRC_PATH
      --help          Print usage
root@huang:~# docker cp ngrok 2c7eb85bcfd6:/tmp
root@huang:~# docker exec -it 2c7eb85bcfd6 /bin/bash
root@2c7eb85bcfd6:/tmp# ls
ngrok
root@2c7eb85bcfd6:/tmp# chmod +x ngrok 
root@2c7eb85bcfd6:/tmp# vi ngrok.cfg
root@2c7eb85bcfd6:/tmp# cat >> ngrok.cfg <<EOF
> server_addr: proxy.asec.me:4443
> trust_host_root_certs: false
> EOF
root@2c7eb85bcfd6:/tmp# cat ngrok.cfg 
server_addr: proxy.asec.me:4443
trust_host_root_certs: false
root@2c7eb85bcfd6:/tmp# ./ngrok -config=ngrok.cfg -proto=tcp 443
```

nmap扫描发现心脏滴血漏洞
```bash
root@kali:~# nmap -sV --script=ssl-heartbleed -p 43489 proxy.asec.me

Starting Nmap 7.40 ( https://nmap.org ) at 2017-11-10 13:19 CST
Nmap scan report for proxy.asec.me (159.89.207.179)
Host is up (0.043s latency).
rDNS record for 159.89.207.179: do.ubuntu
PORT      STATE SERVICE VERSION
43489/tcp open  ssl/ssl Apache httpd (SSL-only mode)
| ssl-heartbleed: 
|   VULNERABLE:
|   The Heartbleed Bug is a serious vulnerability in the popular OpenSSL cryptographic software library. It allows for stealing information intended to be protected by SSL/TLS encryption.
|     State: VULNERABLE
|     Risk factor: High
|       OpenSSL versions 1.0.1 and 1.0.2-beta releases (including 1.0.1f and 1.0.2-beta1) of OpenSSL are affected by the Heartbleed bug. The bug allows for reading memory of systems protected by the vulnerable OpenSSL versions and could allow for disclosure of otherwise encrypted confidential information as well as the encryption keys themselves.
|           
|     References:
|       http://www.openssl.org/news/secadv_20140407.txt 
|       http://cvedetails.com/cve/2014-0160/
|_      https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0160

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
```