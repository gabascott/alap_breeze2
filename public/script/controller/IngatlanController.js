import IngatlanModel from "../model/IngatlanModel.js";
import IngatlanView from "../view/IngatlanView.js";

class IngatlanController{
    constructor(){
        //console.log("ingatlan controller");
        const ingatlanmodel = new IngatlanModel();
        ingatlanmodel.adatBe('/api/ingatlan_kategoriaval', this.megjelenit);
    }

    megjelenit(tomb){
        let szuloElem = $(".ingatlan_container");
        tomb.forEach(ingatlan => {
            new IngatlanView(ingatlan, szuloElem)
        });
    }
}

export default IngatlanController;