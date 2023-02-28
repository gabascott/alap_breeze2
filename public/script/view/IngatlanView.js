class IngatlanView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <div class="ingatlan">
                <p id="kategoria">${elem.nev}</p>
                <img src="${elem.kepUrl}" width="250" height="200">
                <p id="leiras">${elem.leiras}</p>
                <p id="hirdetesDatum">${elem.hirdetesDatum}</p>
                <p id="ar">${elem.ar}</p>
                <button id="torolGomb" type="button">Töröl</button>
            </div>
        `);
    }
}

export default IngatlanView;