<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\V1\Proyectos\Proyecto;
use App\Models\V1\Proyectos\ProyectosImage;
use Carbon\Carbon;
class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        


    	########################################################################################################

        /*$project = Proyecto::create([
        	'tool' => 'PHP',
        	'title' => 'Envíos Venezuela',
        	'description' => '
        	<h5 style="color:green">PHP + Bootstrap</h5>
        	<br>Sitio web de Paquetería Hecho en Php. Bootstrap se utilizó para el desarrollo del Frontend tanto el lado del cliente como el lado del administrador.<br>
        	Envíos Venezuela es una plataforma de compra con pasarela de pago Redsys<br>
        	- PHP.<br>
        	- Bootstrap.<br>
        	- Jquery.<br>',
        	'url' => 'enviosvenezuela.es',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'enviosvenezuela.PNG',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);*/






















 		########################################################################################################
        


        #Megatodo
 		$project = Proyecto::create([
        	'tool' => 'LARAVEL',
        	'title' => 'Ecommerce Multiseller Megatodo',
        	'description' => '
        	<h5 style="color:green">Laravel + Bootstrap + VUE + Vuex + Vuetify</h5>
        	<br>
        	Megatodo es una plataforma de ventas multi tienda desarrollada con las Tecnologías Laravel Vue y Python.<br>
        	Carrito de compras <br>
        	Pasarelas de pago Redsys, Paypal y Transferencia Bancaria<br>
        	
        	-Api Rest elaborada con laravel.<br>
        	-Python, para cubrir algunas fases del desarrollo de la Api<br>
        	-Frontent hecho en base a Vue + Vuetify + Vuex.<br>
        	 ',

        	'url' => 'megatodo.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'megatodo.jpg',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);

        #SteakNauitilus
        $project = Proyecto::create([
            'tool' => 'LARAVEL',
            'title' => 'Ecommerce Steak Market Nautilus',
            'description' => '
            <h5 style="color:green">Laravel  + Vue + Vuex + Nuxt</h5>
            <br>
            Steak Market Nautilus, es una Ecomerce realizada con las Tecnologías Laravel, Vue y Nuxt. <br>
            Se trabajo con Pasarelas de pago, Paypal, Módulo de Transferencia Bancaria y Api Mercado Pago<br>
            
            -Api Rest elaborada con laravel.<br>
            -Frontent hecho en base a Vue y Nuxt.<br>
             ',

            'url' => 'demo.tusteak.com',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'steak_market_nautilus.png',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,

        ]);

         #Uhomie
        $project = Proyecto::create([
            'tool' => 'LARAVEL',
            'title' => 'Uhomie',
            'description' => '
            <h5 style="color:green">Laravel  + Vue + Materialize</h5>
            <br>
            Uhomie, es un sistema de Alquiler, Renta, Publicación y venta de Propiedades <br>
            El sistema cuenta con una variadad de módulos, con un panel de administración que permite manejar, a los usuarios y un pequeño sistema de comercio para las ventas de las propiedades.<br>
            
            -Api  elaborada con laravel.<br>
            -Frontent hecho en base a blade y vue<br>
            -<a href="uhomie.co">Sistema de Colombia</a>
            -<a href="uhomie.cl">Sistema de Chile</a>',


            'url' => 'uhomie.cl',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'uhomie.PNG',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,

        ]);






        #Fidias Gold
        $project = Proyecto::create([
            'tool' => 'LARAVEL',
            'title' => 'Fidias Gold',
            'description' => '
            <h5 style="color:green">Laravel  + Vue + Vuetify</h5>
            <br>
            Fidias Gold Es un sistema de administración.<br>
            El sistema cuenta con una variadad de módulos, con panel de administración de dos roles, clientes y administradores.<br>
            Módulo de facturación, recibos, albarnes, notas, gestor documental , gestor de tareas. etc.
            
            -Api  elaborada con laravel.<br>
            -Frontent en base a vue vuetify.',


            'url' => '#',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'fidiasgold.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,

        ]);



        #Comercial
        $project = Proyecto::create([
            'tool' => 'LARAVEL',
            'title' => 'Comercial',
            'description' => '
            <h5 style="color:green">Laravel  + Vue + Vuetify</h5>
            <br>
            Sistema de administración de productos y servicios.<br>
            
            -Api  elaborada con laravel.<br>
            -Frontent relizado con vue y vuetify.',


            'url' => '#',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'comercial.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,

        ]);


        ########################################################################################################

        $project = Proyecto::create([
        	'tool' => 'LARAVEL',
        	'title' => 'Sistema de Compra Venta y Facturación',
        	'description' => '
        	<h5 style="color:green">Laravel + HTML + CSS + JS + Bootstrap</h5>
        	<br>Imprenta Gráfica Chone, dasarrollado a base de Laravel 6 <br>
        	- Se utilizó HTML CSS JS y algunas librerias como Jquery.<br>
        	- Sistema sencillo para la gestión de Imprenta.<br>',

        	'url' => 'imprentachone.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'sistemacv.PNG',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);



 		########################################################################################################

        $project = Proyecto::create([
        	'tool' => 'LARAVEL',
        	'title' => 'Crud Api Laravel  Vue + Vuetify',
        	'description' => '
        	<h5 style="color:green">Laravel + VUE + Vuetify</h5>
        	<br>Crud Api Laravel 8 <br>
        	- Api Rest Laravel.<br>
        	- Diseño Vue + Vuetify.<br>',

        	'url' => 'imprentachone.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'crudapivuetify.PNG',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);




 		########################################################################################################

        $project = Proyecto::create([
        	'tool' => 'LARAVEL',
        	'title' => 'Vision Blog',
        	'description' => '
        	<h5 style="color:green">Laravel + HTML + CSS + JS + Bootstrap</h5>
        	<br>Blog hecho en Laravel 6 y  Bootstrap 4<br>
        	- Completo Blog a Base de Laravel.<br>
        	- Diseño Bootstrap, Javascript && Jquery.<br>',

        	'url' => 'visonblog.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'visionblog.jpg',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);



        ########################################################################################################

        $project = Proyecto::create([
        	'tool' => 'LARAVEL',
        	'title' => 'Laravel CMS',
        	'description' => '
        	<h5 style="color:green">Laravel  + Bootstrap</h5>
        	<br>Gestor de contenido hecho con Laravel
        	- Laravel + Bootstrap 4.<br>',
        	'url' => 'visonblog.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'blog-laravel.PNG',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);





 		########################################################################################################

        $project = Proyecto::create([
        	'tool' => 'LARAVEL',
        	'title' => 'Ecommerce Tecnocosmetic',
        	'description' => '
        	<h5 style="color:green">Laravel  + Bootstrap + Jquery</h5>
        	<br>Ecommerce Tecnocosmetic. Panel de Administracíon y Carrito de Compras
        	- Laravel + Bootstrap 4.<br>,
        	- Panel de Administración elaborado con Laravel Admin.<br>',
        	'url' => 'tecnocosmetic.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'tecnosmeticlaravel.PNG',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);



























        ########################################################################################################

        #wordpress 
        #
        

         #Panadería chicharra
        $project = Proyecto::create([
            'tool' => 'WORDPRESS',
            'title' => 'Panadería Chicharra',
            'description' => '
            <h5 style="color:green">Wordpress + DIVI</h5>
            <br>Sitio web de Panadería.<br>
            - Wordpress<br>
            - Divi<br>
            - Optimizada en SEO',

            'url' => 'https://panaderiaelchicharra.com/',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'panaderiachicharra.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,
           ]);
        
        

        #Aristoi
        $project = Proyecto::create([
            'tool' => 'WORDPRESS',
            'title' => 'Aristoi Opocisiones',
            'description' => '
            <h5 style="color:green">Wordpress + DIVI</h5>
            <br>Sitio web academia de oposiciones online y presencial.<br>
            - Wordpress<br>
            - Divi<br>
            - Optimizada en SEO',

            'url' => 'https://aristoioposiciones.com/',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'aristoi.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,
           ]);

        #Grupo Lemar
        $project = Proyecto::create([
            'tool' => 'WORDPRESS',
            'title' => 'Grupo Lemar',
            'description' => '
            <h5 style="color:green">Wordpress + Twenty Twenty</h5>
            <br>Sitio web de servicios de construcción, reformas, renovaciones, fontanería, aire acondicionado y piscinas.<br>
            - Wordpress<br>
            - Theme Twenty Twenty<br>
            - Optimizada en SEO',

            'url' => 'https://grupolemar.es/',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'grupolemar.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,
           ]);
        
        #Imperio varon
        $project = Proyecto::create([
            'tool' => 'WORDPRESS',
            'title' => 'Imperio Varon',
            'description' => '
            <h5 style="color:green">Wordpress + DIVI</h5>
            <br>Sitio web hecho con el constructor Divi. Servcios de cuidado de Imagen  <br>
            - Wordpress<br>
            - Divi<br>
            - Optimizada en SEO',

            'url' => 'https://imperiovaron.com/',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'imperiovaron.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,

        ]);

        #Fidias Pro
        $project = Proyecto::create([
            'tool' => 'WORDPRESS',
            'title' => 'FidiasPRO',
            'description' => '
            <h5 style="color:green">Wordpress + Elementor</h5>
            <br>Sitio web hecho en wordpress. Fidias Pro Agencia de Marketing <br>
            - Wordpress Theme Oceanwp<br>
            - Elementor<br>
            - Optimizada en SEO<br>
            - Woocomerce<br>
            - Mailchimp<br>
            - Sitepress',

            'url' => 'https://fidiaspro.com/',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'fidias.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,

        ]);


        #Reuesto world
        $project = Proyecto::create([
        	'tool' => 'WORDPRESS',
        	'title' => 'Repuestos World',
        	'description' => '
        	<h5 style="color:green">Ecommerce Wordpress + Woocommerce + Divi + Monarch + Bloom</h5>
        	<br>Ecommerce de repuestos de automóviles, servicios de mecánica.
        	- Wordpress + Woocommerce + Divi + Monarch + Bloom.<br>
        	- Optimizada en SEO
        	- Google Analitycs',
        	'url' => 'repuestoworld.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'repuesto.jpg',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);


        #invenia
        $project = Proyecto::create([
            'tool' => 'WORDPRESS',
            'title' => 'Invenia Fitnes',
            'description' => '
            <h5 style="color:green">Worpress  Tema optimizado SEO</h5>
            <br>Invenia fitness, web de con elegante diseño
            - Wordpress <br>
            - Optimizada en SEO
            - Fitnea Theme',
            'url' => 'inveniafitness.com',
            'status' => 1
        ]);

        $projectImage =  ProyectosImage::create([
            'proyecto_id' => $project->id,
            'image' => 'invenia.jpg',
            'alt' => 'No aplica',
            'description' =>  $project->description,
            'status' => 1,
            'order' => 1,

        ]);


        ########################################################################################################

        #sfc
        $project = Proyecto::create([
        	'tool' => 'WORDPRESS',
        	'title' => 'Servicios Financieros CH',
        	'description' => '
        	<h5 style="color:green">Wordpress + Divi</h5>
        	<br>Sitio Web Corporativo asociado a Banca Amiga.
        	- Wordpress + Divi.<br>
        	- Optimizada en SEO',
        	'url' => 'serviciosfinacierosch.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'sfc.png',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);


        #diveembassy
        $project = Proyecto::create([
        	'tool' => 'WORDPRESS',
        	'title' => 'DiveEmbassy',
        	'description' => '
        	<h5 style="color:green">Wordpress + Divi</h5>
        	<br>Blog desarrollado en Wordprees. Web de Buceo .
        	- Wordpress + Divi.<br>
        	- Optimizada en SEO',
        	'url' => 'diveembassy.com',
        	'status' => 1
        ]);

 		$projectImage =  ProyectosImage::create([
        	'proyecto_id' => $project->id,
        	'image' => 'diveweb.jpg',
        	'alt' => 'No aplica',
        	'description' =>  $project->description,
        	'status' => 1,
        	'order' => 1,

        ]);
















 		#Marketing And Seo
        ########################################################################################################

   //      $project = Proyecto::create([
   //      	'tool' => 'ART',
   //      	'title' => 'Tecnocosmetic Instagram',
   //      	'description' => '
   //      	<h5 style="color:green">Instagram +8000k</h5>
   //      	<br>Red social Instgram de Tecnocosmetic.',
   //      	'url' => 'instagram.com/tecnocosmetic',
   //      	'status' => 1
   //      ]);

 		// $projectImage =  ProyectosImage::create([
   //      	'proyecto_id' => $project->id,
   //      	'image' => 'tecnosmeticRedSocial.jpg',
   //      	'alt' => 'No aplica',
   //      	'description' =>  $project->description,
   //      	'status' => 1,
   //      	'order' => 1,

   //      ]);



   //      $project = Proyecto::create([
   //      	'tool' => 'ART',
   //      	'title' => 'DiveEmbassy Instagram',
   //      	'description' => '
   //      	<h5 style="color:green">Instagram +3000k</h5>
   //      	<br>Red social Instgram de DiveEmbassy.',
   //      	'url' => 'instagram.com/diveembassy',
   //      	'status' => 1
   //      ]);

 		// $projectImage =  ProyectosImage::create([
   //      	'proyecto_id' => $project->id,
   //      	'image' => 'diveembassy.jpg',
   //      	'alt' => 'No aplica',
   //      	'description' =>  $project->description,
   //      	'status' => 1,
   //      	'order' => 1,

   //      ]);





    }
}
