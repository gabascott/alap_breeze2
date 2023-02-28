class IngatlanModel{
    #ingatlanTomb = [];

    constructor(){

    }

    adatBe(vegpont, myCallBack) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#ingatlanTomb = data;
                myCallBack(this.#ingatlanTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

}

export default IngatlanModel;