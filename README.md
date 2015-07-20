Feather
========================

A Simple, Flexible and Beautiful torrent webapp

Site officiel
========================
https://feather.vigitas.com<br/>
http://quentingrisard.fr

Installation ( BETA )
========================

Executer la commande suivante dans votre terminal:<br>
wget https://github.com/WENKz/feather/archive/master.zip && unzip master.zip && mv feather-master /usr/share/feather && chmod 0777 /usr/share/feather

apt-get install -y php5 php5-curl apache2 transmission-daemon git<br/><br/>
Et ensuite aller éditer le fichier settings.json<br/><br/>
<pre>
nano /var/lib/transmission-daemon/info/settings.json<br/><br/>
</pre>
On modifie alors les lignes suivantes
<pre>
"download-dir": "/repertoire/des/fichiers",<br/>
"download-queue-size": Nombre de téléchargement simultané,<br/>
"incomplete-dir": "/repertoire/des/fichiers/incomplets",<br/>
"rpc-authentication-required": true/false,<br/>
"rpc-enabled": true,<br/>
"rpc-password": "Votre mot de passe transmission",<br/>
"rpc-port": "Port d'écoute de l'API",<br/>
"rpc-username": "Votre identifiant transmission",<br/>
"rpc-whitelist-enabled": false,<br/><br/>
</pre>
Libre a vous après de jouer avec d'autres paramètres. On met à jour notre configuration auprès du service concerné<br/><br/>
<pre>
service transmission-daemon reload<br/><br/>
</pre>
Après n'oublier pas de vous rapeller des differents parametres que vous avez indiquer car ils vous seront demander durant la phase d'installation de feather<br/>

On enchaine avec la mise à jour de composer et l'installations de tout les vendors<br/><br/>
<pre>
php composer.phar update
</pre>
<br/><br/>
Si vous avez des problèmes contacter moi a l'adresse email suivante: william[dot]rudent[at]gmail[dot]com <br/>ou : quentin[dot]grisard[at]gmail[dot]com

Changelog
========================
0.9.9 : <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ajout d'un module de recherche de torrent par Quentin Grisard<br/>
0.9.8 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Cette version apporte de grosses amelioration au niveau de l'autoinstaller linux<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# et le rend ainsi fonctionnel uniquement sur des environnements vierge et tournant sur ( Debian/Ubuntu )<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# il n'en  deumeurent pas moin un autoinstaller inachevé.<br/>
0.9.7 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Apporte l'ajout d'un autoinstaller linux peu fonctionnel est limité pas encore accessible a l'utilisation<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Inclus egalement la mise a jour de l'installer web de feather<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Mise a jour des requetes curl<br/>
0.9.6 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ajout d'un installer web pour feather<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Corrections de plusieurs bug<br/>
0.9.5 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ajout des fonctions Ajouter<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ajout du calcul de débit montant<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ajout d'une verification de session<br/>
0.9.4 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ajout d'un système d'identification ( par défaut: admin/adminpass )<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Securisation de l'application<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Mise en place d'un firewall php<br/>
0.9.3 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Ajout des fonctions start|stop|delete<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Correction de plusieurs bug<br/>
0.9.2 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Premiere release du noyau de l'application<br/>
0.9.1 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Corrections de quelques bug lié a l'interface<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Intégration de l'interface de l'application<br/>
0.9.0 :<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Initial release<br/>