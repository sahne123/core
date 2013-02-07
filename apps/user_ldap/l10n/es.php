<?php $TRANSLATIONS = array(
"Failed to delete the server configuration" => "No se pudo borrar la configuración del servidor",
"The configuration is valid and the connection could be established!" => "La configuración es válida y la conexión puede establecerse!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "La configuración es válida, pero falló el Enlace. Por favor, compruebe la configuración del servidor y las credenciales.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "La configuración no es válida. Por favor, busque en el log de ownCloud para más detalles.",
"Deletion failed" => "Falló el borrado",
"Take over settings from recent server configuration?" => "Hacerse cargo de los ajustes de configuración del servidor reciente?",
"Keep settings?" => "Mantener la configuración?",
"Cannot add server configuration" => "No se puede añadir la configuración del servidor",
"Connection test succeeded" => "La prueba de conexión fue exitosa",
"Connection test failed" => "La prueba de conexión falló",
"Do you really want to delete the current Server Configuration?" => "¿Realmente desea eliminar la configuración actual del servidor?",
"Confirm Deletion" => "Confirmar eliminación",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Advertencia:</b> Los Apps user_ldap y user_webdavauth son incompatibles.  Puede que experimente un comportamiento inesperado. Pregunte al administrador del sistema para desactivar uno de ellos.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Advertencia:</b> El módulo LDAP de PHP no está instalado, el sistema no funcionará. Por favor consulte al administrador del sistema para instalarlo.",
"Server configuration" => "Configuración del Servidor",
"Add Server Configuration" => "Agregar configuracion del servidor",
"Host" => "Máquina",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Puede omitir el protocolo, excepto si requiere SSL. En ese caso, empiece con ldaps://",
"Base DN" => "DN base",
"One Base DN per line" => "Un DN Base por línea",
"You can specify Base DN for users and groups in the Advanced tab" => "Puede especificar el DN base para usuarios y grupos en la pestaña Avanzado",
"User DN" => "DN usuario",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "El DN del usuario cliente con el que se hará la asociación, p.ej. uid=agente,dc=ejemplo,dc=com. Para acceso anónimo, deje DN y contraseña vacíos.",
"Password" => "Contraseña",
"For anonymous access, leave DN and Password empty." => "Para acceso anónimo, deje DN y contraseña vacíos.",
"User Login Filter" => "Filtro de inicio de sesión de usuario",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Define el filtro a aplicar cuando se ha realizado un login. %%uid remplazrá el nombre de usuario en el proceso de login.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "usar %%uid como placeholder, ej: \"uid=%%uid\"",
"User List Filter" => "Lista de filtros de usuario",
"Defines the filter to apply, when retrieving users." => "Define el filtro a aplicar, cuando se obtienen usuarios.",
"without any placeholder, e.g. \"objectClass=person\"." => "Sin placeholder, ej: \"objectClass=person\".",
"Group Filter" => "Filtro de grupo",
"Defines the filter to apply, when retrieving groups." => "Define el filtro a aplicar, cuando se obtienen grupos.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "Con cualquier placeholder, ej: \"objectClass=posixGroup\".",
"Connection Settings" => "Configuracion de coneccion",
"Configuration Active" => "Configuracion activa",
"When unchecked, this configuration will be skipped." => "Cuando deseleccione, esta configuracion sera omitida.",
"Port" => "Puerto",
"Backup (Replica) Host" => "Host para backup (Replica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Dar un host de copia de seguridad opcional. Debe ser una réplica del servidor principal LDAP / AD.",
"Backup (Replica) Port" => "Puerto para backup (Replica)",
"Disable Main Server" => "Deshabilitar servidor principal",
"When switched on, ownCloud will only connect to the replica server." => "Cuando se inicie, ownCloud unicamente estara conectado al servidor replica",
"Use TLS" => "Usar TLS",
"Do not use it for SSL connections, it will fail." => "No usarlo para SSL, habrá error.",
"Case insensitve LDAP server (Windows)" => "Servidor de LDAP sensible a mayúsculas/minúsculas (Windows)",
"Turn off SSL certificate validation." => "Apagar la validación por certificado SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Si la conexión sólo funciona con esta opción, importe el certificado SSL del servidor LDAP en su servidor ownCloud.",
"Not recommended, use for testing only." => "No recomendado, sólo para pruebas.",
"in seconds. A change empties the cache." => "en segundos. Un cambio vacía la cache.",
"Directory Settings" => "Configuracion de directorio",
"User Display Name Field" => "Campo de nombre de usuario a mostrar",
"The LDAP attribute to use to generate the user`s ownCloud name." => "El atributo LDAP a usar para generar el nombre de usuario de ownCloud.",
"Base User Tree" => "Árbol base de usuario",
"One User Base DN per line" => "Un DN Base de Usuario por línea",
"User Search Attributes" => "Atributos de la busqueda de usuario",
"Optional; one attribute per line" => "Opcional; un atributo por linea",
"Group Display Name Field" => "Campo de nombre de grupo a mostrar",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "El atributo LDAP a usar para generar el nombre de los grupos de ownCloud.",
"Base Group Tree" => "Árbol base de grupo",
"One Group Base DN per line" => "Un DN Base de Grupo por línea",
"Group Search Attributes" => "Atributos de busqueda de grupo",
"Group-Member association" => "Asociación Grupo-Miembro",
"Special Attributes" => "Atributos especiales",
"in bytes" => "en bytes",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Vacío para el nombre de usuario (por defecto). En otro caso, especifique un atributo LDAP/AD.",
"Help" => "Ayuda"
);
