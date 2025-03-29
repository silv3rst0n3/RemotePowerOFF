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

1- install apache web server:

```
sudo apt install apache2

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
5-copy Shutdown script to your Desktop windows

6-add a.bat on your startup path


