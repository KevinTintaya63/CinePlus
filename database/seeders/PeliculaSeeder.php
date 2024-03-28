<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Pelicula;
use App\Models\User;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name'=>'carlos',
            'email'=>'carlos@gmail.com',
            'password'=>Hash::make('123')
        ]);

        Pelicula::create([
            'titulo'=>'Los Mitchell',
            'descripcion'=> 'Ambientada a finales de septiembre de 2020, la historia sigue a Katie Mitchell, una peculiar 
            aspirante a cineasta de Kentwood (Míchigan), que a menudo choca con su padre Rick, obsesionado 
            con la naturaleza y tecnófobo, y que recientemente ha sido aceptada en la escuela de cine en California. 
            La noche antes de que Katie se vaya, Rick accidentalmente rompe su computadora portátil después de pelearse con 
            ella. Rick decide cancelar el vuelo de Katie y en su lugar llevarla, junto con su madre Linda, su hermano menor 
            Aaron y el perro de la familia llamado Monchi, en un viaje de carretera a través del país a su universidad como 
            una última experiencia de unión.',
            'img_first'=> 'Amichel.jpg',
            'img_second'=> 'Amichel2.png',
            'img_third'=> null,
            'categoria'=> 'A',
            'calificacion'=>3,
            'url_first'=>'https://www.youtube.com/watch?v=cMLcCLglGoQ',
            'url_second'=>'https://www.hbomax.com/pe/es',
            'url_third'=>'https://www.disneyplus.com/es-419/login',
            'url_four'=>'https://www.imdb.com/title/tt7979580/'
        ]);
        Pelicula::create([
            'titulo'=>'Minions',
            'descripcion'=> 'Los Minions son pequeñas criaturas amarillas que han existido desde el principio de los tiempos, evolucionando de 
            organismos unicelulares que existen solo para servir al villano más despreciable de la historia, desafortunadamente 
            ellos no tienen tanta inteligencia y mataron accidentalmente a sus amos. Después de lanzar un Tiranosaurio a un volcán, 
            hacer que un oso cavernario comiera a su líder cavernícola, aplastar a un Faraón con una pirámide, exponer al Conde Drácula 
            a la luz del sol y disparar accidentalmente un cañón a Napoleón, los Minions se aíslan del mundo y comienzan una nueva vida 
            en una cueva en Siberia. Después de muchos años, los Minions se deprimen por la falta de alguien para servir. Para recuperar
            su dignidad y sentido de propósito, Kevin, un audaz Minion, decide buscar un nuevo amo y pide ayuda. Stuart, un rebelde Minion,
            y Bob, un joven e inexperto pero entusiasta Minion, son reclutados.',
            'img_first'=> 'Aminion.jpg',
            'img_second'=> 'Aminion2.png',
            'img_third'=> null,
            'categoria'=> 'A',
            'calificacion'=>3,
            'url_first'=>'https://www.youtube.com/watch?v=tOCczL-LYHo',
            'url_second'=>'https://www.hbomax.com/pe/es',
            'url_third'=>'https://www.disneyplus.com/es-419/login',
            'url_four'=>'https://www.imdb.com/title/tt5113044/?ref_=nv_sr_srsg_5_tt_5_nm_3_q_mini'
        ]);
        Pelicula::create([
            'titulo'=>'Pinocho de Guillermo del Toro',
            'descripcion'=> 'En un pequeño pueblo montañoso de Italia, a principios del siglo xx, vivían un padre y un hijo felizmente. 
            El padre, un carpintero llamado Geppetto, y su hijo, Carlo, sobrevivían a pesar de las dificultades presentadas por la Gran Guerra. 
            Un día, mientras terminaba de barnizar una estatua de Cristo en la iglesia del pueblo, Geppetto sufre la peor tragedia de su vida 
            cuando un avión dejó caer una bomba en la iglesia, cobrándose la vida de Carlo, quien regresó para buscar un piñón de pino que 
            había encontrado —del cual según su padre, nacía un árbol perfecto si esa semilla se encontraba completa—. El fallecimiento de 
            Carlo en 1916 supuso un shock para el pueblo y para su padre, especialmente porque la villa no estaba marcada como objetivo de 
            bombardeo, sino que los aviadores liberaron la bomba con el objetivo de reducir la carga del avión en su regreso a base.',
            'img_first'=> 'Apinocho.jpg',
            'img_second'=> 'Apinocho2.png',
            'img_third'=> null,
            'categoria'=> 'A',
            'calificacion'=>5
        ]);
        Pelicula::create([
            'titulo'=>'Sherk 2',
            'descripcion'=> 'Algunos meses después de que el ogro Shrek y la princesa Fiona se conocieran y se casaran, el Príncipe Encantador va en 
            busca de Fiona al castillo donde estuvo encerrada, para rescatarla y desposarla; pero se sorprende al encontrar en su lugar 
            al lobo feroz, que le informa de que Fiona esta disfrutando de su luna de miel. A su regreso al pantano ambos ogros son 
            sorprendidos por la presencia de Burro, que les informa de que los estuvo esperando mientras cuidaba de su hogar de manera 
            negligente, aunque lo que Shrek quiere es deshacerse de él para seguir disfrutando de su matrimonio con Fiona. Al poco tiempo
            reciben una invitación real de parte de los padres de Fiona, reyes de Muy Muy Lejano, que anhelan ver a su hija tras haberse 
            enterado de que por fin había sido rescatada y liberada de su maleficio.',
            'img_first'=> 'Asherk.jpg',
            'img_second'=> 'Asherk2.png',
            'img_third'=> null,
            'categoria'=> 'A',
            'calificacion'=>5
        ]);
        Pelicula::create([
            'titulo'=>'Toy Story 4',
            'descripcion'=> 'Hace nueve años, tiempo antes de los eventos de Toy Story 3, Bo Peep y Woody tratan de rescatar a Control, el carro a control remoto de Andy, 
            durante una tormenta. Luego de finalizar el rescate, Woody observa como Bo es donada a una nueva dueña, y considera irse con ella,
            pero luego decide quedarse con Andy al comprender que es un juguete fundamental para su dueño. Años después, un adolescente Andy 
            los dona a Bonnie, una niña más joven, antes de que se vaya a la universidad. Mientras los juguetes disfrutan tener un nuevo dueño, 
            Woody lucha para adaptarse a un ambiente donde no es el favorito como lo fue con Andy, evidenciándose esto cuando le quita la 
            insignia de sheriff a Woody y se la pone a Jessie, sin siquiera molestarse en darle un rol durante su tiempo de juego.',
            'img_first'=> 'Atoystore.jpg',
            'img_second'=> 'Atoystore2.png',
            'img_third'=> null,
            'categoria'=> 'A',
            'calificacion'=>3
        ]);
        Pelicula::create([
            'titulo'=>'Turning Red',
            'descripcion'=> 'A mediados de marzo del año 2002, Meilin "Mei" Lee es una niña canadiense de ascendencia china de 13 años que vive en la ciudad de Toronto. 
            Es una estudiante prodigio y tiene un séquito de amigas cercanas compuesto por Miriam, Priya y Abby. 
            Todas ellas son fans (seguidoras muy fieles) de la boy band 4*Town. Sin embargo, la madre de Mei, Ming, 
            quien espera constantemente la perfección de su hija y trata de desalentar sus intereses actuales, incluido 
            su reciente enamoramiento por un chico llamado Devon, que trabaja en una tienda de conveniencia. Mei y Ming pasan sus 
            días atendiendo el templo de su familia china que reside al lado de su casa.',
            'img_first'=> 'Aturning.jpg',
            'img_second'=> 'Aturning2.png',
            'img_third'=> null,
            'categoria'=> 'A',
            'calificacion'=>2
        ]);
    }
}
