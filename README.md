# RemotePowerOFF
you can REMOTE Power OFF YourSystem From Internet !

![Logo](https://json.xstack.ir/assets/xstack.png )

# Remote Power OFF

## Overview
The REMOTE POWER OFF is a PYTHON,Webui script designed to Help you for REmote Power Off your system from every where . for run this tools you need have server (VPS). 

## Prerequisites
#windows
#server:linux
#webserver:apache2

## Installation

1- install apache web server cron php:

```
sudo apt install apache2
sudo apt install cron
sudo apt install php
```

2- Clone the repository:

```bash
git clone https://github.com/silv3rst0n3/RemotePowerOFF.git
cd RemotePowerOFF
    
```

3-copy web ui on web server path

```
cd Webui
cp * ~/var/www/html

```
4-copy file on web server path
```
cd ~/RemotePowerOFF/
cp x.sh log.txt file2.txt ~/var/www/html
```
5- add permsion to files
```
chown www-data file2.txt
```
6-copy Shutdown.py script to your Desktop windows

7-add a.bat on your startup path

## How to Use
```
open your server ip
http://serverip/index.php
set date and time to Power off your system
```
