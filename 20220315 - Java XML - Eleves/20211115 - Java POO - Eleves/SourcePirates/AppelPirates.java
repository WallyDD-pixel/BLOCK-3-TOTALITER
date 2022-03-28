import java.util.ArrayList;
import java.util.List;

public class AppelPirates {
    public static void main(String[] args) {

        /*** Création de 3 marins dont 1 capitaine ***/
        Marin premierMarin = new Marin("Robert","mousse") ;
        Marin deuxiemeMarin = new Marin("Dupond", "Lieutenant") ;
        Marin monCapitaineMarin = new Capitaine("Ackab", "Capitaine","Senior") ;

        /*** Ajout des marins à un équipage ***/
        List<Marin> unEquipage = new ArrayList<>() ;
        unEquipage.add(premierMarin) ;
        unEquipage.add(deuxiemeMarin) ;
        unEquipage.add(monCapitaineMarin) ;

        /** Création d'un navire, associé à l'équipage précédent ***/
        Navire corvette = new Navire(60,"corvette", unEquipage) ;

        System.out.println("Beau navire" + corvette);

        



    }
}
