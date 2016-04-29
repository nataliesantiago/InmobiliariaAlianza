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
            'user' => '10',
        ]);
        DB::table('publications')->insert([
            'name' => 'REVISTA FACULTAD DE INGENIERÍA',
            'date_publication' => '2016-01-03',
            'type' => 2,
            'url' => 'http://revistas.uptc.edu.co/revistas/index.php/ingenieria',
            'start_date' => '2016-01-10',
            'end_date' => '2016-02-02',
            'category' => 2,
            'description' => 'Busca contribuir con la difusión del conocimiento científico y el desarrollo tecnológico en el campo de la ingeniería  está dirigida especialmente a investigadores y demás interesados en temas relacionados con desarrollos científicos y tecnológicos en al campo de las ingenierías: Ambiental, Civil, Electrónica, Electromecánica, Geológica, Metalúrgica, Minas, Sistemas y Computación, Transportes y Vías y otras afines.',
            'user' => '5',
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
            'user' => '6',
        ]);
        DB::table('publications')->insert([
            'name' => 'CONVOCATORIA DOCENTE –  DOCENTES OCASIONALES Y CATEDRATICOS UPTC',
            'date_publication' => '2014-09-23',
            'type' => 1,
            'url' => 'http://www.uptc.edu.co/vicerectoria_academica/convocatoria/bie/2014/conv_sept',
            'start_date' => '2014-09-23',
            'end_date' => '2014-10-10',
            'position' => 'COMPLETO',
            'description' => 'Se hace convocatoria a profesionales que deseen participar en un proceso de selección de hojas de vida, para alimentar el Banco de Información de Elegibles - BIE, como docentes ocasionales y catedráticos externos, para las diferentes Facultades de la Universidad Pedagógica y Tecnológica de Colombia.',
            'user' => '7',
        ]);
        DB::table('publications')->insert([
            'name' => 'CONVOCATORIA DOCENTE –  DOCENTES OCASIONALES Y CATEDRATICOS UPTC',
            'date_publication' => '2015-12-18',
            'type' => 1,
            'url' => 'http://www.uptc.edu.co/vicerectoria_academica/convocatoria/bie/2015/index.html',
            'start_date' => '2015-12-18',
            'end_date' => '2016-03-04',
            'position' => 'COMPLETO',
            'description' => 'Se hace convocatoria a profesionales que deseen participar en un proceso de selección de hojas de vida, para alimentar el Banco de Información de Elegibles - BIE, como docentes ocasionales y catedráticos externos, para las diferentes Facultades de la Universidad Pedagógica y Tecnológica de Colombia.',
            'user' => '8',
        ]);
        DB::table('publications')->insert([
            'name' => 'CONGRESO INTERNACIONAL DE FOMRACION Y MODELACION EN CIENCIAS BASICAS - Medellín,Colombia ',
            'date_publication' => '2014-03-15',
            'type' => 3,
            'url' => ' http://congformodel.sevensense.co/',
            'start_date' => '2014-05-07',
            'end_date' => '2014-05-07',
            'description' => 'lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum',
            'user' => '9',
        ]);
        DB::table('publications')->insert([
            'name' => 'SEMINARIO ESPECIAL MAESTRIA EN QUIMICA',
            'date_publication' => '2016-04-08',
            'type' => 3,
            'url' => ' http://www.ucaldas.edu.co/portal/seminario-especial-maestria-en-quimica-abr-20/',
            'start_date' => '2016-04-20',
            'end_date' => '2016-04-20',
            'description' => 'Invitación del Grupo de Investigación en Cromatografía y Técnicas Afines (GICTA) y la Maestría en Química de la Universidad de Caldas.',
            'user' => '20',
        ]);
        DB::table('publications')->insert([
            'name' => 'SEMINARIO INTERNACIONAL DE CIENCIAS DE LA COMPUTACION - SICC 2015',
            'date_publication' => '2015-07-20',
            'type' => 3,
            'url' => 'https://sites.google.com/site/sicc2015medellin/',
            'start_date' => '2015-10-29',
            'end_date' => '2015-10-30',
            'description' => 'Es un espacio que ha creado la Universidad de Medellín para compartir experiencias y avances académicos y científicos alrededor de las Ciencias de la Computación y las Tecnologías de Información y Comunicaciones..',
            'user' => '21',
        ]);
        DB::table('publications')->insert([
            'name' => 'REVISTA COLOMBIANA DE BIOTECNOLOGIA',
            'date_publication' => '2015-12-31',
            'type' => 2,
            'url' => 'http://www.revistas.unal.edu.co/index.php/biotecnologia',
            'start_date' => '2015-12-31',
            'end_date' => '',
            'category' => 2,
            'description' => 'Es una revista científica que publica artículos de todas las áreas relacionadas con la Biotecnología. Abarca la divulgación de desarrollos científicos y técnicos, innovaciones tecnológicas, avances en legislación, política y normatividad, tendencias de mercado, y en general, los diversos tópicos relativos a los sectores involucrados con la Biotecnología.',
            'user' => '5',
        ]);
         DB::table('publications')->insert([
            'name' => 'REVISTA ESAICA ( Electrónica, Software, Agroindustrial, Industrial, Civil, Ambiental)',
            'date_publication' => '2016-01-01',
            'type' => 2,
            'url' => 'http://www.revistas.unal.edu.co/index.php/biotecnologia',
            'start_date' => '2016-01-01',
            'end_date' => '2016-06-30',
            'category' => 1,
            'description' => 'es una publicación semestral de la Facultad de Ingenierías de la Universidad de Santander UDES; cuyo principal objetivo es la divulgación de avances, resultados y trabajos de investigación científica y tecnológica originales, inéditos y de calidad científica, desarrollados en las siguientes áreas las Ingenierías.',
            'user' => '7',
        ]);
        DB::table('publications')->insert([
            'name' => 'CONGRESO INTERNACIONAL DE LOGISTICA Y SUPPLY CHAIN',
            'date_publication' => '2016-04-08',
            'type' => 3,
            'url' => 'http://www.eafit.edu.co/cec/congresos/logistica/Paginas/inicio.aspx',
            'start_date' => '2016-06-01',
            'end_date' => '2016-06-02',
            'description' => 'La Universidad EAFIT y la Corporación Transporte Vivo en alianza con ISM y LOGYCA quieren compartir con usted la realización del Congreso Internacional de Logística y Supply Chain, evento que ha demostrado ser uno de los certámenes académicos, técnicos e institucionales más representativos que sobre la cadena de abastecimientos, se realiza en Colombia.',
            'user' => '12',
        ]);
    }
}
