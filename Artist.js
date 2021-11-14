function Artist(fullName, username, password ) {

    this.paintingArray = [];        //For adding paintings
    this.fullName = fullName;
    this.username = username;
    // Address for Artists?
    this.password = password;


    Artist.prototype.addPainting = function (painting) {
        this.paintingArray.push(painting);
    }

    Artist.prototype.setPrice = function (paintingArray) {
        //Talk to group on how to approach this
        //Theoretically this should work if Eliot runs it on his localhost(browser)
        //if prompt doesnt work -> use window.prompt
        let name = prompt("Which painting would you like to set the price to?");
        const objIndex = paintingArray.findIndex((obj => obj.name === name));
        let price = prompt("How much would you like to sell this painting for?");
        paintingArray[objIndex].price = price;
        console.log("The painting " + " ' " + name + " ' " + "has a set price of: " + price);

    }

    Artist.prototype.printArtist = function () {

        console.log("Full name: " + this.fullName);
        console.log("Username: " + this.username);
        console.log("Paintings for sale:  ");
        if (this.paintingArray.length == 0) {
            console.log("Artist has no paintings for sale");
        } else {
            for (let i = 0; i < this.paintingArray.length; i++) {
                console.log(this.paintingArray[i] + " is available");
                console.log("Place holder for rest of information for painting");
            }
        }
        Artist.prototype.removePainting = function (painting) {
            for (let i = 0; i < this.paintingArray.length; i++) {
                if (painting === this.paintingArray[i].name) {
                    console.log(this.paintingArray[i].name + "has been removed");
                    this.paintingArray.splice(i, 1);

                }
            }
        }
        Artist.prototype.knowsBidder = function(){

        }

        Artist.prototype.setPassword = function (password) {
            this.password = password;
            console.log("Successfully changed password");
        }

        Artist.prototype.paintingList = function () {
            return this.paintingArray;
        }
        Artist.prototype.setUsername = function (username) {
            this.username = username;
        }

        Artist.prototype.getUsername = function () {
            return this.username;
        }
        Artist.prototype.getFullname = function () {
            return this.fullName;
        }

        Artist.prototype.setFullname = function (fullName) {
            this.fullName = fullName;
        }

    }
}

module.exports = {Artist};