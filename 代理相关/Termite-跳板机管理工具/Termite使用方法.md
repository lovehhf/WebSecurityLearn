

- [Termite](http://rootkiter.com/Termite/)

  跳板机管理工具。[下载](http://rootkiter.com/Termite/download/Termite.zip)

##### 以服务模式启动一个 agent 服务
```bash
 ./agent -l 8888
```
##### 令管理端连接到 agent 并对 agent 进行管理。
```bash
./admin -c 127.0.0.1 -p 8888
```

##### 此时，admin 端会得到一个内置的 shell，输入 help 指令可以得到帮助信息。
```bash
help
```

##### 通过 show 指令可以得到当前 agent 的拓扑情况。
```bash
>>>> show
 >>>>>>>>>>>>> Current ID is 0 <<<<<<<<<<<<<
 0A
 +-- 1L
```
 由于当前拓扑中只有一个agent，所以展示结果只有 1M,其中1 为节点的ID号，A为Windows系统，Linux为L，Macos简写为M。

##### 将新 agent 加入当前拓扑。

```
./agent -c 127.0.0.1 -p 8888
```

##### 此时 show 指令将得到如下效果。
```
./agent -c 127.0.0.1 -p 8888
```

##### 此时 show 指令将得到如下效果。

```
0M
 +-- 1M
 |   +-- 2M
  这表明，当前拓扑中有两个节点，其中由于2节点需要通过1节点才能访问，所以下挂在1节点下方。
```
##### 在 2 节点开启 socks 代理，并绑定在本地端口
```
>> goto 1
>> shell 7777
     此时，通过nc本地的 7777 端口，就可以得到一个 1 节点提供的 shell.
```

将远程的文件下载至本地
```
>> goto 1
>> downfile 1.txt 2.txt
将1 节点，目录下的 1.txt 下载至本地，并命名为2.txt
```

##### 上传文件至远程节点
```
>> goto 2
>> upfile 2.txt 3.txt
将本地的 2.txt 上传至 2号节点的目录，并命名为3.txt
```

##### 端口转接
```
>> goto 2 
>> lcxtran 3388 10.0.0.1 3389
以2号节点为跳板，将 10.0.0.1 的 3389 端口映射至本地的 3388 端口
```

##### 更多支持
```
http://rootkiter.com/toolvideo/toolmp4/1maintalk.mp4
http://rootkiter.com/toolvideo/toolmp4/2socks.mp4
http://rootkiter.com/toolvideo/toolmp4/3lcxtran.mp4
http://rootkiter.com/toolvideo/toolmp4/4shell.mp4
http://rootkiter.com/toolvideo/toolmp4/5file.mp4
```

[内网漫游之SOCKS代理大结局](https://xianzhi.aliyun.com/forum/read/735.html)