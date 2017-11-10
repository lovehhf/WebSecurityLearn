

### 使用介绍

- [Burp Suite使用介绍(1)](http://drops.ichenfei.com/tools-1548.html)
	- 功能介绍
	- Proxy 代理: 通过拦截,查看和修改所有的请求和响应您的浏览器与目标Web服务器之间传递
		- Intercept:用于显示和修改HTTP请求和响应
		- Forward: 编辑信息之后,发送信息到服务器或浏览器
		- Drop: 不想要发送这次信息可以点击drop放弃这个拦截信息
		- Interception is on/off: 切换和关闭所有拦截
		- Action: 说明一个菜单可用的动作行为操作可以有哪些操作功能
		- Comment field: 为请求或响应添加注释，以便更容易在History选项卡中识别它们
		- Highlight 为请求或响应添加颜色，可以在history选项卡和截获中更容易发现
		- History: 代理历史认为每个请求和响应。通过代理可以记录全部请求和响应
		- History Table: 表中显示已通过代理HTTP消息的所有请求，并且可以查看完整的你所做的任何修改和截获的信息的请求和响应。
		- Display Filter: Proxy histroy有一个可以用来在视图中隐藏某些内容的功能，以使其更易于分析和你感兴趣的工作内容的显示过滤
		- Options: 设置代理监听、请求和响应，拦截反应，匹配和替换，ssl等
	- Target: 目标工具包含了SiteMap，用你的目标应用程序的详细信息。
		- Site map: 汇总所有的信息Burp已经收集到的有关地址。你可以过滤并标注此信息，以帮助管理它
		- Target Information
	- Scanner功能: 扫描器
	- Intruder: 用于自动对Web应用程序自定义的攻击。它可以用来自动执行所有类型的任务您的测试过程中可能出现的。
- [Burp Suite使用介绍(2)](http://drops.ichenfei.com/tools-1629.html)
	- Repeater: Burp Repeater(中继器)是用于手动操作和补发个别HTTP请求
	- Sequencer: Burp Sequencer是一种用于分析数据项的一个样本中的随机性质量的工具
	- Decoder: Burp Decoder是一种用于将编码数据纳入其规范形式，或将原始数据转换成各种编码和哈希表的简单工具。它能够智能地识别多种编码格式采用启发式技术
	- Comparer: Burp的Comparer是执行任何两项数据之间的比较(视觉"diff(差异)")一个简单的工具
	- Extender: 扩展插件
- [Burp Suite使用介绍(3)](http://drops.ichenfei.com/tips-2247.html)
	- Android虚拟机 proxy for BurpSuite
	- Android手机Proxy for Burpsuite
	- 暴力破解
	- 导出符合爆破规则的数据
	- 0x05 批量md5解密
- [Burp Suite使用介绍(4)](http://drops.ichenfei.com/tips-2504.html)
	- Intruder Scan
	- Active Scan with sqlmap
	- Session Randomness Analysis Sequencer

### BurpSuite插件开发

- [BurpSuite插件开发指南之 API 上篇](http://drops.ichenfei.com/tools-14040.html)
- [BurpSuite插件开发指南之 API 下篇](http://drops.ichenfei.com/tools-14685.html)
- [BurpSuite插件开发指南之 Python 篇](http://drops.ichenfei.com/tools-16261.html)
- [BurpSuite插件开发指南之 Java 篇](http://drops.ichenfei.com/tools-16056.html)
- [BurpSuite 扩展开发[1]-API与HelloWold](http://drops.ichenfei.com/papers-3962.html)
- [burpsuite扩展开发之Python](http://drops.ichenfei.com/tools-5751.html)
- [基于Ruby的Burpsuite插件开发](http://drops.ichenfei.com/tips-14684.html)
