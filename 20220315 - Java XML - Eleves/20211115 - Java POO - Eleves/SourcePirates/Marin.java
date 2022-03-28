public class Marin {

    private String nom ;
    private String fonction ;

    protected String getNom() {
        return nom;
    }

    protected void setNom(String nom) {
        this.nom = nom;
    }

    protected String getFonction() {
        return fonction;
    }

    protected void setFonction(String fonction) {
        this.fonction = fonction;
    }

    public Marin(String nom, String fonction) {
        this.nom = nom;
        this.fonction = fonction;
    }

    public static String quiSuisJe(){
        return "Je suis un gentil Marin" ;
    }

    @Override
    public String toString() {
        return "Marin{" +
                "nom='" + nom + '\'' +
                ", fonction='" + fonction + '\'' +
                '}';
    }
}
