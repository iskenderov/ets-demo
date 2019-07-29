---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_83764a2de1a941a0a3cbae52bba9776e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/companies" 
```

```javascript
const url = new URL("http://localhost/api/companies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "testcompany1",
        "phone": "11111111111111",
        "email": "111111111@testcompany1.com",
        "isActive": true
    },
    {
        "id": 2,
        "name": "testcompany2",
        "phone": "222222222",
        "email": "2222222@testcompany2.com",
        "isActive": true
    },
    {
        "id": 3,
        "name": "testcompany3",
        "phone": "33333333",
        "email": "33333333@testcompany3.com",
        "isActive": true
    }
]
```

### HTTP Request
`GET api/companies`


<!-- END_83764a2de1a941a0a3cbae52bba9776e -->

<!-- START_a242a34f0abd359a9196226970606774 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/companies" 
```

```javascript
const url = new URL("http://localhost/api/companies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/companies`


<!-- END_a242a34f0abd359a9196226970606774 -->

<!-- START_b4015228dd0e0c0b6a959ebaf0865a05 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/companies/1" 
```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "testcompany1",
    "phone": "11111111111111",
    "email": "111111111@testcompany1.com",
    "isActive": true
}
```

### HTTP Request
`GET api/companies/{company}`


<!-- END_b4015228dd0e0c0b6a959ebaf0865a05 -->

<!-- START_1e6a34851b0689db52677b43727419b5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/companies/1" 
```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/companies/{company}`

`PATCH api/companies/{company}`


<!-- END_1e6a34851b0689db52677b43727419b5 -->

<!-- START_72de66eabebc78e1d0e514081409da3a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/companies/1" 
```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/companies/{company}`


<!-- END_72de66eabebc78e1d0e514081409da3a -->

<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "test1",
        "phone": "11111111",
        "email": "11111111@test.com",
        "isActive": true
    },
    {
        "id": 2,
        "name": "test2",
        "phone": "222222222222",
        "email": "222222222@test.com",
        "isActive": true
    },
    {
        "id": 3,
        "name": "test3",
        "phone": "333333333333",
        "email": "33333333333@test.com",
        "isActive": true
    }
]
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users`


<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users/1" 
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "test1",
    "phone": "11111111",
    "email": "11111111@test.com",
    "isActive": true
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/users/1" 
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`


<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/users/1" 
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->


