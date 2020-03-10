<?php defined('BASEPATH') OR exit('No direct script access allowed');

    /** ROTAS DEFAULT **/
    $route['default_controller']   = 'DefaultController';
    $route['404_override']         = 'ErrorController';
    $route['translate_uri_dashes'] = false;

    /** ROTAS PUBLICAS **/
    $route['home']                          = 'public/HomeController';
    $route['home/(:any)']                   = 'public/HomeController/index';
    $route['novidades']                     = 'public/NewsController';
    $route['novidades/(:any)']              = 'public/NewsController/getThis/$1';
    $route['contato']                       = 'public/ContactController/index';
    $route['contato/(:any)']                = 'public/ContactController/index';
    $route['cursos']                        = 'public/CoursesController';
    $route['cursos/(:any)']                 = 'public/CoursesController/getThis/$1';
    $route['posgraduacoes']                 = 'public/PostgraduationsController';
    $route['posgraduacoes/(:any)']          = 'public/PostgraduationsController/getThis/$1';
    $route['parcerias']                     = 'public/PartnersController'; 
    $route['parcerias/(:any)']              = 'public/PartnersController/getThis/$1';
    $route['matricula']                     = 'public/RegistrationController';
    $route['matricula/(:any)']              = 'public/RegistrationController/index';
    $route['enviar_formulario']             = 'public/ContactController/enviar_formulario';
    $route['enviar_formulario_matricula']   = 'public/RegistrationController/enviar_formulario_matricula';
    $route['enviar_formulario_novidades']   = 'public/HomeController/enviar_formulario_novidades';
    $route['galeria']                       = 'public/GalleryController/index';
    $route['sobre-loremipsum']                    = 'public/AboutController';

    /** ROTAS PRIVATE **/
    $route['admin']                   = 'private/LoginController';
    $route['admin/logout']            = 'private/LoginController/logout';
    $route['admin/users']             = 'private/UsersController';
    $route['admin/logs']              = 'private/LogsController';
    $route['admin/home']              = 'private/HomeController';
    $route['admin/banners']           = 'private/BannersController';
    $route['admin/companies']         = 'private/CompaniesController';
    $route['admin/portfolios']        = 'private/PortfoliosController';
    $route['admin/funfacts']          = 'private/FunfactsController';
    $route['admin/servicos']          = 'private/ServicesController';
    $route['admin/equipes']           = 'private/TeamsController';
    $route['admin/news']              = 'private/NewsController';
    $route['admin/courses']           = 'private/CoursesController';
    $route['admin/partners']          = 'private/PartnersController';
    $route['admin/postgraduations']   = 'private/PostgraduationsController';
    $route['admin/photos']            = 'private/PhotosController';
    $route['admin/testimonials']      = 'private/TestimonialsController';
    $route['admin/about']             = 'private/AboutController';