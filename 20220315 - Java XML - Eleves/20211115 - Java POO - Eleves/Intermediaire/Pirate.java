package pirate;

public class Pirate extends Marin implements Piraterie{
    public static final int SEUILSAUVAGERIE = 50 ;
    private int degreSauvagerie ;

    public Pirate(String nom, String fonction, int degreSauvagerie) {
        super(nom, fonction);
        this.degreSauvagerie = degreSauvagerie;
    }

    @Override
    public String toString() {
        return super.toString()+" sa sauvagerie est:"
                + this.degreSauvagerie;
    }

    public int getDegreSauvagerie() {
        return degreSauvagerie;
    }

    public void setDegreSauvagerie(int degreSauvagerie) {
        this.degreSauvagerie = degreSauvagerie;
    }

    @Override
    public void pillage(Navire unNavire) {

    }
}
