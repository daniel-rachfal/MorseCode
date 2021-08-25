# Build Instructions

* Install [Docker Desktop](https://www.docker.com/products/docker-desktop)
* If on Windows, install and enable [WSL2](https://docs.microsoft.com/en-us/windows/wsl/install-win10) 
    * Ensure that WSL2 compatibility is enabled in Docker ![DockerWSL](docs/images/dockerWSL.png)
    * In Command Prompt / Windows Terminal to enter your Linux Subsystem
        * `wsl`
* `cd ~`
* `apt-get update && apt-get install -y git`
* Install Composer & Dependencies
    * `apt install wget curl openssl php-common php-curl php-json php-mbstring php-mysql php-xml php-zip`
    * `curl -sS https://getcomposer.org/installer |php`
    * `mv composer.phar /usr/bin/composer`
* `git clone https://github.com/daniel-rachfal/MorseCode/ && cd MorseCode`
* `composer update`
* `cp .env.example .env`
* `./vendor/bin/sail up`
