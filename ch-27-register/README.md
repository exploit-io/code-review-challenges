# Challenge 27 - Registeration
---
## Description

1. Open `Terminal` and Go to `docker` Directory

2. Make sure Your Docker is installed and running

3. On **OSX/Linux** Run `./start.sh` instead on **windows**: Copy content of `start.sh` file into `Powershell`/`CMD`.

4. Wait couple of minutes for DB to prepare

5. Go to: `http://localhost:80`

* Flag Format: ‍‍‍‍`CTF{flag}`
* Author: `exploitio`

## Solution

1. We need All Printable Characters

```py

from string import printable

for ch in printable:
    print(ch)

```

3. Run python and print them into file
4. Run Burp and Intruder
5. Save Passwords