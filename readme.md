# LeePHP 一个后台程序
## 采用ci框架为基础开发
## 多应用 多入口 支持各种cdn
- bootstrap
- mysql
- redis
- php-cli

# 目录说明
- apps  #应用目录
- http  #应用入口 service webroot
- leephp #核心
- static #静态文件, 动静分离, 灵活配置
```flow
st=>start: 开始
e=>end: 结束
op=>operation: 操作
sub1=>subroutine: 子程序
cond=>condition: Yes or No?
io=>inputoutput: 输入/输出
st->op->cond
cond(yes)->io->e
cond(no)->sub1(right)->op
```
