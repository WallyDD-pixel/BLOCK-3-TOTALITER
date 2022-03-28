package pirate;

import java.util.ArrayList;
import java.util.List;

public class Navire {
    private int taille;
    private String modele ;
    private List<Marin> equipage ;

    public Navire(int taille, String modele) {
        this.taille = taille;
        this.modele = modele;
        this.equipage = new ArrayList<>();
    }

    public Navire(int taille, String modele, List<Marin> equipage) {
        this.taille = taille;
        this.modele = modele;
        this.equipage = equipage;
    }

    
    public int getTaille() {
        return taille;
    }

    public void setTaille(int taille) {
        this.taille = taille;
    }

    public String getModele() {
        return modele;
    }

    public void setModele(String modele) {
        this.modele = modele;
    }

    public List<Marin> getEquipage() {
        return equipage;
    }

    public void setEquipage(List<Marin> equipage) {
        this.equipage = equipage;
    }

    public String afficheEquipage(){
        String aAfficher="Composition de l'équipage \n" ;
        for (Marin unMarin : this.equipage ){
            if (unMarin instanceof Capitaine)
                aAfficher+=" A un capitaine expérimenté: "+((Capitaine) unMarin).getGrade()+"\n" ;
            else if (unMarin instanceof  Pirate)
                aAfficher+=" Est infiltrée par le pirate de degré de sauvagerie: "+((Pirate) unMarin).getDegreSauvagerie()+"\n";
            else aAfficher+=unMarin+"\n" ;         }
        return aAfficher ;
    }


    public void ajouterMarin(Marin unMarin){
        if (!this.equipage.contains(unMarin))
        this.equipage.add(unMarin) ;
    }


    @Override
    public String toString() {
        return "Navire{" +
                "taille=" + taille +
                ", modele='" + modele + '\'' +
                ", equipage=" + equipage +
                '}';
    }
}
