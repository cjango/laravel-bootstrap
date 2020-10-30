# API 接口文档

[TOC]

## 1.基础信息

### 接口地址
> 测试环境
>
> http://
> 
> 正式环境
> 
> https://

### 请求方式

#### 请求头信息
| KEY           | VALUE            | 说明             |
| ------------- | ---------------- | ---------------- |
| Authorization | ACCESS_TOKEN     | 用户鉴权         |
| Accept        | application/json | 使接口返回json数据 |

### 返回格式

#### 成功返回

```json
{
    "status": "SUCCESS",
    "status_code": 200,
    "data": "ARRAY|STRING"
}
```

#### 失败返回

```json
{
    "status": "ERROR|EXCEPTION",
    "status_code": 400,
    "message": "ERROR MESSAGE"
}
```

#### 返回状态码

| 状态码status_code |                |
| ----------------- | -------------- |
| 200               | 请求成功       |
| 400               | 出现错误       |
| 401               | TOKEN过期      |
| 500               | 服务器内部错误 |
| 0                 | 服务器错误     |

<a id="page"></a>

#### 分页

```json
{
    "status": "SUCCESS",
    "status_code": 200,
    "data": {
        "data": [],
        "page": {
            "current": 1,
            "total_page": 1,
            "per_page": 15,
            "has_more": false,
            "total": 1
        }
    }
}
```

| 返回参数        | 参数类型    | 参数说明         | 版本  |
| --------------- | ----------- | ---------------- | ----- |
| data            | array.array | 当前页面内容列表 | 1.0.0 |
| page            | array       | 分页信息         | 1.0.0 |
| page.current    | int         | 当前页码         | 1.0.0 |
| page.total_page | int         | 总页数           | 1.0.0 |
| page.per_page   | int         | 每页数据条数     | 1.0.0 |
| page.has_more   | bool        | 是否有更多页面   | 1.0.0 |
| page.total      | int         | 数据总条数       | 1.0.0 |
