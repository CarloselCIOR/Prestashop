<?php

/* __string_template__c2a0ad3754e14675afbbd3904296ad4e4e9be433a5b42804bd4a1cf25ff02685 */
class __TwigTemplate_3d54b841670a616724ae6341d20540cd48b323f6806a7a733f275e6aac169768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"mx\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_1.7.5.1/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_1.7.5.1/img/app_icon.png\" />

<title>producto • Carlos Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'mx';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'MX';
    var _PS_VERSION_ = '1.7.5.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Un nuevo pedido se ha colocado en su tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en su tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer el mensaje';
    var token = 'e747e4f254152ed975fc4b563a4c2b78';
    var token_admin_orders = '7c1f7d0210450b2032ab966ec94a95e6';
    var token_admin_customers = 'cc44e5de2f268d7eb53ce9cfd6df12dd';
    var token_admin_customer_threads = '5cdb036f611c51a0df1ed67f3844daa4';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '4d74d1796b1ce495697fc294a7ae7848';
    var choose_language_translate = 'Elegir idioma';
    var default_language = '1';
    var admin_modules_link = '/prestashop_1.7.5.1/admin469ssd775/index.php/improve/modules/catalog/recommended?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Actualización con éxito';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor, verifica tus datos de acceso y tu conexión a Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/prestashop_1.7.5.1/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/admin469ssd775/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_1.7.5.1/admin469ssd775/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop_1.7.5.1\\/admin469ssd775\\/\";
