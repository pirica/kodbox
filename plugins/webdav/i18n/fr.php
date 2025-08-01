<?php
return array(
    "webdav.meta.name"               => "Service WebDAV",
    "webdav.meta.title"              => "Montage WebDAV sur un lecteur réseau",
    "webdav.meta.desc"               => "Les documents du disque réseau peuvent être montés sur l'ordinateur actuel ou l'APP, et la gestion des fichiers peut être aussi pratique et rapide que le disque dur local ; en même temps, les fichiers peuvent être modifiés et enregistrés en temps réel",
    "webdav.config.isOpen"           => "Activer le service WebDAV",
    "webdav.config.isOpenDesc"       => "Une fois activé, les utilisateurs peuvent monter le répertoire du disque réseau via webdav",
    "webdav.config.pathAllow"        => "Ouvrir l'emplacement du répertoire racine",
    "webdav.config.pathAllowDesc"    => "L'emplacement du chemin racine après la connexion et le montage ; Tous --- y compris le disque réseau personnel, le disque réseau d'entreprise, les favoris, etc. (Les favoris prennent en charge les favoris de n'importe quel chemin)",
    "webdav.config.pathAllowAll"     => "tous",
    "webdav.config.pathAllowSelf"    => "Disque réseau personnel",
    "webdav.user.morePath"           => "Monter plus d'emplacements",
    "webdav.config.logTitle"         => "Journal d'exécution",
    "webdav.config.logDesc"          => "Journal des demandes d'exécution WebDAV",
    "webdav.config.systemAutoMount"  => "Montage automatique du client",
    "webdav.config.systemAutoMountDesc" => "Lorsque le client PC est ouvert, webdav est automatiquement monté",
    "webdav.tips.https"              => "<b>https :</b> Il est recommandé d’utiliser https, car la transmission cryptée est plus sécurisée ;",
    "webdav.tips.upload"             => "<b>Limites de téléchargement :</b> Le nombre maximal de fichiers pris en charge dépend de la limite de téléchargement du serveur et du délai d'expiration. \n Vous pouvez le définir selon vos besoins ; Taille maximale recommandée : 500 Mo ; Délai d'expiration : 3 600 Mo ; <a href='https://doc.kodcloud.com/#/others/options' target='_blank'>En savoir plus</a>",
    "webdav.tips.auth"               => "<b>Lecture, écriture, modification et autres autorisations :</b> les autorisations de lecture et d'écriture sont exactement les mêmes que celles de la version Web ; étant donné que le protocole ne dispose d'aucun mécanisme de rapport d'erreurs, les opérations infructueuses sont fondamentalement équivalentes à l'absence d'autorisations.",
    "webdav.tips.uploadUser"         => "<b>Limites de téléchargement et de téléchargement :</b> le nombre maximal de fichiers pris en charge pour le téléchargement dépend de la limite de téléchargement du serveur et du délai d'expiration ; veuillez consulter l'administrateur pour la configuration spécifique du téléchargement du serveur.",
    "webdav.tips.use"                => "Mode d'emploi : Après avoir activé le service WebDAV, entrez dans le centre personnel pour le visualiser (vous devez actualiser la page pour que la configuration soit effective) ;",
    "webdav.tips.use3thAccount"      => "Si DingTalk ou Enterprise WeChat est activé, vous devez définir un mot de passe (vous pouvez vous connecter normalement avec votre compte et votre mot de passe) avant de pouvoir utiliser webdav.",
    "webdav.tips.configErr"          => "Votre serveur actuel ne prend pas en charge le mode PATH_INFO tel que l'accès /index.php/index ;\n En même temps, le paramètre d'en-tête Authorization ne peut pas être perdu ; sinon vous ne pourrez pas vous connecter ;\n <a href='http://doc.kodcloud.com/v2/#/help/pathInfo' target='_blank'>Apprenez à l'activer</a>",
    "webdav.help.title"              => "Comment utiliser",
    "webdav.help.connect"            => "Connectez-vous maintenant",
    "webdav.help.windows"            => "<b>Fenêtre :</b> Clic droit sur le bureau [Poste de travail/Cet ordinateur] - Connecter un lecteur réseau - Coller l'adresse webdav ci-dessus, cliquer sur Terminer - Saisir le mot de passe du compte ; \n<br/> Recommandé : <a href='https://www.raidrive.com/download' target='_blank'>RaiDrive</a> , plus puissant et plus compatible",
    "webdav.help.mac"                => "<b>Mac :</b> Clic droit sur le Finder - Se connecter au serveur - Collez l'adresse WebDAV ci-dessus, cliquez sur Connecter - Saisissez votre compte et votre mot de passe",
    "webdav.help.others"             => "<b>Autres clients et systèmes</b> : l'adresse est l'adresse webdav ci-dessus, et le compte et le mot de passe sont vos propres identifiants de connexion. La procédure est similaire. \n<br/> Recommandation d'appareil mobile Android et iOS : <a href='http://www.estrongs.com/' target='_blank'>ES File Explorer</a>",
    "webdav.help.windowsTips"        => "Lors de la première utilisation, vous devez annuler les restrictions de téléchargement et de HTTP. Après avoir téléchargé ce fichier, cliquez sur « Exécuter en tant qu'administrateur ».",
    "webdav.config.tab1"             => "Services WebDAV",
    "webdav.config.tab2"             => "Support de stockage",
    "webdav.config.mountWebdav"      => "Monter le stockage webdav",
    "webdav.config.mountWebdavDesc"  => "Après l'activation, il prend en charge le montage : ajoutez du stockage en arrière-plan - gestion du stockage, sélectionnez le type de stockage et sélectionnez webdav",
    "webdav.config.mountDetail1"     => "Prise en charge du montage d'autres serveurs WebDAV en tant que stockage local",
    "webdav.config.mountDetail2"     => "Peut monter webdav fourni par d'autres kodbox, plusieurs kodbox peuvent être interconnectés",
    "webdav.config.mountDetail3"     => "Lorsque le service de montage est fourni par Kodbox, le téléchargement et le téléchargement front-end sont directement transférés sans transfert de serveur"
);