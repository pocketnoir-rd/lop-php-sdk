# 京东物流技术开放平台PHP SDK

该SDK代码基于京东物流开放平台SDK源码基础上，针对基于京东物流`websocket`消息服务的使用场景进行了如下`BUG`修复：
```
1. 增加websocket连接心跳机制：为避免服务端对websocket连接超时主动断开，修复原有心跳机制bug
2. 增加websocket断开重连机制：为避免服务端对websocket连接主动断开后，SDK端不可用，在ws调用的主循环增加断开重连机制
```

### 参考资料
1. [京东物流开放平台通用文档](https://open.jdwl.com/docu/viewDefault/1.html)