var baseDir = \"\\/prestashop_1.7.5.1\\/\";
var currency = {\"iso_code\":\"MXN\",\"sign\":\"\$\",\"name\":\"peso mexicano\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/admin469ssd775/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/admin.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/tools.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/admin469ssd775/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_1.7.5.1/admin469ssd775/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminGamification&token=f29bff673e0d5cf5be64571497d931c6';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-mx adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminDashboard&amp;token=ede7d2822662243face5e596aa5c575c\"></a>
    <span id=\"shop_version\">1.7.5.1</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b6dad031966dfa9e4487b4be00404094\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php/improve/modules/manage?token=faf0a541298e2cd780d09d31760432f2\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCategories&amp;addcategory&amp;token=73f083d7217919d63ec7f93f04611e48\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b5d82f09bea758249aff328c0f218409\"
                 data-item=\"Nuevo cupón\"
      >Nuevo cupón</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php/sell/catalog/products/new?token=faf0a541298e2cd780d09d31760432f2\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminOrders&amp;token=7c1f7d0210450b2032ab966ec94a95e6\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"11\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/19\"
        data-post-link=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminQuickAccesses&token=6b3ddf72dff7b23606769d93b6618d8c\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Agregar página actual al Acceso Rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminQuickAccesses&token=6b3ddf72dff7b23606769d93b6618d8c\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminSearch&amp;token=1e1483937bae901ac2f1da5546d0c3a0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        En todas partes
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"En todas partes\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> En todas partes</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BUSCAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop_1.7.5.1/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Ha comprobado recientemente su tipo de cambio?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              Se encuentra activo en las redes sociales últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos sus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/carloselcior%40gmail.com.jpg\" />
      <span>Carlos Ismael Orozco Rios</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=4d74d1796b1ce495697fc294a7ae7848\">
      <i class=\"material-icons\">settings_applications</i>
      Tu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminLogin&amp;logout=1&amp;token=9dfaf00d3ff3dd04983db7ac187d467b\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminDashboard&amp;token=ede7d2822662243face5e596aa5c575c\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Panel de control</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Ventas</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminOrders&amp;token=7c1f7d0210450b2032ab966ec94a95e6\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminOrders&amp;token=7c1f7d0210450b2032ab966ec94a95e6\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/sell/orders/invoices/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminSlip&amp;token=6be979c03a8719fccd16e6d3f777f3c8\" class=\"link\"> Notas de Crédito
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/sell/orders/delivery-slips/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCarts&amp;token=a775bbe9c9c06ec342ff0cd6af4a9c1e\" class=\"link\"> Carros de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/sell/catalog/products?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/sell/catalog/products?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCategories&amp;token=73f083d7217919d63ec7f93f04611e48\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminTracking&amp;token=32369b447d96e45e18a343f67af7aa58\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminAttributesGroups&amp;token=905c1546983525ac557983377576d784\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminManufacturers&amp;token=c3297c006c183be92f0afd4b73789dc3\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminAttachments&amp;token=f145a217d5e31fb70349ca553f61e9ab\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCartRules&amp;token=b5d82f09bea758249aff328c0f218409\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/sell/stocks/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCustomers&amp;token=cc44e5de2f268d7eb53ce9cfd6df12dd\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCustomers&amp;token=cc44e5de2f268d7eb53ce9cfd6df12dd\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminAddresses&amp;token=03d10c140f1b185a49116811c4c9da35\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCustomerThreads&amp;token=5cdb036f611c51a0df1ed67f3844daa4\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio a Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCustomerThreads&amp;token=5cdb036f611c51a0df1ed67f3844daa4\" class=\"link\"> Servicio a Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminOrderMessage&amp;token=3027ceda6a12cbcae98b948f6bc8704f\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminReturn&amp;token=7528d87d8dc596b83e6e272b24477b08\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminStats&amp;token=b6dad031966dfa9e4487b4be00404094\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Mejoras</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminPsMboModule&amp;token=3e900cffc330a45e8a9b345f8b126b35\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminPsMboModule&amp;token=3e900cffc330a45e8a9b345f8b126b35\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/modules/manage?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminThemes&amp;token=6244474ee0020ec382dfe087725cb10f\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminThemes&amp;token=6244474ee0020ec382dfe087725cb10f\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminPsMboTheme&amp;token=3c3ff01c748e5459699cf111910fd3e9\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCmsContent&amp;token=81eabeb982e0af0f8f003f3c29612ab1\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/design/modules/positions/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminImages&amp;token=cb0087f57bbe6b47da9d71d40ef90c62\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminLinkWidget&amp;token=05f0cdbe0a5e708a6e434ed0e1ec07d7\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCarriers&amp;token=88ac69ecae6da9c362030395616a9581\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminCarriers&amp;token=88ac69ecae6da9c362030395616a9581\" class=\"link\"> Paqueterias
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/shipping/preferences?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/payment/payment_methods?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/payment/payment_methods?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/payment/preferences?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/international/localization/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/international/localization/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminZones&amp;token=625eb527c79f0861bdfdcd042a151eae\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminTaxes&amp;token=10b6517634153f9bc85f9d4ce63cb39a\" class=\"link\"> IVAs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/improve/international/translations/settings?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/shop/preferences/preferences?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Configuración de la Tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/shop/preferences/preferences?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/shop/order-preferences/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/shop/product-preferences/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/shop/customer-preferences/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Configuración de Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminContacts&amp;token=87c68669d3c75362435e3ae53b199460\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/shop/seo-urls/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminSearchConf&amp;token=18f13732a4dfc94f393342f33dfd915a\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminGamification&amp;token=f29bff673e0d5cf5be64571497d931c6\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/advanced/system-information/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/advanced/system-information/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/advanced/performance/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/advanced/administration/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/advanced/emails/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/advanced/import/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminEmployees&amp;token=4d74d1796b1ce495697fc294a7ae7848\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminRequestSql&amp;token=21a48c25d62bef05330172a900448e44\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/prestashop_1.7.5.1/admin469ssd775/index.php/configure/advanced/logs/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminWebservice&amp;token=e8a6f16aafca886d373e588d54d3f8db\" class=\"link\"> Servicios Web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      ¡Laza tu tienda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resumen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Detener el módulo Primeros pasos</a>
  </div>
</div>

</nav>

<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar \">

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u00a1Bienvenido a tu tienda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u00a1Hola! Me llamo Preston y estoy aqu\\u00ed para mostrarle todo esto.<\\/p>\\n    <p>Descubrir\\u00e1 algunos pasos esenciales antes de poder lanzar su tienda:\\n    Crea tu primer producto, personaliza tu tienda, configura pagos y env\\u00edos...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u00a1Vamos a empezar!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Despu\\u00e9s<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Iniciar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php?controller=AdminDashboard&token=ede7d2822662243face5e596aa5c575c\"}]},{\"title\":\"Vamos a crear tu primer producto\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 quiere contar sobre el producto? Piense en lo que sus clientes quieren saber.\",\"2\":\"A\\u00f1ada informaci\\u00f3n clara y atractiva. No se preocupe, podr\\u00e1 editarlo m\\u00e1s tarde :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dale a tu producto un nombre atractivo.\",\"options\":[\"savepoint\"],\"page\":[\"\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php\\/sell\\/catalog\\/products\\/new?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Complete los detalles esenciales en esta pesta\\u00f1a. Las otras pesta\\u00f1as son para informaci\\u00f3n m\\u00e1s avanzada.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1A\\u00f1ada una o m\\u00e1s im\\u00e1genes para que su producto se vea tentador!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00bfA qu\\u00e9 precio quiere venderlo?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u00a1Genial! Acaba de crear su primer producto. Se ve bien, \\u00bfverdad?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Dele a tu tienda su propia identidad\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere que se vea su tienda? \\u00bfQu\\u00e9 la hace tan especial?\",\"2\":\"Personalice su tema o escoja el mejor dise\\u00f1o de nuestro cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u00a1Una buena manera de empezar es a\\u00f1adiendo su propio logotipo aqu\\u00ed!\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php?controller=AdminThemes&token=6244474ee0020ec382dfe087725cb10f\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si quiere algo realmente especial, \\u00a1eche un vistazo al cat\\u00e1logo de temas!\",\"page\":\"\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Prepara tu tienda para recibir pagos\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere que le paguen sus clientes?\",\"2\":\"Adapte su oferta al mercado: \\u00a1a\\u00f1ada los m\\u00e9todos de pago m\\u00e1s populares para sus clientes!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estos m\\u00e9todos de pago ya est\\u00e1n disponibles para tus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php\\/improve\\/payment\\/payment_methods?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1Y puede escoger y a\\u00f1adir otros m\\u00e9todos de pago desde aqu\\u00ed!\",\"page\":\"\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php\\/improve\\/payment\\/payment_methods?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Elija sus soluciones de env\\u00edo\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere enviar sus productos?\",\"2\":\"\\u00a1Seleccione las soluciones de env\\u00edo que mejor se adapten a sus clientes! Cree su propio transportista o a\\u00f1ada un m\\u00f3dulo listo para usar.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqu\\u00ed est\\u00e1n los m\\u00e9todos de env\\u00edo disponibles en su tienda hoy.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php?controller=AdminCarriers&token=88ac69ecae6da9c362030395616a9581\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Puede ofrecer m\\u00e1s opciones de env\\u00edo configurando transportistas adicionales\",\"page\":\"http:\\/\\/localhost\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php?controller=AdminCarriers&token=88ac69ecae6da9c362030395616a9581\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Mejore su tienda con m\\u00f3dulos\",\"subtitle\":{\"1\":\"A\\u00f1ada nuevas caracter\\u00edsticas y gestione las existentes gracias a los m\\u00f3dulos.\",\"2\":\"Algunos m\\u00f3dulos ya est\\u00e1n preinstalados, otros son m\\u00f3dulos gratuitos o de pago - \\u00a1navega por nuestra selecci\\u00f3n y descubre los que est\\u00e1n disponibles!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Descubra nuestra selecci\\u00f3n de m\\u00f3dulos en la primera pesta\\u00f1a. Administre sus m\\u00f3dulos en la segunda y siga las notificaciones en la tercera pesta\\u00f1a.\",\"options\":[\"savepoint\"],\"page\":\"\\/prestashop_1.7.5.1\\/admin469ssd775\\/index.php\\/improve\\/modules\\/catalog?_token=WlugcoGl_2DI6R1tjir58wIcs88FUR_w5hsSB7EsZFg\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00a1Es su turno!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Has visto lo esencial, pero hay mucho m\\u00e1s por explorar.<br \\/>\\n          Algunos recursos pueden ayudarle a ir m\\u00e1s lejos:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Gu\\u00eda de principiante<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Foro<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Entrenamiento<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">V\\u00eddeo tutorial<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estoy listo<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminWelcome&token=9e5eda1fc868ff709d5e97103aef1b52\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>¡Ey! ¿Estás perdido?</p>    <p>Para continuar, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Si quiere detener el tutorial, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Salir del tutorial de bienvenida</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Paso <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Siguiente</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1088
        $this->displayBlock('content_header', $context, $blocks);
        // line 1089
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1090
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1091
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1092
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Módulos y Servicios recomendados</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utilice una computadora de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/prestashop_1.7.5.1/admin469ssd775/index.php?controller=AdminDashboard&amp;token=ede7d2822662243face5e596aa5c575c\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Volver
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-MX&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/mx/login?email=carloselcior%40gmail.com&amp;firstname=Carlos+Ismael&amp;lastname=Orozco+Rios&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_1.7.5.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-MX&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop_1.7.5.1/admin469ssd775/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el marketplace de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tiene una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubra el poder de PrestaShop Addons! Explore el Marketplace oficiadl de Prestashop y encuentre más de 3 500 módulos innovadores y temas para optimizar sus ratios de conversión, incrementar el tráfico, fidelizar a sus clientes y maximizar su productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectar con PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/mx/forgot-your-password\">Olvidé mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/mx/login?email=carloselcior%40gmail.com&amp;firstname=Carlos+Ismael&amp;lastname=Orozco+Rios&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_1.7.5.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-MX&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCree una cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1215
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1088
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1089
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1090
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1091
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1215
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__c2a0ad3754e14675afbbd3904296ad4e4e9be433a5b42804bd4a1cf25ff02685";
    }

    public function getDebugInfo()
    {
        return array (  1294 => 1215,  1289 => 1091,  1284 => 1090,  1279 => 1089,  1274 => 1088,  1265 => 84,  1257 => 1215,  1132 => 1092,  1129 => 1091,  1126 => 1090,  1123 => 1089,  1121 => 1088,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__c2a0ad3754e14675afbbd3904296ad4e4e9be433a5b42804bd4a1cf25ff02685", "");
    }
}
