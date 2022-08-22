class Szakdoga{
    constructor(node, adat){
        this.node=node;
        this.adat=adat;
        this.szakdoga_nev=this.node.children(".szakdoga_nev");
        this.githublink=this.node.children(".githublink");
        this.oldallink=this.node.children(".oldallink");
        this.tagokneve=this.node.children(".tagokneve");

        this.setAdat(this.adat);
    }

    setAdat(adat){
        this.adat=adat;
        this.szakdoga_nev.text(this.adat.szakdoga_nev);
        this.githublink.text(this.adat.githublink);
        this.oldallink.text(this.adat.oldallink);
        this.tagokneve.text(this.adat.tagokneve);
    }
}