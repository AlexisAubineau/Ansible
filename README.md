# Ansible

## Ressources necessaire

**2 VM :**

Elles doivent être **impérativement** sur le même sous-réseau.
Accessible via SSH.

**Apache :**

Il vous faut une IP public avec le port 80 d'autoriser pour que Wordpress puisse communiquer

**MySQL :**

Pas de besoin particulier

## Installation

Pour installer ansible sur votre machine :
/!\ Installation sous python

    sudo pip install ansible

## Charger le projet
Pour charger le projet il vous suffit de faire :

    git clone https://github.com/AlexisAubineau/Ansible.git

## Modification
Avant de pouvoir charger et travailler sur le projet quelques modifications sont de mise

**Fichier de config d'ansible :**

Il faut modifier le fichier **ansible.cfg** pour y remplacer le remote_user par celui que vous allez utiliser et donner le chemin de votre clée ssh.
    
    [default]
	remote_user = username
	private_key_file = path_ssh_key
	inventory = ./inventory.ini
	host_key_checking = False

**Fichier config ip machine :**

Il faut modifier les fichiers dans le dossier **host_vars** pour y placer les adresses ip de vos machines.

	ansible_host: ip_address

**Fichier config playbook :**

Il faut modifier le **playbook.yml** dans le dossier **playbook** pour changer le remote_user par le même remote_user de votre **ansible.cfg**

	- hosts: web
	  remote_user: username
	  become: true
	  gather_facts: False
	  tasks:
		  - name: install python 3
		    raw: test -e /usr/bin/python || (apt -y update && apt install -y python3-minimal)
	- hosts: base
	  roles:
		  - mysql
	- hosts: web
		roles:
			- server
			- php
			- wordpress
			- ftp


**Fichier config MySql :**

il faut modifier le fichier **main.yml** dans le dossier **playbook/mysql/defaults** et placer le nom de la db de votre choix **wp_db_name**

	mysql_user_home: /root
	mysql_user_name: root
	mysql_user_password: root
	wp_db_name: db_name

**Fichier config Wordpress :**

il faut modifier le fichier **main.yml** dans le dossier **playbook/wordpress/defaults** et y placer l'ip de **wp_db_host** ainsi que le nom de la db de **wp_db_name**

	mysql_user_name: wordpress
	mysql_user_password: Azerty123
	wp_db_name: db_name
	wp_db_host: ip_address


## Lancer le projet
Pour lancer le projet il suffit de faire :

    ansible-playbook playbook/playbook.yml -i ./inventory.ini
