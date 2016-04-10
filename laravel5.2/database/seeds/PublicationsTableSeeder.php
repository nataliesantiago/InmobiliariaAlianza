<?php

use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert([
        	'name' => 'DECIMO EVENTO DE ENCUENTRO DE DOCENTES EN LA UPTC',
        	'date_publication' => '2015-06-15',
        	'type' => 3,
        	'url' => 'http://www.eltiempo.com/archivo/documento/MAM-836621',
        	'start_date' => '2016-03-23',
        	'end_date' => '2016-03-28',
        	'description' => 'lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum',
        	'username' => 'Apa33',
        ]);
        DB::table('publications')->insert([
        	'name' => 'REVISTA FACULTAD DE INGENIERÍA',
        	'date_publication' => '2016-01-03',
        	'type' => 2,
        	'url' => 'http://revistas.uptc.edu.co/revistas/index.php/ingenieria',
        	'start_date' => '2016-01-10',
        	'end_date' => '2016-02-02',
        	'category' => 2,
        	'description' => 'busca contribuir con la difusión del c científico y el desarrollo ciá dirigioresemas reos ececca, Mnas, Sistemas y Computación, Transportes y Vías y otras afines.',
        	'username' => 'PepitoPerez',
        ]);
        DB::table('publications')->insert([
        	'name' => 'CONVOCATORIA DOCENTE 2015 FACULTAD DE CIENCIAS ECONOMICAS',
        	'date_publication' => '2015-06-30',
        	'type' => 1,
        	'url' => 'http://www.ingenieria.unal.edu.co/es/concurso-profesoral-2015-02',
        	'start_date' => '2016-01-10',
        	'end_date' => '2016-02-02',
        	'position' => 2,
        	'description' => 'Los Concursos Profesorales, abiertos ynen por objeto la provisión de cargos de la Planta Doc.',
        	'username' => 'Jj',
        ]);
        DB::table('publications')->insert([
        	'name' => 'CONVOCATORIA DOCENTE –  DOCENTES OCASIONALES Y CATEDRATICOS UPTC',
        	'date_publication' => '2014-09-23',
        	'type' => 1,
        	'url' => 'http://www.uptc.edu.co/vicerectoria_academica/convocatoria/bie/2014/conv_sept',
        	'start_date' => '2014-09-23',
        	'end_date' => '2014-10-10',
        	'position' => 'COMPLETO',
        	'description' => 'se hace convocatoria a profesionales que deseen participar en un proceso de selección de hojas de vida, para alimentar el Banco de Información de Elegibles - BIE, como docentes ocasionales y catedráticos externos, para las diferentes Facultades de la Universidad Pedagógica y Tecnológica de Colombia.',
        	'username' => 'PepitoPerez',
        ]);
        DB::table('publications')->insert([
        	'name' => 'CONVOCATORIA DOCENTE –  DOCENTES OCASIONALES Y CATEDRATICOS UPTC',
        	'date_publication' => '2015-12-18',
        	'type' => 1,
        	'url' => 'http://www.uptc.edu.co/vicerectoria_academica/convocatoria/bie/2015/index.html',
        	'start_date' => '2015-12-18',
        	'end_date' => '2016-03-04',
        	'position' => 'COMPLETO',
        	'description' => 'se hace convocatoria a profesionales que deseen participar en un proceso de selección de hojas de vida, para alimentar el Banco de Información de Elegibles - BIE, como docentes ocasionales y catedráticos externos, para las diferentes Facultades de la Universidad Pedagógica y Tecnológica de Colombia.',
        	'username' => 'PepitoPerez',
        ]);
        DB::table('publications')->insert([
        	'name' => 'Congreso Internacional de Formación y Modelación en Ciencias Básicas - Medellín,Colombia ',
        	'date_publication' => '2014-03-15',
        	'type' => 3,
        	'url' => ' http://congformodel.sevensense.co/',
        	'start_date' => '2014-05-07',
        	'end_date' => '2014-05-07',
        	'description' => 'lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum',
        	'username' => 'Jj',
        ]);
        DB::table('publications')->insert([
        	'name' => 'Seminario Especial Maestría en Química ',
        	'date_publication' => '2016-04-08',
        	'type' => 3,
        	'url' => ' http://www.ucaldas.edu.co/portal/seminario-especial-maestria-en-quimica-abr-20/',
        	'start_date' => '2016-04-20',
        	'end_date' => '2016-04-20',
        	'description' => 'invitación del Grupo de Investigación en Cromatografía y Técnicas Afines (GICTA) y la Maestría en Química de la Universidad de Caldas.',
        	'username' => 'Mile99',
        ]);
        DB::table('publications')->insert([
        	'name' => 'Seminario Internacional de Ciencias de la Computación - SICC 2015',
        	'date_publication' => '2015-07-20',
        	'type' => 3,
        	'url' => 'https://sites.google.com/site/sicc2015medellin/',
        	'start_date' => '2015-10-29',
        	'end_date' => '2015-10-30',
        	'description' => 'Es un espacio que ha creado la Universidad de Medellín para compartir experiencias y avances académicos y científicos alrededor de las Ciencias de la Computación y las Tecnologías de Información y Comunicaciones..',
        	'username' => 'JuanR',
        ]);
    }
}
