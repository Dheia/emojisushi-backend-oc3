<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Volviendo a lo básico',
  ],
  'directory' => [
    'create_fail' => 'No es posible crear el directorio: :name',
  ],
  'file' => [
    'create_fail' => 'No es posible crear el archivo: :name',
  ],
  'page' => [
    'invalid_token' => [
      'label' => 'Token de seguridad invalido',
    ],
  ],
  'combiner' => [
    'not_found' => 'El archivo combinador \':name\' no se encuentra.',
  ],
  'system' => [
    'name' => 'Sistema',
    'menu_label' => 'Sistema',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Varios',
      'logs' => 'Registros',
      'mail' => 'Correo',
      'shop' => 'Tienda',
      'team' => 'Equipo',
      'users' => 'Usuarios',
      'system' => 'Sistema',
      'social' => 'Social',
      'events' => 'Eventos',
      'customers' => 'Clientes',
      'my_settings' => 'Mis Configuraciones',
      'notifications' => 'Notificaciones',
    ],
  ],
  'theme' => [
    'label' => 'Tema',
    'unnamed' => 'Tema sin nombre',
    'name' => [
      'label' => 'Nombre Tema',
      'help' => 'Nombre del tema por su código único. Por ejemplo, RainLab.Vanilla',
    ],
  ],
  'themes' => [
    'install' => 'Instalar temas',
    'search' => 'buscar temas para instalar...',
    'installed' => 'Temas Instalados',
    'no_themes' => 'No hay temas instalados desde el mercado.',
    'recommended' => 'Recomendado',
    'remove_confirm' => '¿Seguro que quieres eliminar este tema?',
  ],
  'plugin' => [
    'label' => 'Plugin',
    'unnamed' => 'Plugin sin nombre',
    'name' => [
      'label' => 'Nombre del Plugin',
      'help' => 'Nombra el plugin por su código único. por ejemplo, RainLab.Blog',
    ],
  ],
  'plugins' => [
    'enable_or_disable' => 'Activar o desactivar',
    'enable_or_disable_title' => 'Activar o Desactivar Plugins',
    'install' => 'Instalar plugins',
    'install_products' => 'Instalar productos',
    'search' => 'buscar plugins para instalar...',
    'installed' => 'Plugins Instalados',
    'no_plugins' => 'No hay plugins instalados desde el mercado.',
    'recommended' => 'Recomendado',
    'remove' => 'Eliminar',
    'refresh' => 'Recargar',
    'disabled_label' => 'Desactivar',
    'disabled_help' => 'Plugins que están deshabilitadas son ignorados por la aplicación.',
    'frozen_label' => 'Congele actualizaciones',
    'frozen_help' => 'Plugins que están congelados serán ignorados por el proceso de actualización.',
    'selected_amount' => 'Plugins seleccionado: :amount',
    'remove_confirm' => '¿Está seguro que quiere remover este plugin?',
    'remove_success' => 'Eliminado con éxito los plugins del sistema.',
    'refresh_confirm' => '¿Está seguro?',
    'refresh_success' => 'Refrescado con éxito los plugins en el sistema.',
    'disable_confirm' => '¿Está seguro?',
    'disable_success' => 'Plugins deshabilitados con éxito.',
    'enable_success' => 'Plugins activados con éxito.',
    'unknown_plugin' => 'El Plugin ha sido elimina del sistema de archivos.',
  ],
  'project' => [
    'attach' => 'Adjuntar Proyecto',
    'detach' => 'Separar Proyecto',
    'none' => 'Ninguno',
    'id' => [
      'missing' => 'Especifique un ID del proyecto para usar.',
    ],
    'detach_confirm' => '¿Está seguro de que desea separar este proyecto?',
    'unbind_success' => 'Proyecto ha sido separado con éxito.',
  ],
  'settings' => [
    'search' => 'Buscar',
  ],
  'mail' => [
    'log_file' => 'Archivo Registro',
    'menu_label' => 'Configuración del correo',
    'menu_description' => 'Administrar la configuración de correo electrónico.',
    'general' => 'General',
    'method' => 'Método de correo',
    'sender_name' => 'Nombre del remitente',
    'sender_email' => 'Correo del remitente',
    'smtp' => 'SMTP',
    'smtp_address' => 'Dirección SMTP',
    'smtp_authorization' => 'autorización requerida de SMTP',
    'smtp_authorization_comment' => 'Utilice esta opción si el servidor SMTP requiere autorización.',
    'smtp_username' => 'Nombre de usuario',
    'smtp_password' => 'Contraseña',
    'smtp_port' => 'Puerto SMTP',
    'smtp_ssl' => 'Conexión SSL requerida',
    'smtp_encryption' => 'protocolo SMTP encryptado',
    'smtp_encryption_none' => 'Sin encryptación',
    'smtp_encryption_tls' => 'TLS',
    'sendmail' => 'Sendmail',
    'sendmail_path' => 'Directorio de Sendmail',
    'sendmail_path_comment' => 'Por favor, especifique la ruta de acceso del programa sendmail.',
    'mailgun' => 'Mailgun',
    'mailgun_domain' => 'Dominio Mailgun',
    'mailgun_domain_comment' => 'Por favor, especifique el nombre de dominio Mailgun.',
    'mailgun_secret' => 'Mailgun secret',
    'mailgun_secret_comment' => 'Introduzca su key de Mailgun API.',
    'mandrill' => 'Mandrill',
    'mandrill_secret' => 'Mandrill secret',
    'mandrill_secret_comment' => 'Introduzca su key de Mandrill API.',
    'ses' => 'SES',
    'ses_key' => 'SES key',
    'ses_key_comment' => 'Introduzca su key de SES API',
    'ses_secret' => 'SES secret',
    'ses_secret_comment' => 'Introduzca su key de SES API',
    'ses_region' => 'Región SES',
    'ses_region_comment' => 'Introduzca su región SES (e.g. us-east-1)',
    'drivers_hint_header' => 'Drivers no instalados',
    'drivers_hint_content' => 'Este método de correo electrónico requiere que el plugin ":plugin" este instalado antes de poder enviar correo.',
  ],
  'mail_templates' => [
    'menu_label' => 'Plantillas de Correo',
    'menu_description' => 'Modificar las plantillas de correo que se envían a los usuarios y administradores, administrar diseños de correo electrónico',
    'new_template' => 'Nueva plantilla',
    'new_layout' => 'Nueva Disposición',
    'template' => 'Plantilla',
    'templates' => 'Plantillas',
    'menu_layouts_label' => 'Disposición del Mail',
    'layout' => 'Disposición',
    'layouts' => 'Disposiciones',
    'no_layout' => '-- Sin disposición --',
    'name' => 'Nombre',
    'name_comment' => 'Nombre único utilizado para referirse a esta plantilla',
    'code' => 'Código',
    'code_comment' => 'Código único utilizado para referirse a esta plantilla ',
    'subject' => 'Asunto',
    'subject_comment' => 'Correo asunto del mensaje',
    'description' => 'Descripción',
    'content_html' => 'HTML',
    'content_css' => 'CSS',
    'content_text' => 'Texto plano',
    'test_send' => 'Enviar mensaje de prueba',
    'test_success' => 'El mensaje de prueba enviado.',
    'test_confirm' => 'Envio de Mensaje de prueba a :email. Continuar?',
    'creating' => 'Creando Plantilla...',
    'creating_layout' => 'Creando Diseño...',
    'saving' => 'Salvando Plantilla...',
    'saving_layout' => 'Salvando Diseño...',
    'delete_confirm' => 'Borrar esta plantilla?',
    'delete_layout_confirm' => 'Borrar este diseño?',
    'deleting' => 'Borrando Plantilla...',
    'deleting_layout' => 'Borrando Diseño...',
    'sending' => 'Enviando mensaje de prueba...',
    'return' => 'Volver a lista de plantillas',
    'options' => 'Opciones',
    'disable_auto_inline_css' => 'Deshabilitar CSS en línea automático',
  ],
  'mail_brand' => [
    'menu_label' => 'Branding de Correo',
    'menu_description' => 'Modificar los colores y apariencia de las plantillas de correo.',
    'page_title' => 'Personalizar apariencia del correo',
    'sample_template' => [
      'heading' => 'Encabezado',
      'paragraph' => 'Este es un párrafo rellenado con Lorem Ipsum y un enlace. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
      'table' => [
        'item' => 'Item',
        'description' => 'Descripción',
        'price' => 'Precio',
        'centered' => 'Centrado',
        'right_aligned' => 'Alineado-A-La-Derecha',
      ],
      'buttons' => [
        'primary' => 'Botón Principal',
        'positive' => 'Botón Positivo',
        'negative' => 'Botón Negativo',
      ],
      'panel' => '¿Este panel es increíble o qué?',
      'more' => 'Algo más de texto',
      'promotion' => 'Código de cupón: OCTOBER',
      'subcopy' => 'Este es el subcopy del correo',
      'thanks' => 'Gracias',
    ],
    'fields' => [
      '_section_background' => 'Fondo',
      'body_bg' => 'Fondo del cuerpo',
      'content_bg' => 'Fondo del contenido',
      'content_inner_bg' => 'Fondo del contenido interior',
      '_section_buttons' => 'Botones',
      'button_text_color' => 'Color del texto del botón',
      'button_primary_bg' => 'Fondo del botón Principal',
      'button_positive_bg' => 'Fondo del botón Positivo',
      'button_negative_bg' => 'Fondo del botón Negativo',
      '_section_type' => 'Tipografía',
      'header_color' => 'Color del Enzabezado',
      'heading_color' => 'Color de Encabezados',
      'text_color' => 'Color del Texto',
      'link_color' => 'Color del Enlace',
      'footer_color' => 'Color del pie de página',
      '_section_borders' => 'Bordes',
      'body_border_color' => 'Color del borde del cuerpo',
      'subcopy_border_color' => 'Color del borde del subcopy',
      'table_border_color' => 'Color del borde de la tabla',
      '_section_components' => 'Componentes',
      'panel_bg' => 'Fondo del Panel',
      'promotion_bg' => 'Fondo de Promoción',
      'promotion_border_color' => 'Color del borde de Promoción',
    ],
  ],
  'install' => [
    'plugin_label' => 'Instalar Plugin',
    'theme_label' => 'Instalar Theme',
  ],
  'updates' => [
    'plugin_name' => 'Nombre',
    'plugin_code' => 'Código',
    'plugin_description' => 'Descripción',
    'plugin_version' => 'Versión',
    'plugin_author' => 'Autor',
    'plugin_not_found' => 'Plugin not found',
    'core_build' => 'Versión :build',
    'core_build_help' => 'Última versión está disponible.',
    'themes' => 'Temas',
    'plugin_version_none' => 'Nuevo plugin',
    'plugin_current_version' => 'Versión actual',
    'theme_new_install' => 'Intalación de nuevo tema.',
    'theme_extracting' => 'Descomprimiendo tema: :name',
    'update_label' => 'Actualizando software',
    'update_loading' => 'Cargando actualizaciones disponibles...',
    'force_label' => 'Forzar actualización',
    'found' => [
      'label' => 'Se encontraron nuevas actualizaciones!',
      'help' => 'Click Actualizar software para comenzar con el proceso de actualización.',
    ],
    'none' => [
      'label' => 'No hay actualizaciones',
      'help' => 'No se encontraron nuevas actualizaciones disponibles.',
    ],
    'important_action' => [
      'empty' => 'Seleccione acción',
      'confirm' => 'Confirmar actualización',
      'skip' => 'Saltar este plugin (sólo una vez)',
      'ignore' => 'Saltar este plugin (siempre)',
    ],
    'important_action_required' => 'Acción requerida',
    'important_view_guide' => 'Ver guía de actualización',
    'important_view_release_notes' => 'Ver notas de la versión',
    'important_alert_text' => 'Algunas actualizaciones necesitan su atención.',
    'details_title' => 'Detalles plugin',
    'details_view_homepage' => 'Ver página de inicio',
    'details_changelog' => 'Registro de cambios',
    'details_changelog_missing' => 'No hay registro de cambios proporcionado.',
    'details_current_version' => 'Versión actual',
    'details_author' => 'Autor',
  ],
  'server' => [
    'connect_error' => 'Error al conectar con el servidor.',
    'response_not_found' => 'El servidor de actualización no se pudo encontrar.',
    'response_invalid' => 'Respuesta no válida del servidor.',
    'response_empty' => 'Respuesta vacía desde el servidor.',
    'file_error' => 'El servidor no pudo entregar el paquete.',
    'file_corrupt' => 'El archivo se encuentra dañado.',
  ],
  'behavior' => [
    'missing_property' => 'Clase :class debe definir la propiedad $:property utilizada por :behavior comportamiento.',
  ],
  'config' => [
    'not_found' => 'No se puede encontrar el archivo de configuración :file definido por :location.',
    'required' => 'Configuración utilizada en :location debe proporcionar un valor. \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'No se puede extraer el archivo \':file\'.',
  ],
  'event_log' => [
    'hint' => 'Este registro muestra una lista de los posibles errores que se producen en la aplicación, como las excepciones y la información de depuración.',
    'menu_label' => 'Registro de eventos',
    'menu_description' => 'Ver los logs de registro del sistema.',
    'empty_link' => 'Vaciar el registro de eventos',
    'empty_loading' => 'Borrando los registros...',
    'empty_success' => 'Los registros fueron borrados',
    'return_link' => 'Regresar al registro de eventos',
    'id' => 'ID',
    'id_label' => 'ID del Evento',
    'created_at' => 'Fecha y Hora',
    'message' => 'Mensaje',
    'level' => 'Nivel',
    'preview_title' => 'Evento',
  ],
  'request_log' => [
    'hint' => 'Este registro muestra una lista de las peticiones del navegador que pueden requerir atención. Por ejemplo, si un usuario abre una página que no se puede encontrar, se crea un registro con el código de estado 404.',
    'menu_label' => 'Registros de peticiones',
    'menu_description' => 'Ver listado de redirecciones con errores y Paginas no encontradas (404).',
    'empty_link' => 'Vaciar el registro de acceso',
    'empty_loading' => 'Vaciando los registros...',
    'empty_success' => 'Los registros fueron vaciados...',
    'return_link' => 'Regresar al registro de peticiones',
    'id' => 'ID',
    'id_label' => 'ID Log',
    'count' => 'Contador',
    'referer' => 'Referencia',
    'url' => 'URL',
    'status_code' => 'Estado',
    'preview_title' => 'Petición',
  ],
  'permissions' => [
    'name' => 'Sistema',
    'manage_system_settings' => 'Gestionar la configuración del sistema',
    'manage_software_updates' => 'Gestionar actualización de software',
    'access_logs' => 'Ver registros del sistema',
    'manage_mail_templates' => 'Gestionar plantillas de correo',
    'manage_mail_settings' => 'Gestionar la configuración del correo',
    'manage_other_administrators' => 'Gestionar otros administradores',
    'manage_preferences' => 'Gestionar preferencias back-end',
    'manage_editor' => 'Gestionar preferencias editor código',
    'manage_branding' => 'Perzonalizar el back-end',
  ],
  'log' => [
    'menu_label' => 'Configuración de Logs',
    'menu_description' => 'Especifique cuáles áreas deben realizar registros.',
    'default_tab' => 'Registros',
    'log_events' => 'Registrar eventos de sistema',
    'log_events_comment' => 'Almacenar eventos de sistema en la base de datos además del registro de archivo.',
    'log_requests' => 'Registrar malas solicitudes',
    'log_requests_comment' => 'Solicitudes de navegadores que puedan requerir atención, como errores 404.',
    'log_theme' => 'Registrar cambios en el tema',
    'log_theme_comment' => 'Cuando se realizan cambios al tema utilizando el backend.',
  ],
  'media' => [
    'invalid_path' => 'Ruta de archivo especificada no válida: \':path\'.',
    'folder_size_items' => 'elemento(s)',
  ],
];
