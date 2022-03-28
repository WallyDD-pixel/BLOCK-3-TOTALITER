import java.util.ArrayList;
import java.util.Date;
import java.util.List;

public class Livre {

    private String langue, titre, id, codeIsbn, paysEdition, editeur ;
    private Date dateEnregistrement ;
    private int prix ;
    private List<String> lesAuteurs =new ArrayList<>();

    public Livre() {
    }

    public Livre(String langue, String titre, String id, String codeIsbn, String paysEdition, String editeur, Date dateEnregistrement, int prix) {
        this.langue = langue;
        this.titre = titre;
        this.id = id;
        this.codeIsbn = codeIsbn;
        this.paysEdition = paysEdition;
        this.editeur = editeur;
        this.dateEnregistrement = dateEnregistrement;
        this.prix = prix;
    }

    public String getLangue() {
        return langue;
    }

    public void setLangue(String langue) {
        this.langue = langue;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getCodeIsbn() {
        return codeIsbn;
    }

    public void setCodeIsbn(String codeIsbn) {
        this.codeIsbn = codeIsbn;
    }

    public String getPaysEdition() {
        return paysEdition;
    }

    public void setPaysEdition(String paysEdition) {
        this.paysEdition = paysEdition;
    }

    public String getEditeur() {
        return editeur;
    }

    public void setEditeur(String editeur) {
        this.editeur = editeur;
    }

    public Date getDateEnregistrement() {
        return dateEnregistrement;
    }

    public void setDateEnregistrement(Date dateEnregistrement) {
        this.dateEnregistrement = dateEnregistrement;
    }

    public int getPrix() {
        return prix;
    }

    public void setPrix(int prix) {
        this.prix = prix;
    }

    public List<String> getLesAuteurs() {
        return lesAuteurs;
    }

    public void setLesAuteurs(List<String> lesAuteurs) {
        this.lesAuteurs = lesAuteurs;
    }

    @Override
    public String toString() {
        return "Livre{" +
                "langue='" + langue + '\'' +
                ", titre='" + titre + '\'' +
                ", id='" + id + '\'' +
                ", codeIsbn='" + codeIsbn + '\'' +
                ", paysEdition='" + paysEdition + '\'' +
                ", editeur='" + editeur + '\'' +
                ", dateEnregistrement=" + dateEnregistrement +
                ", prix=" + prix +
                ", lesAuteurs=" + lesAuteurs +
                '}';
    }
}
