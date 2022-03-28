public class Capitaine extends Marin {
    private String grade;

    public Capitaine(String nom, String fonction, String grade) {
        super(nom, fonction);
        this.grade = grade;
    }

    public String getGrade() {
        return grade;
    }

    public void setGrade(String grade) {
        this.grade = grade;
    }

    public String commande(){
        return "Je suis le Capitaine "+this.getNom()+" et c'est moi qui commande ! <BR>" ;
    }

    @Override
    public String toString() {
        return "Capitaine{" +
                "grade='" + grade + '\'' +
                "} " + super.toString();
    }
}
